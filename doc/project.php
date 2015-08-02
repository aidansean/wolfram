<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/wolfram" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=wolfram" ;
$project = new project_object("wolfram", "Wolfram rules", "https://github.com/aidansean/wolfram", "http://aidansean.com/projects/?tag=wolfram", "wolfram/images/project.jpg", "wolfram/images/project_bw.jpg", "I enjoy playing with recreational mathematics and the Wolfram rules are a rich source of complex behaviour from simple rules.  So I created this project to explore how the rules can lead to different patterns.", "Maths", "HTML,JavaScript") ;
?>