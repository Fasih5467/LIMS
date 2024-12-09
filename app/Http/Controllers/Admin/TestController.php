<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LabTest;
use App\Models\LabTestCategory;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $labTests = LabTest::leftJoin('lab_test_categories as c', 'lab_tests.category_id', '=', 'c.id')
            ->select('c.name as category_name', 'lab_tests.*')
            ->get();
        return view('admin.lab-tests.list', compact('labTests'));
    }

    public function create()
    {
        $categories = LabTestCategory::get();
        return view('admin.lab-tests.create', compact('categories'));
    }

    // Data store in DB
    public function store(Request $request)
    {
        $request->validate([
            'Tname' => 'required',
            'price' => 'required|max:5',
            'category' => 'required',
            'keyword' => 'required',
            'duration' => 'required|max:2',
        ]);
        // dd($request);
        $labTest = new LabTest;
        $labTest->name = $request->Tname;
        $labTest->price = $request->price;
        $labTest->category_id = $request->category;
        $labTest->keyword = $request->keyword;
        $labTest->duration = $request->duration;
        $labTest->save();

        return redirect('/test/list')->with('success', 'Test Add Successfuly.');
    }

    public function edit($id)
    {
        $labTest = LabTest::with('category')
            ->where('lab_tests.id', $id)
            ->first();

            // dd($labTest->category_id);
        
        $categories = LabTestCategory::get();
        return view('admin.lab-tests.edit', compact('labTest', 'categories'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'Tname' => 'required',
            'price' => 'required|max:5',
            'category' => 'required',
            'keyword' => 'required',
            'duration' => 'required|max:2',
        ]);

        $id = $request->id;

        LabTest::where('id', $id)
            ->update([
                'name' => $request->Tname,
                'price' => $request->price,
                'category_id' => $request->category,
                'keyword' => $request->keyword,
                'duration' => $request->duration,
            ]);

        return redirect('/test/list')->with('success', 'Test Edit Successfuly.');
    }

    public function delete($id)
    {
        $labTest = LabTest::where('id', $id)->delete();
        // dd($labTest);
        return redirect('/test/list')->with('success', 'Remove Successfuly.');
    }
}
