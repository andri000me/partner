$(document).ready(function () {
	$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
		$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
	});

	$(".datatable").DataTable({
		responsive: true,
		pagingType: "simple",
		bLengthChange: false,
		language: {
			search: "",
			searchPlaceholder: "Cari Data Disini",
		},
	}),
		$("#datatable-buttons")
			.DataTable({
				responsive: true,
				pagingType: "simple",
				lengthChange: false,
				language: {
					search: "",
					searchPlaceholder: "Cari Data Disini",
				},
				buttons: ["pdf", "excel", "colvis"],
			})
			.buttons()
			.container()
			.appendTo(".col-md-6:eq(0)");

	$("#datatable-buttons-1")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(2)");

	$("#datatable-buttons-2")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(4)");

	$("#datatable-buttons-3")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(6)");

	$("#datatable-buttons-4")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(8)");

	$("#datatable-buttons-profile")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(3)");

	$("#datatable-kerjasama")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			columnDefs: [
				{
					visible: false,
					targets: [3, 4],
				},
			],
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(0)");

	$("#datatable-agent")
		.DataTable({
			responsive: true,
			pagingType: "simple",
			lengthChange: false,
			columnDefs: [
				{
					visible: false,
					targets: 3,
				},
			],
			language: {
				search: "",
				searchPlaceholder: "Cari Data Disini",
			},
			buttons: ["pdf", "excel", "colvis"],
		})
		.buttons()
		.container()
		.appendTo(".col-md-6:eq(0)");

	// $('.datatable-buttons').DataTable({
	// 	responsive: true,
	// 	pagingType: "simple",
	// 	bLengthChange: false,
	// 	language: {
	// 		search: '',
	// 		searchPlaceholder: "Cari Data Disini"
	// 	},
	// 	buttons: [
	// 		'pdf', 'excel', 'colvis'
	// 	]
	// })

	var order = "";
	if ($("#level").val() == "4") {
		order = "asc";
	} else {
		order = "desc";
	}
	$(".datatable-tiket").DataTable({
		order: [[0, order]],
		responsive: true,
		pagingType: "simple",
		bLengthChange: false,
		language: {
			search: "",
			searchPlaceholder: "Cari Data Disini",
		},
		pageLength: 25,
	});
});

$(document).ready(function () {
	$('a[data-toggle="tab"]').on("shown.bs.tab", function (e) {
		$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
	});

	$(".datatable-modal").DataTable({
		responsive: true,
		pagingType: "simple",
		bLengthChange: false,
		language: {
			search: "",
			searchPlaceholder: "Cari Data Disini",
		},
		lengthMenu: [5, 40, 60, 80, 100],
		pageLength: 5,
	});
});
