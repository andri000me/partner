<div class="row">
	<div class="col-md-12 mt-5">
		<div class="ml-3 mr-3">
			<div class="card m-b-20">
				<div class="card-body">
					<h4 class="mt-0 header-title">Form NST</h4>
					<p class="text-muted m-b-30 text-size">Cari data menggunakan tombol search di bawah
						ini.</p>
					<form class="" method="post" action="<?= base_url('nst/save') ?>" enctype="multipart/form-data">
						<div class="form-row">
							<div class="col-md-6">
								<div class="ml-3 mr-3">
									<label>Leads ID</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control <?= form_error('leads_id') ? 'is-invalid' : '' ?>" name="leads_id" id="leads_id" value="<?= set_value('leads_id') ?>" required placeholder="202001SLOS12345" aria-label="Recipient's username" aria-describedby="button-addon2">
										<div class="input-group-append">
											<button class="btn btn-danger text-size" type="button" id="reset">Hapus</button>
											<button class="btn btn-primary" type="button" id="button-addon2" data-toggle="modal" data-target=".modal-leads">Cari</button>
										</div>
									</div>
									<?= form_error('leads_id') ?>
									<div class="form-group">
										<label>Cabang</label>
										<input type="text" class="form-control" name="cabang" id="cabang" required value="" placeholder="Cabang" readonly />
									</div>
									<div class="form-group">
										<label>Kategori produk</label>
										<input type="text" class="form-control" name="kategori_produk" id="produk" required value="" placeholder="Kategori produk" readonly />
									</div>
									<div class="form-group">
										<label>Requester</label>
										<div>
											<input type="text" class="form-control" name="requester" id="requester" parsley-type="requester" required value="" placeholder="Requester" readonly />
										</div>
									</div>
									<div class="form-group">
										<label>Nama konsumen</label>
										<input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required value="" placeholder="Nama Konsumen" readonly />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="ml-3 mr-3">
									<?php for ($i = 1; $i <= 5; $i++) { ?>
										<div class="form-group text-size">
											<label>Data Lampiran</label>
											<input type="file" name="lampiran<?= $i ?>" class="filestyle" data-buttonname="btn-secondary">
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-0 float-right mt-5 ml-3 mr-3">
									<a href="mapping.html" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
									<button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal partner -->
<div class="modal fade modal-leads" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header mb-2">
					<h4 class="modal-title">Cari Data Leads</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="" class="datatable-modal table table-striped table-bordered dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
										<button class="btn btn-primary pilih-leads" id="search" data-id="<?= $lead->id_leads ?>" data-konsumen="<?= $lead->nama_konsumen ?>" data-leads="<?= $lead->lead_id ?>" data-requester="<?= $lead->name ?>" data-cabang="<?= $lead->nama_cabang ?>" data-produk="<?= $lead->produk ?>">Pilih</button>
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