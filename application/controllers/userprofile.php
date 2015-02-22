<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

    function __construct() {
        parent::__construct();
        require_once('application/libraries/json_prettifier.php');
        $this->apiKey = "I6IXY87XH7YGDMEWO";
    }

    public function index($data=null) {
        $datar['upal'] = 'active';
        $this->load->view('header',$datar);
        $this->load->view('userprofile', $data);
    }

    /**
     *
     */
    public function tasteprofile()
    {
        $username = $this->input->post('username');
        $results = $this->input->post('results');

        /*$biographies = $this->input->post('biographies');
        $blogs = $this->input->post('blogs');
        $discovery = $this->input->post('discovery');
        $discovery_rank = $this->input->post('discovery_rank');
        $doc_counts = $this->input->post('doc_counts');
        $familiarity = $this->input->post('familiarity');
        $familiarity_rank = $this->input->post('familiarity_rank');
        $genre = $this->input->post('genre');
        $hotttnesss = $this->input->post('hotttnesss');
        $hotttnesss_rank = $this->input->post('hotttnesss_rank');
        $images = $this->input->post('images');
        $artist_location = $this->input->post('artist_location');
        $news = $this->input->post('news');
        $reviews = $this->input->post('reviews');
        $songs = $this->input->post('songs');
        $urls = $this->input->post('urls');
        $video = $this->input->post('video');
        $years_active = $this->input->post('years_active');*/

        // Construct request string
        $username = str_replace(' ', '%20', $username);
        $request_str = 'http://developer.echonest.com/api/v4/tasteprofile/create?api_key='. $this->apiKey .'&format=json';

        if (!is_null($username) && $username!='') $request_str = $request_str . '&name=' . $username;
        http://developer.echonest.com/api/v4/tasteprofile/create?api_key=I6IXY87XH7YGDMEWO&format=json&type=artist&name=Alex
        /*
        if (!is_null($results) && $results!='') $request_str = $request_str . '&results=' . $results;

        if ($biographies) $request_str = $request_str . '&bucket=biographies';
        if ($blogs) $request_str = $request_str . '&bucket=blogs';
        if ($discovery) $request_str = $request_str . '&bucket=discovery';
        if ($discovery_rank) $request_str = $request_str . '&bucket=discovery_rank';
        if ($doc_counts) $request_str = $request_str . '&bucket=doc_counts';
        if ($familiarity) $request_str = $request_str . '&bucket=familiarity';
        if ($familiarity_rank) $request_str = $request_str . '&bucket=familiarity_rank';
        if ($genre) $request_str = $request_str . '&bucket=genre';
        if ($hotttnesss) $request_str = $request_str . '&bucket=hotttnesss';
        if ($hotttnesss_rank) $request_str = $request_str . '&bucket=hotttnesss_rank';
        if ($images) $request_str = $request_str . '&bucket=images';
        if ($artist_location) $request_str = $request_str . '&bucket=artist_location';
        if ($news) $request_str = $request_str . '&bucket=news';
        if ($reviews) $request_str = $request_str . '&bucket=reviews';
        if ($songs) $request_str = $request_str . '&bucket=songs';
        if ($urls) $request_str = $request_str . '&bucket=urls';
        if ($video) $request_str = $request_str . '&bucket=video';
        if ($years_active) $request_str = $request_str . '&bucket=years_active';*/


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
