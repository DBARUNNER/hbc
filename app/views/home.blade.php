@extends('layouts.master')


@section('sidebare')
	<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active">
					<a href="{{ URL::route('home-get') }}">
					<i class="icon-home"></i>
					<span class="title" clas="active">صفحه اصلی</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li>
					<a href="{{ URL::route('shop-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">دوکان</span>
					<span class="arrow "></span>
					</a>
				</li>
				
				<li>
					<a href="{{ URL::route('block-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">بلاک</span>
					<span class="arrow "></span>
					</a>
				</li>
				
				<li>
					<a href="{{ URL::route('employee-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">کارمندان</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li>
					<a href="{{ URL::route('dailyPayment-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">مصارف روزانه</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li>
					<a href="{{ URL::route('reports-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">گزارشات</span>
					<span class="arrow "></span>
					</a>
				</li>
				
				
				
			</ul>
@stop

@section('content')



@stop