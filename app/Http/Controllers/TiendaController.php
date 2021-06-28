<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class TiendaController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('admin.index',compact('products'));
    }

    public function notifications(Request $request){
        $user=$request->user();
        $notifications=$user->unreadNotifications;
        return view('notifications',['notifications'=>$notifications]);
    }
}
