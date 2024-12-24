<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LabTest;
use App\Models\LabTestCategory;
use App\Models\TestFormat;
use Illuminate\Http\Request;
use Mockery\Undefined;

use function PHPUnit\Framework\isEmpty;

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
        if (!$labTest) {
            return redirect()->back();
        }
        // dd($labTest);
        return redirect('/test/list')->with('success', 'Remove Successfuly.');
    }

    public function createFormat($id)
    {
        // dd($id);
        $test_id = $id;
        $test_formats = TestFormat::where('test_id', $id)->get();
        if ($test_formats->Count() > 0) {
            // dd($test_formats);
            return view('admin.lab-tests.test-format', compact('test_formats', 'test_id'));
        } else {
            // dd('not found');
            return view('admin.lab-tests.test-format', compact('test_id'));
        }
    }


    public function storeFormat(Request $request)
    {
        // Get All Show Input Values
        $items = $request->items;

        //    Get Test Id
        $test_id = $request->test_id;

        // Get All Deleted Values
        $deletedValues = $request->deleted_id;

        foreach ($deletedValues as $value) {
            if ($value != 'undefined' && $value != null) {
                TestFormat::where('id', $value)->delete();
            }
            // dd($deletedValues);
        }


        foreach ($items as $item) {

            if ($item['id']) {
                // Update Data
                TestFormat::where('id', $item['id'])
                    ->update([
                        'key' => $item['key'],
                        'type' => $item['type'],
                        'unit' => $item['unit'],
                        'value' => $item['value'],
                        'order' => $item['order'],
                    ]);
            } else {
                // New Entry
                $add_format = new TestFormat;
                $add_format['test_id'] = $test_id;
                $add_format['key'] = $item['key'];
                $add_format['type'] = $item['type'];
                $add_format['unit'] = $item['unit'];
                $add_format['value'] = $item['value'];
                $add_format['order'] = $item['order'];
                $add_format->save();
            }
        }

        return redirect('/test/list')->with('success', 'Test Format Successfuly.');
    }

    // public function show(Request $request)
    // {
    //     // $test_formats = TestFormat::get();

    //     // dd($request->items);
    //     // $items = $request->items;

    //     // dd($items[0]['key']);
    //     // foreach ($items as $index => $item) {

    //     //     echo $index ;
    //     //     echo $item['key']; // Add space after each array
    //     // }
    //     // return view('admin.lab-tests.report-format', compact('test_formats'));
    // }
}
