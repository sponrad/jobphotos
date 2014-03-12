<?php

class UsersController extends BaseController {
    protected $layout = "main";

    public function __construct(){
        $this->beforeFilter('csrf', array('on'=>'post'));
        $this->beforeFilter('auth', array('only'=> array('getHome')));
    }

    public function getRegister() {
        return View::make('users.register');
    }

    public function getLogin() {
        return View::make('users.login');
    }

    public function postSignin() {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')), true)) {
//            return Redirect::to('users/home')->with('message', 'You are now logged in!');
            return Redirect::to('/home');
        } else {
            return Redirect::to('/login')
                ->with('message', 'Your username/password combination was incorrect')
                ->withInput();
        }        
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/')->with('message', 'Logout successful');
    }

    public function getHome(){
        return View::make('users.home');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$register_rules);
 
        if ($validator->passes()) {
            // validation has passed, create user
            $account = new Account;
            $account->companyname = Input::get('companyname');
            $account->save();

            $user = new User;
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->account()->associate($account);
            $user->save();
 
            return Redirect::to('/login')->with('message', 'Thanks for registering!');
        } else {
            // validation has failed, display error messages   
            return Redirect::to('/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
            
        }        
    }
}

?>