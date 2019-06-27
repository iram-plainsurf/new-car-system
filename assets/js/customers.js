$(document).ready(function()

{
	$("#btn_save").on('click',function()
	{
		var txt_customer_name=$("#txt_customer_name").val();
		var txt_address=$("#txt_address").val();
		var txt_contact=$("#txt_contact").val();
		var txt_model=$("#txt_model").val();
		var txt_price=$("#txt_price").val();
		var txt_payment=$("#txt_payment").val();

		 if (txt_customer_name != "") 
          {
	          if (txt_contact != "") 
	          {
		          if (txt_price != "") 
		          {
		          	$.post("assets/php/save_customers.php",{action:"save",txt_customer_name:txt_customer_name,txt_address:txt_address,txt_contact:txt_contact,txt_model:txt_model,txt_price:txt_price,txt_payment:txt_payment},function(res)
		          	{
		          		 console.log(res);
		          		if (res>0) 
		          		{
		          			alert("Data Inserted Sucessfully");
		          			$('.form-control').val('');
		          			// loadEmployee();
		          		}
		          		else
		          		{
		          			alert("Fail To Insert");
		          		}
		          	}); //end post
		          }	//enf if address
		          else
		          {
		          	$("#price_error").html("Please Enter Price").css({'color':'red','font-style':'italic'});
		          		setTimeout(function(){$('#price_error').html('');},2000);		          
		          }          	
	          } 
	          else
	          {
	          	$("#number_error").html("Please Enter Number").css({'color':'red','font-style':'italic'});	 
	          		setTimeout(function(){$('#number_error').html('');},2000);         	
	          }         	
          }
          else
          {
          	$("#name_error").html("Please Enter Name").css({'color':'red','font-style':'italic'});  
          		setTimeout(function(){$('#name_error').html('');},2000);        	
          }

         /* if (txt_payment == "") 
          {
          	$("#txt_payment").html("Plzzz Enter Payment").css({'color':'red','font-style':'italic'});
          }*/
    });


 


	$("#btn_clear").on('click',function()
	{
		//var username=$("#txt_user_name").val("");
		//var password=$("#txt_password").val("");
		$("#txt_customer_name").val("");
		$("#txt_address").val("");
		$("#txt_contact").val("");
		$("#txt_model").val("");
		$("#txt_price").val("");
		$("#txt_payment").val("");
	});


});  