<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    return view('index');
  }
  public function preguntas(){
    return view('preguntas');
  }
  public function register(){
    return view('register');
  }
  public function login(){
    return view('login');
  }



}
