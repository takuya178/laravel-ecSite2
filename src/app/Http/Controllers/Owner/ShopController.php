<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Shop\UpdateRequest;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:owners');

    //     $this->middleware(function ($request, $next) {
    //         $id = $request->route()->parameter('shop'); //shopのid取得
    //         if(!is_null($id)){ // null判定
    //         $shopsOwnerId = Shop::findOrFail($id)->owner->id;
    //             $shopId = (int)$shopsOwnerId; // キャスト 文字列→数値に型変換
    //             $ownerId = Auth::id();
    //             if($shopId !== $ownerId){ // 同じでなかったら
    //                 abort(404); // 404画面表示
    //             }
    //         }
    //         return $next($request);
    //     });
    // } 

    public function index()
    {
        $shops = Shop::where('owner_id', Auth::id())->get();

        return view('owner.shops.index', 
        compact('shops'));
    }

    public function edit($id)
    {
        $shop = Shop::findOrFail($id);
        return view('owner.shops.edit', compact('shop'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $updateData = $request->validate();

        if ($request->has('image')) {
            Storage::disk('public')->delete($shop->image);
            $updateData['image'] = $request->file('image')->store('blog', 'public');
        }
        $shop->update($updateData);
        return view('owner.shops.index');
    }
}
