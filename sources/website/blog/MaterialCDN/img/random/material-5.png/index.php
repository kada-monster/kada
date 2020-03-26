<?php
	$img=file('https://api.kada.monster/img/url/h.txt');
	$url=array_rand($img);
	header("Location:".$img[$url]);
?>