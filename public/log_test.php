
<?php
require_once "../Log.php";
// create a new log object
$log = new Log();
$log->error('$bob is undefined');
$captainsLog = new Log("captainslog");
$captainsLog->info("On a routine mission to ...");