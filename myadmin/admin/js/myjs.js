$(document).ready(function() {
	$("#adata").hide();
	$(".newpro").click(function() {
			$("#adata").show(500);
		$("#adata").animate({"top":"265px"},100);
		$("#adata").animate({
			"top":"265px"
			},500);
	});

});

$(document).ready(function() {
	$("#test").click(function(){
		alert("You are click cancel");
});


$("body").delegate(".remove","click",function(event){
			event.preventDefault();
			var pid = $(this).attr("remove_id");
			if(confirm("តើច្បាស់ហើយថាចង់លុប This Record?")){
			$.ajax({
			url: "deletedata.php",
			method: "POST",
			data: {removeFromproduct:1,removeId:pid},
			success: function(data){
				alert(data);
				product();
			}
			
			
		})
		}
		})


product();
function product(){
		
		$.ajax({
			url: "getdata.php",
			method: "POST",
			data: {product:1},
			success: function(data){
				$("#show").html(data);
			}
			
			
		})
	}
	
	
$("#btn_insert").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "setdata.php",
			method: "POST",
			data: $("form").serialize(),
			success: function(data){
				alert(data);
				product();
				
			}
			
			
		})
		
	})
$("#btn").click(function(event){
		event.preventDefault();
		$.ajax({
			url: "deletedata.php",
			method: "POST",
			data: $("button").serialize(),
			success: function(data){
				alert(data);
				//product();
				
			}
			
			
		})
		
	})
		
});
	
