<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TestCategory;
use Illuminate\Http\Request;

class TestCategoryController extends Controller
{
      public function index()
        {
            $testCategories = TestCategory::get();
            return view('admin.test-category.list',compact('testCategories'));
        }
    
        public function create()
        {
            return view('admin.test-category.create');
        }
    
        // Data store in DB
        public function store(Request $request)
        {
            $request->validate([
                'category' => 'required',
            ]);
            // dd($request);
            $testCategory = new TestCategory;
            $testCategory->name = $request->category;
            $testCategory->save();
    
            return redirect('/test/category/list')->with('success', 'Test Add Successfuly.');
        }
    
        public function edit($id)
        {
            $testCategory = TestCategory::find($id);
            // dd($test);
            return view('admin.test-category.edit',compact('testCategory'));
        }
    
        public function update(Request $request){
            $request->validate([
                'category' => 'required',
            ]);
    
            $id = $request->id;
    
            TestCategory::where('id',$id)
            ->update([
                'name' => $request->category,
            ]);
    
           return redirect('/test/category/list')->with('success','Test Edit Successfuly.');
    
        }
    
        public function delete($id)
        {
            TestCategory::where('id',$id)->delete();
            // dd($test);
            return redirect('/test/category/list')->with('success','Remove Successfuly.');
        }

}
