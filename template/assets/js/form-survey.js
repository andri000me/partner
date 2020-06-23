$(
	".ro-active, .pasangan, .pasangan-kar, .pasangan-wir, .resiko, .resiko-pasangan"
).hide();

// jenis Konsumen
jenis_konsumen();

$("#jenis_konsumen").change(function () {
	jenis_konsumen();
});

function jenis_konsumen() {
	if ($("#jenis_konsumen").val() == "RO Active") {
		$(".ro-active").show();
		$("#referral_konsumen, #nomor_kontrak").attr("required", "required");
	} else {
		$(".ro-active").hide();
		$("#referral_konsumen, #nomor_kontrak").removeAttr("required", "");
		$("#referral_konsumen, #nomor_kontrak").val("");
	}
}
// jenis Konsumen

// status pernikahan
menikah();

$("#status_pernikahan").change(function () {
	menikah();
});

function menikah() {
	if ($("#status_pernikahan").val() == "Sudah Menikah") {
		$(".pasangan, .pasangan-kar, .pasangan-wir").show();
		$("#nama_pasangan").attr("required", "required");
	} else {
		$(
			".pasangan, .pasangan-kar, .pasangan-wir, .condition_karyawan_beresiko_pasangan, .condition_wir_beresiko_pasangan"
		).hide();
		$("#nama_pasangan").removeAttr("required", " ");
		$(
			"#nama_pasangan, #condition_karyawan_pekerjaan_pasangan, #condition_karyawan_tempat_kerja_pasangan, #condition_karyawan_profesi_beresiko_pasangan, #condition_wir_pekerjaan_pasangan, #condition_wir_tempat_kerja_pasangan, #condition_wir_profesi_beresiko_pasangan"
		).val("");
	}
}
// status pernikahan

// form survey field
function fs_field() {}
// resiko karyawan
resiko_kar();

$("#condition_karyawan_pekerjaan").change(function () {
	resiko_kar();
});

function resiko_kar() {
	if ($("#condition_karyawan_pekerjaan").val() == "Profesi Beresiko") {
		$(".resiko").show();
		$("#condition_karyawan_profesi_beresiko").attr("required", "required");
	} else {
		$(".resiko").hide();
		$("#condition_karyawan_profesi_beresiko").removeAttr("required", "");
		$("#condition_karyawan_profesi_beresiko").val("");
	}
}
// resiko karyawan

// resiko pasangan karyawan
resiko_kar_pasangan();

$("#condition_karyawan_pekerjaan_pasangan").change(function () {
	resiko_kar_pasangan();
});

function resiko_kar_pasangan() {
	if ($("#condition_karyawan_pekerjaan_pasangan").val() == "Profesi Beresiko") {
		$(".resiko-pasangan-kar").show();
		$("#condition_karyawan_profesi_beresiko_pasangan").attr(
			"required",
			"required"
		);
		$(".condition_karyawan_kerja_pasangan").show();
		$("#condition_karyawan_tempat_kerja_pasangan").attr("required", "required");
	} else if (
		$("#condition_karyawan_pekerjaan_pasangan").val() == "Ibu Rumah Tangga"
	) {
		$(".condition_karyawan_kerja_pasangan").hide();
		$("#condition_karyawan_tempat_kerja_pasangan").val("");
		$("#condition_karyawan_tempat_kerja_pasangan").attr("required", "");
		$(".resiko-pasangan-kar").hide();
		$("#condition_karyawan_profesi_beresiko_pasangan").removeAttr(
			"required",
			""
		);
		$("#condition_karyawan_profesi_beresiko_pasangan").val("");
	} else {
		$(".resiko-pasangan-kar").hide();
		$("#condition_karyawan_profesi_beresiko_pasangan").removeAttr(
			"required",
			""
		);
		$("#condition_karyawan_profesi_beresiko_pasangan").val("");
		$(".condition_karyawan_kerja_pasangan").show();
		$("#condition_karyawan_tempat_kerja_pasangan").attr("required", "required");
	}
}
// resiko pasangan karyawan

// resiko wiraswasta
// $('#condition_wir_pekerjaan').change(function() {
//     if ($('#condition_wir_pekerjaan').val() == "Profesi Beresiko") {
//         $('.resiko').show();
//         $('#condition_wir_profesi_beresiko').attr('required', 'required');
//     } else {
//         $('.resiko').hide();
//         $('#condition_wir_profesi_beresiko').removeAttr('required', ' ');
//     }
// })
$(document).ready(function () {
	resiko_wir_pasangan();
});

$("#condition_wir_pekerjaan_pasangan").change(function () {
	resiko_wir_pasangan();
});

function resiko_wir_pasangan() {
	if ($("#condition_wir_pekerjaan_pasangan").val() == "Profesi Beresiko") {
		$(".resiko-pasangan-wir").show();
		$("#condition_wir_profesi_beresiko_pasangan").attr("required", "required");
		$(".condition_wir_tempat_pasangan").show();
		$("#condition_wir_tempat_kerja_pasangan").attr("required", "required");
	} else if (
		$("#condition_wir_pekerjaan_pasangan").val() == "Ibu Rumah Tangga"
	) {
		$(".condition_wir_tempat_pasangan").hide();
		$("#condition_wir_tempat_kerja_pasangan").attr("required", "");
		$("#condition_wir_tempat_kerja_pasangan").val("");
		$(".resiko-pasangan-wir").hide();
		$("#condition_wir_profesi_beresiko_pasangan").val("");
		$("#condition_wir_profesi_beresiko_pasangan").removeAttr("required", "");
	} else {
		$(".resiko-pasangan-wir").hide();
		$("#condition_wir_profesi_beresiko_pasangan").removeAttr("required", "");
		$("#condition_wir_profesi_beresiko_pasangan").val("");
		$(".condition_wir_tempat_pasangan").show();
		$("#condition_wir_profesi_beresiko_pasangan").removeAttr(
			"required",
			"rerquired"
		);
	}
}

// resiko wiraswasta
