<?php

namespace Larashop\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /* public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:customers',
            'postal_address' => 'required',
            'physical_address' => 'required',
        ]);
        
        $customer = Customer::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'postal_address' => $request->input('postal_address'),
            'physical_address' => $request->input('physical_address'),
        ]);
        
        return redirect()->route('customers.index')->with('success', "The customer <strong>$customer->first_name</strong> has successfully been created.");
    } */
}
