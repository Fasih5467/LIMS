@extends('admin.master')
@section('content')

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
            @include('alertmessage.flash-message')
            <form action="{{url('patient/result/update')}}" method="post" id="form-id" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-3">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Result</h5>

                                    <div class="w-full max-w-md p-4 bg-white rounded shadow-md">
                                        @foreach($records as $record)
                                        @continue($record->type == 'heading')
                                        @continue($record->key == null)
                                        <div class="flex space-x-4">

                                            <input
                                                type="text"
                                                placeholder=""
                                                class="input m-2 w-1/2 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                                                value="{{$record->key}}"
                                                disabled />
                                            <input
                                                type="hidden"
                                                name="keys[]"
                                                value="{{ $record->test_format_id }}" />
                                            <input
                                                type="hidden"
                                                name="patient_id"
                                                value="{{ $record->id }}" />
                                            <input
                                                type="text"
                                                placeholder="Enter Result"
                                                class="input m-2 w-1/2 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                                                name="results[]"
                                                value="{{ $record->result }}" />

                                        </div>

                                        @endforeach

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4 mx-2">
                                            <div class="col-span-1">
                                                <label class="form-label mb-2">Remark</label>
                                                <select class="input capitalize" id="select-remarks">
                                                    @foreach($remarks as $remark)
                                                    <option class="capitalize" value="{{ $remark->name }}">{{ $remark->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-span-1">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align:start">Selected Remarks</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="show-select-remarks">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                    <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/patient/list') }}">Discard</a>
                                    <button class="btn btn-solid btn-sm" type="submit" id="btn-save">
                                        <span class="flex items-center justify-center">
                                            <span class="ltr:ml-1 rtl:mr-1">Save</span>
                                        </span>
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</main>
<!-- Content end -->

@endsection

<script>
    let selectRemarks = [];
</script>
@if($records[0]->remark != null)
<script>
    selectRemarks = <?php echo $records[0]->remark ?>
</script>
@endif

@section('scripts')
<script>
    console.log(selectRemarks)

    showRemarks();

    document.addEventListener('DOMContentLoaded', function() {
        // Save Btn
        document.getElementById('btn-save').addEventListener('click', function() {
            console.log('button')
            this.disabled = true; // Disable the button
            document.getElementById('form-id').submit(); // Submit the form
        });
    });


    document.getElementById('select-remarks').addEventListener('change', function() {

        let check = selectRemarks.find(item => item == this.value)
        if(!check){
        selectRemarks.push(this.value);
        showRemarks();
        }
        // console.log(selectRemarks);
    })



    function showRemarks() {
        let remarks = document.getElementById('show-select-remarks')

        remarks.innerHTML = '';
        selectRemarks.forEach((item, index) => {
            remarks.innerHTML += `<tr>
                                                            <td class='w-[300px] py-4'>${item}</td>
                                                            <td>
                                                                <span class="cursor-pointer hover:text-red-500">
                                                                    <button onclick='deleted(${index})'>
                                                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                        </svg>
                                                                        </a>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                         <input type="hidden" name="remark[]" value="${item}"/>`;
        })

    }

    function deleted(index) {
        selectRemarks.splice(index, 1);
        showRemarks();
    }
</script>
@endsection