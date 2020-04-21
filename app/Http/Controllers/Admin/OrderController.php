<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //
    public function index()
    {
    $orders = Order::orderBy('id', 'desc')->paginate(5);
    return view('admin.order.index', compact('orders'));
    }
}
