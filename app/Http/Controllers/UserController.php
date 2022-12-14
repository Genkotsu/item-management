<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index()
    {
                // 会員一覧取得
        $users = User::all();
        return view('user.index', compact('users'));
    }

       //会員画面編集
    public function edit(Request $request)
    {
        
        $users = User::find($request->id);
        return view('user.edit', [
            'users' => $users,
        ]);
    }
    public function update(Request $request)
    {
        $rules=[
            'name' => 'required',
            'email' => 'required|email',
        ];

        $message = [
            'name.required' => '名前入力が必要です',
            'email.required' => 'メールアドレスが必要です',
            'email.email' => 'メールアドレス形式を確認してください',
        ];

        $request->validate($rules, $message);
        // if(empty($request->role)){
        //     // $role=1;
        // }  
        $user = User::find($request->id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();

        return redirect('/users');
    }

}