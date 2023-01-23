<?php

// function local_publisher_extend_navigation(global_navigation $nav1){


//     global $CFG, $PAGE,$DB,$USER;

  
//        if ($PAGE->theme->resolve_image_location('icon', 'local_publisher', null)) {
//         $icon = new pix_icon('online-course', '', 'local_publisher', array('class' => 'icon pluginicon'));
   
//     } 
       
// if(is_siteadmin()){

//        $admin=$nav1->add('Manage Publisher');
//         $admin->add(
//         'Create Publisher',
//         new moodle_url($CFG->wwwroot . '/local/publisher/index.php'),
//         navigation_node::TYPE_SYSTEM,
//         null,
//         'local_publisher',
//         $icon
//     )->showinflatnavigation = true;

//         $admin->add(
//         'Publisher List',
//         new moodle_url($CFG->wwwroot . '/local/publisher/list.php'),
//         navigation_node::TYPE_SYSTEM,
//         null,
//         'local_publisher',
//         $icon
//     )->showinflatnavigation = true;

//     } 


// }
// $context=context_system::instance();
// function local_innovative_extend_settings_navigation($settingsnav, $context){
//     if(($context->contextlevel === 50) &&
//         has_capability('gradereport/grader:view', $context)){
//         $id = $context->instanceid;
//         $urltext = 'Manohar_invention';
//         $url = new moodle_url($CFG->wwwroot . '/grade/report/grader/index.php', array('id'=>$id));
//         $coursesettingsnode = $settingsnav->find('currentcourse', null);   // 'courseadmin' is the menu key
//         var_dump($coursesettingsnode);
//         // var_dump($url);jbmgbdnfgjh
//         // echo '</br>';
//         // echo '</br>';
//         // var_dump(new pix_icon('i/report', 'grades'));
//         die;
//         $node = $coursesettingsnode->create($urltext, $url, navigation_node::NODETYPE_LEAF, null, 'gradebook',  new pix_icon('i/report', 'grades'));
//         $coursesettingsnode->add_node($node,  'gradebooksetup'); //'gradebooksetup' is an where you put the link before
//     }
// }




