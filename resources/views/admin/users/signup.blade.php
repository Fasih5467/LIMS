<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{url('assets/img/favicon.ico')}}">
    <title>LIMS</title>
    <!-- Core CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
</head>

<body>
    <!-- App Start-->
    <div id="root">
        <!-- App Layout-->
        <div class="app-layout-blank flex flex-auto flex-col h-[100vh]">
            <main class="h-full">
                <div class="page-container relative h-full flex flex-auto flex-col">
                    <div class="h-full">
                        <div class="container mx-auto flex flex-col flex-auto items-center justify-center min-w-0 h-full">
                            <div class="card min-w-[320px] md:min-w-[450px] card-shadow" role="presentation">
                                <div class="card-body md:p-10">
                                    <div class="text-center">
                                        <div class="logo">
                                            <img class="mx-auto" src="{{url('assets/img/logo/logo-light-streamline.png')}}" alt="Elstar logo">
                                        </div>
                                    </div>
                                    @include('alertmessage.flash-message')
                                    <div>
                                        <div class="mb-4 text-center">
                                            <h3 class="mb-1">Welcome!</h3>
                                            <p>Please enter your information to sign up!</p>
                                        </div>
                                        <div>
                                            <form action="{{ url('/user/store') }}" method="post" id="form-id">
                                                @csrf
                                                <div class="form-container vertical">
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Name</label>
                                                        <div>
                                                            <input class="input" type="text" name="name" autocomplete="off" placeholder="Name">
                                                        </div>
                                                        @error('name')
                                                        <div class="text-red-500">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Email</label>
                                                        <div>
                                                            <input class="input" type="email" name="email" autocomplete="off" placeholder="Email">
                                                        </div>
                                                        @error('email')
                                                        <div class="text-red-500">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Password</label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <input class="input pr-8" type="password" name="password" autocomplete="off" placeholder="Password" id="input-password1">
                                                                <div class="input-suffix-end">
                                                                    <span class="cursor-pointer text-xl" onclick="togglePassword(1)" id="eye-icon1">
                                                                        <svg
                                                                            stroke="currentColor"
                                                                            fill="none"
                                                                            stroke-width="2"
                                                                            viewBox="0 0 24 24"
                                                                            aria-hidden="true"
                                                                            height="1em"
                                                                            width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-item vertical">
                                                        <label class="form-label mb-2">Confirm Password</label>
                                                        <div>
                                                            <span class="input-wrapper">
                                                                <input class="input pr-8" type="password" name="password" autocomplete="off" placeholder="Password" id="input-password2">
                                                                <div class="input-suffix-end">
                                                                    <span class="cursor-pointer text-xl" onclick="togglePassword(2)" id="eye-icon2">
                                                                        <svg
                                                                            stroke="currentColor"
                                                                            fill="none"
                                                                            stroke-width="2"
                                                                            viewBox="0 0 24 24"
                                                                            aria-hidden="true"
                                                                            height="1em"
                                                                            width="1em"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </span>
                                                        </div>
                                                        <div id="error"></div>
                                                    </div>
                                                    <button class="btn btn-solid w-full" type="submit" id="btn-save">Sign Up</button>
                                                    <!-- <div class="mt-4 text-center">
                                                            <span>Don't have an account yet?</span>
                                                            <a class="text-primary-600 hover:underline" href="signup-simple.html">Sign up</a>
                                                        </div> -->
                                                </div>
                                            </form>
                                            <button class="btn btn-solid w-full my-2"><a href = "{{url('/user/list')}}">Back To List</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{url('assets/js/vendors.min.js')}}"></script>

    <!-- Other Vendors JS -->

    <!-- Page js -->

    <!-- Core JS -->
    <script src="{{url('assets/js/app.min.js')}}"></script>

    <script>
        // Toggle Password
        function togglePassword(val) {

            let input;
            let icon;
            if (val == 1) {
                input = document.getElementById('input-password1');
                icon = document.getElementById('eye-icon1');
            } else if (val == 2) {
                input = document.getElementById('input-password2');
                icon = document.getElementById('eye-icon2');
            }
            if (input.type == 'password') {
                input.type = 'text';
                icon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" height="1em" width="1em">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                        </svg>`;
            } else {
                input.type = 'password';
                icon.innerHTML = `<svg
                                    stroke="currentColor"
                                    fill="none"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    aria-hidden="true"
                                    height="1em"
                                    width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                                                                        </svg>`;
            }
        }

        document.getElementById('input-password2').addEventListener('input', function() {
            let password = document.getElementById('input-password1');
            let saveBtn = document.getElementById('btn-save')
            let error = document.getElementById('error');
            saveBtn.disabled = false;
            error.className = '';
            error.innerHTML = ''
            // console.log(password.value.length)
            if (this.value === password.value) {
                console.log('same')
            } else {
                saveBtn.disabled = true;
                error.className = 'text-red-500 text-xs py-2';
                error.innerHTML = 'Confirm password not correct!'
            }
        })


        // Save Btn
        document.getElementById('btn-save').addEventListener('click', function() {
            document.getElementById('btn-save').disabled = true;

            // Submit the form
            document.getElementById('form-id').submit();
        })
    </script>
</body>

</html>