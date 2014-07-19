<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Users extends Eloquent implements UserInterface, RemindableInterface {

//  mendeklarasikan nama tabel yang akan dihandle dan memberi nilai false pada fielt timestamps    
    protected $table = 'tabeluser';
    protected $hidden = array('password','remember_token');
    public $timestamps = false;

    public function getAuthIdentifier() {
        return $this->getKey();
    }

    public function getAuthPassword() {
        return $this->password;
    }

    public function getRememberToken() {
        return $this->remember_token;
    }

    public function getRememberTokenName() {
        
    }

    public function getReminderEmail() {
        
    }

    public function setRememberToken($value) {
        $this->remember_token = $value;
    }

}
