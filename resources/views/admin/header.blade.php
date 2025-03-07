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
				<img src="{{url('/assets/img/logo/1737641220.jpg')}}" alt="Elstar logo">
			</div>
		</div>
		<!-- Header Nav Start end-->
		<!-- Header Nav End start -->
		<div class="header-action header-action-end">
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
								<div class="font-bold text-gray-900 dark:text-gray-100">{{ ucfirst(Auth::user()->name) }}</div>
								<div class="text-xs">{{ Auth::user()->email }}</div>
							</div>
						</div>
					</li>
					<li class="menu-item-divider"></li>
					<!-- <li class="menu-item menu-item-hoverable mb-1 h-[35px]">
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
					</li> -->
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