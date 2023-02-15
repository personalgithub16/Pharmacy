<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\LeafType;
use App\Models\MedicineType;
use App\Models\MedicineUnit;
use App\Models\Manufacturer;
use App\Models\Medicine;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
class MedicineController extends Controller
{
    public function list()
    {
        //
        $Medicine_Details = Medicine::all();
        return view ('pages.Crud_Functions.Medicine_Details.list',compact('Medicine_Details'));
    }

    public function create()
    {
        //
        $categorylist = Category::all();
        $medicine_type_list = MedicineType::all();
        $medicine_unit_list = MedicineUnit::all();
        $manufacturer_list = Manufacturer::all();
        $leaftype_list = LeafType::all();
        return view('pages.Crud_Functions.Medicine_Details.create',compact(
            'categorylist',
            'medicine_type_list',
            'medicine_unit_list',
            'manufacturer_list',
            'leaftype_list'));
    }
       
    public function store(Request $request)
    {
        $request->validate([
            'bar_code' => 'required|max:100|unique:medicines',
            'medicine_name' => 'required|max:100',
            'generic_name' => 'required|max:100',
            'vat' => 'required',
            'expire_date_of_the_medicine' => 'required',
            'medicine_details' => 'required',
            'medicine_selling_price' => 'required',
            'medicine_manufacturer_price' => 'required',
            'category_id' => 'required',
            'medicine_type_id' => 'required',
            'manufacturer_id' => 'required',
            'leaftype_id' => 'required',
            'unit_id' => 'required',
        ],[
            'bar_code.required' => 'Please write the bar code of the medicine', 
            'bar_code.unique' => 'Bar Code is unique. You can not write same barcode again.', 

            'medicine_name.required' => 'Medicine Name field can not be empty', 
            'generic_name.required' => 'Generic Name field can not be empty', 

            'vat.required' => 'Please write VAT amount', 
            'expire_date_of_the_medicine.unique' => 'Expire Date field of the medicine can not be empty', 

            'medicine_details.required' => 'Please write medicine details', 
            'medicine_selling_price.required' => 'Please write medicine selling price', 

            'medicine_manufacturer_price.required' => 'Please write medicine manufacturer price',

            'category_id' => 'Category is required',
            'medicine_type_id' => 'Medicine Type is required',

            'manufacturer_id' => 'Manufacturer company name is required',
            'leaftype_id' => 'Leaf Type is required',
            'unit_id' => 'Unit is required',
        ]);
        
        $Medicine_Details = new Medicine;
        $Medicine_Details->bar_code = $request->bar_code;
        $Medicine_Details->medicine_name = $request->medicine_name;
        $Medicine_Details->generic_name = $request->generic_name;
        $Medicine_Details->vat = $request->vat;
        $Medicine_Details->expire_date_of_the_medicine = Carbon::parse($request->expire_date_of_the_medicine);
        $Medicine_Details->medicine_details = $request->medicine_details;
        $Medicine_Details->medicine_selling_price = $request->medicine_selling_price;
        $Medicine_Details->medicine_manufacturer_price = $request->medicine_manufacturer_price;
        $Medicine_Details->category_id = $request->category_id;
        $Medicine_Details->medicine_type_id = $request->medicine_type_id;
        $Medicine_Details->manufacturer_id = $request->manufacturer_id;
        $Medicine_Details->leaftype_id = $request->leaftype_id;
        $Medicine_Details->unit_id = $request->unit_id;
        $Medicine_Details->save();
        Toastr::success('success', 'Successfully added Medicine informations', ['"closeButton": true,
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
        return redirect()->route('Medicine_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $categorylist = Category::all();
        $medicine_type_list = MedicineType::all();
        $medicine_unit_list = MedicineUnit::all();
        $manufacturer_list = Manufacturer::all();
        $leaftype_list = LeafType::all();
        $Medicine_Details = Medicine::find($id);
        return view('pages.Crud_Functions.Medicine_Details.edit',compact(
            'Medicine_Details',
            'categorylist',
            'medicine_type_list',
            'medicine_unit_list',
            'manufacturer_list',
            'leaftype_list',));
    }

    public function update(Request $request, $id)
    {
        $Medicine_Details = Medicine::find($id);
        $Medicine_Details->bar_code = $request->bar_code;
        $Medicine_Details->medicine_name = $request->medicine_name;
        $Medicine_Details->generic_name = $request->generic_name;
        $Medicine_Details->vat = $request->vat;
        $Medicine_Details->expire_date_of_the_medicine = Carbon::parse($request->expire_date_of_the_medicine);
        $Medicine_Details->medicine_details = $request->medicine_details;
        $Medicine_Details->medicine_selling_price = $request->medicine_selling_price;
        $Medicine_Details->medicine_manufacturer_price = $request->medicine_manufacturer_price;
        $Medicine_Details->category_id = $request->category_id;
        $Medicine_Details->medicine_type_id = $request->medicine_type_id;
        $Medicine_Details->manufacturer_id = $request->manufacturer_id;
        $Medicine_Details->leaftype_id = $request->leaftype_id;
        $Medicine_Details->unit_id = $request->unit_id;
        $Medicine_Details->save();
        Toastr::success('success', 'Successfully updated Medicine informations', ['"closeButton": true,
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
        return redirect()->route('Medicine_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $Medicine_Details = Medicine::find($id);
        $Medicine_Details->delete();
        Toastr::success('success', 'Successfully Deleted Medicine information', ['"closeButton": true,
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
        return redirect()->route('Medicine_Details.list');
    }
    
    public function preview($id)
    {
        $categorylist = Category::all();
        $medicine_type_list = MedicineType::all();
        $medicine_unit_list = MedicineUnit::all();
        $manufacturer_list = Manufacturer::all();
        $leaftype_list = LeafType::all();
        $Medicine_Details = Medicine::find($id);
        return view('pages.Crud_Functions.Medicine_Details.preview',compact('Medicine_Details','categorylist'));
    }
    public function status(Request $request)
    {
        $Medicine_Details = Medicine::find($request->medicine_id);
        $Medicine_Details->status = $request->status;
        $Medicine_Details->save(); 
        return redirect()->route('Medicine_Details.list')->with('success',"Slider Activated Successfully");

    }
}
