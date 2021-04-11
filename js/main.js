$("#topSearch").on("input", function() {
	let search = $("#topSearch").val().trim();
	if (search.length>2){
		$.post("list.php",
		{
		search: search
		},
		function(data, status){
			if (data!="0") {
				let html='';
				data.forEach(function (item, index) {
					html+='<li><a href="Gamepage.php?id='+item.gameid+'"><img src="img/game/'+item.thumbnail+'"><div class="text">'+item.gtitle+'</div></a></li>';
				});	
				$("#list ul").html(html);
				$("#list").css("display","block");
			}else{
				$("#list ul").html("<li>No result found</li>");			
				$("#list").css("display","block");	
			}
		})
	}
	else{
		$("#list").css("display","none");
	}
});