$(document).ready(function () {
	$("a[data-toggle=\"tab\"]").on("shown.bs.tab", function (e) {
		$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
	});

	$(".datatable").DataTable({
			responsive: true,
			pagingType: "simple",
			bLengthChange: false,
			language: {
				search: '',
				searchPlaceholder: "Cari Data"
			}
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

$(document).ready(function () {
	$("a[data-toggle=\"tab\"]").on("shown.bs.tab", function (e) {
		$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
	});

	$(".datatable-modal").DataTable({
		responsive: true,
		pagingType: "simple",
		bLengthChange: false,
		language: {
			search: '',
			searchPlaceholder: "Cari Data"
		},
		"lengthMenu": [5, 40, 60, 80, 100],
		"pageLength": 5,

	});
});
