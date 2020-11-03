<?php

namespace App\Http\Controllers\Admin;

use App\Model\Payment;
use App\Model\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    public function view()
    {
        $data = View::orderBy("id", "DESC")->paginate(12);
        return view('admin.report.view', compact('data'));
    }

    public function payment()
    {
        $data = Payment::orderBy("id", "DESC")->paginate(12);
        return view('admin.report.payment', compact('data'));
    }
}
