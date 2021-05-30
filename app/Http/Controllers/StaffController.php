<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffConfirmRequest;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function new(Request $request)
    {
        return view('staff.new');
    }

    public function newConfirm(StaffConfirmRequest $request)
    {
        return view('staff.newConfirm', ['data' => $request->all()]);
    }

    public function newBack(Request $request)
    {
        return view('staff.new', ['data' => $request->all()]);
    }
}