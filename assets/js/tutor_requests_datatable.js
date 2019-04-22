$(document).ready(function() {

	var data = $.parseJSON($("#tutor-requests-data").text());


	$('#tutor-requests-table').DataTable(
		data:data,
		columns: [
			{ title: "Requestee Name" },
			{ title: "Position" },
			{ title: "Office" },
			{ title: "Extn." },
			{ title: "Start date" },
			{ title: "Salary" }
			]
		);

});
/*$('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })*/