<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomersController extends Controller
{
    public function index(){
        $getCustomers = Customers::all();
        return view('customers.customers', compact('getCustomers'));
    }
    
    public function destroy($id){
        
        $getCustomers = Customers::find($id);
        $getCustomers->delete();
        return redirect()->back();
    }

}
