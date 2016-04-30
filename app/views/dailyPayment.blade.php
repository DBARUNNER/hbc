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
				<li class="start">
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
				<li class="active">
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
<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<img src="">
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Page Layouts</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Blank Page</a>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
     <div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>مصــــــــارف روزانــــه
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="dailyPayment" class="form-horizontal">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">توضیح<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="name"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">تاریخ<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="date" class="form-control" name="date"/>
											</div>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="control-label col-md-3">پـــول <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="number"/>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-md-3">مصرف کننده<span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="consumer"/>
											</div>
										</div>
									</div>
									
									
								</div>
									<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="reset" class="btn btn-success" data-dismiss="modal">انصـــــراف</button>
											<button type="submit" class="btn btn-primary" data-dismiss="modal">ثــــــبــــــت</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<!-- BEGIN PAGE CONTENT-->
			
<script>
   $(function(){
      $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      // Get the name of active tab
      var activeTab = $(e.target).text(); 
      // Get the name of previous tab
      var previousTab = $(e.relatedTarget).text(); 
      $(".active-tab span").html(activeTab);
      $(".previous-tab span").html(previousTab);
   });
});
</script>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
@stop