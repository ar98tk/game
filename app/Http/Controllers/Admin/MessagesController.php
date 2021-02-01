<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\MessagesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(MessagesDataTable $dataTable)
    {
        return $dataTable->render('admin.messages.messages');
    }

    public function show($id)
    {
        $messages = Contact::whereId($id)->first();
        if ($messages && $messages->status == 'Unread') {
            $messages->status = 'Read';
            $messages->save();
        }
        return view('admin.messages.show', compact('messages'));
    }

    public function destroy($id)
    {
        Contact::where('id', '=', $id)->delete();
        return redirect()->back()->with([
        'message' => 'Message deleted successfully',
        'alert-type' => 'success',]);
    }
}
