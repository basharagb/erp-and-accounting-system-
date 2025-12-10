<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permission_sub_menuesController extends Controller
{
    public function index()
    {
        return view('admin.permission_sub_menues.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.permission_sub_menues.create');
    }

    public function edit($id)
    {
        return view('admin.permission_sub_menues.edit');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function ajax_search(Request $request)
    {
        return '';
    }

    public function ajax_do_add_permission(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function ajax_load_edit_permission(Request $request)
    {
        return '';
    }

    public function ajax_do_edit_permission(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function ajax_do_delete_permission(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }
}
