<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\NpcsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Npc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NpcsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(NpcsDataTable $dataTable)
    {
        return $dataTable->render('admin.npcs.npcs');
    }

    public function create()
    {
        return view('admin.npcs.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|max:30',
            'name' => 'required',
            'type' => 'nullable|numeric',
            'lookface' => 'nullable|numeric',
            'mapid' => 'nullable|numeric',
            'cellx' => 'nullable|numeric',
            'celly' => 'nullable|numeric',
            'effect' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['type'] = $request->type;
        $data['lookface'] = $request->lookface;
        $data['mapid'] = $request->mapid;
        $data['cellx'] = $request->cellx;
        $data['celly'] = $request->celly;
        $data['effect'] = $request->effect;

        Npc::create($data);
        return redirect()->route('admin.npcs')->with([
            'message' => 'NPC created successfully',
            'alert-type' => 'success',
        ]);

    }

    public function edit($id)
    {
        $npcs = Npc::where('id', '=', $id)->first();
        return view('admin.npcs.edit', compact('npcs'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required|max:30',
            'name' => 'required',
            'type' => 'nullable|numeric',
            'lookface' => 'nullable|numeric',
            'mapid' => 'nullable|numeric',
            'cellx' => 'nullable|numeric',
            'celly' => 'nullable|numeric',
            'effect' => 'nullable',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $npcs = Npc::where('id', '=', $id)->first();
        if ($npcs) {
            $data['id'] = $request->id;
            $data['name'] = $request->name;
            $data['type'] = $request->type;
            $data['lookface'] = $request->lookface;
            $data['mapid'] = $request->mapid;
            $data['cellx'] = $request->cellx;
            $data['celly'] = $request->celly;
            $data['effect'] = $request->effect;

            $npcs->update($data);
            return redirect()->route('admin.npcs')->with([
                'message' => 'NPC updated successfully',
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
        Npc::where('id', '=', $id)->delete();
        return redirect()->route('admin.npcs')->with([
            'message' => 'NPC deleted successfully',
            'alert-type' => 'success',]);
    }
}
