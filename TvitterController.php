// <?php
// 	require_once ROOT."/lib/TwitterAPIExchange.php";

// class TvitterController{
// 	public function GetFollowers(){
// 		$settings = array(
// 		    'oauth_access_token'=>"926464501549031425-PfMwmnClBXbsaKkTuISez4NKFCt64v1", 
// 		    'oauth_access_token_secret'=>"xkFE7GadMTz0BFPrWs2f6MTFDO3CPBuEdOinD6OZaUgi9", 
// 		    'consumer_key'=>"piyFPScU9g3b9mfQBnc4J9GW5", 
// 		    'consumer_secret'=>"zJdR6hg9gl51MEyJDw6j8b24xYSvvlQk9dzgKl5j3kxwO2P4be",
// 		);

// 		$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
// 		$requestMethod = "GET";

// 		if (isset($_GET['user'])){
// 			$user = $_GET['user'];
// 		}else{
// 			$user  = "iagdotme";
// 		}
// 		if (isset($_GET['count'])){
// 			$count = $_GET['count'];
// 		}else{
// 			$count = 20;
// 		}

// 		$getfield = "?screen_name=$user&count=$count";
// 		$twitter = new TwitterAPIExchange($settings);
// 		$string = json_decode($twitter->setGetfield($getfield)
// 			->buildOauth($url, $requestMethod)
// 			->performRequest(),$assoc = TRUE);
		
// 		if($string["errors"][0]["message"] != ""){
// 			echo "<h3>Sorry, there was a problem.</h3><p>Twitter returned the following error message:</p><p><em>"
// 			.$string["errors"][0]["message"]."</em></p>";exit();
// 		}
// 		foreach($string as $items){
// 	        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
// 	        echo "Tweet: ". $items['text']."<br />";
// 	        echo "Tweeted by: ". $items['user']['name']."<br />";
// 	        echo "Screen name: ". $items['user']['screen_name']."<br />";
// 	        echo "Followers: ". $items['user']['followers_count']."<br />";
// 	        echo "Friends: ". $items['user']['friends_count']."<br />";
// 	        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
// 	    }
// 	}
// }
// ?>