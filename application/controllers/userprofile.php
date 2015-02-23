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

        $data['createprofile'] = $this->createprofile();
        $data['listprofile'] = $this->listprofile();
        $data['getPredictions'] = $this->getPredictions();

        $this->load->view('userprofile', $data);
    }

    /**
     *
     */
    public function createProfile()
    {
        $name = $this->input->post('create_name');
        $type = $this->input->post('create_type');

		//set POST variables
		$name = str_replace(' ', '%20', $name);
		$url = 'http://developer.echonest.com/api/v4/tasteprofile/create';
		$fields = array(
								'name' => urlencode($name),
								'type' => urlencode($type),
								'api_key' => urlencode($this->apiKey)
						);

		//url-ify the data for the POST
		$fields_string = '';
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		//open connection
		$curl = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_POST, count($fields));
		curl_setopt($curl,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);

		//execute post
		$result = curl_exec($curl);
		
		//info about the query
        $query_info = curl_getinfo($curl);

		//close connection
		curl_close($curl);

        $pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function listProfiles()
    {
        // Construct request string
        $request_str = 'http://developer.echonest.com/api/v4/tasteprofile/list?api_key='. $this->apiKey .'&format=json';

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
	
	public function deleteProfile()
    {
        $profile_id = $this->input->post('profile_id');
		
		//set POST variables
		$url = 'http://developer.echonest.com/api/v4/tasteprofile/delete';
		$fields = array(
								'id' => urlencode($profile_id),
								'api_key' => urlencode($this->apiKey)
						);

		//url-ify the data for the POST
		$fields_string = '';
		foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
		rtrim($fields_string, '&');

		//open connection
		$curl = curl_init();

		//set the url, number of POST vars, POST data
		curl_setopt($curl,CURLOPT_URL, $url);
		curl_setopt($curl,CURLOPT_POST, count($fields));
		curl_setopt($curl,CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);

		//execute post
		$result = curl_exec($curl);
		
		//info about the query
        $query_info = curl_getinfo($curl);

		//close connection
		curl_close($curl);

        $pretty_result = indent($result);
        $data["curl_result"] = $pretty_result;
        $data["query_info"] = $query_info;

        $this->index($data);
    }
	
	public function getPredictions()
    {
		$profile_id = $this->input->post('pred_profile_id');
	
		$adventurousness = $this->input->post('pred_adventurousness');
		$diversity = $this->input->post('pred_diversity');
		$freshness = $this->input->post('pred_freshness');
		$mainstreamness = $this->input->post('pred_mainstreamness');
		$top_years = $this->input->post('pred_top_years');
		$top_styles = $this->input->post('pred_top_styles');
	
        // Construct request string
        $request_str = 'http://alpha.echonest.com/api/v4/tasteprofile/predict?api_key='. $this->apiKey .'&format=json';
		
		if (!is_null($profile_id) && $profile_id!='') $request_str = $request_str . '&id=' . $profile_id;
		
		if ($adventurousness) $request_str = $request_str . '&category=adventurousness';
		if ($diversity) $request_str = $request_str . '&category=diversity';
		if ($freshness) $request_str = $request_str . '&category=freshness';
		if ($mainstreamness) $request_str = $request_str . '&category=mainstreamness';
		if ($top_years) $request_str = $request_str . '&category=top_years';
		if ($top_styles) $request_str = $request_str . '&category=top_styles';

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
