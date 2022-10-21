<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120209,
            'Name' => 'Senopati Eka Sasura',
            'Phone' => '081229515862',
            'Class' => 'XII RPL 7'
        ];
    }
}
