<?php

namespace local_innovative\event;
defined('MOODLE_INTERNAL') || die();


class data_submits extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'r';
        $this->data['edulevel'] = self::LEVEL_OTHER;
    }
    public static function get_name() {
        return 'data_submit';
    }
    public function get_description() {
        return "The user with id  has viewed the sessions of the chat with course module id";
    }


    
}
