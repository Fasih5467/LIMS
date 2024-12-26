@extends('admin.master')
@section('content')

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
            <form action="{{url('patient/result/store')}}" method="post" id="form-id" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-3">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Result</h5>
                                  <input type="hidden" name="patient_id" value="{{$patient_id}}">
                                  <input type="hidden" name="patient_record_id" value="{{$id}}">
                                     <div class="w-full max-w-md p-4 bg-white rounded shadow-md">
                                        @foreach($test_format as $format)
                                        @continue($format->type == 'heading')
                                    <div class="flex space-x-4">
                                    
                                    <input 
                                        type="text" 
                                        placeholder=""
                                        class="input m-2 w-1/2 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        value="{{$format->key}}"
                                        disabled
                                    />
                                    <input 
                                        type="hidden" 
                                        name="keys[]" 
                                        value="{{ $format->id }}"
                                    />
                                    <input 
                                        type="text" 
                                        placeholder="Enter Result"
                                        class="input m-2 w-1/2 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                                        name="results[]" 
                                    />

                                    </div>

                                    @endforeach
                                </div>
                                <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Submit</button>

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

@section('scripts')

@endsection