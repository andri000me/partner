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
				searchPlaceholder: "Cari Data Disini"
			},
		}),

		$("#datatable-buttons")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			"columnDefs": [{
				"visible": false,
				"targets": [3, 4]
			}],
			language: {
				search: '',
				searchPlaceholder: "Cari Data Disini"
			},
			buttons: ["pdf", "excel", "colvis"]
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(0)");

	$("#datatable-agent")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			"columnDefs": [{
				"visible": false,
				"targets": 3
			}],
			language: {
				search: '',
				searchPlaceholder: "Cari Data Disini"
			},
			buttons: ["pdf", "excel", "colvis"]
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(0)");

	$('.datatable-buttons').DataTable({
			responsive: true,
			pagingType: "simple",
			bLengthChange: false,
			language: {
				search: '',
				searchPlaceholder: "Cari Data Disini"
			},
			buttons: [
				'pdf', 'excel', 'colvis'
			]
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(0)");
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
			searchPlaceholder: "Cari Data Disini"
		},
		"lengthMenu": [5, 40, 60, 80, 100],
		"pageLength": 5,

	});
});
