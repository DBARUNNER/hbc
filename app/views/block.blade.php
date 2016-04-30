@extends('layouts.master')


@section('content')
			<!-- BEGIN PAGE HEADER-->
			<img >
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
				
				<ul id="myTab" class="nav nav-pills" >
				   <li class="active">
				  	 <a href="#blockRegister" data-toggle="tab">ثــــــبــــــت بـلاک جــدید</a>
					</li>
					<li >
				  	 <a href="#blockTenant" data-toggle="tab">ثبت کــرایـه نــشـیــن جــــــــدیــــــد</a>
					</li>
					<li >
				  	 <a href="#blockSold" data-toggle="tab">فــروش بــلاک</a>
					</li>
				  
					<li class="dropdown">
					  <a href="#" id="blockPayment" class="dropdown-toggle" data-toggle="dropdown">پـرداخــت بـلاک ها<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="blockPayment">
						 <li><a href="#rentPayment" tabindex="-1" data-toggle="tab">کــــرایــــــه</a></li>
						 <li><a href="#electricityPayment" tabindex="-1" data-toggle="tab">برق</a></li>
						  
						  <li><a href="#keepCleanPayment" tabindex="-1" data-toggle="tab">صــفـاکاری و چــوکــی داری</a></li>
					  </ul>
				   </li>


				   <li class="dropdown">
					  <a href="#" id="blockList" class="dropdown-toggle" data-toggle="dropdown">لــیــســت بــلاک ها<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="blockList">
						 <li><a href="#rentList" tabindex="-1" data-toggle="tab">کرایه داده شده</a></li>
						 <li><a href="#soldList" tabindex="-1" data-toggle="tab">فروخته شده</a></li>
						  <li><a href="#emptyList" tabindex="-1" data-toggle="tab">خالی</a></li>
					  </ul>
				   </li>
				</ul>
				<div id="myTabContent" class="tab-content">

				   <div class="tab-pane fade in active" id="blockRegister">

						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>ثــــــبــــــت بــــلاک جــــــــدیــــــد
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
								<form action="#" id="blockRegisteration" class="form-horizontal">
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
											<label class="control-label col-md-2">نمــبر  بـــــــــلاک <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="نمــــبر بــــلاک را بــنــویــســید"  class="form-control" name="number"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">مـوقـعـیت بــلاک<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــوقــعـیت بــــلاک در طــبــقــه" class="form-control" name="blockLocation"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">کــرایـــه مـاهــوار <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" class="form-control" name="blockRent"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">پــیــش پــــــرداخـــــــــت <span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــبــلـغ پــیــش پــــــــرداخـــــــــــــت" class="form-control" name="blockPrepay"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label class="control-label col-md-2">هــمسایه راســت<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="هــمسایه طــرف راســـت" class="form-control" name="rightNeighbor"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">هــمسایه چـــپ<span class="required">
											* </span>
											</label>
											<div class="col-md-4">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="هــمسایه طــرف چـــپ" class="form-control" name="leftNeighbor"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">تــاریــخ اخــذ<span class="required">
											* </span></label>
											<div class="col-md-4">
												<input type="date" class="col-md-12" name="takeDate">
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">تــاریــخ ختم قرار داد<span class="required">
											* </span></label>
											<div class="col-md-4">
												<input type="date" class="col-md-12" name="expireDate">
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

					<div class="tab-pane fade in" id="blockTenant">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>ثــــــبــــــت بــــلاک جــــــــدیــــــد
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
								<form action="#" id="tenantRegister" class="form-horizontal">
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
												<h3>مــشــخــصــات بــــلاک کــــرایــــــه گــرفـــته شـــــــــــــــــده</h3>
												<hr>
											<div class="row">
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label col-md-3">کــــرایـــــه<span class="required">
																* </span></label>
														<div class="col-md-6">
															<div class="input-icon right">
																<i class="fa"></i>
																<input type="text" class="form-control" name="rent" placeholder="کــرایـــه مـاهــوار">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label col-md-3">پـیـش پرداخت<span class="required">
																* </span></label>
														<div class="col-md-6">
															<div class="input-icon right">
																<i class="fa"></i>
																<input type="text" class="form-control"name="prepay" placeholder="مـبـلـغ پیــش پـرداخــت">
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="form-group">
														<label class="control-label col-md-3">تــاریــخ فــروش<span class="required">
															* </span></label>
														<div class="col-md-6">
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

				<!--ختم کرایه نشین -->
				<!-- begin of block rent-->
			 
			      
				   <div class="tab-pane fade in " id="blockSold">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>فـــــروش بــــلاک
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
								<form action="#" id="blockSales" class="form-horizontal">
									<div class="form-body">
										<div class="alert alert-danger display-hide">
											<button class="close" data-close="alert"></button>
											فــارم به صــورت درســت تـــکــمــیل نــگــردیده اســــــت.
										</div>
										<div class="alert alert-success display-hide">
											<button class="close" data-close="alert"></button>
											Your form validation is successful!
										</div>
										<h3>مشخصات بــــلاک</h3><hr class="style18">

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">نــمــبر بــــلاک<span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="blockNumber"placeholder="نــمــبر بــــلاک را بــنــویــســید">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">مـوقـعـیت بــــلاک<span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="blockLocation" placeholder="مــوقــعـیت بــــلاک را بــنــویــســید" />
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">تاریخ فروش <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="date" class="form-control" name="soldDate">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">قــیمت مجموع <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="totalCost" placeholder="تــخــلــص را بــنــویــســید" />
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">پـرداخــت نقد <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cash"placeholder="پــــــرداخـــــــــت پــول نــقــد">
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">بــاقـــــی <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="loan" placeholder="مــقــدار پـول بــاقـــــی مــانـده" />
														</div>
													</div>
												</div>
											</div>
										</div>

										<h3>مــشــخــصــات مــشــتــــری</h3><hr class="style18">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label col-md-3">نام <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cName"placeholder="نام">
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
															<input type="text" class="form-control" name="cFatherName" placeholder="نام پدر" />
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
															<input type="text" class="form-control" name="cGrandFather"placeholder="نــام پــدر کــلان">
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
															<input type="text" class="form-control" name="cLastName" placeholder="تــخــلــص را بــنــویــســید" />
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
															<input type="file" class="form-control" name="cPhoto" placeholder="عکس" />
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
															<input type="text" class="form-control" name="cTzNumber" placeholder="نمبر تذکره">
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
																<input type="text" class="form-control" name="cTzSheet" placeholder="جلد">
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
																	<input type="text" class="form-control" name="cTzPage" placeholder="صفحه">
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
															<input type="text" class="form-control" name="cTzRegister" placeholder="نمبر ثبت">
														</div>
													</div>
												</div>
											</div>				
										</div>
									<hr>
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
															<input type="text" class="form-control" name="cRealAddress" placeholder="آدرس">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ولایت <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cRealProvince" placeholder="ولایت">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cRealDistrict" placeholder="ولسوالی/ ناحیه">
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
															<input type="text" class="form-control" name="cCurrentAddress" placeholder="آدرس">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ولایت <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cCurrentProvince" placeholder="ولایت">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
													* </span></label>
													<div class="col-md-9">
														<div class="input-icon right">
															<i class="fa"></i>
															<input type="text" class="form-control" name="cCurrentDistrict" placeholder="ولسوالی/ ناحیه">
														</div>
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
			   

			   <!-- end of block sold-->

			   <!-- begin of rent payment-->
			    <div class="tab-pane fade" id="rentPayment">
					

						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>پــــــــرداخـــــــــــــت کــــــــــرایــــــــــه بــــلاک
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
									<label class="control-label col-md-2">نمــــبر بــــلاک <span class="required">
									* </span>
									</label>
									<div class="col-md-4">
										<div class="input-icon right">
											<i class="fa"></i>
											<input type="text" placeholder="نمــــبر بــــلاک را بــنــویــســید"  class="form-control" name="number"/>
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
								            <th>نمــــبر بــــلاک</th>
								            <th>اسم کـرایــه نــشـیـن</th>
								            <th>پـرداخــت کــــرایــــه</th>
								         </tr>
								      </thead>
								      <tbody>
								         <tr>
								            <td>23</td>
								            <td>هــــادی</td>
								            <td> <a  data-toggle="modal" data-target="#myModal">
								   <i class="fa fa-file-o" style="color:blue;"></i>
								</a></td>
								         </tr>
								        
								      </tbody>
								   </table>
								</div>  
							<!--end table for rent payment-->


								<!--start rent payment-->
							<div class="row" >
								<div  class="col-md-6">
								<!-- BEGIN FORM-->
								<form action="#" id="blockRentPayment" class="form-horizontal">
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
											<label class="control-label col-md-4">کـرایه مـاهـوار <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="کــرایــــه بــــلاک" class="form-control" name="blockRent"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">پـرداخــت<span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مـبـلـغ پـرداخــت نـــقــد" class="form-control" name="cash"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">بــاقـــــی <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــبــلـغ بــاقـــــی مــانـده" class="form-control" name="loan"/>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<label class="control-label col-md-4">تــاریــخ پـرداخــت<span class="required">
											* </span></label>
											<div class="col-md-6">
											<i class="fa"></i>
												<input type="date" name="rentPayDate">
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
								<div  class="col-md-6" style="border-right: 1px dashed black;">
									<div class="form-group">
										<label class="control-label col-md-4">نمبر بــــلاک<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">اسم کرایه نیشین<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">تــاریــخ پـرداخــت<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">مــجـمــوع<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">بــاقـــــی<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
								</div>
									<br>
									<div style="text-align:center; margin-top: 20px;">
									<button class="btn green">پــرنــت رســـید</button>
									</div>
							</div>
								<!--end rent payment-->


							</div>
						</div>
						<!-- END VALIDATION STATES-->	

			   	</div>



			   <!-- end of rent payment-->




			   
			   <!-- begin of block electricity payment-->
			   <div class="tab-pane fade" id="electricityPayment">
			   	

			   <!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption">
									<i ></i>پــــــــرداخـــــــــــــت مــصــرف بــرق بــــلاک 
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
									<label class="control-label col-md-2">نمــــبر بــــلاک <span class="required">
									* </span>
									</label>
									<div class="col-md-4">
										<div class="input-icon right">
											<i class="fa"></i>
											<input type="text" placeholder="نمــــبر بــــلاک را بــنــویــســید"  class="form-control" name="number"/>
										</div>
									</div>
										<button type="submit" class="btn green"><i class="fa fa-search"></i>
										</button>
								</div>
								<!--end search-->
								<hr>
									<!--begin table for electricity payment>
																		<!--begin table for rent payment-->
								<div class="table-responsive">
								   <table class="table">
								      
								      <thead>
								         <tr>
								            <th>نمــــبر بــــلاک</th>
								            <th>اسم کـرایــه نــشـیـن</th>
								            <th>پـرداخــت بــیــل بــرق</th>
								         </tr>
								      </thead>
								      <tbody>
								         <tr>
								            <td>23</td>
								            <td>هــــادی</td>
								            <td> <a  data-toggle="modal" data-target="#myModal">
								   <i class="fa fa-file-o" style="color:blue;"></i>
								</a></td>
								         </tr>
								        
								      </tbody>
								   </table>
								</div>  
							<!--end table for rent payment-->
									<!-- end table for electricity payment>
								<!--start rent payment-->
							<div class="row" >
								<div  class="col-md-6">
								<!-- BEGIN FORM-->
								<form action="#" id="blockElectricityPayment" class="form-horizontal">
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
											<label class="control-label col-md-4">نمــــبر قبــلی مـیـتـر <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="نمــــبر قبــلی مـیـتـر را بنویسید" class="form-control" name="previousNumber"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">نمــــبر فـعـلـی مـیـتـر<span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="نمــــبر فـعـلـی مـیـتـر را بــنــویــســید" class="form-control" name="currentNumber"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">مــقــدار مــصرف <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــجـمــوع مــصــرف به کــیـلو وات" class="form-control" name="consume"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">مــبـلـغ قـابـل پـرداخــت <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مـبـلـغ مــجــموعی پــول" class="form-control" name="totalPayment"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">پـرداخــت <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــبــلـغ پـرداخــت شـــــــــــــــــده" class="form-control" name="cash"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">بــاقـــــی <span class="required">
											* </span>
											</label>
											<div class="col-md-6">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مــبــلـغ بــاقـــــی مــانـده" class="form-control" name="loan"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-4">تــاریــخ پـرداخــت<span class="required">
											* </span></label>
											<div class="col-md-6">
											<i class="fa"></i>
												<input type="date" name="PayDate">
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
								<div  class="col-md-6" style="border-right: 1px dashed black;">
									<div class="form-group">
										<label class="control-label col-md-4">نمبر بــــلاک<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">اسم کرایه نیشین<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">تــاریــخ پـرداخــت<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">مــجـمــوع<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-4">بــاقـــــی<span class="required">
										* </span>
										</label>
										<div class="col-md-6">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" placeholder="کــــــــــرایــــــــــه بــــلاک" readonly class="form-control" name="blockRent"/>
											</div>
										</div>
									</div>
								</div>
									<br>
									<div style="text-align:center; margin-top: 20px;">
									<button class="btn green">پــرنــت رســـید</button>
									</div>
							</div>
								<!--end rent payment-->


							</div>
						</div>
						<!-- END VALIDATION STATES-->	


				</div>
			   <!-- end of block electricity payment-->

			   
			   <!--begin of clean payment-->
			   <div class="tab-pane fade" id="keepCleanPayment">
				
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
								<!-- start search-->
								<div class="form-group">
									<label class="control-label col-md-2">نمــــبر بــــلاک <span class="required">
									* </span>
									</label>
									<div class="col-md-4">
										<div class="input-icon right">
											<i class="fa"></i>
											<input type="text" placeholder="نمــــبر بــــلاک را بــنــویــســید"  class="form-control" name="number"/>
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
								            <th>نمــــبر بــــلاک</th>
								            <th>اسم کـرایــه نــشـیـن</th>
								            <th>پـرداخــت کــــرایــــه</th>
								         </tr>
								      </thead>
								      <tbody>
								         <tr>
								            <td>23</td>
								            <td>هــــادی</td>
								            <td> <a  data-toggle="modal" data-target="#myModal">
								   <i class="fa fa-file-o" style="color:blue;"></i>
								</a></td>
								         </tr>
								        
								      </tbody>
								   </table>
								</div>  
							<!--end table for rent payment-->


								<!--start rent payment-->
								<!-- BEGIN FORM-->
								<form action="#" id="blockRentPayment" class="form-horizontal">
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
											<label class="control-label col-md-2">مـبـلـغ قـابـل پـرداخــت<span class="required">
											* </span>
											</label>
											<div class="col-md-3">
												<div class="input-icon right">
													<i class="fa"></i>
													<input type="text" placeholder="مـبـلـغ پـرداخــتی صــفــا کــاری" class="form-control" name="cash"/>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-2">تــاریــخ پـرداخــت<span class="required">
											* </span></label>
											<div class="col-md-6">
											<i class="fa"></i>
												<input type="date" name="rentPayDate">
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
								<!--end rent payment-->


							</div>
						</div>
						<!-- END VALIDATION STATES-->
					

			   </div>
			   <!-- end of clean payment-->



			<div class="tab-pane fade" id="rentList">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								لــیــســت بــــلاک هـایــــی کــــرایــــــه داده شـــــــــــــــــده
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
										<th>شــمـاره</th>
									     <th>نمبر بــــلاک</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماهر تماس</th>
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>


			 <div class="tab-pane fade" id="soldList">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								لــیــســت بــــلاک هـایــــی فـــــروخــــتــه شـــــــــــــــــده
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
										<th> شماره</th>
									     <th >نمبر بــــلاک</th>
										 <th>موقعیت</th>
										 <th>نام مشتری</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
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



			 <div class="tab-pane fade" id="emptyList">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								لــیــســت بــــلاک هـایــــی خـــــــــالــــــــی
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
									     <th >نمبر بــــلاک</th>
										 <th>موقعیت</th>
										 <th>کرایه</th>
										
									</tr>
								</thead>
							   <tbody>
					

							   </tbody>
							</table>
						</div>
					</div>
				</div>	
			 </div>




				
		</div>
	</div>		
</div>


<!-- start model for rent payment-->

	

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               This Modal title
            </h4>
         </div>
         <div class="modal-body">
           
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" 
               data-dismiss="modal">Close
            </button>
            <button type="button" class="btn btn-primary">
               Submit changes
            </button>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script>
   $(function () { $('#myModal').modal({
      keyboard: true
   })});
</script>


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
       $("#birth_date").persianDatepicker({
        cellWidth: 49, 
        cellHeight: 33,
        fontSize: 16, 
        });
        $("#grad_date").persianDatepicker({
        cellWidth: 49, 
        cellHeight: 33,
        fontSize: 16, 
        });
        $("#uni_kankor_entry_year").persianDatepicker({
        cellWidth: 49, 
        cellHeight: 33,
        fontSize: 16, 
        });
        $("#uni_entry_year").persianDatepicker({
        cellWidth: 49, 
        cellHeight: 33,
        fontSize: 16, 
        });
});
</script>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->


<script>
    $(function() {
       
    });
</script>
@stop