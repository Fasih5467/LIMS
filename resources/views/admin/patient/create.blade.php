@extends('admin.master')
@section('content')

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
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
                                                    <option selected>Select Category</option>
                                                    @foreach($patients as $patient)
                                                    <option value="{{ $patient->name }}">{{ $patient->name }}</option>
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
                                                <div class="alert alert-danger">
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
                                            <div class="alert alert-danger">
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
                                                <div class="alert alert-danger">
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
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-item vertical">

                                        <div class="searchable-select">
                                            <div class="searchable-dropdown">
                                                <label class="form-label mb-2">Select Test</label>
                                                <input
                                                    type="text"
                                                    id="test-search"
                                                    placeholder="Select or Search Category"
                                                    class="input"
                                                    autocomplete="off"
                                                    onfocus="showDropdown()"
                                                    oninput="filterCategories()" />
                                                <ul id="dropdown-options" class="dropdown-options" style="position: absolute; width: 100%; max-height: 150px; overflow-y: auto; border: 1px solid #ccc; background: white; display: none; z-index: 1000;">
                                             
                                                </ul>
                                            </div>
                                            <input type="hidden" name="testValue[]" id="collect-test-value" />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lg:col-span-1 card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                            <table class="table-default table-hover">
                                <thead>
                                    <tr>
                                        <th>Selected Test</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="test-done">
                             
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total Price</td>
                                        <td id="total-price"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/test/list') }}">Discard</a>
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

    // Section Lab Tests
    let tests = <?php echo $tests; ?>;
    let collectSelectItems = [];

    function showDropdown() {
        const dropdown = document.getElementById('dropdown-options');
        dropdown.style.display = 'block';
        tests.forEach(test => {
            dropdown.innerHTML += `<li data-value='${test.id}' onclick='selectCategory(this)'>${test.name}</li>`
        })

    }

    function hideDropdown() {
        const dropdown = document.getElementById('dropdown-options');
        setTimeout(() => dropdown.style.display = 'none', 200); // Delay to allow selection
    }

    function filterCategories() {
        const searchValue = document.getElementById('test-search').value.toLowerCase();
        const options = document.querySelectorAll('#dropdown-options li');

        options.forEach(option => {
            const text = option.textContent.toLowerCase();
            if (text.includes(searchValue)) {
                option.style.display = ''; // Show matching options
            } else {
                option.style.display = 'none'; // Hide non-matching options
            }
        });
    }

    function selectCategory(element) {

        const selectedText = element.textContent;
        const selectedValue = element.getAttribute('data-value');

        // Set the input value to the selected option
        document.getElementById('test-search').value = selectedText;

       

        let value = tests.find(test => test.id == selectedValue);
        let checkValue = collectSelectItems.find(collectSelectItem => collectSelectItem.id == selectedValue);

        if (!checkValue) {
            collectSelectItems.push(value);
        }

         // Update the hidden input value for form submission
         document.getElementById('collect-test-value').value = JSON.stringify(collectSelectItems);

        showSelectedTests();

        // Hide the dropdown
        hideDropdown();
    }

    // Close dropdown on outside click
    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdown-options');
        if (!dropdown.contains(event.target) && event.target.id !== 'test-search') {
            dropdown.style.display = 'none';
        }
    });


    function showSelectedTests() {
        let testData = document.getElementById('test-data')
        let testDone = document.getElementById('test-done');
        let totalPrice = document.getElementById('total-price');
        testDone.innerHTML = '';
        let price = 0;
        let row = '';
        collectSelectItems.forEach((item, index) => {
            row += `<tr>
                        <td>${item.name}</td>
                        <td>${item.price}</td>
                        <td>
                            <span onclick = "deleteItem(${index})" class="cursor-pointer p-2 hover:text-red-500">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </span>
                        </td>
                    </tr>`;

            price += item.price
        })

        totalPrice.innerHTML = price;
        testDone.innerHTML += row;

        testData.value = collectSelectItems
    }

    function deleteItem(index) {
        collectSelectItems.splice(index, 1);
        showSelectedTests();
    }
</script>

<script>
    // Previous patients
    document.getElementById('prePatient').addEventListener('change', function() {
        if (this.value == 'new') {
            document.getElementById('newPatient').type = 'text'
            this.className += ' hidden';
        } else {
            let selectValue = patients.find(patient => patient.name == this.value);
            document.getElementById('age').value = selectValue['age'];
            document.getElementById('newPatient').value = selectValue['name']
            if (selectValue['gender'] === 'male') {
                document.getElementById('maleRadio').checked = true;
            } else if (selectValue['gender'] === 'female') {
                document.getElementById('femaleRadio').checked = true;
            }
        }
    })



    // let selectCategory = document.getElementById('select-category');
    // let showLabTests = document.getElementById('show-lab-tests')
    // let selectLabTest = document.getElementById('select-lab-tests')
    // let testData = document.getElementById('test-data')

    // selectCategory.addEventListener('change', function() {
    //     showLabTests.className = "";
    //     let selected_id = selectCategory.value;
    //     selectLabTest.innerHTML = "<option selected>Select Test</option>";

    //     for (let x = 0; x < tests.length; x++) {
    //         if (tests[x].category_id == selected_id) {
    //             selectLabTest.innerHTML += `<option value="${tests[x].id}">${ tests[x].name }</option>`;

    //         }
    //     }
    // });


    // showLabTests.addEventListener('change', () => {
    //     let value = tests.find(test => test.id == selectLabTest.value);
    //     let checkValue = collectSelectItems.find(collectSelectItem => collectSelectItem.id == selectLabTest.value);
    //     if (!checkValue) {
    //         console.log(checkValue);
    //         collectSelectItems.push(value);
    //     }
    //     showSelectedTests();
    // });

    // function showSelectedTests() {
    //     let testDone = document.getElementById('test-done');
    //     let totalPrice = document.getElementById('total-price');
    //     testDone.innerHTML = '';
    //     let price = 0;
    //     let row = '';
    //     collectSelectItems.forEach((item, index) => {
    //         row += `<tr>
    //                     <td>${item.name}</td>
    //                     <td>${item.price}</td>
    //                     <td>
    //                         <span onclick = "deleteItem(${index})" class="cursor-pointer p-2 hover:text-red-500">
    //                             <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
    //                                 <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
    //                             </svg>
    //                         </span>
    //                     </td>
    //                 </tr>`;

    //         price += item.price
    //     })

    //     totalPrice.innerHTML = price;
    //     testDone.innerHTML += row;

    //     testData.value = collectSelectItems
    // }





    // function deleteItem(index) {
    //     collectSelectItems.splice(index, 1);
    //     showSelectedTests();
    // }
</script>

@endsection

@section('scripts')

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/quill/quill.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/new-product.js')}}"></script>
@endsection