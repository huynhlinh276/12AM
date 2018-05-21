console.log('ok');
$(document).ready(function(){
	getImage();
	$('#image-table').DataTable({
		responsive: true,
		autoWidth: false,
	});
	
	
function getImage(){
	$.ajax({
		url: 'getImage.php',
		method: 'POST',
		dataType: 'json',
		//data
	}).done(function(data){
		
		if (data.result) {
			var rows = "";
			$.each(data.image, function(index, image){
				// console.log(index+" - "+image.image_name);
				rows += "<tr id='"+image.id+"'>";
				
				rows += "<td class='title'>"+image.Title+"</td>";
				rows += "<td class='image'>"+"<img class='thumbnail' src='"+image.Image+"'>"+"</td>";
				rows += "<td class='description'>"+image.Description+"</td>";
				rows += "<td class='time'>"+image.Time+"</td>";
				rows += "<td>";
				rows += "</td>";
				rows += "</tr>";
			})
			$("tbody").html(rows);
		}
	}).fail(function(jqXHR, statusText, errorThrown){
		console.log("Fail:"+jqXHR.responseText);
		console.log(statusText);
	}).always(function(){

	})
}
function clearFileInput(id) 
{ 
    // var oldInput = document.getElementById(id); 

    // var newInput = document.createElement("input"); 

    // newInput.type = "file"; 
    // newInput.id = oldInput.id; 
    // newInput.name = oldInput.name; 
    // newInput.className = oldInput.className; 
    // newInput.style.cssText = oldInput.style.cssText; 
    // // TODO: copy any other relevant attributes 

    // oldInput.parentNode.replaceChild(newInput, oldInput); 
}

clearFileInput("#fileToUpLoad");