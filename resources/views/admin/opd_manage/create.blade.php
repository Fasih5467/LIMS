@extends('admin.master')
@section('content')
<style>
    .input-dropdown-dis {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .input-dis {
        font-size: 14px;
        /* box-sizing: border-box; */
    }

    .dropdown-dis {
        height: 20px;
        /* Matches input field height */
        padding: 0 5px;
        font-size: 10px;
        cursor: pointer;
    }


    /* Select2 main container height */
    .select2-container .select2-selection {
        height: 45px;
        /* Increase height */
        line-height: 50px;
        /* Align text vertically */
    }

    /* Adjust the dropdown arrow position */
    .select2-container .select2-selection__arrow {
        height: 50px;
        top: 50%;
        /* Vertically align the arrow */
        transform: translateY(-50%);
    }

    /* Adjust placeholder or text alignment */
    .select2-container .select2-selection__rendered {
        line-height: 50px;
        /* Align placeholder text */
    }
</style>
<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:90%;">
            <form action="{{url('/opd/store')}}" method="post" id="form-id" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-2">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>ADD NEW</h5>
                                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Patient Name</label>
                                                @if(session('patients'))
                                                @php
                                                $patients = session('patients');
                                                @endphp
                                                <select class="input" id="prePatient">
                                                    <option>Select Patient</option>
                                                    @foreach($patients as $patient)
                                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                                    @endforeach
                                                    <option value="new">Add New</option>
                                                </select>
                                                <!-- <div class="" id="newPatient"> -->
                                                <input
                                                    class="input"
                                                    type="hidden"
                                                    name="name"
                                                    id="newPatient"
                                                    autocomplete="off"
                                                    placeholder="Name">
                                                <!-- </div> -->
                                                @else
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="name"
                                                        value="{{old('name')}}"
                                                        autocomplete="off"
                                                        placeholder="Name">
                                                </div>
                                                @endif
                                                @error('name')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                @include('alertmessage.flash-message')

                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="grid grid-cols-2 md:grid-cols-2 gap-4">
                                                <div class="col-span-1">
                                                    <div class="form-item vertical">
                                                        <label class="form-label">Contact</label>
                                                        <div>
                                                            <span class="input-wrapper undefined">
                                                                <input
                                                                    class="input"
                                                                    type="number"
                                                                    name="contact"
                                                                    autocomplete="off"
                                                                    placeholder="03XX-XXXXXXX"
                                                                    value="{{ session('contact') ? session('contact') : old('contact') ; }}">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div style="margin-top:30px">
                                                        <!-- <a href="{{url('patient/slip')}}"> -->
                                                        <button class="btn btn-solid mt-20">Search</button>
                                                        <!-- </a> -->
                                                    </div>
                                                </div>
                                            </div>
                                            @error('contact')
                                            <div class="text-red-500">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 md:grid-cols-2 gap-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Age</label>
                                                <div>
                                                    <input
                                                        style="width: 73%;"
                                                        class="input"
                                                        type="number"
                                                        name="age"
                                                        id="age"
                                                        value="{{old('age')}}"
                                                        autocomplete="off"
                                                        placeholder="years">

                                                    <select style="width:25%;" class="input" name="age_type" id="age-type">
                                                        <option value="Y" selected>Years</option>
                                                        <option value="M">Months</option>
                                                        <option value="D">Days</option>
                                                    </select>
                                                </div>
                                                @error('age')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Gender</label>
                                                <div class="flex gap-4">
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-blue-600" name="gender" id="maleRadio" value="male"
                                                            {{ old('gender')=='male'?'checked':'' }}>
                                                        <span>Male</span>
                                                    </label>
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-green-600" name="gender" id="femaleRadio" value="female"
                                                            {{ old('gender')=='female'?'checked':'' }}>
                                                        <span>Female</span>
                                                    </label>
                                                </div>
                                                @error('gender')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 md:grid-cols-3 gap-2">
                                        <div class="col-span-2">
                                            <div class="form-item vertical">
                                                <label class="form-label">Select Doctor</label>
                                                <select class="input" name="selectDoctor" id="select-consultant">
                                                    <option>Select Doctor</option>
                                                    @foreach($doctors as $doc)
                                                    <option value="{{ $doc->id }}">{{ $doc->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label">Token</label>
                                                <input
                                                        class="input"
                                                        style="font-weight: bold;"
                                                        type="number"
                                                        id="token-no"
                                                        disabled/>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hiiden Input -->
                                    <input type="hidden" name="id" id="patient-id" />
                                      <!-- Amount Manage -->
                                    <input type="hidden" name="docFee" id="consult-value" />
                                    <input type="hidden" name="recAmount" id="rec-value" />

                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-1 card adaptable-card !border-b pb-6  rounded-br-none rounded-bl-none">
                            <table class="table-default table" style="padding: 0px;">
                                <tbody>
                                    <tr>
                                        <td class="font-bold w-[250px]">Fees</td>
                                        <td>
                                            <input
                                                class="input h-6 p-2"
                                                type="number"
                                                autocomplete="off"
                                                name="consultFee"
                                                id="consult-fee"
                                                disabled
                                                placeholder="Rs" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-bold">Discount</td>
                                        <td>
                                            <input
                                                class="input input-dis input-sm"
                                                style="width: 100px;"
                                                type="number"
                                                maxlength="5"
                                                name="disAmount"
                                                autocomplete="off"
                                                id="dis-amount"
                                                placeholder="Discount" />

                                            <div class="hidden" id="dis-error">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-bold">Recevied Amount</td>
                                        <td id="discount">
                                            <input
                                                class="input h-6 p-2"
                                                type="number"
                                                name="recAmount"
                                                autocomplete="off"
                                                id="rec-amount"
                                                placeholder="Rs"
                                                disabled />
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/patient/list') }}">Discard</a>
                            <button class="btn btn-solid btn-sm" type="submit" id="btn-save">
                                <span class="flex items-center justify-center">
                                    <span class="text-lg">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M893.3 293.3L730.7 130.7c-7.5-7.5-16.7-13-26.7-16V112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V338.5c0-17-6.7-33.2-18.7-45.2zM384 184h256v104H384V184zm456 656H184V184h136v136c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32V205.8l136 136V840zM512 442c-79.5 0-144 64.5-144 144s64.5 144 144 144 144-64.5 144-144-64.5-144-144-144zm0 224c-44.2 0-80-35.8-80-80s35.8-80 80-80 80 35.8 80 80-35.8 80-80 80z"></path>
                                        </svg>
                                    </span>
                                    <span class="ltr:ml-1 rtl:mr-1">Save</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- Content end -->

@if(session('patients'))
<script>
    // Get Previous Patients
    var patients = <?php echo $patients ?>;
</script>
@else
<script>
    // Get Previous Patients
    var patients = null
</script>
@endif

@endsection

@section('scripts')
<script>
    const baseUrl = "http://localhost/laravel/laboratory/lims/public";
    // Section Previous Patients
    if (patients !== null) {
        document.getElementById('prePatient').addEventListener('change', function() {

            let id = document.getElementById('patient-id')
            let newPatient = document.getElementById('newPatient')
            let age = document.getElementById('age')
            let ageType = document.getElementById('age-type')
            let maleRadio = document.getElementById('maleRadio')
            let femaleRadio = document.getElementById('femaleRadio')
            if (this.value == 'new') {
                document.getElementById('newPatient').type = 'text'
                this.className += ' hidden';
                newPatient.value = '';
                age.value = '';
                maleRadio.checked = false;
                femaleRadio.checked = false;
            } else {
                let selectValue = patients.find(patient => patient.id == this.value);
                age.value = selectValue['age'];
                newPatient.value = selectValue['name'];
                id.value = selectValue['id'];
                ageType.value = selectValue['age_type'];


                if (selectValue['gender'] === 'male') {
                    maleRadio.checked = true;
                } else if (selectValue['gender'] === 'female') {
                    femaleRadio.checked = true;
                }

                document.getElementById('newPatient').type = 'text';
                this.className = 'hidden';
            }
        })
    }


    let arrays = <?php echo $doctors; ?>

    // console.log(array)

    $(document).ready(function() {
        //change selectboxes to selectize mode to be searchable
        $("#select-consultant").each(function() {
            const $this = $(this);
            if (!$this.hasClass('input')) {
                $this.addClass('input');
            }

            $this.select2();
        });

        $("#select-consultant").on("change", function() {
            console.log("Selected Value:", $(this).val());
            var value = $(this).val();
            changeValue(value)
        });
    });

   async function changeValue(value) {
        let res = arrays.find(array => array.id == value)
        document.getElementById('consult-fee').value = res.opd_rate;
        document.getElementById('consult-value').value = res.opd_rate;
        document.getElementById('rec-amount').value =  res.opd_rate;
        document.getElementById('rec-value').value = res.opd_rate;
        let tokenNo = document.getElementById('token-no');

        await fetch(`${baseUrl}/opd/token/${value}`)
        .then(response => response.json())
        .then(data => {
                 console.log(data)
                 tokenNo.value = data;
        }) 
        .catch(error => console.error('Error fetching users:', error));
    }

    document.getElementById('dis-amount').addEventListener('input', function() {
        let value = document.getElementById('consult-fee').value;
        let res = value - this.value;
        document.getElementById('rec-amount').value = res;
        document.getElementById('rec-value').value = res;
    })

    async function getAll(){
       await fetch(`${baseUrl}/opd/all-users`)
        .then(response => response.json())
        .then(data => console.log(data)) 
        .catch(error => console.error('Error fetching users:', error));
    }
</script>


<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/quill/quill.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/new-product.js')}}"></script>
@endsection