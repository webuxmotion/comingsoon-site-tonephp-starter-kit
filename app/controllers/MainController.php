<?php

namespace app\controllers;

use core\Tone;
use app\models\Email;

class MainController extends AppController {
    
    public function indexAction() {
    
       $this->setMeta(
           Tone::$app->getProperty('site_name'),
           'TonePHP Framework',
           'TonePHP, framework'
       );
    }

    public function subscribeAction() {
        
        if (isAjax()) {
            $email = $_GET['email'] ?? null;

            if ($email) {
                $data = [
                    'email' => $email
                ];
                $m_email = new Email();
                $m_email->load($data);

                $isEmailValid = $m_email->validate();
                $isEmailUnique = $m_email->checkUnique();

                if (!$isEmailUnique) {
                    $res = [
                        'error' => true,
                        'message' => 'This email is already in use.'
                    ];
                }

                if ($isEmailValid && $isEmailUnique) {
                    $m_email->save();

                    $res = [
                        'message' => 'OK'
                    ];
                }
            } else {
                $res = [
                    'error' => true,
                    'message' => 'Please enter the email.'
                ];
            }
            
            echo json_encode($res);
            die;
        }
    }
}