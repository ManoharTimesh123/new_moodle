<?php
namespace local_innovative;


defined('MOODLE_INTERNAL') || die();    
class observers
{
        public static function groupcreate(\local_innovative\event\data_submits $event){
               
                if (empty($event)) 
                {
                    return;
                }
                else
                {
                    var_dump($event->get_description());
                    die;
                }

             
        }
      
}