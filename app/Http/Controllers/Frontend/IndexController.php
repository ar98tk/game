<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }


    public function control()
    {
        return view('frontend.control');
    }

    public function contact(Request $request)
    {
        $validation = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required|min:10|max:50',
            'mobile' => 'nullable|numeric',
            'message' => 'required|min:10|max:1000'

        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['title'] = $request->title;
        $data['mobile'] = $request->mobile;
        $data['message'] = $request->message;

        Contact::create($data);

        return redirect()->back()->with([
            'message' => 'Message sent successfully',
            'alert-type' => 'success'
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'Username'                  => 'required|unique:accounts|min:6|max:18',
            'Password'                  => 'required|min:8|max:25|confirmed',
            'Email'                     => 'required',
            'MobileNumber'              => 'required|numeric',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data['Username']              = $request->Username;
            $data['Password']              = $request->Password;
            $data['Email']                 = $request->Email;
            $data['MobileNumber']          = $request->MobileNumber;
            $data['IP']                    = $request->ip();

            Account::create($data);
            return redirect()->route('frontend.index')->with([
                'message' => 'Account created successfully',
                'alert-type' => 'success',
            ]);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
