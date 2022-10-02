<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

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

        return view('item.index', compact('Items'));
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

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items');
        }

        return view('item.index');
    }
     // 商品編集
    public function edit(Request $request)
    {
        $Items = Item::find($request->id);
        return view('item.edit', [
            'Items' => $Items,
        ]);
    } 
    public function update(Request $request)
    {
        $rules= [
            'name' => 'required|max:50',
            'category' => 'required',
            'detail' => 'nullable',
          ];
        
        $request->validate($rules);

        $Items = Item::find($request->id);
        $Items->name = $request->name;
        $Items->category = $request->category;
        $Items->detail = $request->detail;
        $Items->save();

      return redirect('/Items');
    }

}

