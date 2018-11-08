<?php
	$url='https://www.twitch.tv/deatgvalley';
	$proxy=$x:$y;
		$x=fopen("C:\Users\Borg\Desktop\Bots\ip.txt", "r");
			if ($x) {
				while (($line=fgets($x)) !==false) {
				}
				fclose($x);
			} else {
			}
		$y=fopen("C:\Users\Borg\Desktop\Bots\port.txt", "r");
		if ($x) {
				while (($line=fgets($x)) !==false) {
				}
				fclose($x);
			} else {
			}
	
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_PROXY, $proxy); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_CONNECT_ONLY, 1L);
	$curl_scraped_page = curl_exec($ch);
echo $curl_scraped_page;
?>
