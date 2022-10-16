<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orderData()
    {
        $results = OrderResource::collection(Order::with(['location','added_by','files.file','product.category','product.subcategory'])->get());

        return response()->json([
            'results'=> $results
        ]);
    }
}
