<?php

if (isset($_POST['submit'])) {
    session_start();
    // $spammer_ip[] = getenv("REMOTE_ADDR");
    $spammer_ip = array('::12', '146.185.223.29');

    $time_passed = strtotime(date('H:i:s'))-strtotime($_POST['number']);

    if ((isset($_POST['first_name']) && !empty($_POST['first_name'])) || ($_SESSION['token'] !== $_POST['token']) || ($time_passed < 1) ) {
        echo "Spammer";
		// redirect with succes to trick the spammer
    } else {
        echo "Proccess The Form ";
    }

}



?>



