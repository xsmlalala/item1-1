define(["jquery"],function($){  
    $(document).ready(function(){  
    	$.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
		$("#user_phone").focus(function(){


	        $("#user_phone").blur(function(){
	        	 // $("#username").val("请输入账号");
	        	 // $("#user_phone").attr("placeholder","请输入您的手机号");
	        	 // alert(1);
	        	var val1=$(this).val();
	        	var p= /^1[34578]\d{9}$/;
	        	// var _token = '{{csrf_token()}}';
	        	// alert('_token');
	        	
		        if(p.test(val1)){
		        		$.ajax({ 
						   type:"POST",
			               url:"/dologin",
			               data:{'phone':$("#user_phone").val()},
			               dataType: "json",
			               headers: {

							'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

							},
			               success: function(data){
			               		// console.log(data);
			               		if (data==1) {
			               			$("#mess_phone").css("color","#0F0");
			               			$("#mess_phone").html("手机号正确");
			               		}else{
			               			$("#mess_phone").css("color","red");
			               			$("#mess_phone").html("无此手机号");
			               		}
			               },error:function(){
			                   alert("请求失败");
			               } 
						},"json");
				}else{
					$("#user_phone").val("");
					$("#mess_phone").html("手机号格式错误");
					$("#mess_phone").css("color","red");
				}
	        });
        });


        $("#btn").click(function(){
        	$.ajax({ 
			   type:"POST",
               url:"/docheck",
               data:{'phone':$("#user_phone").val(),'password':$("#user_pass").val()},
               dataType: "json",
               headers: {

				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')

				},
			},"json");
			
        });



    });  
});  