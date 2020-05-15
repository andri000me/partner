<div class="row">
	<div class="col-sm-12">
		<div class="page-title-box card-margin-5">
			<h4><b>Form NST</b></h4>
			<ol class="breadcrumb text-size">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">NST</a></li>
				<li class="breadcrumb-item active">Tambah NST</li>
			</ol>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="alert alert-primary font-size gradient card-margin-5 mb-5" role="alert">
			<div class="ml-4 mr-4 mt-3 mb-3">
				<h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam menginput data</h5>
				<p>Cari data menggunakan tombol "Cari" di bawah
					ini.</p>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="card m-b-20  card-margin-5">
			<div class="card-body">
				<div class="form-margin">
					<h4 class="mt-0 mb-4 header-title"><b>Data NST</b></h4>
				</div>
				<form class="" method="post" action="<?= base_url('nst/save') ?>" enctype="multipart/form-data">
					<div class="form-row">
						<div class="col-md-6">
							<div class="form-margin">
								<label>Leads ID</label>
								<div class="input-group">
									<input type="text" class="form-control <?= form_error('leads_id') ? 'is-invalid' : '' ?>" name="leads_id" id="leads_id" value="<?= set_value('leads_id') ?>" required placeholder="202001SLOS12345" aria-label="Recipient's username" aria-describedby="button-addon2">
									<div class="input-group-append">
										<button class="btn btn-danger text-size" type="button" id="reset"><b>Hapus</b></button>
										<button class="btn btn-primary" type="button" id="button-addon2" data-toggle="modal" data-target=".modal-leads"><b>Cari</b></button>
									</div>
								</div>
								<?= form_error('leads_id') ?>
							</div>
							<div class="form-group form-margin">
								<label>Cabang</label>
								<input type="text" class="form-control" name="cabang" id="cabang" required value="" placeholder="Cabang" readonly />
							</div>
							<div class="form-group form-margin">
								<label>Kategori produk</label>
								<input type="text" class="form-control" name="kategori_produk" id="produk" required value="" placeholder="Kategori produk" readonly />
							</div>
							<div class="form-group form-margin">
								<label>Requester</label>
								<div>
									<input type="text" class="form-control" name="requester" id="requester" parsley-type="requester" required value="" placeholder="Requester" readonly />
								</div>
							</div>
							<div class="form-group form-margin">
								<label>Nama konsumen</label>
								<input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required value="" placeholder="Nama Konsumen" readonly />
							</div>
						</div>
						<div class="col-md-6">
							<?php for ($i = 1; $i <= 5; $i++) { ?>
								<div class="form-group text-size form-margin">
									<label>Data Lampiran</label>
									<input type="file" name="lampiran<?= $i ?>" class="filestyle" data-buttonname="btn-secondary">
								</div>
							<?php } ?>
						</div>
						<div class="col-md-12">
							<div class="form-group mb-0 float-right mt-5 form-margin">
								<a href="<?= base_url('nst') ?>" class="btn btn-secondary waves-effect waves-light text-size btn-width"><b>Batal</b></a>
								<button type="submit" class="btn btn-primary waves-effect waves-light text-size btn-width ml-1">
									<b>Simpan</b>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Modal partner -->
<div class="modal fade modal-leads" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header mb-3">
					<h4 class="modal-title"><b>Cari Data Leads</b></h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="" class="datatable-modal table table-hover dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Nama Konsumen</th>
							<th>Leads ID</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($leads->result() as $lead) { ?>
							<tr>
								<td><?= $lead->nama_konsumen ?></td>
								<td><?= $lead->lead_id ?></td>
								<td>
									<center>
										<button class="btn btn-primary pilih-leads radius" id="search" data-id="<?= $lead->id_leads ?>" data-konsumen="<?= $lead->nama_konsumen ?>" data-leads="<?= $lead->lead_id ?>" data-requester="<?= $lead->name ?>" data-cabang="<?= $lead->nama_cabang ?>" data-produk="<?= $lead->produk ?>">Pilih</button>
									</center>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$("table").on('click', '.pilih-leads', function() {
		var leads_id = $(this).data('leads_id');
		var konsumen = $(this).data('konsumen');
		var leads = $(this).data('leads');
		var requester = $(this).data('requester');
		var cabang = $(this).data('cabang');
		var produk = $(this).data('produk');
		// var leads_id = $(this).data('leads');
		$('#nama_konsumen').val(konsumen);
		$('#requester').val(requester);
		$('#leads_id').val(leads);
		$('#cabang').val(cabang);
		$('#produk').val(produk);

		$('.modal-leads').modal('hide');

		$('#reset').show()
		$('#leads_id').attr('readonly', 'readonly');
	})
</script>

<script>
	$('#reset').hide()
	$('#search').click(function() {

	})
	$('#reset').click(function() {
		$('#leads_id, #cabang, #produk, #requester, #nama_konsumen').val("");
		$('#reset').hide();
		$('#leads_id').removeAttr('readonly');
	})
</script>