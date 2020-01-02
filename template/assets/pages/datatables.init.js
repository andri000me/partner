$(document).ready(function () {
	$(".datatable").DataTable({
			responsive: true,
			pagingType: "simple",
			bLengthChange: false,
			language: {
				searchPlaceholder: "Cari Data"
			},
		}),
		$(".datatable-modal").DataTable({
			responsive: true,
			pagingType: "simple",
			bLengthChange: false,
			"lengthMenu": [5, 40, 60, 80, 100],
			"pageLength": 5,
			language: {
				searchPlaceholder: "Cari Data"
			},
		}),
		$("#datatable-buttons")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: !1,
			language: {
				searchPlaceholder: "Cari Data"
			},
			buttons: ["copy", "excel", "pdf", "colvis"]
		})
		.buttons()
		.container()
		.appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)");
});
