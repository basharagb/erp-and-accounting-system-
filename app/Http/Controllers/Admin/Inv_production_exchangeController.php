<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv_production_exchangeController extends Controller
{
    public function index()
    {
        return view('admin.inv_production_exchange.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.inv_production_exchange.create');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function edit($id)
    {
        return view('admin.inv_production_exchange.edit');
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
        return view('admin.inv_production_exchange.show');
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

    public function do_approve(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function load_modal_approve_invoice(Request $request)
    {
        return '';
    }

    public function load_usershiftDiv(Request $request)
    {
        return '';
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
