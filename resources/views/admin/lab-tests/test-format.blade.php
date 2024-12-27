@extends('admin.master')
@section('content')
<!-- Content start -->
<!-- <div class="app-layout-blank flex flex-auto flex-col h-[100vh]"> -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col">
        <div class="h-full">
            <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                <form action="{{url('test/format/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-container vertical">
                        <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none ">
                            <div class="card-body" id="form-container">
                                <div class="grid grid-cols-2 lg:grid-cols-2 gap-2 mt-2">
                                    <div class="lg:col-span-1">
                                        <h5>Test Format : {{ $lab_test->name ?? ''}}</h5>
                                    </div>
                                    <div class="lg:col-span-1 text-right">
                                        <button class="btn btn-solid add-btn">ADD NEW</button>
                                    </div>
                                </div>
                                <div id="form-data">

                                </div>
                                <input type="hidden" name="test_id" value="{{ $test_id }}" />
                                <input type="hidden" name="deleted_id[]" id="deleted-value" />
                            </div>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 px-8 flex items-center justify-between py-4">
                        <button class="btn btn-plain btn-sm" type="button">
                            <span class="flex items-center justify-center text-red-600">
                                <span class="text-lg">
                                    <svg
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                        height="1em"
                                        width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </span>
                                <span class="ltr:ml-1 rtl:mr-1">Delete</span>
                            </span>
                        </button>
                        <div class="md:flex items-center">
                            <a href="{{ url('/test/list') }}">
                                <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Discard</button>
                            </a>
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
                </form>
            </div>
        </div>
    </div>

</main>
<!-- </div> -->
<script>
    let test_formats = [];
</script>
@if(isset($test_formats))
<script>
    // Get Previous Value
    test_formats = <?php echo $test_formats ?>;
</script>
@endif

<script>
    let array = [];
    if (test_formats.length > 0) {
        // console.log(test_formats.length);
        array = test_formats;
        formValue()
    } else {
        array.push({});
        formValue()
    }
    // console.log(test_formats);

    document.addEventListener("DOMContentLoaded", function() {

        const formContainer = document.getElementById("form-container");


        formContainer.addEventListener("click", function(e) {

            if (e.target.classList.contains("add-btn")) {
                array.push({});
                // console.log(array)
                e.preventDefault();
                formValue();
                // Find all rows in the form
                const rows = document.querySelectorAll(".grid.grid-cols-6");



            }


        });


    });
    document.addEventListener("input", function(e) {
        // Check if the event is triggered by an input with class "input"
        if (e.target.classList.contains("input")) {
            let newArray = []; // Clear the array on every change

            // Select all rows
            const rows = document.querySelectorAll(".grid.grid-cols-6");

            rows.forEach((row) => {
                // Get specific inputs for key, unit, and value in the current row
                let key = row.querySelector("input[name^='items'][name$='[key]']")?.value || "";
                let unit = row.querySelector("input[name^='items'][name$='[unit]']")?.value || "";
                let value = row.querySelector("input[name^='items'][name$='[value]']")?.value || "";
                let order = row.querySelector("input[name^='items'][name$='[order]']")?.value || "";
                let type = row.querySelector("select[name^='items'][name$='[type]']")?.value || ""; // For dropdowns
                let id = row.querySelector("input[name^='items'][name$='[id]']")?.value || "";


                // Create an object for the current row
                let rowData = {
                    id: id,
                    key: key,
                    unit: unit,
                    type: type,
                    value: value,
                    order: order,

                };

                // Push the object into the array
                newArray.push(rowData);
            });

            array = [...newArray];
            console.log("Updated Array:", array);
        }
    });
    let deletedItem = [];

    function deletedValue(index) {
        const formContainer = document.getElementById("form-container");

        let deleted = array.splice(index, 1);

        // Set In Hidden Deleted Input
        deleted.forEach((item) => {
            let input = document.createElement("input");
            input.type = "hidden";
            input.name = "deleted_id[]";
            input.value = item.id;

            formContainer.appendChild(input);

            formValue();
        });
    }

    function formValue() {
        const formData = document.getElementById("form-data");
        formData.innerHTML = "";
        array.forEach(function(item, index) {
            formData.innerHTML += ` <div class="grid grid-cols-12 lg:grid-cols-12 gap-2">
                                    <div class="lg:col-span-2">
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Key</label>
                                            <div>
                                                <input
                                                    class="input"
                                                    type="text"
                                                    name="items[${index}][key]"
                                                    autocomplete="off"
                                                    placeholder="Name"
                                                    value='${item.key === undefined ? "" : item.key}' />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-2">
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Type</label>
                                             <div>
                                                <select class="input" name="items[${index}][type]" >
                                                    <option value="heading" ${item.type == 'heading'?'selected':''}>Heading</option>
                                                    <option value="key" ${item.type == 'key'?'selected':''}>Key</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-2">
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Unit</label>
                                            <div>
                                                <input
                                                    class="input"
                                                    type="text"
                                                    name="items[${index}][unit]"
                                                    autocomplete="off"
                                                    placeholder="mm"
                                                    value = '${item.unit === undefined ? "" : item.unit}' />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-3">
                                        <div class="form-item vertical">
                                            <label class="form-label mb-2">Value</label>
                                            <input
                                                class="input"
                                                type="text"
                                                name="items[${index}][value]"
                                                autocomplete="off"
                                                placeholder="Normal Range"
                                                value = '${item.value === undefined ? "" : item.value}' >
                                        </div>
                                    </div>
                                    <div class="lg:col-span-1">
                                          <div class="form-item vertical">
                                            <label class="form-label mb-2">Order</label>
                                            <input
                                                class="input"
                                                type="number"
                                                name="items[${index}][order]"
                                                autocomplete="off"
                                                placeholder="placement"
                                                value = '${item.order === undefined ? "" : item.order}' >
                                    </div>
                                         <div>
                                                <input
                                                    class="input"
                                                    type="hidden"
                                                    name="items[${index}][id]"
                                                    autocomplete="off"
                                                    placeholder="Name"
                                                    value='${item.id === undefined ? "" : item.id}' />
                                            </div>
                                    </div>
                                    <div class="lg:col-span-2">
                                        <label class="form-label mb-2 invisible">Add</label>
                                         <button class="btn btn-plan" type="button" onclick="deletedValue(${index})">
                            <span class="flex items-center justify-center text-red-600">
                                <span class="text-lg">
                                    <svg
                                        stroke="currentColor"
                                        fill="none"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        aria-hidden="true"
                                        height="1em"
                                        width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </span>
                                <span class="ltr:ml-1 rtl:mr-1">Delete</span>
                            </span>
                        </button>
                                    </div>
                                </div>`;
        })
    }
</script>
@endsection