$(function () {
	function convertToInt(id) {
		if (!$(id).is(":focus")) {
			if ($(id).val() == "") $(id).val("0");
		}
		if ($(id).length) return parseInt($(id).val().replace(/,/g, ""));
	}

	//Purpose
	$("#nav-pembiayaan").on("keyup change", function () {
		// Total Uang Muka
		var total_uang_muka =
			convertToInt("#purpose_uang_muka") +
			convertToInt("#purpose_biaya_administrasi") +
			convertToInt("#purpose_asuransi_jiwa") +
			convertToInt("#purpose_asuransi_kendaraan");
		$("#purpose_total_uang_muka").val(total_uang_muka);

		//NTF Murni
		var ntf_murni =
			convertToInt("#purpose_harga_beli_ke_merchant") -
			convertToInt("#purpose_uang_muka");
		$("#purpose_ntf_murni").val(ntf_murni);

		//Angsuran per bulan
		var angsuran =
			(convertToInt("#purpose_harga_jual_ke_konsumen") -
				convertToInt("#purpose_uang_muka")) /
			convertToInt("#purpose_lama_angsuran");
		$("#purpose_angsuran_per_bulan").val(angsuran);
	});

	//Capital
	$("#nav-kondisi").on("keyup change", function () {
		//Total nilai
		var total_aset =
			convertToInt("#capital_harga1") +
			convertToInt("#capital_harga2") +
			convertToInt("#capital_harga3") +
			convertToInt("#capital_harga4") +
			convertToInt("#capital_harga5");
		$("#capital_total_aset").val(total_aset);
	});

	//Karyawan
	$("#kapasitas-karyawan").on("keyup change", function () {
		// alert();
		// Pendapatan Lainnya (Karyawan)
		var pendapatan_karyawan_lainnya =
			convertToInt("#capacity_karyawan_nilai_lain1") +
			convertToInt("#capacity_karyawan_nilai_lain2");

		// Total Pendapatan (Karyawan)
		var pendapatan_karyawan =
			// convertToInt("#capacity_karyawan_income_bruto") +
			convertToInt("#capacity_karyawan_income_thp") +
			convertToInt("#capacity_karyawan_total_bonus") +
			pendapatan_karyawan_lainnya +
			convertToInt("#capacity_karyawan_income_pasangan");
		$("#capacity_karyawan_total_net_income").val(pendapatan_karyawan);

		// Total Pendapatan Periodik (Karyawan)
		var pendapatan_periodik_karyawan =
			convertToInt("#capacity_karyawan_nilai1") +
			convertToInt("#capacity_karyawan_nilai2") +
			convertToInt("#capacity_karyawan_nilai3");
		$("#capacity_karyawan_total_bonus").val(pendapatan_periodik_karyawan);

		// Hutang Karyawan (Karyawan)
		var hutang_karyawan =
			convertToInt("#capacity_karyawan_nilai_hutang1") +
			convertToInt("#capacity_karyawan_nilai_hutang2") +
			convertToInt("#capacity_karyawan_nilai_hutang3");

		// Total Pengeluaran (Karyawan)
		var pengeluaran_karyawan =
			convertToInt("#capacity_karyawan_outcome_pendidikan") +
			convertToInt("#capacity_karyawan_outcome_rumah") +
			convertToInt("#capacity_karyawan_outcome_listrik") +
			convertToInt("#capacity_karyawan_outcome_lainnya") +
			hutang_karyawan;
		$("#capacity_karyawan_total_outcome").val(pengeluaran_karyawan);

		//Kelebihan Pendapatan Karyawan (Karyawan)
		$("#capacity_karyawan_kelebihan_net_income").val(
			pendapatan_karyawan - pengeluaran_karyawan
		);
	});

	// Wiraswasta
	$("#nav-kapasitas").on("keyup change", function () {
		// Average Kredit Mutasi (Wiraswasta)
		var wiraswasta_mutasi =
			convertToInt("#capacity_wir_mutasi1") +
			convertToInt("#capacity_wir_mutasi2") +
			convertToInt("#capacity_wir_mutasi3");
		$("#capacity_wir_avr_mutasi").val(wiraswasta_mutasi / 3);

		// Average Kredit Nota (Wiraswasta)
		var wiraswasta_nota =
			convertToInt("#capacity_wir_nota1") +
			convertToInt("#capacity_wir_nota2") +
			convertToInt("#capacity_wir_nota3");
		$("#capacity_wir_avr_nota").val(wiraswasta_nota / 3);

		//Total Pendapatan Omset (Wiraswasta)
		var total_pendapatan_omset =
			((convertToInt("#capacity_wir_avr_nota") +
				convertToInt("#capacity_wir_avr_mutasi")) *
				convertToInt("#capacity_wir_profit_margin")) /
			100;
		$("#capacity_wir_total_income").val(total_pendapatan_omset);

		//Biaya Operasional (Wiraswasta)
		var operasional_wiraswasta =
			convertToInt("#capacity_wir_sewa") +
			convertToInt("#capacity_wir_payroll") +
			convertToInt("#capacity_wir_internet") +
			convertToInt("#capacity_wir_lainnya");
		$("#capacity_wir_total_operasional").val(operasional_wiraswasta);

		//Biaya Operasional Duplikat di bagian omset (Wiraswasta)
		$("#capacity_wir_sewa_duplicate").val($("#capacity_wir_sewa").val());
		$("#capacity_wir_payroll_duplicate").val($("#capacity_wir_payroll").val());
		$("#capacity_wir_internet_duplicate").val(
			$("#capacity_wir_internet").val()
		);
		$("#capacity_wir_lainnya_duplicate").val($("#capacity_wir_lainnya").val());

		//Total Nett Profit (Wiraswasta)
		var total_nett_profit =
			convertToInt("#capacity_wir_total_income") -
			convertToInt("#capacity_wir_total_operasional");

		// (convertToInt("#capacity_wir_gross_profit") *
		// 	convertToInt("#capacity_wir_profit_margin")) /
		// 100;
		$("#capacity_wir_total_net_profit").val(total_nett_profit);

		// Pengeluaran Wiraswasta (Wiraswasta)
		var pengeluaran_wiraswasta =
			convertToInt("#capacity_wir_outcome_pendidikan") +
			convertToInt("#capacity_wir_outcome_rumah_tangga") +
			convertToInt("#capacity_wir_outcome_internet") +
			convertToInt("#capacity_wir_outcome_lainnya");
		$("#capacity_wir_total_biaya_outcome").val(pengeluaran_wiraswasta);

		//Total Pendapatan (Wiraswasta)
		var total_pendapatan_wiraswasta =
			convertToInt("#capacity_wir_total_net_profit") +
			convertToInt("#capacity_wir_income_pasangan") +
			convertToInt("#capacity_wir_nilai_lain1") +
			convertToInt("#capacity_wir_nilai_lain2");
		$("#capacity_wir_total_lain").val(total_pendapatan_wiraswasta);

		// Sisa Pendapatan (Wirasawsta)
		var sisa_pendapatan =
			convertToInt("#capacity_wir_total_lain") -
			convertToInt("#capacity_wir_total_biaya_outcome");
		$("#capacity_wir_nett_income").val(sisa_pendapatan);

		//Omset per bulan (Wiraswasta)
		var omset_per_bulan =
			convertToInt("#capacity_wir_usaha_omset_perhari") *
			convertToInt("#capacity_wir_usaha_jumlah_hari_buka");
		$("#capacity_wir_usaha_omset_perbulan").val(omset_per_bulan);

		// Gross Profit (Wiraswasta)
		var gross_profit =
			convertToInt("#capacity_wir_usaha_omset_perbulan") -
			convertToInt("#capacity_wir_total_operasional");
		$("#capacity_wir_gross_profit").val(gross_profit);

		// Hasil Omset Duplikat (Wiraswasta)
		$("#capacity_wir_profit_margin_duplikat").val(
			$("#capacity_wir_profit_margin").val()
		);
		$("#capacity_wir_total_net_profit_duplikat").val(
			$("#capacity_wir_total_net_profit").val()
		);
	});
});
