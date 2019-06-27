$(document).ready(function()

{
	$("#btn_login").on('click',function()
	{
		var username=$("username").val();
		var password=$("password").val();

		if (username !="")
		{
			if (password !="") 
			{
				$.post("assets/php/save_login.php",{action:"check",username:username,password:password},function(res)
		          	{
		          		 console.log(res);
		          		if (res>0) 
		          		{
		          			alert("Login Sucessfully");
		          			$('.form-control').val('');
		          			 
		          		}
		          		else
		          		{
		          			alert("Fail To Login");
		          		}
		          	}); 
			}
			else
			{
			 $("#password_error").html("Enter Password").css({'color':'red','font-style':'italic'});
			 	setTimeout(function(){$('#password_error').html('');},1200);
			// $("#username_error").html("Enter Username").css({'color':'red','font-style':'italic'});
			}
		}

	    else
        {
         // $("#password_error").html("Enter Password").css({'color':'red','font-style':'italic'}); 
         $("#username_error").html("Enter Username").css({'color':'red','font-style':'italic'});         	
         	setTimeout(function(){$('#username_error').html('');},1200);
        }
     
	  });



	


	$("#btn_clear").on('click',function()
	{
		var username=$("username").val("");
		var password=$("password").val("");
	});


});  