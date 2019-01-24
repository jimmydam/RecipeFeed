var counter = 0;
//var params = "counter=15";

$(window).on('load',function(){
	$("#count").html("first");
	var params = "counter="+counter;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			//document.getElementById("feed").innerHTML = this.responseText;
			$("#feed").html(this.responseText);
		}		
	};	
	xmlhttp.open("GET", "php/search.php?"+params, true);
	xmlhttp.send(null);	
	counter = counter + 10;
	//x = x + 10;
});	

$(window).scroll(function(){
	
	var params = "counter="+counter;
	// stackoverflow help me here: https://stackoverflow.com/questions/3898130/check-if-a-user-has-scrolled-to-the-bottom/3898152
	if($(window).scrollTop() + $(window).height() > $(document).height()) {
				
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				$("#feed").append(this.responseText);
			}		
		};	
		xmlhttp.open("GET", "php/search.php?"+params, true);
		xmlhttp.send(null);	
		
		$("#count").html(counter);
		counter = counter + 10;
		
		
		
	 }
	 
	
	 
	
	
});
