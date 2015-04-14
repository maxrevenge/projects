<?php
$response = array();
 
if (isset($_POST['postTEXT'])) {
 
    $postTEXT = $_POST['postTEXT'];
  
 
    require 'connect.php';
 
    $db = new DB_CONNECT();
 
    $result = mysql_query("INSERT INTO post(postTEXT) VALUES('$postTEXT')");
 
    if ($result) {
        $response["success"] = 1;
        $response["message"] = "Post successfully created.";
 
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
 
        echo json_encode($response);
    }
} else {
    $response["success"] = 0;
    $response["message"] = "Required field is missing";
 
    echo json_encode($response);
}
?>