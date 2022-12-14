<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index()
    {
        // 商品一覧取得
        $Items = Item
            ::where('items.status', 'active')
            ->select()
            ->get();
        $type=item::TYPE;
        return view('item.index', compact('Items','type'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
            ]);
            $variables = DB::select('SET @@auto_increment_increment=1'); 
            $variables2 = DB::select('SET @@auto_increment_offset=1'); 
                    
            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }

        return view('item.add');
    }
     // 商品編集
     
    public function edit(Request $request)
    {
        $Items = Item::find($request->id);
        $type=item::TYPE;
        return view('item.edit', [
            'Items' => $Items,
            'type' => $type,
        ]);
    } 
    public function update(Request $request)
    {
        $rules= [
            'name' => 'required|max:50',
            'type' => 'required',
            'detail' => 'required',
        ];
        
        $msg=[  
            'name.required' => '名前を入れてください',
            'name.max' => '名前は50文字以内で記載してください',
            'type.required' => '種別を入れてください',
            'detail.required' => '詳細を入れてください',    
        ]; 
        $request->validate($rules,$msg);


        $Items = Item::find($request->id);
        $Items->name = $request->name;
        $Items->type = $request->type;
        $Items->detail = $request->detail;
        $Items->save();
       
        
        
      return redirect('/items');
    }

}

