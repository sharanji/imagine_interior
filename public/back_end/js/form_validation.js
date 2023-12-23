$(function () 
{ 
	// validate signup form on keyup and submit
	var actdata= $('#formValidation').html();
	if( typeof(actdata) == "undefined" )
	{
		
	}
	else
	{
		$("#formValidation").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username_email: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				phone_number: {
					required:true,
					minlength:10,
					maxlength:11,
				},
				mobile_number: {
					required:true,
					minlength:10,
					maxlength:10,
				},
				phone: {
					required:true,
					minlength:10,
					maxlength:10,
				},
				phone2: {
					required:true,
					minlength:10,
					maxlength:10,
				},
				'qualification_grade_cgpa[]': {
					required:true,
				},
				'qualification_grade_percentage[]': {
					required:true,
				},
				
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
				//'qualification_grade_cgpa[]': "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username_email: "Please enter your E-Mail or User ID",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				phone_number: {
					required: "Please provide a phone number",
					minlength: "Please provide a valid phone number",
				},
				mobile_number: {
					required: "Please provide a mobile number",
					minlength: "Please provide a valid mobile number",
				},
				phone: {
					required: "Please provide a phone number",
					minlength: "Please provide a valid phone number",
				},
				phone2: {
					required: "Please provide a phone number",
					minlength: "Please provide a valid phone number",
				},
				'qualification_grade_cgpa[]': {
					required: "Required",
				},
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
				//'qualification_grade_cgpa[]': "Required"
			},
			errorPlacement: function(error, element)
			{				
				if(element.attr('name') == "You_agree_our"){
					//error.insertAfter('p');
					$( ".terms-error" ).after( error );
				}else if(element.attr('name') == "gender"){
					//error.insertAfter('p');
					$( ".gender-error" ).after( error );
				}else{
					error.insertAfter(element);
				}
			},
			submitHandler: function(form)
			{ 
				$(".disabled-submit-button").attr("disabled", true); //submit button class
				form.submit();
			}						
		});
	}
});


$(function () 
{ 
	// validate signup form on keyup and submit
	var actdata= $('#formValidation1').html();
	if( typeof(actdata) == "undefined" )
	{
		
	}
	else
	{
		$("#formValidation1").validate({
			rules: {
				firstname: "required",
				lastname: "required",
				username_email: "required",
				username: {
					required: true,
					minlength: 2
				},
				password: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				},
				phone_number: {
					required:true,
					
					minlength:10,
					maxlength:10,
				},
				'qualification_grade_cgpa[]': {
					required:true,
				},
				'qualification_grade_percentage[]': {
					required:true,
				},
				
				topic: {
					required: "#newsletter:checked",
					minlength: 2
				},
				agree: "required"
				//'qualification_grade_cgpa[]': "required"
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				username_email: "Please enter your E-Mail or User ID",
				username: {
					required: "Please enter a username",
					minlength: "Your username must consist of at least 2 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				phone_number: {
					required: "Please provide a phone number",
					minlength: "Please provide a  valid phone number",
				},
				'qualification_grade_cgpa[]': {
					required: "Required",
					
				},
				
				email: "Please enter a valid email address",
				agree: "Please accept our policy"
				//'qualification_grade_cgpa[]': "Required"
			},
			errorPlacement: function(error, element){				
							
				if(element.attr('name') == "You_agree_our"){
					//error.insertAfter('p');
					$( ".terms-error" ).after( error );
				}else if(element.attr('name') == "gender"){
					//error.insertAfter('p');
					$( ".gender-error" ).after( error );
				}else{
					error.insertAfter(element);
				}
			},
			submitHandler: function(form)
			{ 
				$(".disabled-submit-button").attr("disabled", true); //submit button class
				form.submit();
			}						
		});
	}
});


function checkValidPhoneNumber(check)
{   
	var a = check;
	
	var x = a.keyCode;
	if(!(a >= 48 || a <= 57))
	{
		alert("Please enter valid phone number");
		$('.ValidPhoneNumber').val('');
		return false;
	}       
	/* else if(a=="" || a==null)
	{
		alert("field is blank");
		return false;
	} */
	return true;        
}

function validateSingleImageExtension(fld) 
{
	var fileUpload = fld;
	
	if (typeof (fileUpload.files) != "undefined")
	{
		var size = parseFloat( fileUpload.files[0].size / 1024 ).toFixed(2);
		var validSize = 1024 * 2; //1024 - 1Mb multiply 4mb
		
		//var validSize = 100; 
		
		if( size > validSize )
		{
			//alert("Document upload size is 4 MB");
			alert("Image size should not exceed 2 MB.");
			$('.singleImage').val('');
			var value = 1;
			return false;
		}
		else if(!/(\.png|\.jpg|\.jpeg|\.gif)$/i.test(fld.value))
		{
			alert("Invalid image file type.");      
			$('.singleImage').val('');
			return false;   
		}
		
		if(value != 1)	
			return true; 
	}
}

/** Single Document Type & Size Validation **/
function validateSingleDocumentExtension(fld) 
{
	var fileUpload = fld;
	
	if (typeof (fileUpload.files) != "undefined")
	{
		var size = parseFloat( fileUpload.files[0].size / 1024 ).toFixed(2);
		var validSize = 1024 * 2; //1024 - 1Mb multiply 4mb
		
		//var validSize = 500; 
		
		if( size > validSize )
		{
			//alert("Document upload size is 4 MB");
			alert("File size should not exceed 2 MB.");
			$('.singleDocument').val('');
			var value = 1;
			return false;
		}
		else if(!/(\.doc|\.docx|\.txt|\.pdf)$/i.test(fld.value))
		//else if(!/(\.pdf)$/i.test(fld.value))
		{
			alert("Invalid document file type.");      
			$('.singleDocument').val('');
			return false;   
		}
		
		if(value != 1)	
			return true; 
	}
}

/** Single video Type & Size Validation **/
function validateSingleVideoExtension(fld) 
{
	var fileUpload = fld;
	
	if (typeof (fileUpload.files) != "undefined")
	{
		var size = parseFloat( fileUpload.files[0].size / 1024 ).toFixed(2);
		var validSize = 1024 * 5; //1024 - 1Mb multiply 4mb
		
		//var validSize = 100; 
		
		if( size > validSize )
		{
			//alert("Document upload size is 4 MB");
			alert("Video size should not exceed 5 MB.");
			$('.singleVideo').val('');
			var value = 1;
			return false;
		}
		else if(!/(\.mp4|\.avi)$/i.test(fld.value))
		{
			alert("Invalid video file type.");      
			$('.singleVideo').val('');
			return false;   
		}
		
		if(value != 1)	
			return true; 
	}
}

/** Doc and Docx Type & Size Validation **/
function validateDocandDocx(fld) 
{
	var fileUpload = fld;
	
	if (typeof (fileUpload.files) != "undefined")
	{
		var size = parseFloat( fileUpload.files[0].size / 1024 ).toFixed(2);
		var validSize = 1024 * 2; //1024 - 1Mb multiply 4mb
		
		//var validSize = 500; 
		
		if( size > validSize )
		{
			//alert("Document upload size is 4 MB");
			alert("File size should not exceed 2 MB.");
			$('.singleDocument').val('');
			var value = 1;
			return false;
		}
		else if(!/(\.doc|\.docx)$/i.test(fld.value))
		//else if(!/(\.pdf)$/i.test(fld.value))
		{
			alert("Please upload Doc and Docx file only.");      
			$('.singleDocument').val('');
			return false;   
		}
		
		if(value != 1)	
			return true; 
	}
}

