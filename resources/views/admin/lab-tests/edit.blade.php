@extends('admin.master')
@section('content')

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
            <form action="{{url('test/update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-3">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Add Test</h5>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Test Name</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="Tname"
                                                        autocomplete="off"
                                                        placeholder="Test Name"
                                                        value="{{ $labTest->name }}">
                                                </div>
                                                @error('Tname')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Price</label>
                                                <div>
                                                    <span class="input-wrapper undefined">
                                                        <div class="input-suffix-start"> Rs</div>
                                                        <input
                                                            class="input pl-8"
                                                            type="number"
                                                            name="price"
                                                            autocomplete="off"
                                                            placeholder="Price"
                                                            value="{{ $labTest->price }}">
                                                    </span>
                                                </div>
                                                @error('price')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-4 md:grid-cols-4 gap-4">
                                        <div class="col-span-2">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Category</label>
                                                <div>
                                                    <select class="input" name="category">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}" {{$category->id == $labTest->category_id ? 'selected' : ''}} >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @error('category')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Keyword</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="keyword"
                                                        autocomplete="off"
                                                        placeholder="RBC"
                                                        value="{{ $labTest->keyword }}">
                                                </div>
                                                @error('keyword')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Duration</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="number"
                                                        name="duration"
                                                        autocomplete="off"
                                                        placeholder="Day"
                                                        value="{{ $labTest->duration }}">
                                                </div>
                                                @error('duration')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $labTest->id }}" name="id" />
                                    </div>
                                </div>
                            </div>
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

@endsection

@section('scripts')

<!-- Other Vendors JS -->
<script src="{{url('assets/vendors/quill/quill.min.js')}}"></script>

<!-- Page js -->
<script src="{{url('assets/js/pages/new-product.js')}}"></script>
@endsection