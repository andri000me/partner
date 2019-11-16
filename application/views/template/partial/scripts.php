<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    
    $('#disable').hide();
    $('#kategori_produk').change(function(){
        if($('#kategori_produk').val() == 'My Ihram' || $('#kategori_produk').val() == 'My Safar'){
            $('#disable').show();
            // alert($('#kategori_produk').val());
        } else {
            $('#disable').hide();
        }
    })
</script>