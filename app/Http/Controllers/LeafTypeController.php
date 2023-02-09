<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeafType;
use Brian2694\Toastr\Facades\Toastr;
class LeafTypeController extends Controller
{
   
    public function list()
    {
        //
        $LeafTypeDetails = LeafType::all();
        return view ('pages.Crud_Functions.LeafType_Details.list',compact('LeafTypeDetails'));
    }

    public function create()
    {
        //
        return view('pages.Crud_Functions.LeafType_Details.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'leaf_type' => 'required|max:100|unique:leaf_types',
            'total_number_per_box' => 'required|max:100'
           
        ],[
            'LeafType_name.required' => 'Please write the Leaf Type',
            'total_number_per_box.required' => 'This is a required field'
        ]);
        $LeafTypeDetails = new LeafType;
        $LeafTypeDetails->leaf_type = $request->leaf_type;
        $LeafTypeDetails->total_number_per_box = $request->total_number_per_box;
        $LeafTypeDetails->save();
        Toastr::success('success', 'Successfully added Leaf Type Details', ['"closeButton": true,
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
        return redirect()->route('LeafType_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $LeafTypeDetails = LeafType::find($id);
        return view('pages.Crud_Functions.LeafType_Details.edit',compact('LeafTypeDetails'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'leaf_type' => 'required|max:100|unique:leaf_types',
            'total_number_per_box' => 'required|max:100'
           
        ],[
            'LeafType_name.required' => 'LeafT ype can not be blank.', 
            'LeafType_name.required' => 'Total Number per box can not be blank.', 
        ]);
        $LeafTypeDetails = LeafType::find($id);
        $LeafTypeDetails->leaf_type = $request->leaf_type;
        $LeafTypeDetails->total_number_per_box = $request->total_number_per_box;
        $LeafTypeDetails->save();
        Toastr::success('success', 'Successfully updated Leaf Type Details', ['"closeButton": true,
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
        return redirect()->route('LeafType_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $LeafTypeDetails = LeafType::find($id);
        $LeafTypeDetails->delete();
        Toastr::success('success', 'Successfully Deleted Leaf Type Details', ['"closeButton": true,
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
        return redirect()->route('LeafType_Details.list');
    }
}
