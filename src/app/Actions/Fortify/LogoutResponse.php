<?php
namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContact;

class LogoutResponse implements LogoutResponseContact
{
    public function toResponse($request)
    {
        return redirect('/register');
    }
}