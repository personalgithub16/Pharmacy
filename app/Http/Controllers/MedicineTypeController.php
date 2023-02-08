<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineType;
use Brian2694\Toastr\Facades\Toastr;

class MedicineTypeController extends Controller
{
    public function list()
    {
        //
        $MedicineTypeDetails = MedicineType::all();
        return view ('pages.Crud_Functions.Medicine_Type_Details.list',compact('MedicineTypeDetails'));
    }

   
    public function create()
    {
        //
        return view('pages.Crud_Functions.Medicine_Type_Details.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'medicine_type' => 'required|max:100|unique:medicine_types'
           
        ],[
            'medicine_type.required' => 'Please write the medicine type'
        ]);
        $MedicineTypeDetails = new MedicineType;
        $MedicineTypeDetails->medicine_type = $request->medicine_type;
        $MedicineTypeDetails->save();
        Toastr::success('success', 'Successfully added medicine type', ['
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
        ']);
        return redirect()->route('Medicine_Type_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $MedicineTypeDetails = MedicineType::find($id);
        return view('pages.Crud_Functions.Medicine_Type_Details.edit',compact('MedicineTypeDetails'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'medicine_type' => 'required|max:100',
           
        ],[
            'medicine_type.required' => 'Medicine Type name can not be blank.', 
        ]);
        $MedicineTypeDetails = MedicineType::find($id);
        $MedicineTypeDetails->medicine_type = $request->medicine_type;
        $MedicineTypeDetails->save();
        Toastr::success('success', 'Successfully updated medicine type', [' "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"']);
        return redirect()->route('Medicine_Type_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $MedicineTypeDetails = MedicineType::find($id);
        $MedicineTypeDetails->delete();
        Toastr::success('success', 'Successfully Deleted Medicine Type', [' "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"']);
        return redirect()->route('Medicine_Type_Details.list');
    }
}
