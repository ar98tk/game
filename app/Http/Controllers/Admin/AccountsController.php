<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AccountsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(AccountsDataTable $dataTable)
    {
        return $dataTable->render('admin.accounts.accounts');
    }

    public function create()
    {
        return view('admin.accounts.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Username'       => 'required|max:30',
            'Password'       => 'required',
            'IP'             => 'nullable|ip',
            'Email'          => 'required',
            'MobileNumber'   => 'required|min:1|max:20',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data['Username']              = $request->Username;
            $data['Password']              = $request->Password;
            $data['IP']                    = $request->ip();
            $data['Email']                 = $request->Email;
            $data['MobileNumber']          = $request->MobileNumber;

            Account::create($data);
            return redirect()->route('admin.accounts')->with([
                'message' => 'Account created successfully',
                'alert-type' => 'success',
            ]);

    }

    public function edit($Username)
    {
        $accounts = Account::where('Username', '=', $Username)->first();
        return view('admin.accounts.edit',compact('accounts'));
    }

    public function update(Request $request, $Username)
    {
        $validator = Validator::make($request->all(), [
            'Username'       => 'required|max:30',
            'Password'       => 'required',
            'IP'             => 'nullable|ip',
            'Email'          => 'required',
            'MobileNumber'   => 'required|min:1|max:20',
            'State'          => 'nullable|numeric|between:0,4',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $accounts = Account::where('Username', '=', $Username)->first();
        if($accounts){
            $data['Username']              = $request->Username;
            $data['Password']              = $request->Password;
            $data['IP']                    = $request->IP;
            $data['Email']                 = $request->Email;
            $data['MobileNumber']          = $request->MobileNumber;
            $data['State']                 = $request->State;

            $accounts->update($data);
            return redirect()->route('admin.accounts')->with([
                'message' => 'Account updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Something was wrong',
            'alert-type' => 'danger',
        ]);

    }

    public function destroy($Username)
    {
        Account::where('Username', '=', $Username)->delete();
        return redirect()->route('admin.accounts')->with([
        'message' => 'Account deleted successfully',
        'alert-type' => 'success',]);
    }
}
