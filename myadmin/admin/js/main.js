$(document).ready(function()
{
	console.log("hello");
	Cat();
	brand();
	product();
	function Cat(){
		
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {category:1},
			success: function(data){
				$("#get_category").html(data);
			}
			
			
		})
	}
	
	
	//ajax query brand
	function brand(){
		
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {brand:1},
			success: function(data){
				$("#get_brand").html(data);
			}
			
			
		})
	}
	
	
	function product(){
		
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getProduct:1},
			success: function(data){
				$("get_products").html(data);
			}
			
			
		})
	}
	function roominfo(){
		
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {getRooms:1},
			success: function(data){
				$("#get_rooms").html(data);
			}
			
			
		})
	}
	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
		$.ajax({
			url: "action.php",
			method: "POST",
			data: {get_selected_category:1,cat_id:cid},
			success: function(data){
				$("#get_products").html(data);
			}
			
			
		})
})
	$("#btnsignup").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "veiw/registers/register.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(data){
				$("#signup_msg").html(data);
			}
			
			
		})
		
	})
	$("#login").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "signin.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(data){
				$("#msg").html(data);
			}
			
			
		})
		
	})
})