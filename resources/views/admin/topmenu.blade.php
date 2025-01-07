<div class="secondary-header secondary-header-light">
    <div class="horizontal-nav flex items-center px-6 container mx-auto">
        <div class="dropdown">
            <div class="dropdown-toggle">
                <a href="{{ url('/doctor/list') }}">
                    <div class="menu-item menu-item-hoverable">
                        <span class="text-2xl">
                            <svg
                                stroke="currentColor"
                                fill="none"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                height="1em"
                                width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </span>
                        <span>Doctor</span>
                    </div>
                </a>
            </div>
            <!-- <ul class="dropdown-menu">
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{url('/lead/list')}}">
                        <span>Lead(s)</span>
                    </a>
                </li>
            </ul> -->
        </div>
        <div class="dropdown">
            <div class="dropdown-toggle">
                <div class="menu-item menu-item-hoverable">
                    <span class="text-2xl">
                        <svg
                            stroke="currentColor"
                            fill="none"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                            height="1em"
                            width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path>
                        </svg>
                    </span>
                    <span>Test</span>
                </div>
            </div>
            <ul class="dropdown-menu">
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/patient/list') }}">
                        <span>List</span>
                    </a>
                </li>
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/patient/') }}">
                        <span>Add New</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="dropdown">
            <div class="dropdown-toggle">
                <div class="menu-item menu-item-hoverable">
                    <span class="text-2xl">
                        <svg
                            stroke="currentColor"
                            fill="none"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                            height="1em"
                            width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5"></path>
                        </svg>
                    </span>
                    <span>Laboratory</span>
                </div>
            </div>
            <ul class="dropdown-menu">
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/test/list') }}">
                        <span>Tests</span>
                    </a>
                </li>
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/test/category/list') }}">
                        <span>Category</span>
                    </a>
                </li>
                @if(Auth::user()->user_type == 1)
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/remark/list') }}">
                        <span>Remarks</span>
                    </a>
                </li>
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{ url('/lab/management/list') }}">
                        <span>Management</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
        @if(Auth::user()->user_type == 1)
        <div class="dropdown">
            <div class="dropdown-toggle">
                <div class="menu-item menu-item-hoverable">
                    <span class="text-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0020.25 18V6A2.25 2.25 0 0018 3.75H6A2.25 2.25 0 003.75 6v12A2.25 2.25 0 006 20.25z"></path>
                        </svg>
                    </span>
                    <span>User</span>
                </div>
            </div>
            <ul class="dropdown-menu">
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{url('/user/list')}}">
                        <span>List</span>
                    </a>
                </li>
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{url('/lead/add')}}">
                        <span>Add User</span>
                    </a>
                </li>
                <li data-menu-item="decked-project-dashboard" class="menu-item">
                    <a class="h-full w-full flex items-center" href="{{url('/uploader')}}">
                        <span>Excel Uploader</span>
                    </a>
                </li>

            </ul>
        </div>
        @endif
    </div>
</div>