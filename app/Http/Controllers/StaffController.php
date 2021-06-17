<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffConfirmRequest;
use App\Http\Requests\StaffCreateRequest;
use App\Http\Requests\StaffEditConfirmRequest;
use App\Http\Requests\StaffUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function new(Request $request)
    {
        return view('staff.new', ['test' => 'fuga']);
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

    public function index()
    {
        $items = Staff::all();
        return view('staff.index', ['items' => $items]);
    }

    public function show($id)
    {
        return view('staff.show', ['staff' => Staff::find($id)]);
    }

    public function edit(Request $request, $id)
    {
        return view('staff.edit', ['staff' => Staff::find($id)]);
    }

    public function editConfirm(StaffEditConfirmRequest $request, $id)
    {
        return view('staff.editConfirm', ['data' => $request->all()]);
    }

    public function update(StaffUpdateRequest $request)
    {
        $form = $request->all();
        $staff = Staff::find($form['id']);
        unset($form['_token']);
        $staff->fill($form);
        $staff->save();
        return redirect('/staffs');
    }

    public function deleteConfirm(Request $request, $id)
    {
        return view('staff.deleteConfirm', ['data' => Staff::find($id)]);
    }

    public function delete(Request $request, $id)
    {
        Staff::find($id)->delete();
        $request->session()->flash('flash', 'スタッフ[id='.$id.']を削除しました');
        return redirect('/staffs');
    }
}