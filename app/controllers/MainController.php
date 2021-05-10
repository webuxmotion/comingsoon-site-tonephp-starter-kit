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
            $dataBody = getRequestData();
            
            $email = $dataBody['email'] ?? null;

            if ($email) {
                $data = [
                    'email' => $email
                ];
                $m_email = new Email();
                $m_email->load($data);

                $isEmailValid = $m_email->validate();
                $isEmailUnique = $m_email->checkUnique();

                if (!$isEmailUnique) {
                    http_response_code(409);
                    $res = [
                        'message' => 'This email is already in use.'
                    ];
                } else if ($isEmailValid) {
                    $m_email->save();

                    $res = [
                        'message' => 'Success! You subscribed.'
                    ];
                }

            } else {
                http_response_code(404);
                $res = [
                    'message' => 'Please enter the email.'
                ];
            }
            
            echo json_encode($res);
            die;
        }

        redirect();
    }
}