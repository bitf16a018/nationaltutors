$(document).ready(function() {

	var data = $.parseJSON($("#tutor-requests-data-div").text());
	$('#tutor-requests-data-div').remove();

	console.log(data);
	var site_url = $('#site-url-div').text();

	$('#tutor-requests-table').DataTable({
		"data":data,
		"columns" : [
		//{ "data" : "name" },
		{
			"mData": "name",
			"mRender": function(data, type, row){
				return "<a href='" + $.trim(site_url) +"/AdminPanel/tutor_profile/" + row['tutor_id'] + "'>" + data + "</a>";
			}
		},
		{ "data" : "email" },
		{ "data" : "date_of_request" },
		{
			"mData": "request_status",
			"mRender": function(data, type, row){
				if( data.toLowerCase() == 'unseen')
					return "<span class='label label-warning' style='font-size:10pt;'>" + data + "</span>";
				else if(data.toLowerCase() == 'approved')
					return "<span class='label label-success' style='font-size:10pt;'>" + data + "</span>";
				else if(data.toLowerCase() == 'denied')
					return "<span class='label label-danger' style='font-size:10pt;'>" + data + "</span>";
			}
		},
		]
	});

});
/*$('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })*/