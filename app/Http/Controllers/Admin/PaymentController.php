<?php

namespace App\Http\Controllers\Admin;

use App\Model\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        $data = Payment::orderBy("id", "DESC")->paginate(12);
        return view('admin.payment.list', compact('data'));
    }
}
