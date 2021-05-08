<?php

namespace app\controllers;

use core\Tone;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'TonePHP Framework',
           'TonePHP, framework'
       );
    }

    public function subscribeAction() {
        echo 'test';
        die;
    }
}