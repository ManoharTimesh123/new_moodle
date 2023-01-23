<?php
require_once('../../config.php');
require_once('lib.php');
require_login();
global $USER, $DB;
// $event = \local_hierarchy\event\dept_deleted::create( array('context'=>context_system::instance(), 'objectid'=>$nodeid, 'userid'=>$USER->id) ); //context is required 

// 	$dept_delete->trigger(); 
$event = \local_innovative\event\data_submits::create(array('context'=>context_system::instance(), 'userid'=>$USER->id));
$event->trigger();

echo 'hii';
