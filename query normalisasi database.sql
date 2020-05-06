UPDATE leads_full
SET cross_branch = NULL, STATUS = 'database'
WHERE id_mapping_leads NOT IN (SELECT id_mapping_leads FROM leads)
-- INNER JOIN leads ON leads.id_mapping_leads = leads_full.id_mapping_leads

/* UPDATE leads_full      
INNER JOIN leads ON leads.id_mapping_leads = leads_full.id_mapping_leads
SET 
leads_full.leads_id = leads.leads_id, 
leads_full.no_ktp = leads.no_ktp, 
leads_full.follow_up_by = leads.follow_up_by,
leads_full.cross_branch = leads.cross_branch,
leads_full.cabang_cross = leads.cabang_cross,
leads_full.surveyor = leads.surveyor,
leads_full.pic_ttd = leads.pic_ttd,
leads_full.appeal_nst = leads.appeal_nst,
leads_full.nilai_funding = leads.nilai_funding,
leads_full.sudah_funding = leads.sudah_funding,
leads_full.status = leads.status,
leads_full.ktp = leads.ktp,
leads_full.selfie_foto = leads.selfie_foto,
leads_full.foto_penyedia_jasa = leads.foto_penyedia_jasa,
leads_full.foto_usaha = leads.foto_usaha,
leads_full.cabang_cross = leads.cabang_cross
*/

SELECT * FROM tickets
INNER JOIN leads ON leads.id_leads = tickets.id_leads

UPDATE leads_follow_up
INNER JOIN leads ON leads.id_leads = leads_follow_up.id_leads
SET leads_follow_up.id_leads = leads.id_mapping_leads

INSERT INTO partners_full
SELECT * FROM mapping_partners

UPDATE partners_full
SET STATUS = 'mapping'
WHERE id_mapping NOT IN (SELECT id_mapping FROM partners)

UPDATE partners_full
INNER JOIN partners ON partners.id_mapping = partners_full.id_mapping
SET partners_full.status = partners.status

UPDATE partners_full      
INNER JOIN partners ON partners.id_mapping = partners_full.id_mapping
SET 
partners_full.nama_pemilik          = partners.nama_pemilik, 
partners_full.kelurahan                = partners.kelurahan, 
partners_full.kecamatan          = partners.kecamatan,
partners_full.provinsi          = partners.provinsi,
partners_full.kode_pos          = partners.kode_pos,
partners_full.hobi              = partners.hobi,
partners_full.geotagging               = partners.geotagging,
partners_full.jumlah_karyawan            = partners.jumlah_karyawan,
partners_full.tahun_berdiri         = partners.tahun_berdiri,
partners_full.barang_jual         = partners.barang_jual,
partners_full.sosial_media                = partners.sosial_media,
partners_full.status_tempat_usaha                   = partners.status_tempat_usaha,
partners_full.jenis_pembayaran           = partners.jenis_pembayaran,
partners_full.omset    = partners.omset,
partners_full.jumlah_cabang            = partners.jumlah_cabang,
partners_full.pernah_promosi          = partners.pernah_promosi,
partners_full.punya_pinjaman          = partners.punya_pinjaman,
partners_full.on_going_project          = partners.on_going_project,
partners_full.punya_jumlah_plafond          = partners.punya_jumlah_plafond,
partners_full.punya_giro_cek          = partners.punya_giro_cek,
partners_full.keterangan_tambahan          = partners.keterangan_tambahan,
partners_full.rekening_bank          = partners.rekening_bank,
partners_full.cabang_bank          = partners.cabang_bank,
partners_full.nama_bank          = partners.nama_bank,
partners_full.atas_nama          = partners.atas_nama,
partners_full.akhir_izin          = partners.akhir_izin,
partners_full.sudah_mou          = partners.sudah_mou,
partners_full.ktp          = partners.ktp,
partners_full.npwp          = partners.npwp,
partners_full.buku_tabungan_perusahaan          = partners.buku_tabungan_perusahaan,
partners_full.siup          = partners.siup,
partners_full.logo_perusahaan          = partners.logo_perusahaan,
partners_full.foto_usaha          = partners.foto_usaha,
partners_full.foto_mou          = partners.foto_mou,
partners_full.lampiran_tambahan          = partners.lampiran_tambahan,
partners_full.status          = partners.status