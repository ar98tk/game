<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function settings()
    {
        return view('admin.settings');
    }

    public function setting_save()
    {
        $validator = Validator::make(request()->all(), [
            'site_name'               => 'required',
            'client_link'             => 'required',
            'patch_link'              => 'required',
            'facebook'                => 'required',
            'twitter'                 => 'required',
            'instagram'               => 'required',
            'skype'                   => 'required',
            'youtube'                 => 'required',
            'email'                   => 'required',
            'url'                     => 'required',
            'phone'                   => 'required',
            'cup_price'               => 'required',
            'vip_7_price'             => 'required',
            'full_perfection_price'   => 'required',
            'billion_cps_price'       => 'required',
            'ten_billion_cps_price'   => 'required',
            'king_month'              => 'required',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

            $data['site_name']             = request()->site_name;
            $data['client_link']           = request()->client_link;
            $data['patch_link']            = request()->patch_link;
            $data['facebook']              = request()->facebook;
            $data['twitter']               = request()->twitter;
            $data['instagram']             = request()->instagram;
            $data['skype']                 = request()->skype;
            $data['youtube']               = request()->youtube;
            $data['email']                 = request()->email;
            $data['url']                   = request()->url;
            $data['phone']                 = request()->phone;
            $data['cup_price']             = request()->cup_price;
            $data['vip_7_price']           = request()->vip_7_price;
            $data['full_perfection_price'] = request()->full_perfection_price;
            $data['billion_cps_price']     = request()->full_perfection_price;
            $data['ten_billion_cps_price'] = request()->full_perfection_price;
            $data['king_month']            = request()->full_perfection_price;

            Setting::orderBy('id', 'desc')->update($data);

            return redirect('admin/settings')->with([
                'message' => 'Settings updated successfully',
                'alert-type' => 'success',
            ]);

    }

}
