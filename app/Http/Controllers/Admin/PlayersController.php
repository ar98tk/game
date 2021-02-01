<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PlayersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PlayersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(PlayersDataTable $dataTable)
    {
        return $dataTable->render('admin.players.players');
    }

    public function edit($UID)
    {
        $players = Player::where('UID', '=', $UID)->first();
        return view('admin.players.edit',compact('players'));
    }


    public function update(Request $request, $UID)
    {
        $validator = Validator::make($request->all(), [
            'Owner'                     => 'required|max:30',
            'Money'                     => 'required|numeric|between:0,30000000000',
            'ConquerPoints'             => 'required|numeric|between:0,2147000000',
            'Level'                     => 'required|numeric|between:1,140',
            'WarehousePW'               => 'required|min:1|max:20',
            'Reborn'                    => 'required|numeric|between:0,2',

        ]);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $players = Player::where('UID', '=', $UID)->first();
        if($players){
            $data['Owner']              = $request->Owner;
            $data['Money']              = $request->Money;
            $data['ConquerPoints']      = $request->ConquerPoints;
            $data['Level']              = $request->Level;
            $data['WarehousePW']        = $request->WarehousePW;
            $data['Reborn']             = $request->Reborn;

            $players->update($data);
            return redirect()->route('admin.players')->with([
                'message' => 'Player updated successfully',
                'alert-type' => 'success',
            ]);
        }
        return redirect()->back()->with([
            'message' => 'Something was wrong',
            'alert-type' => 'danger',
        ]);

    }

    public function destroy($UID)
    {
        Player::where('UID', '=', $UID)->delete();
        return redirect()->route('admin.players')->with([
        'message' => 'Player deleted successfully',
        'alert-type' => 'success',]);
    }
}
