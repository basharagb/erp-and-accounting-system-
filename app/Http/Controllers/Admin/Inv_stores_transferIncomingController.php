<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv_stores_transferIncomingController extends Controller
{
    public function index()
    {
        return view('admin.inv_stores_transfer_incoming.index', ['data' => []]);
    }

    public function ajax_search(Request $request)
    {
        return '';
    }

    public function show($id)
    {
        return view('admin.inv_stores_transfer_incoming.show');
    }

    public function printsaleswina4($id, $size)
    {
        return '';
    }

    public function approve_one_details($id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function cancel_one_details($id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function load_cancel_one_details(Request $request)
    {
        return '';
    }

    public function do_cancel_one_details(Request $request, $id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }
}
