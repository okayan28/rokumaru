<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function new(Request $request)
    {
        return view('staff.new');
    }

    public function newConfirm(Request $request)
    {
        return view('staff.newConfirm');
    }
}
