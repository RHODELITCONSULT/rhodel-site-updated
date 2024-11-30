$(document).ready(function(){
// Check admin password is corrent ot not
$("#current_pwd").keyup(function(){
	var current_pwd = $("#current_pwd").val();
	// alert(current_pwd);
	$.ajax({
		headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	},
		type:'post',
		url:'/admin/check-current-password',
		data:{current_pwd:current_pwd},
		success:function(resp){
			if(resp=="false"){
				$("#verifyCurrentPwd").html("Current Password is Incorrect!");
			}else if(resp=="true"){
				$("#verifyCurrentPwd").html("Current Password is Correct!");
			}
		},error:function(){
			alert("Error");
		}
	});
});


	//Upadate CMS Page Status
	$(document).on("click",".updateCmsPageStatus",function(){
		var status = $(this).children("i").attr("status");
		var page_id = $(this).attr("page_id");
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-cms-page-status',
	    	data:{status:status,page_id:page_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#page-"+page_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#page-"+page_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

	//Update Category Status
	$(document).on("click",".updateCategoryStatus",function(){
		var status = $(this).children("i").attr("status");
		var category_id = $(this).attr("category_id");

		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-category-status',
	    	data:{status:status,category_id:category_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#category-"+category_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#category-"+category_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})


	//Update Product Status
	$(document).on("click",".updateProductStatus",function(){
		var status = $(this).children("i").attr("status");
		var product_id = $(this).attr("product_id");
		
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-product-status',
	    	data:{status:status,product_id:product_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#product-"+product_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#product-"+product_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

	//Update Brand Status
	$(document).on("click",".updateBrandStatus",function(){
		var status = $(this).children("i").attr("status");
		var brand_id = $(this).attr("brand_id");
		
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-brand-status',
	    	data:{status:status,brand_id:brand_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#brand-"+brand_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#brand-"+brand_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

	//Update Banner Status
	$(document).on("click",".updateBannerStatus",function(){
		var status = $(this).children("i").attr("status");
		var banner_id = $(this).attr("banner_id");
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-banner-status',
	    	data:{status:status,banner_id:banner_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#banner-"+banner_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#banner-"+banner_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

	//Update User Status
	$(document).on("click",".updateUserStatus",function(){
		var status = $(this).children("i").attr("status");
		var user_id = $(this).attr("user_id");
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-user-status',
	    	data:{status:status,user_id:user_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#user-"+user_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#user-"+user_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

	//Update Subsribers Status
	$(document).on("click",".updateSubscriberStatus",function(){
		var status = $(this).children("i").attr("status");
		var subscriber_id = $(this).attr("subscriber_id");
		
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-subscriber-status',
	    	data:{status:status,subscriber_id:subscriber_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#subscriber-"+subscriber_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#subscriber-"+subscriber_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}	
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})


	

	

	//Update Subadmin Status
	$(document).on("click",".updateSubadminStatus",function(){
		var status = $(this).children("i").attr("status");
		var subadmin_id = $(this).attr("subadmin_id");
		
		$.ajax({
			headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    	},
	    	type:'post',
	    	url:'/admin/update-subadmin-status',
	    	data:{status:status,subadmin_id:subadmin_id},
	    	success:function(resp){
	    		if(resp['status']==0){
					$("#subadmin-"+subadmin_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>")
	    		}else if(resp['status']==1){
	    			$("#subadmin-"+subadmin_id).html("<i class='fas fa-toggle-on' style='color:#3f6ed3' status='Active'></i>")
	    		}
	    			
	    	},error:function(){
	    		alert("Error");
	    	}
		})
	})

// Confirm the deletion of CMS Page
// $(document).on("click",".confirmDelete",function(){
// 	var name = $(this).attr('name');
// 	if(confirm('Are you sure to delete this '+name+'?')){
// 		return true;
// 	}
// 	return false;
// });*/

//Confirm Deleting with SweetAlert	
$(document).on("click",".confirmDelete",function(){
		var record = $(this).attr('record');
		var recordid = $(this).attr('recordid');
		Swal.fire({
		  title: 'Are you sure?',
		  text: "You won't be able to revert this!",
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
		  if (result.isConfirmed) {
		    Swal.fire(
		      'Deleted!',
		      'Your file has been deleted.',
		      'success'
		    )
		    window.location.href="/admin/delete-"+record+"/"+recordid;
		  }
		})
	});
	
	
    
    // Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increase field counter
            $(wrapper).append(fieldHTML); //Add field html
        }else{
            alert('A maximum of '+maxField+' fields are allowed to be added. ');
        }
    });
    
    // Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrease field counter
    });

//     // Show/Hide Coupon field for Manual/Automatic
//     $("#ManualCoupon").click(function(){
//     	$("#couponField").show();
//     });

//     $("#AutomaticCoupon").click(function(){
//     	$("#couponField").hide();
//     });

   
})



