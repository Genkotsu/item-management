<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index()
    {
        // 商品一覧取得
        $users = User::all();
            

        return view('user.index', compact('users'));
    }

}
