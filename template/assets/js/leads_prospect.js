$(
	".travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor"
).hide();
source_leads();
$("#soa").change(function () {
	source_leads();
	$("#id_partner").val("");
	$("#id_agent").val("");
	$("#nama_vendor").val("").removeAttr("required");
	$("#nama_event").val("");
	$("#nama_partner").val("");
	$("#nama_agent").val("");
	$(
		"#nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak"
	).val("");
});

function source_leads() {
	if ($("#soa").val() == "Tour & travel") {
		$(".travel, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Travel");
		$("#btn-data").attr("data-target", "#modal-partner");
		$("#nama_partner").attr("required", "required");
		$(
			"#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "Penyedia Jasa / Barang") {
		$(".jasa, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Penyedia Jasa");
		$("#btn-data").attr("data-target", "#modal-partner");
		$("#nama_partner").attr("required", "required");
		$(
			"#nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "Tele Sales") {
		$(".jasa, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		// $("#nama_partner").attr("required", "required");
		$(
			"#nama_partner, #nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "CMS") {
		$(".jasa, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		// $("#nama_partner").attr("required", "required");
		$(
			"#nama_partner, #nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "Sharia Head") {
		$(".jasa, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		// $("#nama_partner").attr("required", "required");
		$(
			"#nama_partner, #nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "HO - Product") {
		$(".jasa, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		// $("#nama_partner").attr("required", "required");
		$(
			"#nama_partner, #nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent"
		).hide();
	} else if ($("#soa").val() == "Agent BA") {
		$(".vendor, .agent, .form, .agent-form, .btn-data, .form-agent").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		$("#nama_agent").attr("placeholder", "Pilih Nama Agent");
		$("#btn-data-agent").attr("data-target", "#modal-agent");
		$("#nama_agent").attr("required", "required");
		$(
			"#nama_partner, #nik_egc, #cabang_egc, #posisi_egc, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro"
		).hide();
	} else if ($("#soa").val() == "EGC") {
		$(".nik, .posisi, .cabang, .vendor, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		$("#nik_egc, #cabang_egc, #posisi_egc").attr("required", "required");
		$(
			"#nama_agent, #referral_konsumen, #nomor_kontrak, #nama_event"
		).removeAttr("required", "");
		$(
			".travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent"
		).hide();
	} else if ($("#soa").val() == "CGC") {
		$(".kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data").show();
		$("#nama_partner").attr("placeholder", "Pilih Nama Merchant");
		$("#btn-data").attr("data-target", "#modal-partner");
		$("#referral_konsumen, #nomor_kontrak").attr("required", "required");
		$(
			"#nama_partner, #nama_agent, #nik_egc, #cabang_egc, #posisi_egc, #nama_event"
		).removeAttr("required", "");
		$(
			".travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent"
		).hide();
	} else {
		$(
			".jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent"
		).hide();
		$("#nama_partner, #nama_agent").removeAttr("required", "");
	}
}

$(".readonly").keydown(function (e) {
	e.preventDefault();
});

// alert($("#id_leads").val());
$("#reset").hide();
if ($("#id_leads").val()) {
	// $("#nama_konsumen").attr("readonly", "readonly");
	$("#reset").show();
}

$("#reset").click(function () {
	$(
		"#id_leads, #id_agent, #id_partner, #nama_konsumen, #produk, #detail_produk, #telepon, #soa, #nama_event, #nama_partner, #nama_agent, #nik_egc, #posisi_egc, #cabang_egc, #nomor_kontrak, #referral_konsumen"
	).val("");
	$(
		".travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, #reset"
	).hide();
	$("#nama_konsumen").removeAttr("readonly");
});
$("#reset").click(function () {
	$(
		"#id_mapping_leads, #id_agent, #id_mapping, #nama_konsumen, #produk, #detail_produk, #telepon, #soa, #nama_event, #nama_partner, #nama_agent, #nik_egc, #posisi_egc, #cabang_egc, #nomor_kontrak, #referral_konsumen"
	).val("");
	$(
		".travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, #reset"
	).hide();
	$("#nama_konsumen").removeAttr("readonly");
});

$(".ro-active, .pasangan").hide();

// Status Konsumen
jenis_konsumen();

$("#jenis_konsumen").change(function () {
	jenis_konsumen();
});

function jenis_konsumen() {
	if ($("#jenis_konsumen").val() == "RO Active") {
		$(".ro-active").show();
		$(".referral_konsumen, .nomor_kontrak").attr("required", "required");
	} else {
		$(".ro-active").hide();
		$(".referral_konsumen, .nomor_kontrak").removeAttr("required", "");
		$(".referral_konsumen, .nomor_kontrak").val("");
	}
}

// status pernikahan
status_pernikahan();

$("#status_pernikahan").change(function () {
	status_pernikahan();
});

function status_pernikahan() {
	if ($("#status_pernikahan").val() == "Sudah Menikah") {
		$(".pasangan").show();
		$("#nama_pasangan").attr("required", "required");
	} else {
		$(".pasangan").hide();
		$("#nama_pasangan").removeAttr("required", " ");
	}
}

$(document).ready(function () {
	// $('asd').hide();
	var radioValue = $("input[name='npwp']:checked").val();
	if (radioValue == "Ada") {
		$(".npwp-form").hide();
		$(".npwp-form").removeAttr("required", "");
	} else if (radioValue == "Ada") {
		$(".npwp-form").show();
		$(".npwp-form").attr("required", "required");
	}
});
