$(document).ready(function () {
	$(".datatable").DataTable({
			"pagingType": "simple",
			bLengthChange: false
		}),
		$("#datatable-buttons").DataTable({
			"pagingType": "simple",
			lengthChange: !1,
			buttons: ["copy", "excel", "pdf", "colvis"]
		}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")

	$("#datatable-buttons-branch").DataTable({
		"pagingType": "simple",
		"info": false,
		lengthChange: !1,
		buttons: ["copy", "excel", "pdf", "colvis"]
	}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)")
});
