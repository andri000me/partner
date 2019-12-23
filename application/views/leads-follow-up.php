<div class="row">
    <div class="col-lg-8">
        <div class="page-title-box ml-4">
            <h4 class="page-title">Form Maintain Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Prospect</a></li>
                <li class="breadcrumb-item active">Follow Up Leads</li>
            </ol>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Maintain Partner</h4>
                <p class="text-muted m-b-30 text-size">Form ini digunakan untuk mencatat aktivitas maintain cabang anda.</p>

                <form class="" action="<?= base_url('Leads_follow_up/save') ?>" method="post">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_mapping_leads" value="<?= $data->mapping_id ?>">
                    <div class="form-group ml-3 mr-3">
                        <label>Follow Up By</label>
                        <select class="form-control text-size" name="follow_up_by" id="follow_up_by" required>
                            <option selected disabled value="">Pilih Follow Up By</option>
                            <option value="Kunjungan">Kunjungan</option>
                            <option value="Telepon">Telepon</option>
                            <option value="Whatsapp">Whatsapp</option>
                            <option value="Email">Email</option>
                        </select>
                    </div>
                    <div class="form-group ml-3 mr-3">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" placeholder="Jelaskan detail kegiatan anda" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-2 ml-3 mr-3">
                        <div>
                            <button type="cancle" class="btn btn-secondary waves-effect waves-light">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>