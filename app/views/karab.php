<?php include("header.php")?>
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
				
				<ul id="myTab" class="nav nav-tabs">
				   <li class="active">
				  	 <a href="#blockRegister" data-toggle="tab">ثبت بــــــــلاک جــــــــدیــــــد</a>
					</li>
					<li >
				  	 <a href="#blockTenant" data-toggle="tab">ثبت کــرایـه نــشـیــن جــــــــدیــــــد</a>
					</li>
					<li >
				  	 <a href="#blockSold" data-toggle="tab">فروش بــــــــلاک</a>
					</li>
				  
					<li class="dropdown">
					  <a href="#" id="blockPayment" class="dropdown-toggle" data-toggle="dropdown">پرداخت بــــــــلاک ها<b class="caret"></b>
					  </a>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="blockPayment">
						 <li><a href="#rent" tabindex="-1" data-toggle="tab">کــــرایــــــه</a></li>
						 <li><a href="#electricity" tabindex="-1" data-toggle="tab">برق</a></li>
						  <li><a href="#keep" tabindex="-1" data-toggle="tab">چوکیداری</a></li>
						  <li><a href="#clean" tabindex="-1" data-toggle="tab">صفاکار</a></li>
					  </ul>
				   </li>


				   <li class="dropdown">
					  <a href="#" id="blockList" class="dropdown-toggle" data-toggle="dropdown">لــیـســت بــــــــلاک ها<b class="caret"></b>
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
						
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>ثــــــبــــــت بــــــــلاک جــــــــدیــــــد
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
							<form action="#" id="form_sample_2" class="form-horizontal">
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
										<label class="control-label col-md-3">موقعیت بــــــــلاک <span class="required">
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
										<label class="control-label col-md-3">کرایه بــــــــلاک <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="number"/>
											</div>
										</div>
									</div>
									




								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<button type="button" class="btn default">Cancel</button>
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



				<!--ثبت کرایه نشین جدید-->

				<div class="tab-pane fade in" id="blockTenant">
					<form  class="form-horizontal" role="form" method="post">
						<div class="modal-body">
							<div class="portlet box blue ">
								<div class="portlet-title">
									<div class="caption" >
									ثــــــبــــــت کــــــــــرایــــــــــه نـــــشــــین جــــــــدیــــــد
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
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										در خانه پری فارم مشکلاتی وجود دارد. لطفا  فارم را دوباره چک نمائید.
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
														<input type="text" class="form-control" name="fname" placeholder="نام پدر" />
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label col-md-3">نام پدر کلان <span class="required">
												* </span></label>
												<div class="col-md-9">
													<div class="input-icon right">
														<i class="fa"></i>
														<input type="text" class="form-control" name="gfname" placeholder="نام پدر کلان">
													</div>
												</div>
											</div>
										</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">تخلص <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="last_name" placeholder=" تخلص" />
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
																	<input type="text" class="form-control" name="taz_num" placeholder="نمبر تذکره">
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
																	<input type="text" class="form-control" name="taz_sheet" placeholder="جلد">
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
																	<input type="text" class="form-control" name="taz_page" placeholder="صفحه">
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
														<input type="text" class="form-control" name="taz_register_num" placeholder="نمبر ثبت">
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
																	<input type="text" class="form-control" name="phone_num" placeholder="نمبر تلیفون">
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">نمبر تلیفون اضطرابی <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="phone_num_emer" placeholder="نمبر تلیفون اظطراری">
																</div>
															</div>
														</div>
													</div>
												</div>
												</br>
												</br>
												
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
																	<input type="text" class="form-control" name="address_main" placeholder="آدرس">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولایت <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="province_main" placeholder="ولایت">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="district_main" placeholder="ولسوالی/ ناحیه">
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
																	<input type="text" class="form-control" name="address_now" placeholder="آدرس">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولایت <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="province_now" placeholder="ولایت">
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="control-label col-md-3">ولسوالی/ ناحیه <span class="required">
															* </span></label>
															<div class="col-md-9">
																<div class="input-icon right">
																	<i class="fa"></i>
																	<input type="text" class="form-control" name="district_now" placeholder="ولسوالی/ ناحیه">
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



				<!-- begin of block rent-->
			 
			      
				   <div class="tab-pane fade in " id="blockSold">
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
			   

			   <!-- end of block sold-->



			   
			   <!-- begin of block electricity payment-->
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
			   <!-- end of block electricity payment-->

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

			   <!begin of clean payment-->
			   <div class="tab-pane fade" id="clean">
						<form id="department" class="form-horizontal" role="form" method="post">
							<div class="modal-body">
								<div class="portlet box blue ">
									<div class="portlet-title">
										<div class="caption" >
											پــــــــرداخـــــــــــــت هـــزیــنه صفا کــــــــــاری بــــــــلاک ها
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
			   <!-- end of clean payment-->



			<div class="tab-pane fade" id="rentList">
				<div class="modal-body">
					<div class="portlet box blue ">
						<div class="portlet-title">
								<div class="caption" >
								لــیــســت  بـــــــــلاکهـایــــی کــــرایــــــه داده شـــــــــــــــــده
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
									     <th class="col-md-1">نمبر بــــــــلاک</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>ایجاد دیپارتمنت</th>
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
								لــیــســت  بـــــــــلاکهـایــــی فـــــروخــــتــه شـــــــــــــــــده
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
									     <th class="col-md-1">نمبر بــــــــلاک</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>ایجاد دیپارتمنت</th>
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
								لــیــســت  بـــــــــلاکهـایــــی خـــــــــالــــــــی
								</div>
							<div class="tools">
								<a class="close" data-dismiss="modal">
								</a>&nbsp
								<a href="" class="collapse">
								</a>&nbsp
								<a href="" class="reload">a
								</a>&nbsp
							</div>
						</div>
						<div class="portlet-body form">
							<table class="table "  >
								<thead class="thead-inverse">
									<tr>
									     <th class="col-md-1">نمبر بــــــــلاک</th>
										 <th>موقعیت</th>
										 <th>نام کرایه نشین</th>
										 <th> ولد </th>
										 <th>شماره تماس</th>
										 <th>ایجاد دیپارتمنت</th>
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
<?php include("footer.php")?>