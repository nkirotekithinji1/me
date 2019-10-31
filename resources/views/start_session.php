<?php
//Start a PHP session
session_start();
 
//Get the username sent from the user
$username = $_REQUEST['username'];
 
//filter it
$username = trim(filter_var($username, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));
 
//set the username for the session
$_SESSION['username'] = $username;
 
//set a unique id for the user. since we don't have a working user system, we'll just use the time()
//variable to generate a unique id, and add the user's name to it and the user's session id, then 
//MD5 the whole thing
$_SESSION['userid'] = md5(time() + '_' + $username + '_' + session_id());
 
//echo the json_encoded success message for our ajax call
echo json_encode(array('success' => true));
function ajaxCall(ajax_url, ajax_data, successCallback) {
    $.ajax({
        type : "POST",
        url : ajax_url,
        dataType : "json",
        data: ajax_data,
        time : 10,
        success : function(msg) {
            if( msg.success ) {
                successCallback(msg);
            } else {
                alert(msg.errormsg);
            }
        },
        error: function(msg) {
        }
    });
}
exit();
?>