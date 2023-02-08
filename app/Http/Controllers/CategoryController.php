<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
class CategoryController extends Controller
{
    public function list()
    {
        //
        $CategoryDetails = Category::all();
        return view ('pages.Crud_Functions.Category_Details.list',compact('CategoryDetails'));
    }

   
    public function create()
    {
        //
        return view('pages.Crud_Functions.Category_Details.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|max:100|unique:categories'
           
        ],[
            'category_name.required' => 'Please write the category name'
        ]);
        $CategoryDetails = new Category;
        $CategoryDetails->category_name = $request->category_name;
        $CategoryDetails->save();
        Toastr::success('success', 'Successfully added category', ['"closeButton": true,
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
        return redirect()->route('Category_Details.list'); // redirect to create page with a success message.
    }

    public function edit($id)
    {
        //
        $CategoryDetails = Category::find($id);
        return view('pages.Crud_Functions.Category_Details.edit',compact('CategoryDetails'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|max:100',
           
        ],[
            'category_name.required' => 'Category name can not be blank.', 
        ]);
        $CategoryDetails = Category::find($id);
        $CategoryDetails->category_name = $request->category_name;
        $CategoryDetails->save();
        Toastr::success('success', 'Successfully updated category name', ['"closeButton": true,
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
        return redirect()->route('Category_Details.list');
    }
    
    public function destroy(Request $request, $id)
    {
        $CategoryDetails = Category::find($id);
        $CategoryDetails->delete();
        Toastr::success('success', 'Successfully Deleted Category Name', ['"closeButton": true,
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
        return redirect()->route('Category_Details.list');
    }
}
