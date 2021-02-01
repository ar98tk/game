<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NobilityDataTable;
use App\Http\Controllers\Controller;
use App\Models\Nobility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NobilityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(NobilityDataTable $dataTable)
    {
        return $dataTable->render('admin.nobility.nobility');
    }

    public function edit($EntityUID)
    {
        $nobility = Nobility::where('EntityUID', '=',$EntityUID)->first();
        return view('admin.nobility.edit',compact('nobility'));
    }


    public function update(Request $request, $EntityUID)
    {
        $validator = Validator::make($request->all(), [
            'Donation'                     => 'required|numeric',


        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $nobility = Nobility::where('EntityUID', '=', $EntityUID)->first();
        if($nobility){
            $data['Donation']              = $request->Donation;

            $nobility->update($data);
            return redirect()->route('admin.nobility')->with([
                'message' => 'Nobility Record updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Something was wrong',
            'alert-type' => 'danger',
        ]);

    }

    public function destroy($EntityUID)
    {
        Nobility::where('EntityUID','=',$EntityUID)->delete();
        return redirect()->route('admin.nobility')->with([
        'message' => 'Nobility Record deleted successfully',
        'alert-type' => 'success',]);
    }
}
