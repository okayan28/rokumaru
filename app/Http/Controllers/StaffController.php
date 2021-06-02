<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffConfirmRequest;
use App\Http\Requests\StaffCreateRequest;
use Illuminate\Http\Request;
use App\Models\Staff;

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

    public function create(StaffCreateRequest $request)
    {
        $staff = new Staff;
        $form = $request->all();
        unset($form['_token']);
        $staff->fill($form);
        $staff->save();
        return redirect('/staffs');
    }

    public function index(Request $request)
    {
        $items = Staff::all();
        return view('staff.index', ['items' => $items]);
    }
}