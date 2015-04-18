<?php 
class HomeController extends BaseController { 

 public function postLogin()
 {
  $username = Input::get('username');
  $password = Input::get('password');
  if(Auth::attempt(['username'=> $username, 'password'=> $password]))
  {
   return Redirect::to('/user');
  }

  return  Redirect::back()
    ->withInput()
    ->withErrors('Этого пользователя не существует');
 }

 public function getLogin()
 {
  return  View::make('home.index');
 }

 public function getLogout()
 {
  Auth::logout();
  return Redirect::to('/');
 }
}



 ?>