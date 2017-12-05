<?php

include('core/db.class.php');
$dbo = Db::getInstance();
$link = $dbo->connect("localhost", "admin", "1", "utilizatori");
?>