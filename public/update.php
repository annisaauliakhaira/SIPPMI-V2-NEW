<?php

if(file_exists('../update.sh')){
	shell_exec('../update.sh');

	$msg = new stdClass();
	$msg->status = "Done";
	$msg->message = "Application updated";

	$json = json_encode($msg);
	echo $json;
}
