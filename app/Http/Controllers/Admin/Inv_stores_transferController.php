<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv_stores_transferController extends Controller
{
    public function index()
    {
        return view('admin.inv_stores_transfer.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.inv_stores_transfer.create');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function edit($id)
    {
        return view('admin.inv_stores_transfer.edit');
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function ajax_search(Request $request)
    {
        return '';
    }

    public function show($id)
    {
        return view('admin.inv_stores_transfer.show');
    }

    public function get_item_uoms(Request $request)
    {
        return '';
    }

    public function load_modal_add_details(Request $request)
    {
        return '';
    }

    public function Add_item_to_invoice(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function reload_itemsdetials(Request $request)
    {
        return '';
    }

    public function reload_parent_pill(Request $request)
    {
        return '';
    }

    public function load_edit_item_details(Request $request)
    {
        return '';
    }

    public function edit_item_details(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete_details($id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function do_approve($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function get_item_batches(Request $request)
    {
        return '';
    }

    public function printsaleswina4($id, $size)
    {
        return '';
    }
}
