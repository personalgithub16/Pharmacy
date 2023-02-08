<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineUnit;
use Brian2694\Toastr\Facades\Toastr;
class UnitController extends Controller
{
    public function list()
    {
        //
        $unitDetails = MedicineUnit::all();
        return view ('pages.Crud_Functions.Unit_Details.list',compact('unitDetails'));
    }

   
    public function create()
    {
        //
        return view('pages.Crud_Functions.Unit_Details.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'unit_name' => 'required|max:100|unique:medicine_units'
           
        ],[
            'unit_name.required' => 'Please write the unit name'
        ]);
        $unitDetails = new MedicineUnit;
        $unitDetails->unit_name = $request->unit_name;
        $unitDetails->save();
        Toastr::success('success', 'Successfully added unit', ['"closeButton": true,
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
        return redirect()->route('Unit_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $unitDetails = MedicineUnit::find($id);
        return view('pages.Crud_Functions.Unit_Details.edit',compact('unitDetails'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'unit_name' => 'required|max:100',
           
        ],[
            'unit_name.required' => 'Unit name can not be blank.', 
        ]);
        $unitDetails = MedicineUnit::find($id);
        $unitDetails->unit_name = $request->unit_name;
        $unitDetails->save();
        Toastr::success('success', 'Successfully updated unit name', ['"closeButton": true,
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
        return redirect()->route('Unit_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $unitDetails = MedicineUnit::find($id);
        $unitDetails->delete();
        Toastr::success('success', 'Successfully Deleted Unit Name', ['"closeButton": true,
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
        return redirect()->route('Unit_Details.list');
    }
}
