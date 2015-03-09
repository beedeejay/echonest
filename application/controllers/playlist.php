<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Playlist extends CI_Controller {

	function __construct() {
		parent::__construct();
		require_once('application/libraries/json_prettifier.php');
		$this->apiKey = "I6IXY87XH7YGDMEWO";
	}
	
    public function index($data=null) {
		$datar['plal'] = 'active';
		$this->load->view('header',$datar);
        $this->load->view('playlist', $data);
    }
	
    public function createPlaylist()
    {
		$seed_catalog = $this->input->post('seed_catalog');
		$type = 'catalog-radio';
		
		$genre = $this->input->post('genre');
		$artist = $this->input->post('artist');
		$song_id = $this->input->post('song_id');
		
		$variety = $this->input->post('variety');
		$distribution = $this->input->post('distribution');
		$adventurousness = $this->input->post('adventurousness');
		$target_song_hotttnesss = $this->input->post('target_song_hotttnesss');
		$target_artist_hotttnesss = $this->input->post('target_artist_hotttnesss');
		$target_artist_familiarity = $this->input->post('target_artist_familiarity');
		$target_acousticness = $this->input->post('target_acousticness');
		$target_speechiness = $this->input->post('target_speechiness');
		$target_energy = $this->input->post('target_energy');
		$target_liveness = $this->input->post('target_liveness');
		$target_danceability = $this->input->post('target_danceability');

		// Construct request string
		$genre = str_replace(' ', '%20', $genre);
		$artist = str_replace(' ', '%20', $artist);
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/create?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&type=' . $type;
		if (!is_null($seed_catalog) && $seed_catalog!='') $request_str = $request_str . '&seed_catalog=' . $seed_catalog . '&session_catalog=' . $seed_catalog;
		
		if (!is_null($genre) && $genre!='') $request_str = $request_str . '&genre=' . $genre;
		if (!is_null($artist) && $artist!='') $request_str = $request_str . '&artist=' . $artist;
		if (!is_null($song_id) && $song_id!='') $request_str = $request_str . '&song_id=' . $song_id;
		
		if (!is_null($variety) && $variety!='') $request_str = $request_str . '&variety=' . $variety;
		if (!is_null($distribution) && $distribution!='') $request_str = $request_str . '&distribution=' . $distribution;
		if (!is_null($adventurousness) && $adventurousness!='') $request_str = $request_str . '&adventurousness=' . $adventurousness;
		if (!is_null($target_song_hotttnesss) && $target_song_hotttnesss!='') $request_str = $request_str . '&target_song_hotttnesss=' . $target_song_hotttnesss;
		if (!is_null($target_artist_hotttnesss) && $target_artist_hotttnesss!='') $request_str = $request_str . '&target_artist_hotttnesss=' . $target_artist_hotttnesss;
		if (!is_null($target_artist_familiarity) && $target_artist_familiarity!='') $request_str = $request_str . '&target_artist_familiarity=' . $target_artist_familiarity;
		if (!is_null($target_acousticness) && $target_acousticness!='') $request_str = $request_str . '&target_acousticness=' . $target_acousticness;
		if (!is_null($target_speechiness) && $target_speechiness!='') $request_str = $request_str . '&target_speechiness=' . $target_speechiness;
		if (!is_null($target_energy) && $target_energy!='') $request_str = $request_str . '&target_energy=' . $target_energy;
		if (!is_null($target_liveness) && $target_liveness!='') $request_str = $request_str . '&target_liveness=' . $target_liveness;
		if (!is_null($target_danceability) && $target_danceability!='') $request_str = $request_str . '&target_danceability=' . $target_danceability;
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function nextSongPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/next?api_key='. $this->apiKey .'&format=json';
	
		$request_str = $request_str . '&session_id=' . $session_id;
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function skipSongPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/feedback?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&session_id=' . $session_id;
		$request_str = $request_str . '&skip_song=last';
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function banSongPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/feedback?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&session_id=' . $session_id;
		$request_str = $request_str . '&ban_song=last';
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function favSongPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/feedback?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&session_id=' . $session_id;
		$request_str = $request_str . '&favorite_song=last';
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function favArtistPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/feedback?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&session_id=' . $session_id;
		$request_str = $request_str . '&favorite_artist=last';
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function banArtistPlaylist()
    {
		$session_id = $this->input->post('session_id');
		
		// Construct request string
		$request_str = 'http://developer.echonest.com/api/v4/playlist/dynamic/feedback?api_key='. $this->apiKey .'&format=json';
		
		$request_str = $request_str . '&session_id=' . $session_id;
		$request_str = $request_str . '&ban_artist=last';
		
        $curl = curl_init($request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

		$pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
}
