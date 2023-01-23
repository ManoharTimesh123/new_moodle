<?php

function local_player_extend_navigation(global_navigation $nav1){


global $CFG, $PAGE,$DB,$USER;


    $nav1->add(
    'Player',
    new moodle_url($CFG->wwwroot . '/local/player/index.php'),
    navigation_node::TYPE_SYSTEM,
    null,
    'local_player',
    $icon
    )->showinflatnavigation = true;

    } 





