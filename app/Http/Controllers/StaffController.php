<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffCreateRequest;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function new(Request $request)
    {
        return view('staff.new');
    }

    public function newConfirm(StaffCreateRequest $request)
    {
        return view('staff.newConfirm', ['data' => $request->all()]);
    }
}
