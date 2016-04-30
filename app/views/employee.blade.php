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
				
				<li class="active">
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
				   <li class="active">
				  	 <a href="#employeeRegister" data-toggle="tab">اســــتــخــدام کـــارمــــنـــد جــــــــدیــــــد</a>
					</li>
					<li >
				  	 <a href="#employeeList" data-toggle="tab">لـیـــســـت کــــارمـــنــدان</a>
					</li>
					<li >
				  	 <a href="#employeePayment" data-toggle="tab">پــــــــرداخـــــــــــــت مـــعــاشـــات</a>
					</li>
				</ul>
				



				<div id="myTabContent" class="tab-content">

				   <div class="tab-pane fade in active" id="employeeRegister">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>ثــــــبــــــت دوکـــــان جــــــــدیــــــد
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
								<form action="#" id="employeeRegisteration" class="form-horizontal">
									<div class="form-body">
										<div class="alert alert-danger display-hide">
											<button class="close" data-close="alert"></button>
											فــارم به صــورت درســت تـــکــمــیل نــگــردیده اســــــت.
										</div>
										<div class="alert alert-success display-hide">
											<button class="close" data-close="alert"></button>
											Your form validation is successful!
										</div>
										<h3>مشخصات فردی</h3><hr class="style18">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">نام <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="name"placeholder="نام">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">نام پدر <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="fatherName" placeholder="نام پدر" />
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">نام پــدر کــلان <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="grandFather"placeholder="نــام پــدر کــلان">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">تــخــلــص <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="lastName" placeholder="تــخــلــص را بــنــویــســید" />
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">عکس <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="file" class="form-control" name="photo" placeholder="عکس" />
																</div>
															</div>
														</div>
													</div>
												</div>

										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label class="control-label col-md-5">نمبر تذکره <span class="required">
															* </span></label>
													<div class="col-md-7">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="tzNumber" placeholder="نمبر تذکره">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label class="control-label col-md-4" style="width: 30%;">جلد <span class="required">
														* </span></label>
													<div class="col-md-7" style="padding-right: 0;">
															<div class="input-icon right">
																<i class="fa"></i>
																<input type="text" class="form-control" name="tzSheet" placeholder="جلد">
															</div>
													</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
															<label class="control-label col-md-4">صفحه <span class="required">
															* </span></label>
															<div class="col-md-7">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="tzPage" placeholder="صفحه">
																</div>
															</div>
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
															<label class="control-label col-md-5">نمبر ثبت <span class="required">
															* </span></label>
													<div class="col-md-7">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="tzRegister" placeholder="نمبر ثبت">
														</div>
													</div>
												</div>
											</div>				
										</div>
										<h3>مشخصات تماس</h3><hr class="style18">
										<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">نمبر تلیفون <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="phoneNumber" placeholder="نمبر تلیفون">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-4">نمبر تلیفون اضطرابی <span class="required">
															* </span></label>
															<div class="col-md-7">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="emergencyNumber" placeholder="نــمــبر تــلـیـفون اضــطراری">
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3" style="margin-right: 230px;"> آدرس اصلی </label>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">آدرس <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="realAddress" placeholder="آدرس">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولایت <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="realProvince" placeholder="ولایت">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="realDistrict" placeholder="ولسوالی/ ناحیه">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3" style="margin-right: 230px;"> آدرس فعلی </label>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">آدرس <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="currentAddress" placeholder="آدرس">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولایت <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="currentProvince" placeholder="ولایت">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="currentDistrict" placeholder="ولسوالی/ ناحیه">
																</div>
															</div>
														</div>
													</div>
												</div>
												<h3>مــشــخــصــات کــــاری کـــارمــــنـــد</h3>
												<hr>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label col-md-3">معـاش<span class="required">
																* </span></label>
														<div class="col-md-6">
															<div class="input-icon right">
																<i class="fa"></i>
																<input type="text" class="form-control" name="rent" placeholder="کــرایـــه مـاهــوار">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label col-md-4">تــاریــخ اســتـخدام<span class="required">
															* </span></label>
														<div class="col-md-7">
																<input type="date" class="form-control"name="datepicker">
													
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-3 col-md-9">
													<button type="submit" class="btn green">ثــــــبــــــت</button>
													<button type="button" class="btn default">انصـــــراف</button>
												</div>
											</div>
										</div>
									</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->

					</div>
				
				<!--ثبت کرایه نشین جدید-->

				<div class="tab-pane fade in" id="employeeList">
					<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>پــــــــرداخـــــــــــــت کــــــــــرایــــــــــه دوکــــان
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
								<!-- start search-->
								<div class="form-group">
									<label class="control-label col-md-2">نمــــبر دوکـــــان <span class="required">
									* </span>
									</label>
									<div class="col-md-4">
										<div class="input-icon right">
											<i class="fa"></i>
											<input type="text" placeholder="نمــــبر دوکـــــان را بــنــویــســید"  class="form-control" name="number"/>
										</div>
									</div>
										<button type="submit" class="btn green"><i class="fa fa-search"></i>
										</button>
								</div>
								<!--end search-->
								<hr>

								<!--begin table for rent payment-->
								<div class="table-responsive">
								   <table class="table">
								      
								      <thead>
								         <tr>
								         	<th>شــماره</th>
								            <th>نمــــبر ثــــــبــــــت</th>
								            <th>اسم</th>
								            <th>ولد</th>
								            <th>شــماره تمــاس</th>
								            <th>مــعاش</th>
								           	 <th>پــرداخـــت</th>
								         </tr>
								      </thead>
								      <tbody>
								         <tr>
								            <td>23</td>
								            <td>423</td>
								            <td>مــحمد</td>
								            <td>هــــادی</td>
								            <td>0773220412</td>
								            <td>10000</td>
								         
								            <td> <a  data-toggle="modal" data-target="#myModal">
								   <i class="fa fa-file-o" style="color:blue;"></i>
								</a></td>
								         </tr>
								        
								      </tbody>
								   </table>
								</div>  
							<!--end table for rent payment-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->	
				</div>



				<!-- begin of shop rent-->
			 
			      
				   <div class="tab-pane fade in " id="employeePayment">
						
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>ثــــــبــــــت دوکـــــان جــــــــدیــــــد
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
								<form action="#" id="employeeSalaryPayment" class="form-horizontal">
									<div class="form-body">
										<div class="alert alert-danger display-hide">
											<button class="close" data-close="alert"></button>
											فــارم به صــورت درســت تـــکــمــیل نــگــردیده اســــــت.
										</div>
										<div class="alert alert-success display-hide">
											<button class="close" data-close="alert"></button>
											Your form validation is successful!
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">مــعـاش <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــجــموع مــعـاش"  class="form-control" readonly name="salary"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">پــــــــرداخـــــــــــــت<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــقدار پـــرداخـــت شــده" class="form-control" name="salaryPay"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">بــاقـــی <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" readonly placeholder="بــاقـــی مــعــاش" class="form-control" name="loan"/>
												</div>
											</div>
										</div>
															
										<div class="form-group">
											<label class="control-label col-md-2">تــاریــخ پــرداخـــت<span class="required">
											* </span></label>
											<div class="col-md-4">
												<input type="date" class="form-control"name="payDate">
											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<button type="submit" class="btn green">ثــــــبــــــت</button>
												<button type="button" class="btn default">انصـــــراف</button>
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