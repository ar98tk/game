<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(AdminsDataTable $dataTable)
    {
        return $dataTable->render('admin.admins.admins');
    }

    public function create()
    {
        return view('admin.admins.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'username'       => 'required',
            'email'          => 'required',
            'password'       => 'required|min:8',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data['name']          = $request->name;
            $data['username']      = $request->username;
            $data['email']         = $request->email;
            $data['password']      = bcrypt($request->password);

            User::create($data);
            return redirect()->route('admin.admins')->with([
                'message' => 'Admin created successfully',
                'alert-type' => 'success',
            ]);

    }

    public function edit($id)
    {
        $admins = User::where('id', '=', $id)->first();
        return view('admin.admins.edit',compact('admins'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'           => 'required',
            'username'       => 'required',
            'email'          => 'required',
            'password'       => 'nullable|min:8',
        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $admins = User::where('id', '=', $id)->first();
        if($admins){

            $data['name']          = $request->name;
            $data['username']      = $request->username;
            $data['email']         = $request->email;
            $data['password']      = bcrypt($request->password);

            $admins->update($data);
            return redirect()->route('admin.admins')->with([
                'message'    => 'Admin updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Something was wrong',
            'alert-type' => 'danger',
        ]);

    }

    public function destroy($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->route('admin.admins')->with([
        'message' => 'Admin deleted successfully',
        'alert-type' => 'success',]);
    }
}
