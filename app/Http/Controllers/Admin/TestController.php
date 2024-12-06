<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\TestCategory;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::leftJoin('test_categories as c','tests.category_id','=','c.id')
                ->select('c.name as category_name','tests.*')
                ->get();
        return view('admin.lab-tests.list',compact('tests'));
    }

    public function create()
    {
        $categories = TestCategory::get();
        return view('admin.lab-tests.create',compact('categories'));
    }

    // Data store in DB
    public function store(Request $request)
    {
        $request->validate([
            'Tname' => 'required',
            'price' => 'required',
            'category' => 'required',
            'keyword' => 'required',
            'duration' => 'required',
        ]);
        // dd($request);
        $test = new Test;
        $test->name = $request->Tname;
        $test->price = $request->price;
        $test->category_id = $request->category;
        $test->keyword = $request->keyword;
        $test->duration = $request->duration;
        $test->save();

        return redirect('/test/list')->with('success', 'Test Add Successfuly.');

        // return view('admin.lab-tests.create');
    }

    public function edit($id)
    {
        $test = Test::find($id);
        $categories = TestCategory::get();
        return view('admin.lab-tests.edit',compact('test','categories'));
    }

    public function update(Request $request){
        $request->validate([
            'Tname' => 'required',
            'price' => 'required',
            'category' => 'required',
            'keyword' => 'required',
            'duration' => 'required',
        ]);

        $id = $request->id;

        Test::where('id',$id)
        ->update([
            'name' => $request->Tname,
            'price' => $request->price,
            'category_id' => $request->category,
            'keyword' => $request->keyword,
            'duration' => $request->duration,
        ]);

       return redirect('/test/list')->with('success','Test Edit Successfuly.');

    }

    public function delete($id)
    {
        $test = Test::where('id',$id)->delete();
        // dd($test);
        return redirect('/test/list')->with('success','Remove Successfuly.');
    }
}
