<?php

namespace App\Traits;

trait User {

    /**
     * @return \App\User
     */
    public function makeFakeUser()
    {
        $user = new \App\User();
        $user->name = 'Proto';
        $user->created_at = new \DateTime();
        $user->email = 'noemail@noprovider.com';
        return $user;
    }
}