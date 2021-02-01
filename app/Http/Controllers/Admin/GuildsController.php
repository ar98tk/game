<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GuildsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Guild;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GuildsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(GuildsDataTable $dataTable)
    {
        return $dataTable->render('admin.guilds.guilds');
    }

    public function edit($ID)
    {
        $guilds = Guild::where('ID', '=', $ID)->first();
        return view('admin.guilds.edit',compact('guilds'));
    }


    public function update(Request $request, $ID)
    {
        $validator = Validator::make($request->all(), [
            'Name'                      => 'required|min:10|max:30',
            //'LeaderName'                => 'required',
            'Bulletin'                  => 'nullable',
            'SilverFund'                => 'required|numeric',
            'ConquerPointFund'          => 'required|numeric',
            'Wins'                      => 'required|numeric|between:0,1000',
            'LevelRequirement'          => 'required|numeric|between:1,140',
            'RebornRequirement'         => 'required|numeric|between:0,2',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $guilds = Guild::where('ID', '=', $ID)->first();
        if($guilds){
            $data['Name']              = $request->Name;
            //$data['LeaderName']              = $request->LeaderName;
            $data['Bulletin']          = $request->Bulletin;
            $data['SilverFund']        = $request->SilverFund;
            $data['ConquerPointFund']  = $request->ConquerPointFund;
            $data['Wins']              = $request->Wins;
            $data['LevelRequirement']  = $request->LevelRequirement;
            $data['RebornRequirement'] = $request->RebornRequirement;

            $guilds->update($data);
            return redirect()->route('admin.guilds')->with([
                'message' => 'Guild updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Something was wrong',
            'alert-type' => 'danger',
        ]);

    }

    public function destroy($ID)
    {
        Guild::where('ID', '=', $ID)->delete();
        return redirect()->route('admin.guilds')->with([
        'message' => 'Guild deleted successfully',
        'alert-type' => 'success',]);
    }
}
