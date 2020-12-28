<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index(){
        return FriendListFacade::FriendInformation();
    }
}
