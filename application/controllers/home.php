<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $this->load->view('home');
    }

    public function getinfo()
    {

        require_once '/application/libraries/php-echonest-api-master/lib/EchoNest/Autoloader.php';
        EchoNest_Autoloader::register();
        $echonest = new EchoNest_Client();
        $apiKey = "I6IXY87XH7YGDMEWO";
        $echonest->authenticate($apiKey);

        $artistname = $this->input->post('artistname');
        $songname = $this->input->post('songname');
        $description = $this->input->post('description');
        $style = $this->input->post('style');
        $mood = $this->input->post('mood');
        $rank_type = $this->input->post('rank_type');
        $artist_id = $this->input->post('artist_id');
        $results = $this->input->post('results');
        $song_type = $this->input->post('song_type');
        $max_energyn = $this->input->post('max_energy');
        $liveness = $this->input->post('liveness');
        $max_speechiness = $this->input->post('max_speechiness');
        $max_acousticness = $this->input->post('max_acousticness');



        $songname = str_replace(' ', '%20', $songname);


        $curl = curl_init('http://developer.echonest.com/api/v4/song/search?api_key='.$apiKey.'&format=json&results=1&artist='.$artistname.
            '&title='.$songname.'&bucket=id:7digital-US&bucket=audio_summary&bucket=tracks');

        // Don't output the result
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        //curl_setopt($curl, CURLOPT_POST, 1);
        //curl_setopt($curl, CURLOPT_POSTFIELDS, "?api_key=FILDTEOIK2HBORODV&format=json&results=1&artist=radiohead&title=karma%20police&bucket=id:7digital-US&bucket=audio_summary&bucket=tracks");

        // Send the request
        $result = curl_exec($curl);

        // Get info about the cURL Request
        $query_info = curl_getinfo($curl);
        //echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
        //die();

        // Free up the resources $curl is using
        curl_close($curl);

        $data["curl_result"] = $result;
        $data["query_info"] = $query_info;

       /* $results = $echonest->getArtistApi()->search(array('name' => 'Madonna'));
        $songApi = $echonest->getSongApi("Radiohead");
        $playlistApi = $echonest->getPlaylistApi();
        $catalogApi = $echonest->getCatalogApi();
        $trackApi = $echonest->getTrackApi();*/

        //$data = array("$results");
        /*echo "<br>Results</br>";
        print_r($results);

        echo "<br>Song</br>";
        print_r($songApi);

        echo "<br>Playlist</br>";
        print_r($playlistApi);

        echo "<br>Catalog</br>";
        print_r($catalogApi);

        echo "<br>Track</br>";
        print_r($trackApi);

        echo "<br>Song</br>";
        print_r($songApi);
        die();*/

        $this->load->view('home', $data);
    }
}
