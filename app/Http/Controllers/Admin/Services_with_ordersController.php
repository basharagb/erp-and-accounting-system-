<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Admin_panel_setting;

class Services_with_ordersController extends Controller
{
    public function index()
    {
        return view('admin.services_orders.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.services_orders.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.Services_orders.index')->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function edit($id)
    {
        return view('admin.services_orders.edit');
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
        return view('admin.services_orders.ajax_search', ['data' => []]);
    }

    public function show($id)
    {
        return view('admin.services_orders.show');
    }

    public function load_modal_add_details(Request $request)
    {
        return '';
    }

    public function add_new_details(Request $request)
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

    public function printsaleswina4($id, $size)
    {
        return '';
    }
}
