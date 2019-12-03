<script>
    $('#disable').hide();
    $('#kategori_produk').change(function() {
        if ($('#kategori_produk').val() == 'My Ihram' || $('#kategori_produk').val() == 'My Safar') {
            $('#disable').show();
            // alert($('#kategori_produk').val());
        } else {
            $('#disable').hide();
        }
    })
</script>

<script>
    $('#hide').hide();
    $('.cross_branch').click(function() {
        var cross_branch = $(this).val();
        if (cross_branch == 'Ya') {
            $('#hide').show();
        } else if (cross_branch == 'Tidak') {
            $('#hide').hide();
        }
    })
</script>

<script>
    /*  Wizard */
    jQuery(function($) {
        "use strict";
        $('form#wrapped').attr('action', '');
        $("#wizard_container").wizard({
            stepsWrapper: "#wrapped",
            submit: ".submit",
            beforeSelect: function(event, state) {
                if ($('input#website').val().length != 0) {
                    return false;
                }
                if (!state.isMovingForward)
                    return true;
                var inputs = $(this).wizard('state').step.find(':input');
                return !inputs.length || !!inputs.valid();
            }
        }).validate({
            errorPlacement: function(error, element) {
                if (element.is(':radio') || element.is(':checkbox')) {
                    error.insertBefore(element.next());
                } else {
                    error.insertAfter(element);
                }
            }
        });
        //  progress bar
        $("#progressbar").progressbar();
        $("#wizard_container").wizard({
            afterSelect: function(event, state) {
                $("#progressbar").progressbar("value", state.percentComplete);
                $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
            }
        });
        /* Submit loader mask */
        $('form').on('submit', function() {
            var form = $("form#wrapped");
            form.validate();
            if (form.valid()) {
                $("#loader_form").fadeIn();
            }
        });
    });
</script>

<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
            return true;
        }
    }
</script>

<script>
    $('input.placement').maxlength({
        alwaysShow: true,
        placement: 'top-left',
        warningClass: "badge badge-info",
        limitReachedClass: "badge badge-warning"
    });
</script>

<script>
    $('.owl-carousel').owlCarousel({
        margin: 10,
        responsiveClass: true,
        autoWidth: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })
</script>

<script>
    $(".select2").select2();

    $(".select2-limiting").select2({
        maximumSelectionLength: 2
    });
</script>

//Script untuk update tanda tangan pks
<script>
    //Update Barang
    $('#btn_update').on('click', function() {
        var kobar = $('#ttd_pks').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('ticket/update_ttd') ?>",
            dataType: "JSON",
            data: {
                kobar: kobar,
                nabar: nabar,
                harga: harga
            },
            success: function(data) {
                $('[name="kobar_edit"]').val("");
                $('[name="nabar_edit"]').val("");
                $('[name="harga_edit"]').val("");
                $('#ModalaEdit').modal('hide');
                tampil_data_barang();
            }
        });
        return false;
    });
</script>