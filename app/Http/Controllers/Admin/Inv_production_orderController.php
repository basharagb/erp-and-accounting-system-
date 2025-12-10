<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Inv_production_orderController extends Controller
{
    public function index()
    {
        return view('admin.inv_production_order.index', ['data' => []]);
    }

    public function create()
    {
        return view('admin.inv_production_order.create');
    }

    public function store(Request $request)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function edit($id)
    {
        return view('admin.inv_production_order.edit');
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

    public function show_more_detials(Request $request)
    {
        return '';
    }

    public function do_approve($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }

    public function do_closes_archive($id)
    {
        return redirect()->back()->with(['error' => 'هذه الميزة قيد التطوير']);
    }
}
