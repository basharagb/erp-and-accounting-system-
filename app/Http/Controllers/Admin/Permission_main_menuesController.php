<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Permission_main_menuesController extends Controller
{
    public function index()
    {
        return view('admin.permission_main_menues.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.permission_main_menues.create');
    }

    public function edit($id)
    {
        return view('admin.permission_main_menues.edit');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function update(Request $request, $id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function delete($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }
}
