<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Song extends CI_Controller {

    public function index() {
        $this->load->view('song');
    }
	
	function __construct() {
		$apiKey = "I6IXY87XH7YGDMEWO";
	}
	

    public function searchSong()
    {
        $artist = $this->input->post('artist');
        $title = $this->input->post('title');
		
		$audio_summary = $this->input->post('audio_summary');
		$artist_discovery = $this->input->post('artist_discovery');
		$artist_discovery_rank = $this->input->post('artist_discovery_rank');
		$artist_familiarity = $this->input->post('artist_familiarity');
		$artist_familiarity_rank = $this->input->post('artist_familiarity_rank');
		$artist_hotttnesss = $this->input->post('artist_hotttnesss');
		$artist_hotttnesss_rank = $this->input->post('artist_hotttnesss_rank');
		$artist_location = $this->input->post('artist_location');
		$song_currency = $this->input->post('song_currency');
		$song_currency_rank = $this->input->post('song_currency_rank');
		$song_discovery = $this->input->post('song_discovery');
		$song_discovery_rank = $this->input->post('song_discovery_rank');
		$song_hotttnesss = $this->input->post('song_hotttnesss');
		$song_hotttnesss_rank = $this->input->post('song_hotttnesss_rank');
		$song_type = $this->input->post('song_type');

		// Construct request string
		$title = str_replace(' ', '%20', $title);
		$artist = str_replace(' ', '%20', $artist);
		$request_str = 'http://developer.echonest.com/api/v4/song/search?api_key='.$apiKey.'&format=json';
		
		if (!is_null($artist)) $request_str = $request_str . '&artist=' . $artist;
		if (!is_null($title)) $request_str = $request_str . '&title=' . $title;
		
		if ($audio_summary) $request_str = $request_str . '&bucket=' . $title;
		if ($artist_discovery) $request_str = $request_str . '&bucket=artist_discovery';
		if ($artist_discovery_rank) $request_str = $request_str . '&bucket=artist_discovery_rank';
		if ($artist_familiarity) $request_str = $request_str . '&bucket=artist_familiarity';
		if ($artist_familiarity_rank) $request_str = $request_str . '&bucket=artist_familiarity_rank';
		if ($artist_hotttnesss) $request_str = $request_str . '&bucket=artist_hotttnesss';
		if ($artist_hotttnesss_rank) $request_str = $request_str . '&bucket=artist_hotttnesss_rank';
		if ($artist_location) $request_str = $request_str . '&bucket=artist_location';
		if ($song_currency) $request_str = $request_str . '&bucket=song_currency';
		if ($song_currency_rank) $request_str = $request_str . '&bucket=song_currency_rank';
		if ($song_discovery) $request_str = $request_str . '&bucket=song_discovery';
		if ($song_discovery_rank) $request_str = $request_str . '&bucket=song_discovery_rank';
		if ($song_hotttnesss) $request_str = $request_str . '&bucket=song_hotttnesss';
		if ($song_hotttnesss_rank) $request_str = $request_str . '&bucket=song_hotttnesss_rank';
		if ($song_type) $request_str = $request_str . '&bucket=song_type';
		

        $curl = curl_init(request_str);

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);

        // Free up the resources $curl is using
        curl_close($curl);

        $data["curl_result"] = $result;
        $data["query_info"] = $query_info;

        $this->load->view('song', $data);
    }
}
