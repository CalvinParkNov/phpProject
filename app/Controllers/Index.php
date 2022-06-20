<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Controllers;

/**
 * Description of Index
 *
 * @author wonkyunpark
 */
class Index extends BaseController {
   public function index()
    {
        return view('main');
    }
    public function second(){
        return view('second');
    }
}
