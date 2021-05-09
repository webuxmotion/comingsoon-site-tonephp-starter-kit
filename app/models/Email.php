<?php

namespace app\models;

use core\base\Model;

class Email extends Model {

  public $table = 'email';

  public $attributes = [
    'email' => ''
  ];
  
  public $rules = [
    'required' => [
      ['email'],
    ],
    'email' => [
      ['email'],
    ],
  ];

  public function checkUnique() {
    $sql = "SELECT * FROM $this->table WHERE email = ?";
    $candidateEmail = $this->attributes['email'];
    $email = $this->db->query($sql, [$candidateEmail]);

    if ($email) {
      $email = $email[0];
      if ($email['email'] === $candidateEmail) {
        return false;
      }
    }

    return true;
  }
}