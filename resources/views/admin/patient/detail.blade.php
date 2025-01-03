<!DOCTYPE html>
<html lang="en" dir="ltr" class="light">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Elstar - HTML Tailwind Admin Template</title>

		<!-- Core CSS -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<!-- App Start-->
		<div id="root">
			<!-- App Layout-->
			<div class="app-layout-classic flex flex-auto flex-col">
				<div class="flex flex-auto min-w-0">
					<!-- Side Nav start-->
					<div class="side-nav side-nav-light side-nav-expand">
						<div class="side-nav-header">
							<div class="logo px-6">
								<img src="img/logo/logo-light-full.png" alt="Elstar logo">
							</div>
						</div>
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
												<li data-menu-item="classic-project-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-project-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="classic-project-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-project-list.html">
														<span>Project List</span>
													</a>
												</li>
												<li data-menu-item="classic-scrum-board" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-scrum-board.html">
														<span>Scrum Board</span>
													</a>
												</li>
												<li data-menu-item="classic-issue" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-issue.html">
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
												<li data-menu-item="classic-crm-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-crm-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="classic-calendar" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-calendar.html">
														<span>Calendar</span>
													</a>
												</li>
												<li data-menu-item="classic-customers" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-customers.html">
														<span>Customers</span>
													</a>
												</li>
												<li data-menu-item="classic-customer-details" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-customer-details.html">
														<span>Customer Details</span>
													</a>
												</li>
												<li data-menu-item="classic-mail" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-mail.html">
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
												<li data-menu-item="classic-sales-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-sales-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="classic-product-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-product-list.html">
														<span>Product List</span>
													</a>
												</li>
												<li data-menu-item="classic-product-edit" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-product-edit.html">
														<span>Product Edit</span>
													</a>
												</li>
												<li data-menu-item="classic-new-product" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-new-product.html">
														<span>New Product</span>
													</a>
												</li>
												<li data-menu-item="classic-order-list" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-order-list.html">
														<span>Order List</span>
													</a>
												</li>
												<li data-menu-item="classic-order-details" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-order-details.html">
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
												<li data-menu-item="classic-crypto-dashboard" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-crypto-dashboard.html">
														<span>Dashboard</span>
													</a>
												</li>
												<li data-menu-item="classic-portfolio" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-portfolio.html">
														<span>Portfolio</span>
													</a>
												</li>
												<li data-menu-item="classic-market" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-market.html">
														<span>Market</span>
													</a>
												</li>
												<li data-menu-item="classic-wallets" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-wallets.html">
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
												<li data-menu-item="classic-help-center" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-help-center.html">
														<span>Help Center</span>
													</a>
												</li>
												<li data-menu-item="classic-article" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-article.html">
														<span>Article</span>
													</a>
												</li>
												<li data-menu-item="classic-manage-articles" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-manage-articles.html">
														<span>Manage Articles</span>
													</a>
												</li>
												<li data-menu-item="classic-edit-article" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-edit-article.html">
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
												<li data-menu-item="classic-settings" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-settings.html">
														<span>Settings</span>
													</a>
												</li>
												<li data-menu-item="classic-invoice" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-invoice.html">
														<span>Invoice</span>
													</a>
												</li>
												<li data-menu-item="classic-activity-log" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-activity-log.html">
														<span>Activity Log</span>
													</a>
												</li>
												<li data-menu-item="classic-kyc-form" class="menu-item">
													<a class="h-full w-full flex items-center"  href="classic-kyc-form.html">
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
												<li data-menu-item="classic-button" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-button.html">
														<span>Button</span>
													</a>
												</li>
												<li data-menu-item="classic-grid" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-grid.html">
														<span>Grid</span>
													</a>
												</li>
												<li data-menu-item="classic-typography" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-typography.html">
														<span>Typography</span>
													</a>
												</li>
												<li data-menu-item="classic-icons" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-icons.html">
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
												<li data-menu-item="classic-alert" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-alert.html">
														<span>Alert</span>
													</a>
												</li>
												<li data-menu-item="classic-dialog" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-dialog.html">
														<span>Dialog</span>
													</a>
												</li>
												<li data-menu-item="classic-drawer" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-drawer.html">
														<span>Drawer</span>
													</a>
												</li>
												<li data-menu-item="classic-progress" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-progress.html">
														<span>Progress</span>
													</a>
												</li>
												<li data-menu-item="classic-skeleton" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-skeleton.html">
														<span>Skeleton</span>
													</a>
												</li>
												<li data-menu-item="classic-spinner" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-spinner.html">
														<span>Spinner</span>
													</a>
												</li>
												<li data-menu-item="classic-toast" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-toast.html">
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
												<li data-menu-item="classic-avatar" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-avatar.html">
														<span>Avatar</span>
													</a>
												</li>
												<li data-menu-item="classic-badge" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-badge.html">
														<span>Badge</span>
													</a>
												</li>
												<li data-menu-item="classic-card" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-card.html">
														<span>Card</span>
													</a>
												</li>
												<li data-menu-item="classic-table" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-table.html">
														<span>Table</span>
													</a>
												</li>
												<li data-menu-item="classic-tag" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-tag.html">
														<span>Tag</span>
													</a>
												</li>
												<li data-menu-item="classic-timeline" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-timeline.html">
														<span>Timeline</span>
													</a>
												</li>
												<li data-menu-item="classic-tooltip" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-tooltip.html">
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
												<li data-menu-item="classic-checkbox" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-checkbox.html">
														<span>Checkbox</span>
													</a>
												</li>
												<li data-menu-item="classic-date-picker" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-date-picker.html">
														<span>Date Picker</span>
													</a>
												</li>
												<li data-menu-item="classic-form" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-form.html">
														<span>Form</span>
													</a>
												</li>
												<li data-menu-item="classic-input" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-input.html">
														<span>Input</span>
													</a>
												</li>
												<li data-menu-item="classic-input-group" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-input-group.html">
														<span>Input Group</span>
													</a>
												</li>
												<li data-menu-item="classic-radio" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-radio.html">
														<span>Radio</span>
													</a>
												</li>
												<li data-menu-item="classic-segment" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-segment.html">
														<span>Segment</span>
													</a>
												</li>
												<li data-menu-item="classic-select" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-select.html">
														<span>Select</span>
													</a>
												</li>
												<li data-menu-item="classic-switcher" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-switcher.html">
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
												<li data-menu-item="classic-dropdown" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-dropdown.html">
														<span>Dropdown</span>
													</a>
												</li>
												<li data-menu-item="classic-menu" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-menu.html">
														<span>Menu</span>
													</a>
												</li>
												<li data-menu-item="classic-pagination" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-pagination.html">
														<span>Pagination</span>
													</a>
												</li>
												<li data-menu-item="classic-steps" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-steps.html">
														<span>Steps</span>
													</a>
												</li>
												<li data-menu-item="classic-tabs" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-tabs.html">
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
												<li data-menu-item="classic-chart" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-chart.html">
														<span>Charts</span>
													</a>
												</li>
												<li data-menu-item="classic-maps" class="menu-item">
													<a class="h-full w-full flex items-center" href="classic-maps.html">
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
										<li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="classic-welcome.html">
												<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
												</svg>
												<span class="menu-item-text">Welcome</span>
											</a>
										</li>
										<li data-menu-item="classic-access-denied" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="classic-access-denied.html">
												<span class="menu-item-icon">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
													</svg>
												</span>
												<span class="menu-item-text">Access Denied</span>
											</a>
										</li>
									</ul>
								</div>
								<div class="menu-group">
									<div class="menu-title menu-title-transparent">
										Guide
									</div>
									<ul>
										<li data-menu-item="classic-documentation" class="menu-item menu-item-single mb-2">
											<a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank" >
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
					<!-- Side Nav end-->

					<!-- Header Nav start-->
					<div class="flex flex-col flex-auto min-h-screen min-w-0 relative w-full">
						<header class="header border-b border-gray-200 dark:border-gray-700">
							<div class="header-wrapper h-16">
								<!-- Header Nav Start start-->
								<div class="header-action header-action-start">
									<div id="side-nav-toggle" class="side-nav-toggle header-action-item header-action-item-hoverable">
										<div class="text-2xl">
											<svg class="side-nav-toggle-icon-expand" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
											<svg class="side-nav-toggle-icon-collapsed hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
											</svg>
										</div>
									</div>
									<div class="side-nav-toggle-mobile header-action-item header-action-item-hoverable" data-bs-toggle="modal" data-bs-target="#mobile-nav-drawer">
										<div class="text-2xl">
											<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
											</svg>
										</div>
									</div>
									<div class="header-search header-action-item header-action-item-hoverable text-2xl" data-bs-toggle="modal" data-bs-target="#dialog-search">
										<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24"
											height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
										</svg>
									</div>
								</div>
								<!-- Header Nav Start end-->
								<!-- Header Nav End start-->
								<div class="header-action header-action-end">
									<!-- Language Selector-->
									<div class="dropdown">
										<div class="dropdown-toggle" id="nav-lang-dropdown" data-bs-toggle="dropdown">
											<div class="header-action-item header-action-item-hoverable flex items-center">
												<span class="avatar avatar-circle" data-avatar-size="24">
													<img class="avatar-img avatar-circle" src="img/countries/us.png"
														loading="lazy" alt="">
												</span>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end">
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/us.png"
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
														<img class="avatar-img avatar-circle" src="img/countries/cn.png" loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">
														Chinese
													</span>
												</span>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/sp.png" loading="lazy" alt="">
													</span>
													<span class="ltr:ml-2 rtl:mr-2">
														Espanol
													</span>
												</span>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 justify-between h-[35px]">
												<span class="flex items-center">
													<span class="avatar avatar-circle" data-avatar-size="18">
														<img class="avatar-img avatar-circle" src="img/countries/ar.png" loading="lazy" alt="">
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
																<img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg" loading="lazy" alt="">
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
																<img class="avatar-img avatar-circle" src="img/avatars/thumb-4.jpg" loading="lazy" alt="">
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
													<a class="font-semibold cursor-pointer p-2 px-3 text-gray-600 hover:text-gray-900 dark:text-gray-200 dark:hover:text-white" href="classic-activity-log.html">
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
												<img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt=""></span>
												<div class="hidden md:block">
													<div class="text-xs capitalize">admin</div>
													<div class="font-bold">Carolyn Perkins</div>
												</div>
											</div>
										</div>
										<ul class="dropdown-menu bottom-end min-w-[240px]">
											<li class="menu-item-header">
												<div class="py-2 px-3 flex items-center gap-2">
													<span class="avatar avatar-circle avatar-md">
														<img class="avatar-img avatar-circle" src="img/avatars/thumb-1.jpg" loading="lazy" alt="">
													</span>
													<div>
														<div class="font-bold text-gray-900 dark:text-gray-100">Carolyn Perkins</div>
														<div class="text-xs">carolyn.p@elstar.com</div>
													</div>
												</div>
											</li>
											<li class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="classic-settings.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
														</svg>
													</span>
													<span>Profile</span>
												</a>
											</li>
											<li class="menu-item menu-item-hoverable mb-1 h-[35px]">
												<a class="flex gap-2 items-center" href="classic-settings.html">
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
												<a class="flex gap-2 items-center" href="classic-activity-log.html">
													<span class="text-xl opacity-50">
														<svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
															<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
														</svg>
													</span>
													<span>Activity Log</span>
												</a>
											</li>
											<li id="menu-item-29-2VewETdxAb" class="menu-item-divider"></li>
											<li class="menu-item menu-item-hoverable gap-2 h-[35px]">
												<span class="text-xl opacity-50">
													<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
													</svg>
												</span>
												<span>Sign Out</span>
											</li>
										</ul>
									</div>
								</div>
								<!-- Header Nav End end -->
							</div>
						</header>
						<!-- Popup start-->
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
																<div class="flex items-center border rounded-md dark:border-gray-600 cursor-pointer select-none w-100 ring-1 ring-primary-600 border-primary-600 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/classic.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/classic-dark.jpg" alt="" class="rounded-md hidden dark:block">
                                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" class="text-primary-600 absolute top-2 right-2 text-lg" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
																	</svg>
                                                                </div>
																<div class="mt-2 font-semibold">Classic</div>
															</div>
															<div class="text-center" id="layout-modern">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/modern.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/modern-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Modern</div>
															</div>
															<div class="text-center" id="layout-stackedSide">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/stackedSide.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/stackedSide-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Stacked Side</div>
															</div>
															<div class="text-center" id="layout-simple">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/simple.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/simple-dark.jpg" alt="" class="rounded-md hidden dark:block">
																</div>
																<div class="mt-2 font-semibold">Simple</div>
															</div>
															<div class="text-center" id="layout-decked">
																<div class="flex items-center border rounded-md border-gray-200 dark:border-gray-600 cursor-pointer select-none w-100 hover:ring-1 hover:ring-primary-600 hover:border-primary-600 relative min-h-[80px] w-full">
																	<img src="img/thumbs/layouts/decked.jpg" alt="" class="rounded-md dark:hidden">
																	<img src="img/thumbs/layouts/decked-dark.jpg" alt="" class="rounded-md hidden dark:block">
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
													xmlns="http://www.w3.org/2000/svg"
												>
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
																	xmlns="http://www.w3.org/2000/svg"
																>
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
															xmlns="http://www.w3.org/2000/svg"
														>
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
																	xmlns="http://www.w3.org/2000/svg"
																>
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
															xmlns="http://www.w3.org/2000/svg"
														>
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
																	xmlns="http://www.w3.org/2000/svg"
																>
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
															xmlns="http://www.w3.org/2000/svg"
														>
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
																	<li data-menu-item="classic-project-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-project-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-project-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-project-list.html">
																			<span>Project List</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-scrum-board" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-scrum-board.html">
																			<span>Scrum Board</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-issue" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-issue.html">
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
																	<li data-menu-item="classic-crm-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-crm-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-calendar" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-calendar.html">
																			<span>Calendar</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-customers" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-customers.html">
																			<span>Customers</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-customer-details" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-customer-details.html">
																			<span>Customer Details</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-mail" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-mail.html">
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
																	<li data-menu-item="classic-sales-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-sales-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-product-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-product-list.html">
																			<span>Product List</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-product-edit" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-product-edit.html">
																			<span>Product Edit</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-new-product" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-new-product.html">
																			<span>New Product</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-order-list" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-order-list.html">
																			<span>Order List</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-order-details" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-order-details.html">
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
																	<li data-menu-item="classic-crypto-dashboard" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-crypto-dashboard.html">
																			<span>Dashboard</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-portfolio" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-portfolio.html">
																			<span>Portfolio</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-market" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-market.html">
																			<span>Market</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-wallets" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-wallets.html">
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
																	<li data-menu-item="classic-help-center" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-help-center.html">
																			<span>Help Center</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-article" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-article.html">
																			<span>Article</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-manage-articles" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-manage-articles.html">
																			<span>Manage Articles</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-edit-article" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-edit-article.html">
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
																	<li data-menu-item="classic-settings" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-settings.html">
																			<span>Settings</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-invoice" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-invoice.html">
																			<span>Invoice</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-activity-log" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-activity-log.html">
																			<span>Activity Log</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-kyc-form" class="menu-item">
																		<a class="h-full w-full flex items-center"  href="classic-kyc-form.html">
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
																	<li data-menu-item="classic-button" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-button.html">
																			<span>Button</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-grid" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-grid.html">
																			<span>Grid</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-typography" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-typography.html">
																			<span>Typography</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-icons" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-icons.html">
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
																	<li data-menu-item="classic-alert" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-alert.html">
																			<span>Alert</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-dialog" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-dialog.html">
																			<span>Dialog</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-drawer" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-drawer.html">
																			<span>Drawer</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-progress" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-progress.html">
																			<span>Progress</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-skeleton" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-skeleton.html">
																			<span>Skeleton</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-spinner" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-spinner.html">
																			<span>Spinner</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-toast" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-toast.html">
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
																	<li data-menu-item="classic-avatar" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-avatar.html">
																			<span>Avatar</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-badge" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-badge.html">
																			<span>Badge</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-card" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-card.html">
																			<span>Card</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-table" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-table.html">
																			<span>Table</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-tag" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-tag.html">
																			<span>Tag</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-timeline" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-timeline.html">
																			<span>Timeline</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-tooltip" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-tooltip.html">
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
																	<li data-menu-item="classic-checkbox" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-checkbox.html">
																			<span>Checkbox</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-date-picker" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-date-picker.html">
																			<span>Date Picker</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-form" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-form.html">
																			<span>Form</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-input" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-input.html">
																			<span>Input</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-input-group" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-input-group.html">
																			<span>Input Group</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-radio" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-radio.html">
																			<span>Radio</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-segment" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-segment.html">
																			<span>Segment</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-select" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-select.html">
																			<span>Select</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-switcher" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-switcher.html">
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
																	<li data-menu-item="classic-dropdown" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-dropdown.html">
																			<span>Dropdown</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-menu" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-menu.html">
																			<span>Menu</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-pagination" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-pagination.html">
																			<span>Pagination</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-steps" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-steps.html">
																			<span>Steps</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-tabs" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-tabs.html">
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
																	<li data-menu-item="classic-chart" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-chart.html">
																			<span>Charts</span>
																		</a>
																	</li>
																	<li data-menu-item="classic-maps" class="menu-item">
																		<a class="h-full w-full flex items-center" href="classic-maps.html">
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
															<li data-menu-item="classic-welcome" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="classic-welcome.html">
																	<svg class="menu-item-icon" stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																		<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11"></path>
																	</svg>
																	<span class="menu-item-text">Welcome</span>
																</a>
															</li>
															<li data-menu-item="classic-access-denied" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="classic-access-denied.html">
																	<span class="menu-item-icon">
																		<svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
																			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
																		</svg>
																	</span>
																	<span class="menu-item-text">Access Denied</span>
																</a>
															</li>
														</ul>
													</div>
													<div class="menu-group">
														<div class="menu-title menu-title-transparent">
															Guide
														</div>
														<ul>
															<li data-menu-item="classic-documentation" class="menu-item menu-item-single mb-2">
																<a class="menu-item-link" href="http://www.themenate.net/elstar-html-doc" target="_blank" >
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
						<!-- Popup end-->
						<div class="h-full flex flex-auto flex-col justify-between">
							<!-- Content start -->
							<main class="h-full">
								<div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
                                    <h3 class="mb-4">Customer Details</h3>
                                    <div class="container mx-auto">
                                        <div class="flex flex-col xl:flex-row gap-4">
                                            <div class="card card-layout-frame">
                                                <div class="card-body">
                                                    <div class="flex flex-col xl:justify-between h-full 2xl:min-w-[360px] mx-auto">
                                                        <div class="flex xl:flex-col items-center gap-4">
                                                            <span class="avatar avatar-circle avatar-lg" data-avatar-size="90">
                                                                <img class="avatar-img avatar-circle" src="img/avatars/thumb-8.jpg" loading="lazy">
                                                            </span>
                                                            <h4 class="font-bold">Frederick Adams</h4>
                                                        </div>
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-1 gap-y-7 gap-x-4 mt-8">
                                                            <div>
                                                                <span>Email</span>
                                                                <p class="text-gray-700 dark:text-gray-200 font-semibold">iamfred@imaze.infotech.io</p>
                                                            </div>
                                                            <div>
                                                                <span>Phone</span>
                                                                <p class="text-gray-700 dark:text-gray-200 font-semibold">+12-123-1234</p>
                                                            </div>
                                                            <div>
                                                                <span>Location</span>
                                                                <p class="text-gray-700 dark:text-gray-200 font-semibold">London, UK</p>
                                                            </div>
                                                            <div>
                                                                <span>Date of birth</span>
                                                                <p class="text-gray-700 dark:text-gray-200 font-semibold">17/11/1993</p>
                                                            </div>
                                                            <div>
                                                                <span>Title</span>
                                                                <p class="text-gray-700 dark:text-gray-200 font-semibold">Compliance Manager</p>
                                                            </div>
                                                            <div class="mb-7">
                                                                <span>Social</span>
                                                                <div class="flex mt-4 gap-2">
                                                                    <button class="btn btn-default btn-icon btn-sm rounded-full">
                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="text-[#1773ea]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <button class="btn btn-default btn-icon btn-sm rounded-full">
                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-[#1da1f3]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <button class="btn btn-default btn-icon btn-sm rounded-full">
                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="text-[#0077b5]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
                                                                        </svg>
                                                                    </button>
                                                                    <button class="btn btn-default btn-icon btn-sm rounded-full">
                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="text-[#df0018]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-4 flex flex-col xl:flex-row gap-2">
                                                            <button class="btn btn-default w-full">
                                                                <span class="flex items-center justify-center">
                                                                    <span class="text-lg">
                                                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="ltr:ml-1 rtl:mr-1">Delete</span>
                                                                </span>
                                                            </button>
                                                            <button class="btn btn-solid w-full">
                                                                <span class="flex items-center justify-center">
                                                                    <span class="text-lg">
                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <span class="ltr:ml-1 rtl:mr-1">Edit</span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <div class="card adaptable-card">
                                                    <div class="card-body">
                                                        <div class="mb-8">
                                                            <h6 class="mb-4">Subscription</h6>
                                                            <div class="card mb-4 card-border">
                                                                <div class="card-body">
                                                                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                                                        <div class="flex items-center gap-3">
                                                                            <div>
                                                                                <span class="avatar avatar-circle avatar-md bg-emerald-500">
                                                                                    <span class="avatar-icon avatar-icon-md">
                                                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em"xmlns="http://www.w3.org/2000/svg">
                                                                                            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                </span>
                                                                            </div>
                                                                            <div>
                                                                                <div class="flex items-center">
                                                                                    <h6>Business board pro</h6>
                                                                                    <div class="tag bg-emerald-100 text-emerald-600 dark:bg-emerald-500/20 dark:text-emerald-100 rounded-md border-0 mx-2">
                                                                                        <span class="capitalize">active</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <span>Billing monthly</span>
                                                                                    <span> | </span>
                                                                                    <span>Next payment on 12/10/2021</span>
                                                                                    <span>
                                                                                        <span class="mx-1">for</span>
                                                                                        <span class="font-semibold text-gray-900 dark:text-gray-100">$59.90</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex gap-2">
                                                                            <button class="btn btn-plain btn-sm">Cancel plan</button>
                                                                            <button class="btn btn-default btn-sm">Update Plan</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-8">
                                                    <h6 class="mb-4">Payment History</h6>
                                                    <div class="overflow-x-auto">
                                                        <table class="table-default table-hover">
                                                            <thead>
                                                                <th>Reference</th>
                                                                <th>Product</th>
                                                                <th>Status</th>
                                                                <th>Date</th>
                                                                <th>Amount</th>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div>
                                                                            <span class="cursor-pointer">#36223</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>Mock premium pack</td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span class="badge-dot bg-amber-400"></span>
                                                                            <span class="ml-2 rtl:mr-2 capitalize">pending</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">12/10/2021</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center"><span>$39.90</span>
                    </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div>
                                                                            <span class="cursor-pointer">#34283</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>Business board pro subscription</td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span class="badge-dot bg-emerald-500"></span>
                                                                            <span class="ml-2 rtl:mr-2 capitalize">paid</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">11/13/2021</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span>$59.90</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div>
                                                                            <span class="cursor-pointer">#32234</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>Business board pro subscription</td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span class="badge-dot bg-emerald-500"></span>
                                                                            <span class="ml-2 rtl:mr-2 capitalize">paid</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">10/13/2021</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span>$59.90</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div>
                                                                            <span class="cursor-pointer">#31354</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>Business board pro subscription</td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span class="badge-dot bg-emerald-500"></span>
                                                                            <span class="ml-2 rtl:mr-2 capitalize">paid</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">09/13/2021</div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="flex items-center">
                                                                            <span>$59.90</span>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-4">Payment Methods</h6>
                                                    <div class="rounded-lg border border-gray-200 dark:border-gray-600">
                                                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-3 p-4 border-b border-gray-200 dark:border-gray-600">
                                                            <div class="flex items-center gap-3"><img src="img/others/img-8.png" alt="visa">
                                                                <div>
                                                                    <div class="flex items-center">
                                                                        <div class="text-gray-900 dark:text-gray-100 font-semibold">Frederick Adams •••• 0392</div>
                                                                        <div class="tag bg-sky-100 text-sky-600 dark:bg-sky-500/20 dark:text-sky-100 rounded-md border-0 mx-2">
                                                                            <span class="capitalize"> Primary </span>
                                                                        </div>
                                                                    </div>
                                                                    <span>Expired Dec 2025</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <button class="btn btn-plain btn-sm">Delete</button>
                                                                <button class="btn btn-default btn-sm">
                                                                    <span class="flex items-center justify-center">
                                                                        <span class="text-lg">
                                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="ltr:ml-1 rtl:mr-1">Edit</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-3 p-4">
                                                            <div class="flex items-center gap-3"><img src="img/others/img-9.png" alt="master">
                                                                <div>
                                                                    <div class="flex items-center">
                                                                        <div class="text-gray-900 dark:text-gray-100 font-semibold">Frederick Adams •••• 8461</div>
                                                                    </div><span>Expired Jun 2025</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <button class="btn btn-plain btn-sm">Delete</button>
                                                                <button class="btn btn-default btn-sm">
                                                                    <span class="flex items-center justify-center">
                                                                        <span class="text-lg">
                                                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <span class="ltr:ml-1 rtl:mr-1">Edit</span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
							</main>
							<!-- Content end -->
							<footer class="footer flex flex-auto items-center h-16 px-4 sm:px-6 md:px-8">
								<div class="flex items-center justify-between flex-auto w-full">
									<span>Copyright © 2023 <span class="font-semibold">Elstar</span> All rights reserved.</span>
									<div>
										<a class="text-gray" href="#">Term &amp; Conditions</a>
										<span class="mx-2 text-muted"> | </span>
										<a class="text-gray" href="#">Privacy &amp; Policy</a>
									</div>
								</div>
							</footer>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Core Vendors JS -->
		<script src="js/vendors.min.js"></script>

		<!-- Other Vendors JS -->

		<!-- Page js -->

		<!-- Core JS -->
		<script src="js/app.min.js"></script>
	</body>

</html>