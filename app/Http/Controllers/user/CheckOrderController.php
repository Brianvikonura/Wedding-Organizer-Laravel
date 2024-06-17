<?php

namespace App\Http\Controllers\user;

use App\Models\tb_order;
use App\Models\tb_settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CheckOrderController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $orders = tb_order::where('user_id', $user->id)->get();

        if (!$user) {
            abort(403, 'Harap Login Terlebih Dahulu');
        }

        return view('pages.check-order', compact('orders'));
    }
}
