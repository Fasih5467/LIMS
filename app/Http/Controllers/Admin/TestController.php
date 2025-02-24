<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LabTest;
use App\Models\LabTestCategory;
use App\Models\TestFormat;
use Illuminate\Http\Request;
use Mockery\Undefined;
use PDF;

use Dompdf\Dompdf;
use Dompdf\Options;

use function PHPUnit\Framework\isEmpty;

class TestController extends Controller
{
    public function index()
    {
        $labTests = LabTest::leftJoin('lab_test_categories as c', 'lab_tests.category_id', '=', 'c.id')
            ->select('c.name as category_name', 'lab_tests.*')
            ->orderBy('lab_tests.id', 'desc')
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
        $lab_test = LabTest::where('id', $test_id)->first();
        // dd($lab_test);
        $test_formats = TestFormat::where('test_id', $id)->get();
        if ($test_formats->Count() > 0) {
            // dd($test_formats);
            return view('admin.lab-tests.test-format', compact('lab_test', 'test_formats', 'test_id'));
        } else {
            // dd('not found');
            return view('admin.lab-tests.test-format', compact('lab_test', 'test_id'));
        }
    }


    public function storeFormat(Request $request)
    {
        // dd($request);
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
                        'description' => $item['description'],
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
                $add_format['description'] = $item['description'];
                $add_format->save();
               }
           }

        return redirect('/test/list')->with('success', 'Test Format Successfuly.');
    }

    public function deleteFormat($id) {
            //    dd($id);
              $deleteRows = TestFormat::where('test_id',$id)->delete();

              if($deleteRows > 0){
                return redirect('/test/list')->with('success','All fields are delete...');
              } else {
                return redirect()->back()->with('error','Fields already delete...');
              }
    }

    public function view_test_format($test_id)
    {

        if (!$test_id) {
            return;
        }

        $data['test_format'] = TestFormat::where('test_id', $test_id)->get();

        if ($data['test_format']->isEmpty()) {
            return;
        }

        $pdf = $this->generatePdfFormat($data);
        $pdfContent = $pdf->output();
        return response($pdfContent, 200)->header('Content-Type', 'application/pdf');
    }

    private function generatePdfFormat($data)
    {

        $pdfView = view('test.pdf_format_view', $data);
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($pdfView->render());
        $dompdf->render();

        return $dompdf;
    }
}
