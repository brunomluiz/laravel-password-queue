<?php

namespace Brunomluiz\LaravelPasswordQueue\App\Auth\Passwords;

use Closure;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Auth\Passwords\PasswordBroker as IlluminatePasswordBroker;

/**
 * Class PasswordBroker
 * @package Brunomluiz\LaravelPasswordQueue\App\Auth\Passwords
 */
class PasswordBroker extends IlluminatePasswordBroker
{
    /**
     * Send the password reset link via e-mail in a queue
     *
     * @param  \Illuminate\Contracts\Auth\CanResetPassword  $user
     * @param  string  $token
     * @param  \Closure|null  $callback
     * @return int
     */
    public function emailResetLink(CanResetPassword $user, $token, Closure $callback = null)
    {
        // We will use the reminder view that was given to the broker to display the
        // password reminder e-mail. We'll pass a "token" variable into the views
        // so that it may be displayed for an user to click for password reset.
        $view = $this->emailView;

        return $this->mailer->queue($view, compact('token', 'user'), function ($m) use ($user, $token, $callback) {
            $m->to($user->getEmailForPasswordReset());

            if ($callback !== null) {
                call_user_func($callback, $m, $user, $token);
            }
        });
    }
}