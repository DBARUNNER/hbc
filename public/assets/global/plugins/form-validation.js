var FormValidation = function () {

 
 
 
  // validation using icons
    var handleBlockRegister = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var blockRegister = $('#blockRegisteration');
            var error2 = $('.alert-danger', blockRegister);
            var success2 = $('.alert-success', blockRegister);

            blockRegister.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    blockLocation: {
                        minlength: 2,
                        required: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
					blockRent: {
						required:true,
						number:true
					},
					blockPrepay:{
						required: true,
						number: true
					},
					rightNeighbor:{
						required:true,
						minlength:2
					},
					leftNeighbor:{
						required:true,
						minlength:2
					},
					takeDate:{
						required:true
					},
					expireDate:{
						required:true
					}
                },


                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }

	
 
 
 	//start block register
		
		
 

    // validation using icons
    var handleShopRegister = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var shopRegister = $('#shopRegisteration');
            var error2 = $('.alert-danger', shopRegister);
            var success2 = $('.alert-success', shopRegister);

            shopRegister.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    shopLocation: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                   
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    digits: {
                        required: true,
                        digits: true
                    },
					shopRent: {
						required:true,
						number:true
					},
					shopPrepay:{
						required: true,
						number: true
					},
					datepicker:{
						required:true
					}
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }

	
    // shopTenant
 
    // validation using icons
    var handleTenantRegister = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var tenantRegister = $('#tenantRegister');
            var error2 = $('.alert-danger', tenantRegister);
            var success2 = $('.alert-success', tenantRegister);

            tenantRegister.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    fatherName: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    tzNumber: {
                        required: true,
                        digits: true
                    },
					 tzSheet: {
                        required: true,
                        digits: true
                    },
					 tzPage: {
                        required: true,
                        digits: true
                    },
					 tzRegister: {
                        required: true,
                        digits: true
                    },
					grandFather: {
						required:true,
						minlength:2
					},
					lastName:{
						required:true,
						minlength:2
					},
					datepicker:{
						required:true
					},
					photo:{
						required:true
					},
					phoneNumber:{
						required:true,
						digits:true
					},
					emergencyNumber:{
						required:true,
						digits:true
					},
					currentDistrict:{
						required:true,
						minlength:2
					},
					currentProvince:{
						required:true,
						minlength:2
					},
					currentAddress:{
						required:true,
						minlength:2
						
					},
					realDistrict:{
						required:true,
						minlength:2
						
					},
					realProvince:{
						required:true,
						minlength:2
					},
					realAddress:{
						required:true,
						minlength:2
						
					},
					rent:{
						required: true,
						number: true
					},
					prepay:{
						required:true,
						number:true
					},
					datepicker:{
						required:true,
					}
					
					
					
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
	
	
	    var handleShopSales = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var shopsales = $('#shopSales');
            var error2 = $('.alert-danger', shopsales);
            var success2 = $('.alert-success', shopsales);

            shopsales.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    shopNumber: {
                       digits:true,
                        required: true
                    },
					shopLocation:{
						required:true,
						minlength:2
					},
                  soldDate:{
					  required:true
					  
				  },
				  totalCost:{
					  required:true,
					  number:true
				  },
				  cash:{
					required:true,
					number:true
				  },
				  loan:{
					  required:true,
					  number:true
				  },
				  cName:{
					required:true,
					number:false
				  },
				  cFatherName:{
					required:true,
					number:false
				  },
				  cGrandFather:{
					required:true,
					number:false
				  },
				  cLastName:{
					required:true,
					number:false
				  },
				  cPhoto:{
					required:true,
					number:false
				  },
				  cTzNumber:{
					required:true,
					digits:true
				  },
				  cTzSheet:{
					required:true,
					digits:true
				  },
				 cTzPage:{
					required:true,
					digits:true
				  },
				  cTzRegister:{
					required:true,
					digits:true
				  },
				  cRealAddress:{
					required:true,
					number:false
				  },
				  cRealProvince:{
					required:true,
					number:false
				  },
				  cRealDistrict:{
					required:true,
					number:false
				  },
				    cCurrentAddress:{
					required:true,
					number:false
				  },
				  cCurrentProvince:{
					required:true,
					number:false
				  },
				  cCurrentDistrict:{
					required:true,
					number:false
				  },
				  
				   sName:{
					required:true,
					number:false
				  },
				  sFatherName:{
					required:true,
					number:false
				  },
				  sGrandFather:{
					required:true,
					number:false
				  },
				  sLastName:{
					required:true,
					number:false
				  },
				  sPhoto:{
					required:true,
					number:false
				  },
				  sTzNumber:{
					required:true,
					digits:true
				  },
				  sTzSheet:{
					required:true,
					digits:true
				  },
				 sTzPage:{
					required:true,
					digits:true
				  },
				  sTzRegister:{
					required:true,
					digits:true
				  },
				  sRealAddress:{
					required:true,
					number:false
				  },
				  sRealProvince:{
					required:true,
					number:false
				  },
				  sRealDistrict:{
					required:true,
					number:false
				  },
				    sCurrentAddress:{
					required:true,
					number:false
				  },
				  sCurrentProvince:{
					required:true,
					number:false
				  },
				  sCurrentDistrict:{
					required:true,
					number:false
				  }
				  	  
					
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });
			// this will handle shop search
			}
			
		//validation for block sales
			
			  var handleBlockSales = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var blocksales = $('#blockSales');
            var error2 = $('.alert-danger', blocksales);
            var success2 = $('.alert-success', blocksales);

            blocksales.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    shopNumber: {
                       digits:true,
                        required: true
                    },
					shopLocation:{
						required:true,
						minlength:2
					},
                  soldDate:{
					  required:true
					  
				  },
				  totalCost:{
					  required:true,
					  number:true
				  },
				  cash:{
					required:true,
					number:true
				  },
				  loan:{
					  required:true,
					  number:true
				  },
				  cName:{
					required:true,
					number:false
				  },
				  cFatherName:{
					required:true,
					number:false
				  },
				  cGrandFather:{
					required:true,
					number:false
				  },
				  cLastName:{
					required:true,
					number:false
				  },
				  cPhoto:{
					required:true,
					number:false
				  },
				  cTzNumber:{
					required:true,
					digits:true
				  },
				  cTzSheet:{
					required:true,
					digits:true
				  },
				 cTzPage:{
					required:true,
					digits:true
				  },
				  cTzRegister:{
					required:true,
					digits:true
				  },
				  cRealAddress:{
					required:true,
					number:false
				  },
				  cRealProvince:{
					required:true,
					number:false
				  },
				  cRealDistrict:{
					required:true,
					number:false
				  },
				    cCurrentAddress:{
					required:true,
					number:false
				  },
				  cCurrentProvince:{
					required:true,
					number:false
				  },
				  cCurrentDistrict:{
					required:true,
					number:false
				  },
				  
				   sName:{
					required:true,
					number:false
				  },
				  sFatherName:{
					required:true,
					number:false
				  },
				  sGrandFather:{
					required:true,
					number:false
				  },
				  sLastName:{
					required:true,
					number:false
				  },
				  sPhoto:{
					required:true,
					number:false
				  },
				  sTzNumber:{
					required:true,
					digits:true
				  },
				  sTzSheet:{
					required:true,
					digits:true
				  },
				 sTzPage:{
					required:true,
					digits:true
				  },
				  sTzRegister:{
					required:true,
					digits:true
				  },
				  sRealAddress:{
					required:true,
					number:false
				  },
				  sRealProvince:{
					required:true,
					number:false
				  },
				  sRealDistrict:{
					required:true,
					number:false
				  },
				    sCurrentAddress:{
					required:true,
					number:false
				  },
				  sCurrentProvince:{
					required:true,
					number:false
				  },
				  sCurrentDistrict:{
					required:true,
					number:false
				  }
				  	  
					
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });
			// this will handle shop search
			}
		
		//end validation for blok sales
	 // validation for shopRentPayment
    var handleShopRentPay = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var shopRent = $('#shopRentPayment');
            var error2 = $('.alert-danger', shopRent);
            var success2 = $('.alert-success', shopRent);

            shopRent.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    shopRent: {
                        number:true,
                        required: true
                    },
                    cash: {
                         number:true,
                        required: true
                    },
                    loan: {
                        number:true,
                        required: true
                    },
                    rentPayDate: {
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
    //end validation for shoprent payment
	
	
	
	
	
	
		 // validation for block rent Payment
    var handleBlockRentPay = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var blockRent = $('#blockRentPayment');
            var error2 = $('.alert-danger', blockRent);
            var success2 = $('.alert-success', blockRent);

            blockRent.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    blockRent: {
                        number:true,
                        required: true
                    },
                    cash: {
                         number:true,
                        required: true
                    },
                    loan: {
                        number:true,
                        required: true
                    },
                    rentPayDate: {
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
    //end validation for block rent  payment
	
	
	
	
	 var handleShopElectricityPayment = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var shopElectricity = $('#shopElectricityPayment');
            var error2 = $('.alert-danger', shopElectricity);
            var success2 = $('.alert-success', shopElectricity);

            shopElectricity.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    previousNumber: {
                        number:true,
                        required: true
                    },
                    currentNumber: {
                         number:true,
                        required: true
                    },
					consume:{
						number: true,
						required: true
						
					},
                    totalPayment: {
                        number:true,
                        required: true
                    },
					 cash: {
                         number:true,
                        required: true
                    },
                    loan: {
                        number:true,
                        required: true
                    },
                    PayDate: {
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
	//end validation for shop electricity payment
	
	//start validation for block electricity payment
	
	var handleBlockElectricityPayment = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var blockElectricity = $('#blockElectricityPayment');
            var error2 = $('.alert-danger', blockElectricity);
            var success2 = $('.alert-success', blockElectricity);

            blockElectricity.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    previousNumber: {
                        number:true,
                        required: true
                    },
                    currentNumber: {
                         number:true,
                        required: true
                    },
					consume:{
						number: true,
						required: true
						
					},
                    totalPayment: {
                        number:true,
                        required: true
                    },
					 cash: {
                         number:true,
                        required: true
                    },
                    loan: {
                        number:true,
                        required: true
                    },
                    PayDate: {
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
	
	//end validateion for block electricity payment
	// start validation for employee page
	 var handleEmployeeRegister = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var employeeRegister = $('#employeeRegisteration');
            var error2 = $('.alert-danger', employeeRegister);
            var success2 = $('.alert-success', employeeRegister);

            employeeRegister.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    fatherName: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    tzNumber: {
                        required: true,
                        digits: true
                    },
					 tzSheet: {
                        required: true,
                        digits: true
                    },
					 tzPage: {
                        required: true,
                        digits: true
                    },
					 tzRegister: {
                        required: true,
                        digits: true
                    },
					grandFather: {
						required:true,
						minlength:2
					},
					lastName:{
						required:true,
						minlength:2
					},
					datepicker:{
						required:true
					},
					photo:{
						required:true
					},
					phoneNumber:{
						required:true,
						digits:true
					},
					emergencyNumber:{
						required:true,
						digits:true
					},
					currentDistrict:{
						required:true,
						minlength:2
					},
					currentProvince:{
						required:true,
						minlength:2
					},
					currentAddress:{
						required:true,
						minlength:2
						
					},
					realDistrict:{
						required:true,
						minlength:2
						
					},
					realProvince:{
						required:true,
						minlength:2
					},
					realAddress:{
						required:true,
						minlength:2
						
					},
					rent:{
						required: true,
						number: true
					},
					prepay:{
						required:true,
						number:true
					},
					datepicker:{
						required:true,
					}
					
					
					
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }
	
	// start validateion for employee salary payment
	
	
		 var handleEmployeeSalary = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var employeeSalary = $('#employeeSalaryPayment');
            var error2 = $('.alert-danger', employeeSalary);
            var success2 = $('.alert-success', employeeSalary);

            employeeSalary.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
					salary: {
                        number:true,
                        required: true
                    },
					 salaryPay: {
                         number:true,
                        required: true
                    },
                    loan: {
                        number:true,
                        required: true
                    },
                    payDate: {
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }


        var handleDPayment = function()
		{
				// for more info visit the official plugin documentation: 
				// http://docs.jquery.com/Plugins/Validation

            var shopRegister = $('#dailyPayment');
            var error2 = $('.alert-danger', shopRegister);
            var success2 = $('.alert-success', shopRegister);

            shopRegister.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    shopLocation: {
                        minlength: 2,
                        required: true
                    },
                    name:{

                        minlength:2,
                        required:true
                    },
                    date:{

                        required:true
                    },
                    consumer:{

                        minlength:2,
                        required:true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                   
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    digits: {
                        required: true,
                        digits: true
                    },
                    shopRent: {
                        required:true,
                        number:true
                    },
                    shopPrepay:{
                        required: true,
                        number: true
                    },
                    datepicker:{
                        required:true
                    }
                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    Metronic.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


		}
	//end validatetionn for employee salary payment
	
	//end  validationn for employee page
	
    return {
        //main function to initiate the module
        init: function () {
            handleShopRegister();
			handleBlockRegister();
			handleTenantRegister();
			handleShopSales();
			handleBlockSales();
			handleShopRentPay();
			handleBlockRentPay();
			handleShopElectricityPayment();
			handleBlockElectricityPayment();
			handleEmployeeRegister();
			handleEmployeeSalary();
            handleDPayment();
        }

    };

}();