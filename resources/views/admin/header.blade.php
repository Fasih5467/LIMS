<header class="header border-b border-gray-200 dark:border-gray-700">
	<div class="header-wrapper h-16 container mx-auto">
		<!-- Header Nav Start start-->
		<div class="header-action header-action-start">
			<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
				<div class="text-2xl">
					<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
					</svg>
				</div>
			</div>
			<div class="logo px-3 hidden md:flex">
				<img src="{{url('/assets/img/logo/logo-light-full.png')}}" alt="Elstar logo">
			</div>
		</div>
		<!-- Header Nav Start end-->
		<!-- Header Nav End start -->
		<div class="header-action header-action-end">
			<!-- Search -->
			<div class="header-search header-action-item header-action-item-hoverable text-2xl" data-bs-toggle="modal" data-bs-target="#dialog-search">
				<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
					height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
				</svg>
			</div>
			<!-- Language Selector-->
			<div class="dropdown">
				<div class="dropdown-toggle" id="nav-lang-dropdown" data-bs-toggle="dropdown">
					<div class="header-action-item header-action-item-hoverable flex items-center">
						<span class="avatar avatar-circle" data-avatar-size="24">
							<img class="avatar-img avatar-circle" src="{{url('assets/img/countries/us.png')}}"
								loading="lazy" alt="">
						</span>
					</div>
				</div>
				<ul class="dropdown-menu bottom-end">
					<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
						<span class="flex items-center">
							<span class="avatar avatar-circle" data-avatar-size="18">
								<img class="avatar-img avatar-circle" src="{{url('assets/img/countries/us.png')}}"
									loading="lazy" alt="">
							</span>
							<span class="ltr:ml-2 rtl:mr-2">English</span>
						</span>
						<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-emerald-500 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
						</svg>
					</li>
					<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
						<span class="flex items-center">
							<span class="avatar avatar-circle" data-avatar-size="18">
								<img class="avatar-img avatar-circle" src="{{url('assets/img/countries/cn.png')}}" loading="lazy" alt="">
							</span>
							<span class="ltr:ml-2 rtl:mr-2">
								Chinese
							</span>
						</span>
					</li>
					<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
						<span class="flex items-center">
							<span class="avatar avatar-circle" data-avatar-size="18">
								<img class="avatar-img avatar-circle" src="{{url('assets/img/countries/sp.png')}}" loading="lazy" alt="">
							</span>
							<span class="ltr:ml-2 rtl:mr-2">
								Espanol
							</span>
						</span>
					</li>
					<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
						<span class="flex items-center">
							<span class="avatar avatar-circle" data-avatar-size="18">
								<img class="avatar-img avatar-circle" src="{{url('assets/img/countries/ar.png')}}" loading="lazy" alt="">
							</span>
							<span class="ltr:ml-2 rtl:mr-2">
								Arabic
							</span>
						</span>
					</li>
				</ul>
			</div>
			<!-- Notification-->
			<div class="dropdown">
				<div class="dropdown-toggle" id="nav-notification-dropdown" data-bs-toggle="dropdown">
					<div class="text-2xl header-action-item header-action-item-hoverable">
						<span class="badge-wrapper">
							<span class="badge-dot badge-inner" style="top: 3px; right: 6px;"></span>
							<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
							</svg>
						</span>
					</div>
				</div>
				<ul class="dropdown-menu p-0 min-w-[280px] md:min-w-[340px]">
					<li class="menu-item-header">
						<div class="border-b border-gray-200 dark:border-gray-600 px-4 py-2 flex items-center justify-between">
							<h6>Notifications</h6>
							<span class="tooltip-wrapper">
								<button class="button bg-transparent border border-transparent hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-circle h-9 w-9 inline-flex items-center justify-center text-lg">
									<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" class="text-xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76"></path>
									</svg>
								</button>
							</span>
						</div>
					</li>
					<li class="relative">
						<div class="max-h-[288px] overflow-y-auto relative notification-scroll">
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
								<div>
									<span class="avatar avatar-circle avatar-md">
										<img class="avatar-img avatar-circle" src="{{url('assets/img/avatars/thumb-8.jpg')}}" loading="lazy" alt="">
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span class="font-semibold heading-text">Jean Bowman </span>
										<span>invited you to new project.</span>
									</div>
									<span class="text-xs">4 minutes ago</span>
								</div>
								<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
								<div>
									<span class="avatar avatar-circle avatar-md bg-primary-600 dark:bg-primary-600">
										<span class="avatar-string avatar-inner-md">VK</span>
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span class="font-semibold heading-text">Vickie Kim </span>
										<span>comment in your ticket.</span>
									</div>
									<span class="text-xs">20 minutes ago</span>
								</div>
								<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
								<div>
									<span class="avatar avatar-circle avatar-md bg-blue-100 text-blue-600 dark:bg-blue-500/20 dark:text-blue-100">
										<span class="avatar-icon avatar-icon-md">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
													d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
												</path>
											</svg>
										</span>
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span>Please submit your daily report.</span>
									</div>
									<span class="text-xs">1 hour ago</span>
								</div>
								<span class="badge-dot bg-primary-600  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
								<div>
									<span class="avatar avatar-circle avatar-md bg-red-100 text-red-600 dark:bg-red-500/20 dark:text-red-100">
										<span class="avatar-icon avatar-icon-md">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
											</svg>
										</span>
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span>Your request was rejected</span>
									</div>
									<span class="text-xs">2 days ago</span>
								</div>
								<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20  border-b border-gray-200 dark:border-gray-600">
								<div>
									<span class="avatar avatar-circle avatar-md">
										<img class="avatar-img avatar-circle" src="{{url('assets/img/avatars/thumb-4.jpg')}}" loading="lazy" alt="">
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span class="font-semibold heading-text">Jennifer Ruiz </span>
										<span>mentioned your in comment.</span>
									</div>
									<span class="text-xs">2 days ago</span>
								</div>
								<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
							<div class="relative flex px-4 py-4 cursor-pointer hover:bg-gray-50 active:bg-gray-100 dark:hover:bg-black dark:hover:bg-opacity-20">
								<div>
									<span class="avatar avatar-circle avatar-md bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100">
										<span class="avatar-icon avatar-icon-md">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
											</svg>
										</span>
									</span>
								</div>
								<div class="ltr:ml-3 rtl:mr-3">
									<div>
										<span>Your request has been approved.</span>
									</div>
									<span class="text-xs">4 minutes ago</span>
								</div>
								<span class="badge-dot bg-gray-300  absolute top-4 ltr:right-4 rtl:left-4 mt-1.5"></span>
							</div>
						</div>
					</li>
					<li class="menu-item-header">
						<div class="flex justify-center border-t border-gray-200 dark:border-gray-600 px-4 py-2">
							<a class="font-semibold cursor-pointer p-2 px-3 text-gray-600 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white" href="modern-activity-log.html">
								View All Activity
							</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- Config-->
			<div class="text-2xl header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#nav-config">
				<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
				</svg>
			</div>
			<!-- User Dropdown-->
			<div class="dropdown">
				<div class="dropdown-toggle" id="user-dropdown" data-bs-toggle="dropdown">
					<div class="header-action-item flex items-center gap-2">
						<span class="avatar avatar-circle" data-avatar-size="32" style="width: 32px">
							<img class="avatar-img avatar-circle" src="{{url('assets/img/avatars/thumb-1.jpg')}}" loading="lazy" alt=""></span>
						<div class="hidden md:block">
							<div class="text-xs capitalize">{{(Auth::user()->user_type == 1)? 'admin':'user';}}</div>
							<div class="font-bold capitalize">{{ Auth::user()->name }}</div>
						</div>
					</div>
				</div>
				<ul class="dropdown-menu bottom-end min-w-[240px]">
					<li class="menu-item-header">
						<div class="py-2 px-3 flex items-center gap-2">
							<span class="avatar avatar-circle avatar-md">
								<img class="avatar-img avatar-circle" src="{{url('assets/img/avatars/thumb-1.jpg')}}" loading="lazy" alt="">
							</span>
							<div>
								<div class="font-bold text-gray-900 dark:text-gray-100">{{ Auth::user()->name }}</div>
								<div class="text-xs">{{ Auth::user()->email }}</div>
							</div>
						</div>
					</li>
					<li class="menu-item-divider"></li>
					<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
						<a class="flex gap-2 items-center" href="modern-settings.html">
							<span class="text-xl opacity-50">
								<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
								</svg>
							</span>
							<span>Profile</span>
						</a>
					</li>
					<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
						<a class="flex gap-2 items-center" href="modern-settings.html">
							<span class="text-xl opacity-50">
								<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
								</svg>
							</span>
							<span>Account Setting</span>
						</a>
					</li>
					<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
						<a class="flex gap-2 items-center" href="modern-activity-log.html">
							<span class="text-xl opacity-50">
								<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
									<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
								</svg>
							</span>
							<span>Activity Log</span>
						</a>
					</li>
					<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
					<a href="{{url('/logout')}}">
						<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
							<span class="text-xl opacity-50">
								<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
								</svg>
							</span>
							<span>Sign Out</span>
						</li>
					</a>
				</ul>
			</div>
		</div>
		<!-- Header Nav End start end -->
	</div>
</header>

<div class="modal fade" id="nav-config" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog drawer drawer-end">
		<div class="drawer-content">
			<div class="drawer-header">
				<h4>Theme Config</h4>
				<span class="close-btn close-btn-default" role="button" data-bs-dismiss="modal">
					<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</span>
			</div>
			<div class="drawer-body">
				<div class="flex flex-col h-full justify-between">
					<div class="flex flex-col gap-y-10 mb-6">
						<div class="flex items-center justify-between">
							<div>
								<h6>Dark Mode</h6>
								<span>Switch theme to dark mode</span>
							</div>
							<div>
								<label class="switcher">
									<input name="dark-mode-toggle" type="checkbox" value="">
									<span class="switcher-toggle"></span>
								</label>
							</div>
						</div>
						<div class="flex items-center justify-between">
							<div>
								<h6>Direction</h6>
								<span>Select a direction</span>
							</div>
							<div class="input-group">
								<button id="dir-ltr-button" class="btn bg-gray-100 dark:bg-gray-500 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
									LTR
								</button>
								<button id="dir-rtl-button" class="btn bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 radius-round h-9 px-3 py-2 text-sm">
									RTL
								</button>
							</div>
						</div>
						<div>
							<h6 class="mb-3">Nav Mode</h6>
							<div class="inline-flex">
								<label class="radio-label inline-flex mr-3" for="nav-mode-radio-default">
									<input id="nav-mode-radio-default" type="radio" value="default" name="nav-mode-radio-group" class="radio text-primary-600" checked>
									<span>Default</span>
								</label>
								<label class="radio-label inline-flex mr-3" for="nav-mode-radio-themed">
									<input id="nav-mode-radio-themed" type="radio" value="themed" name="nav-mode-radio-group" class="radio text-primary-600">
									<span>Themed</span>
								</label>
							</div>
						</div>
						<div>
							<h6 class="mb-3">Nav Mode</h6>
							<select id="theme-select" class="input input-sm focus:ring-primary-600 focus-within:ring-primary-600 focus-within:border-primary-600 focus:border-primary-600">
								<option value="primary" selected>Indigo</option>
								<option value="red">Red</option>
								<option value="orange">Orange</option>
								<option value="amber">Amber</option>
								<option value="yellow">Yellow</option>
								<option value="lime">Lime</option>
								<option value="green">Green</option>
								<option value="emerald">Emerald</option>
								<option value="teal">Teal</option>
								<option value="cyan">Cyan</option>
								<option value="sky">Sky</option>
								<option value="blue">Blue</option>
								<option value="violet">Violet</option>
								<option value="purple">Purple</option>
								<option value="fuchsia">Fuchsia</option>
								<option value="pink">Pink</option>
								<option value="rose">Rose</option>
							</select>
						</div>
						<div>
							<h6 class="mb-3">Layout</h6>
							<div class="segment w-full">
								<div class="grid grid-cols-3 gap-4 w-full">
									<div class="text-center" id="layout-classic">
										<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
											<img src="{{url('assets/img/thumbs/layouts/classic.jpg')}}" alt="" class="rounded-md dark:hidden">
											<img src="{{url('assets/img/thumbs/layouts/classic-dark.jpg')}}" alt="" class="rounded-md hidden dark:block">
										</div>
										<div class="mt-2 font-semibold">Classic</div>
									</div>
									<div class="text-center" id="layout-modern">
										<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
											<img src="{{url('assets/img/thumbs/layouts/modern.jpg')}}" alt="" class="rounded-md dark:hidden">
											<img src="{{url('assets/img/thumbs/layouts/modern-dark.jpg')}}" alt="" class="rounded-md hidden dark:block">
										</div>
										<div class="mt-2 font-semibold">Modern</div>
									</div>
									<div class="text-center" id="layout-stackedSide">
										<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
											<img src="{{url('assets/img/thumbs/layouts/stackedSide.jpg')}}" alt="" class="rounded-md dark:hidden">
											<img src="{{url('assets/img/thumbs/layouts/stackedSide-dark.jpg')}}" alt="" class="rounded-md hidden dark:block">
										</div>
										<div class="mt-2 font-semibold">Stacked Side</div>
									</div>
									<div class="text-center" id="layout-simple">
										<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
											<img src="{{url('assets/img/thumbs/layouts/simple.jpg')}}" alt="" class="rounded-md dark:hidden">
											<img src="{{url('assets/img/thumbs/layouts/simple-dark.jpg')}}" alt="" class="rounded-md hidden dark:block">
										</div>
										<div class="mt-2 font-semibold">Simple</div>
									</div>
									<div class="text-center" id="layout-decked">
										<div class="flex items-center border rounded-md dark:border-gray-600 cursor-pointer select-none w-100 ring-1 ring-primary-600 border-primary-600 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
											<img src="{{url('assets/img/thumbs/layouts/decked.jpg')}}" alt="" class="rounded-md dark:hidden">
											<img src="{{url('assets/img/thumbs/layouts/decked-dark.jpg')}}" alt="" class="rounded-md hidden dark:block">
											<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-primary-600 absolute top-2 right-2 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
											</svg>
										</div>
										<div class="mt-2 font-semibold">Decked</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="dialog-search" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog dialog">
		<div class="dialog-content p-0">
			<div>
				<div class="px-4 flex items-center justify-between border-b border-gray-200 dark:border-gray-600">
					<div class="flex items-center">
						<svg
							stroke="currentColor"
							fill="none"
							stroke-width="2"
							viewBox="0 0 24 24"
							aria-hidden="true"
							class="text-xl"
							height="1em"
							width="1em"
							xmlns="http://www.w3.org/2000/svg">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
						</svg>
						<input class="ring-0 outline-none block w-full p-4 text-base bg-transparent text-gray-900 dark:text-gray-100" placeholder="Search...">
					</div>
					<button class="button bg-white border border-gray-300 dark:bg-gray-700 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 active:bg-gray-100 dark:active:bg-gray-500 dark:active:border-gray-500 text-gray-600 dark:text-gray-100 rounded font-semibold h-7 px-3 py-1 text-xs" data-bs-dismiss="modal">Esc</button>
				</div>
				<div class="py-6 px-5 max-h-[550px] overflow-y-auto">
					<div class="mb-6">
						<h6 class="mb-3">Recommended</h6>
						<a href="http://www.themenate.net/docs/documentation/introduction">
							<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
								<div class="flex items-center">
									<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
										<svg
											stroke="currentColor"
											fill="none"
											stroke-width="2"
											viewBox="0 0 24 24"
											aria-hidden="true"
											height="1em"
											width="1em"
											xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
										</svg>
									</div>
									<div class="text-gray-900 dark:text-gray-300">
										<span>
											<span>Documentation</span>
										</span>
									</div>
								</div>
								<svg
									stroke="currentColor"
									fill="currentColor"
									stroke-width="0"
									viewBox="0 0 20 20"
									aria-hidden="true"
									class="text-lg"
									height="1em"
									width="1em"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
								</svg>
							</div>
						</a>
						<a href="http://www.themenate.net/docs/changelog">
							<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
								<div class="flex items-center">
									<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
										<svg
											stroke="currentColor"
											fill="none"
											stroke-width="2"
											viewBox="0 0 24 24"
											aria-hidden="true"
											height="1em"
											width="1em"
											xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
										</svg>
									</div>
									<div class="text-gray-900 dark:text-gray-300">
										<span>
											<span>Changelog</span>
										</span>
									</div>
								</div>
								<svg
									stroke="currentColor"
									fill="currentColor"
									stroke-width="0"
									viewBox="0 0 20 20"
									aria-hidden="true"
									class="text-lg"
									height="1em"
									width="1em"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
								</svg>
							</div>
						</a>
						<a href="http://www.themenate.net/ui-components/button">
							<div class="flex items-center justify-between rounded-lg p-3.5 cursor-pointer user-select bg-gray-50 dark:bg-gray-700/60 hover:bg-gray-100 dark:hover:bg-gray-700/90 mb-3">
								<div class="flex items-center">
									<div class="mr-4 rounded-md ring-1 ring-slate-900/5 shadow-sm text-xl group-hover:shadow h-6 w-6 flex items-center justify-center bg-white dark:bg-gray-700 text-primary-600 dark:text-gray-100">
										<svg
											stroke="currentColor"
											fill="none"
											stroke-width="2"
											viewBox="0 0 24 24"
											aria-hidden="true"
											height="1em"
											width="1em"
											xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
										</svg>
									</div>
									<div class="text-gray-900 dark:text-gray-300">
										<span>
											<span>Button</span>
										</span>
									</div>
								</div>
								<svg
									stroke="currentColor"
									fill="currentColor"
									stroke-width="0"
									viewBox="0 0 20 20"
									aria-hidden="true"
									class="text-lg"
									height="1em"
									width="1em"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
								</svg>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="mobile-nav-drawer" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog drawer drawer-start !w-[330px]">
		<div class="drawer-content">
			<div class="drawer-header">
				<h4>Navigation</h4>
				<span class="close-btn" role="button" data-bs-dismiss="modal">
					<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</span>
			</div>
			<div class="drawer-body p-0">
				<div class="side-nav-mobile">
					<div class="side-nav-content relative side-nav-scroll">
						<nav class="menu menu-transparent px-4 pb-4">
							<div class="menu-group">
								<div class="menu-title">Apps</div>
								<ul>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
											</svg>
											<span class="menu-item-text">Project</span>
										</div>
										<ul>
											<li data-menu-item="decked-project-dashboard" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-project-dashboard.html">
													<span>Dashboard</span>
												</a>
											</li>
											<li data-menu-item="decked-project-list" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-project-list.html">
													<span>Project List</span>
												</a>
											</li>
											<li data-menu-item="decked-scrum-board" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-scrum-board.html">
													<span>Scrum Board</span>
												</a>
											</li>
											<li data-menu-item="decked-issue" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-issue.html">
													<span>Issue</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
											</svg>
											<span class="menu-item-text">CRM</span>
										</div>
										<ul>
											<li data-menu-item="decked-crm-dashboard" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-crm-dashboard.html">
													<span>Dashboard</span>
												</a>
											</li>
											<li data-menu-item="decked-calendar" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-calendar.html">
													<span>Calendar</span>
												</a>
											</li>
											<li data-menu-item="decked-customers" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-customers.html">
													<span>Customers</span>
												</a>
											</li>
											<li data-menu-item="decked-customer-details" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-customer-details.html">
													<span>Customer Details</span>
												</a>
											</li>
											<li data-menu-item="decked-mail" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-mail.html">
													<span>Mail</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
											</svg>
											<span class="menu-item-text">Sales</span>
										</div>
										<ul>
											<li data-menu-item="decked-sales-dashboard" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-sales-dashboard.html">
													<span>Dashboard</span>
												</a>
											</li>
											<li data-menu-item="decked-product-list" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-product-list.html">
													<span>Product List</span>
												</a>
											</li>
											<li data-menu-item="decked-product-edit" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-product-edit.html">
													<span>Product Edit</span>
												</a>
											</li>
											<li data-menu-item="decked-new-product" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-new-product.html">
													<span>New Product</span>
												</a>
											</li>
											<li data-menu-item="decked-order-list" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-order-list.html">
													<span>Order List</span>
												</a>
											</li>
											<li data-menu-item="decked-order-details" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-order-details.html">
													<span>Order Details</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
											<span class="menu-item-text">Crypto</span>
										</div>
										<ul>
											<li data-menu-item="decked-crypto-dashboard" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-crypto-dashboard.html">
													<span>Dashboard</span>
												</a>
											</li>
											<li data-menu-item="decked-portfolio" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-portfolio.html">
													<span>Portfolio</span>
												</a>
											</li>
											<li data-menu-item="decked-market" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-market.html">
													<span>Market</span>
												</a>
											</li>
											<li data-menu-item="decked-wallets" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-wallets.html">
													<span>Wallets</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
											</svg>
											<span class="menu-item-text">Knowledge Base</span>
										</div>
										<ul>
											<li data-menu-item="decked-help-center" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-help-center.html">
													<span>Help Center</span>
												</a>
											</li>
											<li data-menu-item="decked-article" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-article.html">
													<span>Article</span>
												</a>
											</li>
											<li data-menu-item="decked-manage-articles" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-manage-articles.html">
													<span>Manage Articles</span>
												</a>
											</li>
											<li data-menu-item="decked-edit-article" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-edit-article.html">
													<span>Edit Article</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
											</svg>
											<span class="menu-item-text">Account</span>
										</div>
										<ul>
											<li data-menu-item="decked-settings" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-settings-log">
													<span>Settings</span>
												</a>
											</li>
											<li data-menu-item="decked-invoice" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-invoice.html">
													<span>Invoice</span>
												</a>
											</li>
											<li data-menu-item="decked-activity-log" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-activity-log.html">
													<span>Activity Log</span>
												</a>
											</li>
											<li data-menu-item="decked-kyc-form" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-kyc-form.html">
													<span>KYC Form</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="menu-group">
								<div class="menu-title">UI Components</div>
								<ul>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
											</svg>
											<span class="menu-item-text">Common</span>
										</div>
										<ul>
											<li data-menu-item="decked-button" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-button.html">
													<span>Button</span>
												</a>
											</li>
											<li data-menu-item="decked-grid" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-grid.html">
													<span>Grid</span>
												</a>
											</li>
											<li data-menu-item="decked-typography" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-typography.html">
													<span>Typography</span>
												</a>
											</li>
											<li data-menu-item="decked-icons" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-icons.html">
													<span>Icons</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
											</svg>
											<span class="menu-item-text">Feedback</span>
										</div>
										<ul>
											<li data-menu-item="decked-alert" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-alert.html">
													<span>Alert</span>
												</a>
											</li>
											<li data-menu-item="decked-dialog" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-dialog.html">
													<span>Dialog</span>
												</a>
											</li>
											<li data-menu-item="decked-drawer" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-drawer.html">
													<span>Drawer</span>
												</a>
											</li>
											<li data-menu-item="decked-progress" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-progress.html">
													<span>Progress</span>
												</a>
											</li>
											<li data-menu-item="decked-skeleton" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-skeleton.html">
													<span>Skeleton</span>
												</a>
											</li>
											<li data-menu-item="decked-spinner" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-spinner.html">
													<span>Spinner</span>
												</a>
											</li>
											<li data-menu-item="decked-toast" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-toast.html">
													<span>Toast</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
											</svg>
											<span class="menu-item-text">Data Display</span>
										</div>
										<ul>
											<li data-menu-item="decked-avatar" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-avatar.html">
													<span>Avatar</span>
												</a>
											</li>
											<li data-menu-item="decked-badge" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-badge.html">
													<span>Badge</span>
												</a>
											</li>
											<li data-menu-item="decked-card" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-card.html">
													<span>Card</span>
												</a>
											</li>
											<li data-menu-item="decked-table" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-table.html">
													<span>Table</span>
												</a>
											</li>
											<li data-menu-item="decked-tag" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-tag.html">
													<span>Tag</span>
												</a>
											</li>
											<li data-menu-item="decked-timeline" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-timeline.html">
													<span>Timeline</span>
												</a>
											</li>
											<li data-menu-item="decked-tooltip" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-tooltip.html">
													<span>Tooltip</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
											</svg>
											<span class="menu-item-text">Forms</span>
										</div>
										<ul>
											<li data-menu-item="decked-checkbox" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-checkbox.html">
													<span>Checkbox</span>
												</a>
											</li>
											<li data-menu-item="decked-date-picker" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-date-picker.html">
													<span>Date Picker</span>
												</a>
											</li>
											<li data-menu-item="decked-form" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-form.html">
													<span>Form</span>
												</a>
											</li>
											<li data-menu-item="decked-input" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-input.html">
													<span>Input</span>
												</a>
											</li>
											<li data-menu-item="decked-input-group" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-input-group.html">
													<span>Input Group</span>
												</a>
											</li>
											<li data-menu-item="decked-radio" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-radio.html">
													<span>Radio</span>
												</a>
											</li>
											<li data-menu-item="decked-segment" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-segment.html">
													<span>Segment</span>
												</a>
											</li>
											<li data-menu-item="decked-select" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-select.html">
													<span>Select</span>
												</a>
											</li>
											<li data-menu-item="decked-switcher" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-switcher.html">
													<span>Switcher</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
											</svg>
											<span class="menu-item-text">Navigation</span>
										</div>
										<ul>
											<li data-menu-item="decked-dropdown" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-dropdown.html">
													<span>Dropdown</span>
												</a>
											</li>
											<li data-menu-item="decked-menu" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-menu.html">
													<span>Menu</span>
												</a>
											</li>
											<li data-menu-item="decked-pagination" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-pagination.html">
													<span>Pagination</span>
												</a>
											</li>
											<li data-menu-item="decked-steps" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-steps.html">
													<span>Steps</span>
												</a>
											</li>
											<li data-menu-item="decked-tabs" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-tabs.html">
													<span>Tabs</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
											</svg>
											<span class="menu-item-text">Graph</span>
										</div>
										<ul>
											<li data-menu-item="decked-chart" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-chart.html">
													<span>Charts</span>
												</a>
											</li>
											<li data-menu-item="decked-maps" class="menu-item">
												<a class="h-full w-full flex items-center" href="decked-maps.html">
													<span>Maps</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="menu-group">
								<div class="menu-title">Authentication</div>
								<ul>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
											</svg>
											<span class="menu-item-text">Sign In</span>
										</div>
										<ul>
											<li data-menu-item="signin-simple" class="menu-item">
												<a class="h-full w-full flex items-center" href="signin-simple.html">
													<span>Simple</span>
												</a>
											</li>
											<li data-menu-item="signin-side" class="menu-item">
												<a class="h-full w-full flex items-center" href="signin-side.html">
													<span>Side</span>
												</a>
											</li>
											<li data-menu-item="signin-cover" class="menu-item">
												<a class="h-full w-full flex items-center" href="signin-cover.html">
													<span>Cover</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
											</svg>
											<span class="menu-item-text">Sign Up</span>
										</div>
										<ul>
											<li data-menu-item="signup-simple" class="menu-item">
												<a class="h-full w-full flex items-center" href="signup-simple.html">
													<span>Simple</span>
												</a>
											</li>
											<li data-menu-item="signup-side" class="menu-item">
												<a class="h-full w-full flex items-center" href="signup-side.html">
													<span>Side</span>
												</a>
											</li>
											<li data-menu-item="signup-cover" class="menu-item">
												<a class="h-full w-full flex items-center" href="signup-cover.html">
													<span>Cover</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
											</svg>
											<span class="menu-item-text">Forgot Password</span>
										</div>
										<ul>
											<li data-menu-item="forget-password-simple" class="menu-item">
												<a class="h-full w-full flex items-center" href="forget-password-simple.html">
													<span>Simple</span>
												</a>
											</li>
											<li data-menu-item="forget-password-side" class="menu-item">
												<a class="h-full w-full flex items-center" href="forget-password-side.html">
													<span>Side</span>
												</a>
											</li>
											<li data-menu-item="forget-password-cover" class="menu-item">
												<a class="h-full w-full flex items-center" href="forget-password-cover.html">
													<span>Cover</span>
												</a>
											</li>
										</ul>
									</li>
									<li class="menu-collapse">
										<div class="menu-collapse-item">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
											</svg>
											<span class="menu-item-text">Reset Password</span>
										</div>
										<ul>
											<li data-menu-item="reset-password-simple" class="menu-item">
												<a class="h-full w-full flex items-center" href="reset-password-simple.html">
													<span>Simple</span>
												</a>
											</li>
											<li data-menu-item="reset-password-side" class="menu-item">
												<a class="h-full w-full flex items-center" href="reset-password-side.html">
													<span>Side</span>
												</a>
											</li>
											<li data-menu-item="reset-password-cover" class="menu-item">
												<a class="h-full w-full flex items-center" href="reset-password-cover.html">
													<span>Cover</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="menu-group">
								<div class="menu-title menu-title-transparent">
									Pages
								</div>
								<ul>
									<li data-menu-item="decked-welcome" class="menu-item menu-item-single mb-2">
										<a class="menu-item-link" href="decked-welcome.html">
											<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
											</svg>
											<span class="menu-item-text">Welcome</span>
										</a>
									</li>
									<li data-menu-item="decked-access-denied" class="menu-item menu-item-single mb-2">
										<a class="menu-item-link" href="decked-access-denied.html">
											<span class="menu-item-icon">
												<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
												</svg>
											</span>
											` <span class="menu-item-text">Access Denied</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="menu-group">
								<div class="menu-title menu-title-transparent">
									Guide
								</div>
								<ul>
									<li data-menu-item="decked-documentation" class="menu-item menu-item-single mb-2">
										<a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank">
											<span class="menu-item-icon">
												<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
												</svg>
											</span>
											<span class="menu-item-text">Documentation</span>
										</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>