$(document).ready(function(){
	/*****************************  initializing bootstrap multiple select plugin  ******************/
	var classes = $.parseJSON($("#classes-json").text());
	var subjects = $.parseJSON($("#subjects-json").text());
	var areas = $.parseJSON($("#areas-json").text());
	
	$("#classes-json").remove();
	$("#subjects-json").remove();
	$("#areas-json").remove();


	$('#prefered_areas').select2({
		theme:"bootstrap",
		data: areas,
		placeholder: 'Select your prefered areas...'
	});

	$('#prefered_subjects').select2({
		theme:"bootstrap",
		data: subjects,
		placeholder: 'Select your prefered subjects...'
	});

	$('#prefered_classes').select2({
		theme:"bootstrap",
		data: classes,
		placeholder: 'Select your prefered classes...'
	});

	/******************************  attach-documents-div ***************************/
	$("#add-more-attatchment-a").on('click',function(e){
		e.preventDefault();
		var input_file_button = $("<div class='form-group'><label>Attach your Documents</label><input name='attatchments[]' type='file' class='form-control-file'></div>")
		$("#add-more-attatchment-a").before(input_file_button);
	});

	// /*************************  preffered area  *********************************/
	// $('#areas-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		$(this).find('input[type="checkbox"]').prop('checked', function(i, current) {
	// 			return !current; 
	// 		});
	// 		return false;

	// 	});
	// });

	// $('#areas-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		if($(this).find('input[type="checkbox"]').is(":checked")){
	// 			$("#areas-input").val($("#areas-input").val() + $(this).text() + "; ");
	// 		}
	// 		else{

	// 			var tags = $("#areas-input").val();
	// 			tags = tags.replace($(this).text() + "; ", "");
	// 			$("#areas-input").val(tags);
	// 		}

	// 	});
	// });

	// /*************************  preffered subject  *********************************/

	// $('#subjects-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		$(this).find('input[type="checkbox"]').prop('checked', function(i, current) {
	// 			return !current; 
	// 		});
	// 		return false;

	// 	});
	// });

	// $('#subjects-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		if($(this).find('input[type="checkbox"]').is(":checked")){
	// 			$("#subjects-input").val($("#subjects-input").val() + $(this).text() + "; ");
	// 		}
	// 		else{

	// 			var tags = $("#subjects-input").val();
	// 			tags = tags.replace($(this).text() + "; ", "");
	// 			$("#subjects-input").val(tags);
	// 		}

	// 	});
	// });

	// /*************************  preffered subjects  *********************************/

	// $('#classes-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		$(this).find('input[type="checkbox"]').prop('checked', function(i, current) {
	// 			return !current; 
	// 		});
	// 		return false;

	// 	});
	// });

	// $('#classes-list').each(function(index, el) {
	// 	$(el).find('a').on('click',function(){

	// 		if($(this).find('input[type="checkbox"]').is(":checked")){
	// 			$("#classes-input").val($("#classes-input").val() + $(this).text() + "; ");
	// 		}
	// 		else{

	// 			var tags = $("#classes-input").val();
	// 			tags = tags.replace($(this).text() + "; ", "");
	// 			$("#classes-input").val(tags);
	// 		}

	// 	});
	// });
});