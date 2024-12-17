@extends('admin.master')
@section('content')
<!-- Content start -->

<!-- <div class="app-layout-blank flex flex-auto flex-col h-[100vh]"> -->
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col">
            <div class="h-full">
                <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mx-4">
                        <div class="lg:col-span-1">
                            <form action="{{url()}}">
                                <div class="form-container vertical">
                                    <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none ">
                                        <div class="card-body">
                                            <h5>Test Format : CBC</h5>
                                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-2">
                                                <div class="lg:col-span-1">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Key</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="key"
                                                                autocomplete="off"
                                                                placeholder="Name" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-1">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Type</label>
                                                        <div>
                                                            <select class="input" name="type" id="type">
                                                                <option>Select...</option>
                                                                <option value="heading">Heading</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 mt-2">
                                                <div class="lg:col-span-1">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Unit</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="unit"
                                                                id="unit"
                                                                autocomplete="off"
                                                                placeholder="mm" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lg:col-span-1">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Value</label>
                                                        <input
                                                            class="input"
                                                            type="text"
                                                            name="value"
                                                            id="value"
                                                            autocomplete="off"
                                                            placeholder="Normal Range" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-item vertical">
                                                        <label class="form-label mb-2">Key</label>
                                                        <div>
                                                            <input
                                                                class="input"
                                                                type="text"
                                                                name="key"
                                                                autocomplete="off"
                                                                placeholder="Name"
                                                                value="Luminaire Giotto Headphones">
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Unit</label>
                                                        <input
                                                            class="input"
                                                            type="text"
                                                            name="unit"
                                                            autocomplete="off"
                                                            placeholder="Code"
                                                            value="mm">
                                                    </div> -->
                                            <!-- <div class="form-item vertical">
                                                        <label class="form-label mb-2">Description</label>
                                                        <div class="rich-text-editor">
                                                            <div id="description">
                                                                <p>Make a brew a right royal knees up and we all like figgy pudding a comely wench gutted its nicked pulled out the eating irons, ask your mother if on goggle box toad in the whole Sherlock rather, ar kid pennyboy naff superb pezzy little.</p>
                                                                <ul>
                                                                    <li>Scally utter shambles blighty squirrel numbskull rumpy pumpy apple and pears bow ties are cool</li>
                                                                    <li>pompous nosh have a butcher at this flabbergasted a right toff black cab jolly good made a pigs ear of it</li>
                                                                    <li>Roast beef conked him one on the nose had a barney with the inlaws beefeater is she avin a laugh supper, gobsmacked argy-bargy challenge you to a duel</li>
                                                                    <li>whizz air one dirty linen chav not some sort of dosshouse.</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div> -->
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
                                        <button class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" type="button">Discard</button>
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
                        <div class="lg:col-span-1">
                            <div class="card min-w-[450px] md:min-w-[450px] card-shadow p-4" role="presentation">
                                <div class="text-lg font-bold underline underline-offset-2 py-5">
                                    HAEMATOLOGY
                                </div>
                                <table class="table-compact border border-state-400 text-left table-auto w-full">
                                    <thead>
                                        <tr class="border border-state-300">
                                            <th>TEST</th>
                                            <th>RESULT</th>
                                            <th>Unit</th>
                                            <th>NORMAL RANGE</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <!-- Spacer Row -->
                                    <div class="py-2"></div>
                                    <tbody>
                                        <tr class="h-[20px]"></tr>
                                        @foreach($test_formats as $test_format)
                                        @if($test_format->type == 'heading')
                                        <tr>
                                            <td class="py-2 font-bold">
                                                {{ $test_format->key }}
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <div class="flex justify-end text-lg">
                                                    <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                        <a href="{{ url('/test/edit/') }}">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span class="cursor-pointer p-2 hover:text-red-500">
                                                        <a href="{{ url('/test/delete/') }}">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                        </a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        @else
                                        <tr>
                                            <td class="py-2">{{ $test_format->key }}</td>
                                            <td class="py-2 w-[200px]">
                                                <div class="invisible">Placeholder</div>
                                            </td>
                                            <td>{{ $test_format->unit}} </td>
                                            <td class="py-2">{{ $test_format->value }}</td>
                                            <td>
                                                <div class="flex justify-end text-lg">
                                                    <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                        <a href="{{ url('/test/edit/') }}">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                            </svg>
                                                        </a>
                                                    </span>
                                                    <span class="cursor-pointer p-2 hover:text-red-500">
                                                        <a href="{{ url('/test/delete/') }}">
                                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                            </svg>
                                                        </a>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                        @endif

                                        @endforeach





                                    </tbody>
                                </table>
                                <div class="p-4 h-[50px]">REMARKS :</div>
                                <div class="px-4 grid grid-cols-2 gap-4">
                                    <div class="col-span-1">LAB TECH</div>
                                    <div class="col-span-1 px-6">PATHOLOGIST</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<!-- </div> -->
<script>
    document.getElementById('type').addEventListener('change', (event) => {
        let type = event.target.value;

        if (type == 'heading') {
            document.getElementById('unit').disabled = true;
            document.getElementById('value').disabled = true;
            document.getElementById('unit').value = '';
            document.getElementById('value').value = '';
        } else {
            document.getElementById('unit').disabled = false;
            document.getElementById('value').disabled = false;
        }
    })
</script>
@endsection