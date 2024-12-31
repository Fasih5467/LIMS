@extends('admin.master')
@section('content')

@php
$typeValues = ['technologist','doctor'];
@endphp

<!-- Content start -->
<main class="h-full">
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto" style="width:75%;">
            <form action="{{url('lab/management/update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-container vertical">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                        <div class="lg:col-span-3">
                            <div class="card adaptable-card !border-b pb-6 py-4 rounded-br-none rounded-bl-none">
                                <div class="card-body">
                                    <h5>Information</h5>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Name</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="name"
                                                        autocomplete="off"
                                                        placeholder="Name"
                                                        value="{{ $labManagement->name }}">
                                                </div>
                                                @error('name')
                                                <div class="alert alert-danger">
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
                                                        autocomplete="off"
                                                        placeholder="xyz@gmail.com"
                                                        value="{{ $labManagement->email }}">
                                                </div>
                                                @error('email')
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
                                                <label class="form-label mb-2">Qualification</label>
                                                <div>
                                                    <input
                                                        class="input"
                                                        type="text"
                                                        name="qualification"
                                                        autocomplete="off"
                                                        placeholder="Qualification......"
                                                        value="{{ $labManagement->qualification }}">
                                                </div>
                                                @error('qualification')
                                                <div class="alert alert-danger">
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
                                                        name="contact"
                                                        autocomplete="off"
                                                        placeholder="03XX-XXXXXXX"
                                                        value="{{ $labManagement->contact }}">
                                                </div>
                                                @error('contact')
                                                <div class="alert alert-danger">
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
                                                        autocomplete="off"
                                                        placeholder="years"
                                                        value="{{ $labManagement->age }}">
                                                </div>
                                                @error('age')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- hidden id -->
                                        <input type="hidden" value="{{ $labManagement->id }}" name="id" />
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-4">
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Type</label>
                                                <select class="input capitalize" name="type">
                                                    @foreach($typeValues as $value)
                                                    <option value="{{$value}}" class="capitalize" {{$value == $labManagement->type ?'selected':'' }}>{{$value}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-1">
                                            <div class="form-item vertical">
                                                <label class="form-label mb-2">Gender</label>
                                                <div class="flex gap-4">
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-blue-600" name="gender" value="male" {{($labManagement->gender == 'male')? 'checked':'';}}>
                                                        <span>Male</span>
                                                    </label>
                                                    <label class="radio-label inline-flex">
                                                        <input type="radio" class="radio text-green-600" name="gender" value="female" {{($labManagement->gender == 'female')? 'checked':'';}}>
                                                        <span>Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stickyFooter" class="sticky -bottom-1 -mx-8 px-8 flex items-center justify-end py-4">
                        <div class="md:flex items-center">
                            <a class="btn btn-default btn-sm ltr:mr-2 rtl:ml-2" href="{{ url('/doctor/list') }}">Discard</a>
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