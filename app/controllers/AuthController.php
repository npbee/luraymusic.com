<?php

    use Auth, BaseController, Form, Input, Redirect, Sentry, View;

    class AuthController extends BaseController {

        public function getLogin()
        {
            return View::make('admin.auth.login')
                -> with('bodyClass', 'admin--login');
        }

        public function postLogin()
        {
            $credentials = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            try
            {
                $user = Sentry::authenticate($credentials, false);

                if($user)
                {
                    return Redirect::route('admin');
                }
            }

            catch(\Exception $e)
            {
                return Redirect::route('admin.login')->withErrors(array('login' => $e->getMessage()));
            }
        }

        public function getLogout()
        {
            Sentry::logout();

            return Redirect::route('admin.login');
        }

        public function getReset()
        {
            return View::make('admin.auth.reset')->with('bodyClass', 'admin--login');
        }

        public function postReset()
        {
            $input = Input::all();
            $rules = array(
                'email' => 'required|email',
            );

            $validation = Validator::make($input, $rules);

            if ($validation->fails()) {

                return Redirect::back()->with_input()->with_errors($validation);

            } else {
                try {
                    $user = Sentry::getUserProvider()->findbyLogin(Input::get('email'));
                    $resetCode = $user->getResetPasswordCode();
                    $email = Input::get('email');
                    $link = URL::to('auth/reset/confirm').$resetCode;
                    $name = $user->first_name;

                    $data = array(
                        'resetCode' => $resetCode
                    );

                    $mailUser = array(
                        'email' => $email,
                        'name' => $name
                    );

                    \Mail::send('emails.auth.reset', $data, function($message) use ($mailUser)
                    {
                        $message->to($mailUser['email'], $mailUser['name'])
                                         ->subject('Luray Password Reset')
                                         ->from('nick@luraymusic.com', 'Nick');
                    });

                    Notification::success('An email has been sent to you with a link to reset your password.');
                    return Redirect::route('admin.login');

                } catch (Sentry\SentryException $e ) {
                    $errors = $e->getMessage();
                }
            }
        }

        public function getConfirm($resetCode)
        {
            return View::make('admin.auth.confirm')
                ->with('bodyClass', 'admin--login')
                ->with('resetCode', $resetCode);
        }

        public function postConfirm($resetCode)
        {
            try
            {
                $user = Sentry::getUserProvider()->findByLogin(Input::get('email'));
                $resetCode = Input::get('resetCode');
                $new_password = Input::get('password');

                if ($user->checkResetPasswordCode(Input::get('resetCode'))) {
                    if ($user->attemptResetPassword($resetCode, $new_password))
                    {
                        Notification::success('Your password was changed.  Please log in with your new password.');
                        return Redirect::route('admin.login');
                    } else
                    {
                        return Redirect::route('admin.login')->withErrors(array('login' => $e->getMessage()));
                    }
                }
            }
            catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
            {
                echo 'User was not found.';
            }
        }
    }