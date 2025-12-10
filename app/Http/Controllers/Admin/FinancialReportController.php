<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\Delegate;
use App\Models\Account;
use App\Models\Admin;
use App\Models\Admin_panel_setting;

class FinancialReportController extends Controller
{
    public function supplier_account_mirror(Request $request)
    {
        $com_code = auth()->user()->com_code;
        $suppliers = get_cols_where(new Supplier(), array("*"), array("com_code" => $com_code), 'id', 'ASC');
        
        $data = [];
        $supplier_code = $request->supplier_code ?? null;
        
        if ($supplier_code != null && $supplier_code != "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_number', $supplier_code)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        } elseif ($supplier_code == "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_type', 2)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        }
        
        return view('admin.financial_reports.supplier_account_mirror', [
            'data' => $data,
            'suppliers' => $suppliers,
            'supplier_code' => $supplier_code
        ]);
    }

    public function customer_account_mirror(Request $request)
    {
        $com_code = auth()->user()->com_code;
        $customers = get_cols_where(new Customer(), array("*"), array("com_code" => $com_code), 'id', 'ASC');
        
        $data = [];
        $customer_code = $request->customer_code ?? null;
        
        if ($customer_code != null && $customer_code != "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_number', $customer_code)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        } elseif ($customer_code == "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_type', 3)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        }
        
        return view('admin.financial_reports.customer_account_mirror', [
            'data' => $data,
            'customers' => $customers,
            'customer_code' => $customer_code
        ]);
    }

    public function delegate_account_mirror(Request $request)
    {
        $com_code = auth()->user()->com_code;
        $delegates = get_cols_where(new Delegate(), array("*"), array("com_code" => $com_code), 'id', 'ASC');
        
        $data = [];
        $delegate_code = $request->delegate_code ?? null;
        
        if ($delegate_code != null && $delegate_code != "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_number', $delegate_code)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        } elseif ($delegate_code == "all") {
            $data = Account::where('com_code', $com_code)
                ->where('account_type', 4)
                ->orderBy('id', 'DESC')
                ->paginate(PAGINATION_COUNT);
        }
        
        return view('admin.financial_reports.delegate_account_mirror', [
            'data' => $data,
            'delegates' => $delegates,
            'delegate_code' => $delegate_code
        ]);
    }

    public function searchforcustomer(Request $request)
    {
        if ($request->ajax()) {
            $search_by_text = $request->search_by_text;
            $com_code = auth()->user()->com_code;
            
            if ($search_by_text == '') {
                $customers = get_cols_where(new Customer(), array("*"), array("com_code" => $com_code), 'id', 'ASC');
            } else {
                $customers = Customer::where('com_code', $com_code)
                    ->where(function($query) use ($search_by_text) {
                        $query->where('name', 'like', '%' . $search_by_text . '%')
                              ->orWhere('customer_code', 'like', '%' . $search_by_text . '%');
                    })
                    ->orderBy('id', 'ASC')
                    ->get();
            }
            
            return view('admin.financial_reports.ajax_search_customer', ['customers' => $customers]);
        }
    }
}
