<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permission_rolesController extends Controller
{
    public function index()
    {
        return view('admin.permission_roles.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.permission_roles.create');
    }

    public function edit($id)
    {
        return view('admin.permission_roles.edit');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function details($id)
    {
        return view('admin.permission_roles.details');
    }

    public function Add_permission_main_menues(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete_permission_main_menues($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function load_add_permission_roles_sub_menu(Request $request)
    {
        return '';
    }

    public function add_permission_roles_sub_menu(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete_permission_sub_menues($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function load_add_permission_roles_sub_menues_actions(Request $request)
    {
        return '';
    }

    public function add_permission_roles_sub_menues_actions(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete_permission_sub_menues_actions($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }
}
