<?php
class JSONController extends BaseController {
    public function postSignin(){
        if (Auth::attempt(
            array(
                'email'=>Input::get('email'), 
                'password'=>Input::get('password')), 
            true)
        ) {
            return Response::json('Logged in');
        }else{
            return Response::json('Error logging in', 400);
        }
    }
}
?>