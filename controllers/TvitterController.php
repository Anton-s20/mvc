<?php
	require_once ROOT."/lib/TwitterAPIExchange.php";

class TvitterController{
	public function GetFollowers(){
		$settings = array(
		    'oauth_access_token'=>"926464501549031425-PfMwmnClBXbsaKkTuISez4NKFCt64v1", 
		    'oauth_access_token_secret'=>"xkFE7GadMTz0BFPrWs2f6MTFDO3CPBuEdOinD6OZaUgi9", 
		    'consumer_key'=>"piyFPScU9g3b9mfQBnc4J9GW5", 
		    'consumer_secret'=>"zJdR6hg9gl51MEyJDw6j8b24xYSvvlQk9dzgKl5j3kxwO2P4be",
		);

		$url = "https://api.twitter.com/1.1/followers/list.json";
		$requestMethod = "GET";

		if (isset($_GET['name'])){
			 $name = $_GET['name'];
		}

		$getfield = "?cursor=-1&screen_name=$name&skip_status=true&include_user_entities=false";
		$twitter = new TwitterAPIExchange($settings);
		$string = json_decode($twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
			->performRequest(),$assoc = TRUE);
		
		
		if(isset($string["errors"][0]["message"]) != ""){
			echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>".$string["errors"][0]["message"]."</em></p>";
			exit();
		}
		$array = array();
		foreach($string as $items){
			if (is_array($items)){
				foreach ($items as $item) {
					$array[] = $item;
				}
			}
	    }

		require_once ROOT."/views/hello.php";   
	}
}
?>