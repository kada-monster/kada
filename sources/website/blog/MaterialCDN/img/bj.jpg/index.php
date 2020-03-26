<?php
	$img=file('https://api.kada.monster/img/url/bg.txt');
	$url=array_rand($img);
	header("Location:".$img[$url]);
?>