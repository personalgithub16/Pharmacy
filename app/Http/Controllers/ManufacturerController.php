<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use DB;
use Brian2694\Toastr\Facades\Toastr;
class ManufacturerController extends Controller
{
    public function list()
    {
        $Manufacturer_Details = Manufacturer::all();
        $total_balance = DB::table("manufacturers")->get()->sum("total_debit");
        return view ('pages.Crud_Functions.Manufacturer_Details.list',compact('Manufacturer_Details','total_balance'));
    }
   
    public function create()
    {
        return view('pages.Crud_Functions.Manufacturer_Details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'manufacturer_name' => 'required|max:100',
            'agent_national_id_card' => 'required|max:100',
            'agent_mobile_number' => 'required|max:100',
        ],[
            'manufacturer_name.required' => 'Please write the manufacturer name', 
            'agent_national_id_card.required' => 'Please write the NID number of the agent', 
            'agent_mobile_number.required' => 'Please write the mobile number of the agent', 
        ]);
        $Manufacturer_Details = new Manufacturer;
        $Manufacturer_Details->manufacturer_name = $request->manufacturer_name;
        $Manufacturer_Details->agent_national_id_card = $request->agent_national_id_card;
        $Manufacturer_Details->agent_mobile_number = $request->agent_mobile_number;
        $Manufacturer_Details->debit_balance = $request->debit_balance;
        $Manufacturer_Details->save();
        Toastr::success('success', 'Successfully added manufacturer informations', ['"closeButton": true,
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
        return redirect()->route('Manufacturer_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $Manufacturer_Details = Manufacturer::find($id);
        return view('pages.Crud_Functions.Manufacturer_Details.edit',compact('Manufacturer_Details'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'manufacturer_name' => 'required|max:100',
            'agent_national_id_card' => 'required|max:100',
            'agent_mobile_number' => 'required|max:100',
        ],[
            'manufacturer_name.required' => 'Please write the manufacturer name', 
            'agent_national_id_card.required' => 'Please write the NID number of the agent', 
            'agent_mobile_number.required' => 'Please write the mobile number of the agent', 
        ]);
        $Manufacturer_Details = Manufacturer::find($id);
        $Manufacturer_Details->manufacturer_name = $request->manufacturer_name;
        $Manufacturer_Details->agent_national_id_card = $request->agent_national_id_card;
        $Manufacturer_Details->agent_mobile_number = $request->agent_mobile_number;
        $Manufacturer_Details->debit_balance = $request->debit_balance;
        $Manufacturer_Details->save();
        Toastr::success('success', 'Successfully updated Manufacturer informations', ['"closeButton": true,
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
        return redirect()->route('Manufacturer_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $Manufacturer_Details = Manufacturer::find($id);
        $Manufacturer_Details->delete();
        Toastr::success('success', 'Successfully Deleted Manufacturer information', ['"closeButton": true,
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
        return redirect()->route('Manufacturer_Details.list');
    }
    
    public function preview($id)
    {
        $Manufacturer_Details = Manufacturer::find($id);
        $total_balance = DB::select(DB::raw("
        SELECT manufacturer_name, SUM(debit_balance) as total_debit FROM manufacturers GROUP BY manufacturer_name;
        "));
        return view('pages.Crud_Functions.Manufacturer_Details.preview',compact('Manufacturer_Details','total_balance'));
    }
}
