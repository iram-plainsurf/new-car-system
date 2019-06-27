$(document).ready(function(){
 
    loadEmployee();


  $("#btn_clear").on('click',function()
  {
    //var username=$("#txt_user_name").val("");
    //var password=$("#txt_password").val("");
     var txt_customer_name=$("#txt_customer_name").val("");
     var txt_address=$("#txt_address").val("");
     var txt_contact=$("#txt_contact").val("");
     var txt_model=$("#txt_model").val("");
     var txt_price=$("#txt_price").val("");
     var txt_payment=$("#txt_payment").val("");
  });



    $("#btn_update").on('click',function(){
        var e_id=$("#txt_customer_id").val();
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
                $.post("assets/php/save_customersDashUD.php",{action:"update",id:e_id,txt_customer_name:txt_customer_name,txt_address:txt_address,txt_contact:txt_contact,txt_model:txt_model,txt_price:txt_price,txt_payment:txt_payment},function(res)
                {
                   console.log(res);
                  if (res>0) 
                  {
                    alert("Data Update Sucessfully");
                    $('.form-control').val('');
                     loadEmployee();
                  }
                  else
                  {
                    alert("Fail To Insert");
                  }
                });
              } 
              else
              {
                $("#price_error").html("Please Enter Price").css({'color':'red','font-style':'italic'});             
              }           
            } 
            else
            {
              $("#number_error").html("Please Enter Number").css({'color':'red','font-style':'italic'});             
            }           
          }
          else
          {
            $("#name_error").html("Please Enter Name").css({'color':'red','font-style':'italic'});           
          }

         /* if (payment == "") 
          {
            $("#payment_error").html("Please Enter payment").css({'color':'red','font-style':'italic'});
          }*/
    });




});  /*End of Document Ready*/

   function loadEmployee()
     {        
      $.post("assets/php/save_customersDashUD.php",{action:"fetchData"},function(res)
      {
           $("#loadData").html(res);
      });
     }

  function getEmployee(ele)
    {
      var code=$(ele).attr('id');
      var id=parseInt(code);
      $.post("assets/php/save_customersDashUD.php",{action:"getRow",c_id:id},function(res){
        //console.log(res);
        var data=jQuery.parseJSON(res);
        console.log(data);
        if (data!="") 
        {
          $("#txt_customer_id").val(data['emp_id']);
                $("#txt_customer_name").val(data['txt_customer_name']);
                $("#txt_address").val(data['txt_address']);
                $("#txt_contact").val(data['txt_contact']);
                $("#txt_model").val(data['txt_model']);
                $("#txt_price").val(data['txt_price']);
                $("#txt_payment").val(data['txt_payment']);
        }
      });
    } //End getEmployee Function

    function deleteEmployee(dele) 
    {  
      var code=$(dele).attr('id');
      var id=parseInt(code);
        var r=confirm("Do you really want to delete Customer ?");  
        if (r==true) 
        {
        $.post("assets/php/save_customersDashUD.php",{action:"delete",c_id:id},function(res)
        {
           console.log(res);
           if(res>0)  
           {
              alert("Customer Deleted Sucessfully......!");
              loadEmployee();
           }  
        });         
        }      


    } 



