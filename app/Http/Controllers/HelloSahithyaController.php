<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloSahithyaController extends Controller
{
    public function index() 
    { 
    return 'Hello, sahithya!'; 
    } 
    public function sum($num1,$num2) 
    { 
    return $num1+$num2; 
    } 
    public function substract($num1,$num2) 
    { 
    return $num1-$num2; 
    } 
    public function multiply($num1,$num2) 
    { 
    return $num1*$num2; 
    } 
    public function divide($num1,$num2) 
    { 
    return $num1/$num2; 
    } 

}
