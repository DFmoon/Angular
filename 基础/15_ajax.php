<?php 
header("Content-type:text/json");
$stulist=array(
array("Code"=>"01","Name"=>"aa","Score"=>"98"),
array("Code"=>"02","Name"=>"bb","Score"=>"78"),
array("Code"=>"03","Name"=>"cc","Score"=>"87"),
);
echo json_encode($stulist);
?>