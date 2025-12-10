<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv_stores_inventoryController extends Controller
{
    public function index()
    {
        return view('admin.stores_inventory.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.stores_inventory.create');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function edit($id)
    {
        return view('admin.stores_inventory.edit');
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
        return view('admin.stores_inventory.show');
    }

    public function add_new_details(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function load_edit_item_details(Request $request)
    {
        return '';
    }

    public function edit_item_details(Request $request, $id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete_details($id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function close_one_details($id, $id_parent)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function do_close_parent($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function printsaleswina4($id, $size)
    {
        return '';
    }
}
