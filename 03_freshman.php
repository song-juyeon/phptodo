<?php
$title = "연관배열 : Associated Array";
include("./header.php");
//frexhman.php

$freshman = array(
	"David" => "Computer",
	"Alice" => "Math",
	"Elsa" => "Physics",
	"Bob" => "Music",
	"Chris" => "Electronics"
);

print($freshman['David']);
$freshman["Bob"] = "Movie";	//배열요소 직관적인 수정
$freshman["IU"] = "Singer"; //배열요소 추가
unset($freshman["Elsa"]);	//배열요소 삭제

print("<pre class=\"bg-primary text-white\">");
print_r($freshman);
print("</pre>");

include("./footer.php");
?>