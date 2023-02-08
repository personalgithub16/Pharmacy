<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class CustomerController extends Controller
{
    
    public function list()
    {
        //
        $Customer_Details = customer::all();
        $total_balance = DB::table("customers")->get()->sum("total_debit");
        return view ('pages.Crud_Functions.Customer_Details.list',compact('Customer_Details','total_balance'));
    }

   
    public function create()
    {
        //
        return view('pages.Crud_Functions.Customer_Details.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|max:100|unique:customers',
            'customer_email_address' => 'required|max:100|unique:customers',
            'phone_number' => 'required|max:100|unique:customers',
            'national_id_card' => 'required|max:100|unique:customers',
            'birth_certificate' => 'required|max:100|unique:customers',
           
        ],[
            'customer_name.required' => 'Please write the customer name', 
            'customer_name.unique' => 'Customer Name already exists in the database', 

            'customer_email_address.required' => 'Please write the customer email adddress', 
            'customer_email_address.unique' => 'Customer email address should be unique', 

            'phone_number.required' => 'Please write the customer phone number', 
            'phone_number.unique' => 'Customer phone number should be unique', 

            'national_id_card.required' => 'Please write the national id card number', 

            'birth_certificate.required' => 'Please write the birth certificate number of the customer', 
        ]);
        $Customer_Details = new customer;
        $Customer_Details->customer_name = $request->customer_name;
        $Customer_Details->customer_email_address = $request->customer_email_address;
        $Customer_Details->phone_number = $request->phone_number;
        $Customer_Details->national_id_card = $request->national_id_card;
        $Customer_Details->birth_certificate = $request->birth_certificate;
        $Customer_Details->address = $request->address;
        $Customer_Details->city = $request->city;
        $Customer_Details->country = $request->country;
        $Customer_Details->mobile_number = $request->mobile_number;
        $Customer_Details->zipcode = $request->zipcode;
        $Customer_Details->debit_balance = $request->debit_balance;
        $Customer_Details->save();
        Toastr::success('success', 'Successfully added customer informations', ['"closeButton": true,
        "debug": false,
        "newestOnBottom": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"']);
        return redirect()->route('Customer_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $Customer_Details = customer::find($id);
        return view('pages.Crud_Functions.Customer_Details.edit',compact('Customer_Details'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_name' => 'required|max:100',
            'customer_email_address' => 'required|max:100',
            'phone_number' => 'required|max:100',
            'national_id_card' => 'required|max:100',
            'birth_certificate' => 'required|max:100',
           
        ],[
            'customer_name.required' => 'Customer Name is required', 
            'customer_name.unique' => 'Customer Name already exists in the database', 

            'customer_email_address.required' => 'Email Address Field is required', 
            'customer_email_address.unique' => 'Customer email address should be unique', 

            'phone_number.required' => 'Phone Number field is required', 
            'phone_number.unique' => 'Customer phone number should be unique', 

            'national_id_card.required' => 'National Id Card Field is required', 

            'birth_certificate.required' => 'Birth Certificate field is required', 
        ]);
        $Customer_Details = customer::find($id);
        $Customer_Details->customer_name = $request->customer_name;
        $Customer_Details->customer_email_address = $request->customer_email_address;
        $Customer_Details->phone_number = $request->phone_number;
        $Customer_Details->national_id_card = $request->national_id_card;
        $Customer_Details->birth_certificate = $request->birth_certificate;
        $Customer_Details->address = $request->address;
        $Customer_Details->city = $request->city;
        $Customer_Details->country = $request->country;
        $Customer_Details->mobile_number = $request->mobile_number;
        $Customer_Details->zipcode = $request->zipcode;
        $Customer_Details->debit_balance = $request->debit_balance;
        $Customer_Details->save();
        Toastr::success('success', 'Successfully updated customer informations', ['"closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"']);
        return redirect()->route('Customer_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $Customer_Details = customer::find($id);
        $Customer_Details->delete();
        Toastr::success('success', 'Successfully Deleted customer information', ['"closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"']);
        return redirect()->route('Customer_Details.list');
    }
    public function preview($id)
    {
        $Customer_Details = customer::find($id);
        return view('pages.Crud_Functions.Customer_Details.preview',compact('Customer_Details'));
    }


}
