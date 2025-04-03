@extends('admin.master')
@section('content')

@php
$select_types = ['0'=> 'Outer Consultant','1' => 'Inner Consultant'];
@endphp

<style>
    .btn-plain {
        position: relative;
        background: none;
        border: none;
        font-size: 16px;
        cursor: pointer;
    }

    .btn-plain::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        /* Line thickness */
        background-color: black;
        /* Change color as needed */
        transform: scaleX(0);
        transition: transform 0.3s ease-in-out;
    }

    .btn-plain:hover::after {
        transform: scaleX(1);
    }

    .btn-plain:visited {
        transform: scaleX(1);
    }
</style>

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
            <form action="{{url('doctor/store')}}" method="post" id="form-id" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-3">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Doctor Information</h5>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Doctor Name</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="name"
                                                        value="{{old('name')}}"
                                                        autocomplete="off"
                                                        placeholder="Name">
                                                </div>
                                                @error('name')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Email</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="email"
                                                        name="email"
                                                        value="{{old('email')}}"
                                                        autocomplete="off"
                                                        placeholder="xyz@gmail.com">
                                                </div>
                                                @error('email')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                                        <div class="col-span-2">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Address</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="address"
                                                        value="{{old('address')}}"
                                                        autocomplete="off"
                                                        placeholder="Address......">
                                                </div>
                                                @error('address')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Contact</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="number"
                                                        name="contact_no"
                                                        value="{{old('contact_no')}}"
                                                        autocomplete="off"
                                                        placeholder="03XX-XXXXXXX">
                                                </div>
                                                @error('contact_no')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Age</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="number"
                                                        name="age"
                                                        value="{{old('age')}}"
                                                        autocomplete="off"
                                                        placeholder="years">
                                                </div>
                                                @error('age')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                                        <div class="col-span-2">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Qualification</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="qualification"
                                                        value="{{old('qualification')}}"
                                                        autocomplete="off"
                                                        placeholder="Qualification......">
                                                </div>
                                                @error('qualification')
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
                                                        <input type="radio" class="radio text-blue-600" name="gender" value="male">
                                                        <span>Male</span>
                                                    </label>
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-green-600" name="gender" value="female">
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

                                    <!-- Hidden Input -->
                                    <input type="hidden" name="lab_share" id="lab-share" />
                                    <input type="hidden" name="opd_rate" id="opd-rate" />
                                    <input type="hidden" name="hospital_share" id="hosp-share" />
                                    <input type="hidden" name="consultant_share" id="consult-share" />

                                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                                        <div class="col-span-2">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Doctor Type</label>
                                                <div>
                                                    <select class="input" name="type" id="change-consult">
                                                        @foreach($select_types as $key => $value)
                                                        <option value="{{ $key }}">{{ $value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('type')
                                                <div class="text-red-500 mt-2">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-2" id="consult-div">
                                            <div class="form-item vertical">
                                                <label class="md-2 invisible">button</label>
                                                <div class="inline-flex flex-wrap gap-2 mt-2">
                                                    <button class="btn btn-plain" onclick="others(event)">Others</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="inner-consult-container">
                                        <table class="table-default table-hover table-compact">
                                            <thead>
                                                <tr>
                                                    <th>Consultant Lab Share %</th>

                                                </tr>
                                            </thead>
                                            <tbody id="consultant-other">
                                                <tr>
                                                    <td>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                style="width:300px"
                                                                type="number"
                                                                name="lab_share"
                                                                value="{{old('lab_share')}}"
                                                                autocomplete="off"
                                                                placeholder="%">
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/doctor/list') }}">Discard</a>
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

@endsection

@section('scripts')

<script>
    // Change Consultant
    document.getElementById('change-consult').addEventListener('change', function() {
        console.log(this.value)
        let consultDiv = document.getElementById('consult-div');
        let innerConsultCont = document.getElementById('inner-consult-container');
        if (this.value == 1) {
            // consultDiv.classList.remove('hidden');
            consultDiv.innerHTML = ` <div class="form-item vertical">
                                                <label class="md-2 invisible">button</label>
                                                <div class="inline-flex flex-wrap gap-2 mt-2">
                                                    <button class="btn btn-plain" onclick="consultRate(event)">Consultant Rate</button>
                                                    <button class="btn btn-plain" onclick="others(event)">Others</button>
                                                </div>
                                            </div>`;

            consultRate(event);
        } else {
            consultDiv.innerHTML = ` <div class="form-item vertical">
                                                <label class="md-2 invisible">button</label>
                                                <div class="inline-flex flex-wrap gap-2 mt-2">
                                                    <button class="btn btn-plain" onclick="others(event)">Others</button>
                                                </div>
                                            </div>`

            others(event);
        }
    });

    function others(event) {
        event.preventDefault();
        let labShare = document.getElementById('lab-share')

        let consutContainer = document.getElementById('inner-consult-container');
        consutContainer.innerHTML = `   <table class="table-default table-hover table-compact">
                                        <thead>
                                            <tr>
                                                <th>Consultant Lab Share %</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="consultant-other">
                                     <tr>
                                                <td>
                                                    <div>
                                                        <input
                                                            class="input"
                                                            style="width:300px"
                                                            type="number"
                                                            value="${labShare.value}"
                                                            id="lab-share-input"
                                                            autocomplete="off"
                                                            placeholder="%">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>`;
    }

    function consultRate(event) {
        event.preventDefault();
        let hospShare = document.getElementById('hosp-share')
        let consultShare = document.getElementById('consult-share')
        let opdRate = document.getElementById('opd-rate')

        let consutContainer = document.getElementById('inner-consult-container');

        consutContainer.innerHTML = `
                                    <table class="table-default table-hover table-compact">
                                        <thead>
                                            <tr>
                                                <th>OPD Rate</th>
                                                <th>Hospital Share%</th>
                                                <th>Consultant Share%</th>
                                            </tr>
                                        </thead>
                                        <tbody id="consultant-rate">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <input
                                                            class="input"
                                                            type="number"
                                                            value="${opdRate.value}"
                                                            id="opd-rate-input">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input
                                                            class="input"
                                                            type="number"
                                                            value="${hospShare.value}"
                                                            id="hosp-share-input">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <input
                                                            class="input"
                                                            type="number"
                                                            value="${consultShare.value}"
                                                            id="consult-share-input">
                                                    </div>
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>`
    }


    // Hospital & Consultant Share
    document.addEventListener("input", function(event) {


        let hospShareInput = document.getElementById('hosp-share-input')
        let consultShareInput = document.getElementById('consult-share-input')
        let hospShare = document.getElementById('hosp-share')
        let consultShare = document.getElementById('consult-share')
        let opdRate = document.getElementById('opd-rate')
        let labShare = document.getElementById('lab-share')


        if (event.target.id === "hosp-share-input") { // Sirf specific input ke liye
            let res = 100 - event.target.value;
            hospShare.value = event.target.value;
            consultShareInput.value = res;
            consultShare.value = res;

        }

        if (event.target.id === "consult-share-input") { // Sirf specific input ke liye
            let res = 100 - event.target.value;
            consultShare.value = event.target.value
            hospShareInput.value = res;
            hospShare.value = res;

        }

        if (event.target.id === "opd-rate-input") { // Sirf specific input ke liye
            opdRate.value = event.target.value;

        }

        if (event.target.id === "lab-share-input") { // Sirf specific input ke liye
            labShare.value = event.target.value;

        }
    });


    // function addRowOpd(e) {
    //     e.preventDefault();
    //     let consultRate = document.getElementById('consultant-rate')

    //     consultRate.innerHTML += ` <tr>
    //                                             <td>
    //                                                 <div>
    //                                                     <input
    //                                                         class="input"
    //                                                         type="number"
    //                                                         name="opd_rate">
    //                                                 </div>
    //                                             </td>
    //                                             <td>
    //                                                 <div>
    //                                                     <input
    //                                                         class="input"
    //                                                         type="number"
    //                                                         name="hospital_share"
    //                                                         id="hosp-share">
    //                                                 </div>
    //                                             </td>
    //                                             <td>
    //                                                 <div>
    //                                                     <input
    //                                                         class="input"
    //                                                         type="number"
    //                                                         name="consultant_share"
    //                                                         id="consult-share">
    //                                                 </div>
    //                                             </td>
    //                                             </tr>`;
    // }


    // function addRowOther(e) {
    //     e.preventDefault();
    //     let consultOther = document.getElementById('consultant-other');
    //     consultOther.innerHTML = ` <tr>
    //                                             <td>
    //                                                 <div>
    //                                                     <input
    //                                                         class="input"
    //                                                         type="number"
    //                                                         name="lab_share"
    //                                                         value="{{old('lab_share')}}"
    //                                                         autocomplete="off"
    //                                                         placeholder="%">
    //                                                 </div>
    //                                             </td>
    //                                         </tr>`;

    // }


    document.getElementById('btn-save').addEventListener('click', function() {
        document.getElementById('btn-save').disabled = true;

        // Submit the form
        document.getElementById('form-id').submit();
    })
</script>

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/quill/quill.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/new-product.js')}}"></script>
@endsection