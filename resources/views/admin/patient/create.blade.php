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
        box-sizing: border-box;
    }

    .dropdown-dis {
        height: 20px;
        /* Matches input field height */
        padding: 0 5px;
        font-size: 10px;
        cursor: pointer;
    }
</style>
<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:90%;">
            <form action="{{url('patient/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-2">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Add Test</h5>
                                    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Patient Name</label>
                                                @if(session('patients'))
                                                @php
                                                $patients = session('patients');
                                                @endphp
                                                <select class="input" id="prePatient">
                                                    <option selected>Select Patient</option>
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
                                                                    value="{{ session('contact') ? session('contact') : '' ; }}">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div style="margin-top:30px">
                                                        <a href="{{url('patient/store')}}">
                                                            <button class="btn btn-solid mt-20">Search</button>
                                                        </a>
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
                                                        class="input"
                                                        type="number"
                                                        name="age"
                                                        id="age"
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
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Gender</label>
                                                <div class="flex gap-4">
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-blue-600" name="gender" id="maleRadio" value="male">
                                                        <span>Male</span>
                                                    </label>
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-green-600" name="gender" id="femaleRadio" value="female">
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
                                    <div class="form-item vertical">
                                        <label class="form-label mb-2">Ref By</label>
                                        <select class="input searchPicker" data-live-search="true" name="refBy">
                                            <option selected>Select Doctor</option>
                                            @foreach($doctors as $doctor)
                                            <option value="{{$doctor->id}}">{{ $doctor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-item vertical">
                                        <label class="form-label mb-2">Select Test</label>
                                        <select class="js-example-basic-multiple w-[100%]" id="dropdown" name="selectedTests[]" multiple="multiple">

                                        </select>
                                    </div>
                                    <!-- Hiiden Input -->
                                    <input type="hidden" name="id" id="patient-id" />
                                    <!-- Amount Manage -->
                                    <input type="hidden" name="totAmount" id="total-amount" />
                                    <input type="hidden" name="netAmount" id="net-amount" />
                                    <input type="hidden" name="balAmount" id="bal-amount" />

                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-1 card adaptable-card !border-b pb-6  rounded-br-none rounded-bl-none">
                            <table class="table-default table" style="padding: 0px;">
                                <thead>
                                    <tr>
                                        <th class="w-[250px]">Selected Test</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody id="test-done">

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="font-bold">Total Amount</td>
                                        <td>
                                            <input
                                                class="input h-6 p-2"
                                                type="number"
                                                name="totalAmount"
                                                autocomplete="off"
                                                id="total-amount-value"
                                                disabled
                                                placeholder="Rs" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-bold">Discount</td>
                                        <td id="discount">
                                            <div class="input-dropdown-dis">
                                                <input
                                                    class="input input-dis h-6 p-2"
                                                    type="number"
                                                    maxlength="5"
                                                    name="disAmount"
                                                    autocomplete="off"
                                                    id="dis-amount-value"
                                                    placeholder="Discount" />
                                                <select class="dropdown-dis" id="select-dis" name="dis_type">
                                                    <option value="Rs">Rs</option>
                                                    <option value="%">%</option>
                                                </select>
                                            </div>
                                            <div class="hidden" id="dis-error">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-bold">Net Amount</td>
                                        <td>
                                            <input
                                                class="input h-6 p-2"
                                                type="number"
                                                autocomplete="off"
                                                id="net-amount-value"
                                                disabled
                                                placeholder="Rs" />
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
                                                id="rec-amount-value"
                                                placeholder="Rs" />
                                            <div class="hidden" id="rec-error">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-bold">Balance Amount</td>
                                        <td>
                                            <input
                                                class="input h-6 p-2"
                                                type="number"
                                                autocomplete="off"
                                                id="bal-amount-value"
                                                disabled
                                                placeholder="Rs" />
                                        </td>
                                    </tr>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/patient/list') }}">Discard</a>
                            <button class="btn btn-solid btn-sm" type="submit">
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
    let patients = <?php echo $patients ?>;
</script>
@endif

<script>
    // Previous patients
    document.getElementById('prePatient').addEventListener('change', function() {

        let id = document.getElementById('patient-id')
        let newPatient = document.getElementById('newPatient')
        let age = document.getElementById('age')
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

            if (selectValue['gender'] === 'male') {
                maleRadio.checked = true;
            } else if (selectValue['gender'] === 'female') {
                femaleRadio.checked = true;
            }
        }
    })
</script>

@endsection

@section('scripts')

<script>
    // Section Lab Tests
    let tests = <?php echo $labTests; ?>;
    let collectSelectItems = [];

    let options = '';
    tests.map(test => {
        return options += `<option value='${test.id}'>${test.name}</option>`;
    });

    $(document).ready(function() {

        $('.js-example-basic-multiple').html(options).select2();

        $('#dropdown').on('change', function() {

            collectSelectItems = [];
            const selectedValues = $(this).val();
            selectedValues.forEach(selectedValue => {
                let value = tests.find(test => test.id == selectedValue);
                collectSelectItems.push(value);
            })

            // Show Selected Test
            showSelectedTests();
        });
    });

    let totalAmount = document.getElementById('total-amount');
    let netAmount = document.getElementById('net-amount');
    let balAmount = document.getElementById('bal-amount');
    let balAmountValue = document.getElementById('bal-amount-value');

    function showSelectedTests() {

        let testData = document.getElementById('test-data')
        let testDone = document.getElementById('test-done');
        let totalAmountValue = document.getElementById('total-amount-value');
        let netAmountValue = document.getElementById('net-amount-value')
        let disAmountValue = document.getElementById('dis-amount-value');
        let balAmountValue = document.getElementById('bal-amount-value');
        let recAmountValue = document.getElementById('rec-amount-value');

        testDone.innerHTML = '';
        let price = 0;
        let row = '';
        collectSelectItems.forEach((item, index) => {
            row += `<tr>
                        <td>${item.name}</td>
                        <td>${item.price}</td>
                    </tr>`;

            price += item.price
        })

        totalAmountValue.value = price;
        testDone.innerHTML += row;
        netAmountValue.value = price;
        balAmountValue.value = price;
        recAmountValue.value = 0;
        disAmountValue.value = 0;

        totalAmount.value = price;
        netAmount.value = price;
        balAmount.value = price;
        console.log(netAmount.value);
    }

    document.getElementById('select-dis').addEventListener('change', function() {

        let totalAmountValue = document.getElementById('total-amount-value')
        let netAmountValue = document.getElementById('net-amount-value')
        let disAmountValue = document.getElementById('dis-amount-value')
        let disValue = disAmountValue.value;
        let selectedValue = this.value;

        if (selectedValue === 'Rs') {
            let res = totalAmountValue.value - disValue;
            netAmountValue.value = res
            balAmountValue.value = res

            netAmount.value = res;
            balAmount.value = res;
        } else if (selectedValue === '%' && disValue.length < 3) {
            let res = totalAmountValue.value - totalAmountValue.value * (disValue / 100);
            netAmountValue.value = res
            balAmountValue.value = res

            netAmount.value = res;
            balAmount.value = res;
        }
    });

    document.getElementById('dis-amount-value').addEventListener('input', (event) => {
        let disValue = event.target.value;
        let disError = document.getElementById('dis-error')
        let totalAmountValue = document.getElementById('total-amount-value')
        let recAmountValue = document.getElementById('rec-amount-value')
        let netAmountValue = document.getElementById('net-amount-value')
        let disAmountValue = document.getElementById('dis-amount-value')
        let selectDis = document.getElementById('select-dis');
        disError.innerHTML = '';
        recAmountValue.value = 0;

        if (disValue.length > 5 || (disValue.length >= 3 && selectDis.value === '%')) {
            disError.className = 'text-red-500 text-xs';
            disError.innerHTML = 'Invalid Value';
            return
        }

        if (selectDis.value === 'Rs') {
            let res = totalAmountValue.value - disAmountValue.value;
            netAmountValue.value = res
            balAmountValue.value = res

            netAmount.value = res;
            balAmount.value = res;
        } else if (selectDis.value === '%' && disValue.length < 3) {
            let res = totalAmountValue.value - totalAmountValue.value * (disAmountValue.value / 100);
            netAmountValue.value = res;
            balAmountValue.value = res

            netAmount.value = res;
            balAmount.value = res;
        }

        // recAmount.value = 0;
        // balAmount.innerHTML = 0;
        // netAmountValue.innerHTML = totalAmountValue.value;

        //     error.className = 'hidden';
        //     // if (/[a-zA-Z]/.test(disValue) || disValue[0] == '%' || disValue[3] == '%' || disValue[4] == '%') {
        //     //     error.className = 'text-red-500 text-xs';
        //     //     error.innerHTML = 'Invalid Value';
        //     // } else 
        //     if (disValue[1] == '%' || disValue[2] == '%' && disValue.length == 3) {
        //         if (disValue[1] == '%') {
        //             let res = totalAmountValue.value - totalAmountValue.value * (disValue[0] / 100);
        //             netAmount.innerHTML = res
        //             netAmountValue.value = res
        //         } else if (disValue[2] == '%') {
        //             let res = totalAmountValue.value - totalAmountValue.value * (disValue.slice(0, 2) / 100);
        //             netAmount.innerHTML = res
        //             netAmountValue.value = res
        //         }
        //         // console.log(netAmountValue-disValue)
        //     } else if (disValue.length <= 5 && /[0-9]/.test(disValue)) {
        //         let res = totalAmountValue.value - disValue;
        //         netAmount.innerHTML = res
        //         netAmountValue.value = res
        //     } else if (disValue.length >= 5) {
        //         error.className = 'text-red-500 text-xs';
        //         error.innerHTML = 'Max 5 character';
        //     } else if (/[!@#$^&*()_+}{|":?><';\/.,<>=-]/.test(disValue)) {
        //         error.className = 'text-red-500 text-xs';
        //         error.innerHTML = 'Only Numbers'
        //     }
    })

    // Event listener to block typing for alphabets but allow backspace
    // document.getElementById('dis-amount').addEventListener('keydown', function(event) {
    //     const disValue = this.value;
    //     let error = document.getElementById('dis-error')

    //     if (/[a-zA-Z]/.test(disValue) && event.key != "Backspace") {
    //         // Block all keys if alphabets are typed
    //         event.preventDefault();
    //         error.className = 'text-red-500 text-xs';
    //         error.innerHTML = 'only press backspace';
    //     } else if (/[!@#$^&*()_+}{|":?><';\/.,<>=-]/.test(disValue) && event.key != "Backspace") {
    //         event.preventDefault();
    //         error.className = 'text-red-500 text-xs';
    //         error.innerHTML = 'only press backspace';
    //     }
    // });

    document.getElementById('rec-amount-value').addEventListener('input', (event) => {
        let recValue = event.target.value;
        let recError = document.getElementById('rec-error');
        let netAmountValue = document.getElementById('net-amount-value');
        let balAmountValue = document.getElementById('bal-amount-value');
        // if(recValue >= netAmountValue.value){
        //     recError.className = 'text-red-500 text-xs';
        //     recError.innerHTML = 'Invalid Value';
        //     return
        // }

        let res = netAmountValue.value - recValue;
        balAmountValue.value = res;
        balAmount.value = res;
        // console.log(balAmount);
    })
</script>



<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/quill/quill.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/new-product.js')}}"></script>
@endsection