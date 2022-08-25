<?php 
 
include_once 'config.php'; 
  
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING']; 
  
$user_ip_address = $_SERVER['REMOTE_ADDR']; 
$referrer_url = !empty($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:'/'; 
$user_agent = $_SERVER['HTTP_USER_AGENT']; 
  
$sql = "INSERT INTO log (page_url, referrer_url, user_ip_address, user_agent, created) VALUES (?,?,?,?,NOW())"; 
$stmt = $db->prepare($sql); 
$stmt->bind_param("ssss", $currentURL, $referrer_url, $user_ip_address, $user_agent); 
$insert = $stmt->execute(); 
 
?>