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
				<li>
					<a href="{{ URL::route('dailyPayment-get') }}">
					<i class="icon-basket"  ></i>
					<span class="title">مصارف روزانه</span>
					<span class="arrow "></span>
					</a>
				</li>
				<li class="active">
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
			<!-- BEGIN PAGE CONTENT-->
			<hr>
				
				<ul id="myTab" class="nav nav-pills">

					<li class=" active dropdown" >
					  <a href="#" id="shopReports" class="dropdown-toggle" data-toggle="dropdown">دوکـــــان هـــآ<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="shopReports">
						 <li><a href="#rentReport" tabindex="-1" data-toggle="tab">گـــزارش کــــرایــــــه</a></li>
						 <li><a href="#electricityReport" tabindex="-1" data-toggle="tab">گـــزارش بــیل بــرق</a></li>
						  <li><a href="#keepReport" tabindex="-1" data-toggle="tab">گـــزارش چوکیداری</a></li>
						  <li><a href="#cleanerReport" tabindex="-1" data-toggle="tab">گـــزارش صفاکار</a></li>
						  <li><a href="#shopGenralReport" tabindex="-1" data-toggle="tab">گـــزارش عــمــو مــی</a></li>
					  </ul>
				   </li>


					<li class=" dropdown" >
					  <a href="#" id="blockReports" class="dropdown-toggle" data-toggle="dropdown">بــــــــلاک هـــآ<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="blockReports">
						 <li><a href="#BRentReport" tabindex="-1" data-toggle="tab">گـــزارش کــــرایــــــه</a></li>
						 <li><a href="#BElectricityReport" tabindex="-1" data-toggle="tab">گـــزارش بــیل بــرق</a></li>
						  <li><a href="#BKeepReport" tabindex="-1" data-toggle="tab">گـــزارش چوکیداری</a></li>
						  <li><a href="#BCleanerReport" tabindex="-1" data-toggle="tab">گـــزارش صفاکار</a></li>
						  <li><a href="#blockGenralReport" tabindex="-1" data-toggle="tab">گـــزارش عــمــو مــی</a></li>
					  </ul>
				   </li>


					<li class="dropdown" >
					  <a href="#" id="employeePayment" class="dropdown-toggle" data-toggle="dropdown">کـــارمــــندان<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="employeePayment">
						 <li><a href="#employeeSalaryReport" tabindex="-1" data-toggle="tab">گـــزارش معاشات</a></li>
					  </ul>
				   </li>


					<li class="dropdown" >
					  <a href="#" id="sales" class="dropdown-toggle" data-toggle="dropdown">فــــــروشــــات<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="sales">
						 <li><a href="#saledReport" tabindex="-1" data-toggle="tab">فــــــروش دوکــان</a></li>
						 <li><a href="#BSaledReport" tabindex="-1" data-toggle="tab">فــــــروشــــات بــــــــلاک</a></li>
						  <li><a href="#salesGenralReport" tabindex="-1" data-toggle="tab">گـــزارش عــمــو مــی</a></li>
					  </ul>
				   </li>
				   <li>
				  	 <a href="#dailyReport" data-toggle="tab"> مـــصارف روزانـــــه</a>
					</li>


					<li >
				  	 <a href="#shopTenant" data-toggle="tab">گـــزارش عــــــمـــومـــــــــــــی</a>
					</li>
					
				</ul>
				



				<div id="myTabContent" class="tab-content">

				   <div class="tab-pane fade in active" id="shopRegister">
						<form id="department" class="form-horizontal" role="form" method="post">
							<div class="modal-body">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption" >
											ثــبـــت بــــــــلاک جــــــــدیــــــد
										</div>
										<div class="tools">
											<a class="close" data-dismiss="modal">
											</a>&nbsp
											<a href="" class="collapse">
											</a>&nbsp
											<a href="" class="reload">
											</a>&nbsp
										</div>
									</div>
									<div class="portlet-body form">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;" required="required">موقعیت بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="موقعیت بــــــــلاک  بر اساس طبقه ها" name="dari_name" id="dari_name">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;">کرایه بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="کرایه ماهوار بــــــــلاک" name="english_name" id="english_name">
														</div>
													</div>
												</div>
											</div>
											<div style="text-align:center;">
											<button type="reset" class="btn btn-success" data-dismiss="modal">انصـــــراف</button>
											<button type="submit" class="btn btn-primary" data-dismiss="modal">ثــــــبــــــت</button>
											</div>
											<br>
									</div>
								</div>
							</div>
						</form>
					</div>
				
				<!--ثبت کرایه نشین جدید-->

				<div class="tab-pane fade in" id="shopTenant">
					

			   	<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>گـــزارش عــمــومـــی 
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
							<div class="portlet-body ">
								
							</div>
						</div>
				<!-- END VALIDATION STATES-->
					

				</div>



				<!-- begin of shop rent-->
			 
			      
				   <div class="tab-pane fade in " id="shopSold">
						<form  class="form-horizontal" role="form" method="post">
							<div class="modal-body">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption" >
											فــــــروش بــــــــلاک هــــــا
										</div>
										<div class="tools">
											<a class="close" data-dismiss="modal">
											</a>&nbsp
											<a href="" class="collapse">
											</a>&nbsp
											<a href="" class="reload">
											</a>&nbsp
										</div>
									</div>
									<div class="portlet-body form">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;" required="required">موقعیت بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="موقعیت بــــــــلاک  بر اساس طبقه ها" name="dari_name" id="dari_name">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;">کرایه بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="کرایه ماهوار بــــــــلاک" name="english_name" id="english_name">
														</div>
													</div>
												</div>
											</div>
											<div style="text-align:center;">
											<button type="reset" class="btn btn-success" data-dismiss="modal">انصـــــراف</button>
											<button type="submit" class="btn btn-primary" data-dismiss="modal">ثــــــبــــــت</button>
											</div>
											<br>
									</div>
								</div>
							</div>
						</form>
					</div>
			   

			   <!-- end of shop sold-->



			   
			   <!-- begin of shop electricity payment-->
			   <div class="tab-pane fade" id="electricity">
						<form id="department" class="form-horizontal" role="form" method="post">
							<div class="modal-body">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption" >
											پــــــــرداخـــــــــــــت هـــزیــنه مصــرف بـــرق  بـــــــــلاکها
										</div>
										<div class="tools">
											<a class="close" data-dismiss="modal">
											</a>&nbsp
											<a href="" class="collapse">
											</a>&nbsp
											<a href="" class="reload">
											</a>&nbsp
										</div>
									</div>
									<div class="portlet-body form">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;" required="required">موقعیت بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="موقعیت بــــــــلاک  بر اساس طبقه ها" name="dari_name" id="dari_name">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;">کرایه بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="کرایه ماهوار بــــــــلاک" name="english_name" id="english_name">
														</div>
													</div>
												</div>
											</div>
											<div style="text-align:center;">
											<button type="reset" class="btn btn-success" data-dismiss="modal">انصـــــراف</button>
											<button type="submit" class="btn btn-primary" data-dismiss="modal">ثــــــبــــــت</button>
											</div>
											<br>
									</div>
								</div>
							</div>
						</form>
			   </div>
			   <!-- end of shop electricity payment-->

			   <!--begin of keep payment-->

			   <div class="tab-pane fade" id="keep">
						<form id="department" class="form-horizontal" role="form" method="post">
							<div class="modal-body">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption" >
											پــــــــرداخـــــــــــــت هـــزیــنه چــو کـــی داری بــــــــلاک ها
										</div>
										<div class="tools">
											<a class="close" data-dismiss="modal">
											</a>&nbsp
											<a href="" class="collapse">
											</a>&nbsp
											<a href="" class="reload">
											</a>&nbsp
										</div>
									</div>
									<div class="portlet-body form">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;" required="required">موقعیت بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="موقعیت بــــــــلاک  بر اساس طبقه ها" name="dari_name" id="dari_name">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" style="padding-left: 0;">کرایه بــــــــلاک</label>
													<div class="col-md-9">
														<div>
															<input type="text" class="form-control " placeholder="کرایه ماهوار بــــــــلاک" name="english_name" id="english_name">
														</div>
													</div>
												</div>
											</div>
											<div style="text-align:center;">
											<button type="reset" class="btn btn-success" data-dismiss="modal">انصـــــراف</button>
											<button type="submit" class="btn btn-primary" data-dismiss="modal">ثــــــبــــــت</button>
											</div>
											<br>
									</div>
								</div>
							</div>
						</form>
					
			   </div>
			   <!--end of keep payment-->

			   
			   			<div class="tab-pane fade" id="rentReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش کــــرایــــــه
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
										 <th>شماره</th>
									     <th>نمبر دوکان</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>کرایه</th>
										 <th> رســید</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 



			<div class="tab-pane fade" id="electricityReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
									گـــــزارش بیل بــرق
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th class="col-md-1">شماره</th>
										 <th>نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس </th>
										 <th>شماره میتر فعلی</th>
										 <th>شمارم میترقبلی</th>
										 <th>برق مصرف شده</th>
										 <th>مجموع پول</th>
										 <th>رسید</th>
										 <th>باقی</th>
										
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>


			 <div class="tab-pane fade" id="keepReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش چوکیداری
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
										<th>شماره</th>
									     <th class="col-md-1">نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>مبلغ قابل پرداخت</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>

				<div class="tab-pane fade" id="cleanerReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش صفاکار
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th>شماره</th>
									     <th >نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>مبلغ قابل پرداخت</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>

			
			<!-- start of Block links -->
							<div class="tab-pane fade" id="BRentReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش کــــرایــــــه
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr> <th>شماره</th>
									     <th>نمبر دوکان</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>کرایه</th>
										 <th> رســید</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 	
				
					<div class="tab-pane fade" id="BElectricityReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
									گـــــزارش بیل بــرق
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									      <th class="col-md-1">شماره</th>
										 <th>نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس </th>
										 <th>شماره میتر فعلی</th>
										 <th>شمارم میترقبلی</th>
										 <th>برق مصرف شده</th>
										 <th>مجموع پول</th>
										 <th>رسید</th>
										 <th>باقی</th>
										
										
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			
				 <div class="tab-pane fade" id="BKeepReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش چوکیداری
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th>شماره</th>
									     <th class="col-md-1">نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>مبلغ قابل پرداخت</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>

					
					
					<div class="tab-pane fade" id="BCleanerReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								گـــــزارش صفاکار
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th>شماره</th>
									     <th >نمبردوکان</th>
										 <th>نام دوکاندار</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>مبلغ قابل پرداخت</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 
					<div class="tab-pane fade" id="employeeSalaryReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
							گـــــزارش معاشات کارمندان
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th >شماره</th>
										 <th>نام کارمند</th>
										 <th> ولد </th>
										 <th> نمبرتذکره </th>
										 <th>معاش</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
										 <th>تاریخ پرداخت</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 					<div class="tab-pane fade" id="saledReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
						گـــــزارش دوکان های فرخته شده
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th>شماره</th>
										 <th>نمبر دوکان</th>
										 <th> مشتری </th>
										 <th> قیمت دوکان </th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
										 <th>تاریخ فروش</th>
										 
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 
			 <div class="tab-pane fade" id="BSaledReport">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
						گـــــزارش بـــــــــلاکهای فــــروخته شــــده
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th class="col-md-1"></th>
										 <th>نمبربلاک</th>
										 <th> مشتری </th>
										 <th> قیمت کل</th>
										 <th>پرداخت شده</th>
										 <th>باقی</th>
										 <th>تاریخ فروش</th>
										 
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>
			 
			 <div class="tab-pane fade" id="dailyReport">

			 	<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>پــــــــرداخـــــــــــــت چــوکـــی داری و صــفـاکــاری
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
							<div class="portlet-body ">
								
							</div>
						</div>
				<!-- END VALIDATION STATES-->
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
						گـــــزارش مصــارف روزانـــــه
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th class="col-md-1"></th>
										 <th>توضیح</th>
										 <th> مبلغ  </th>
										 <th> تاریخ</th>
										 <th>مصرف کننده</th>
										 
									</tr>
								</thead>
							  <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>

			
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