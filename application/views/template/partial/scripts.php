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
    $(document).ready(function() {
        $('#hide').hide();
        var radioValue = $("input[name='cross_branch']:checked");
        if (radioValue == 'Tidak') {
            $("#hide").hide();
        } else if (radioValue == 'Ya') {
            $("#hide").show()
        }
        $('.cross_branch').click(function() {
            var cross_branch = $(this).val();
            if (cross_branch == 'Ya') {
                $('#hide').show();
            } else if (cross_branch == 'Tidak') {
                $('#hide').hide();
                $("#cabang_cross").val("");
            }
        })
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

<!-- //Script untuk update tanda tangan pks -->
<script>
    // $("#form_mou").hide();
    // alert($('.ttd_pks').val());
    if ($("input[name='ttd_pks']:checked").val() == 'Ya') {
        $("#form_mou").show();
    } else {
        $("#form_mou").hide();
    }
    //Update tanda tangan pks
    $(".ttd_pks").on('click', function() {
        var ttd_pks = $(this).val();
        var id_ticket = $('#id_ticket').val();

        if (ttd_pks == 'Ya') {
            $("#form_mou").show();
        } else {
            $("#form_mou").hide();
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('ticket/update_ttd') ?>",
            dataType: "JSON",
            data: {
                ttd_pks: ttd_pks,
                id_ticket: id_ticket
            },
            success: function(data) {
                alert('Success, \n ID Tiket: ' + id_ticket + '\n TTD: ' + ttd_pks);
                // location.reload();
            }
        });
        // return false;
    });

    $('#submit_mou').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url('ticket/upload_mou'); ?>',
            type: "post",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                alert("Upload Image Berhasil.");
            }
        });
    });
</script>

<script>
    var $table = $('.table-modal');
    if (window.innerWidth <= 600) $table.addClass('table-responsive');
    else $table.removeClass('table-responsive');
    $(window).resize(function() {
        if (window.innerWidth <= 600) $table.addClass('table-responsive');
        else $table.removeClass('table-responsive');
    })
</script>

<!-- //Script untuk update status cabang -->
<script>
    //Update Barang
    $('.has_superior').on('change', function() {
        var has_superior = $(this).val();
        var id_branch = $(this).data('id');

        // alert(id_branch + has_superior);
        $.ajax({
            type: "POST",
            url: "<?= base_url('branch/update') ?>",
            dataType: "JSON",
            data: {
                has_superior: has_superior,
                id_branch: id_branch
            },
            success: function(data) {
                alert('Success, \n ID Branch: ' + id_branch + '\n Status: ' + has_superior);
            }
        });
        return false;
    });
</script>

<!-- //Script untuk mark as read notifikas -->
<script>
    //Update Barang
    $('.notifikasi').on('click', function() {
        var id_notification = $(this).data('id');
        var has_read = 1;
        // alert(id_notification);
        $.ajax({
            type: "POST",
            url: "<?= base_url('notification/update') ?>",
            dataType: "JSON",
            data: {
                has_read: has_read,
                id_notification: id_notification
            },
            success: function(data) {
                // alert('Success, \n ID Branch: ' + id_notification + '\n Status: ' + has_read);
            }
        });
    });
    // return false;
</script>

<script>
    function show_pic_ttd() {
        var cabang_cross = $("#cabang_cross").val();
        if (cabang_cross == null || cabang_cross == '') {
            cabang_cross = $("#id_branch").val();
        }
        $.ajax({
            type: 'post',
            url: '<?= base_url('leads/get_user/') ?>' + cabang_cross,
            // async: false,
            dataType: 'json',
            data: {
                cabang_cross: cabang_cross
            },
            success: function(data) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += '<option value="' + data[i].id_user + '">' + data[i].name.toUpperCase() + '</option>'
                }
                $('#show_pic_ttd, #show_surveyor').attr('label', data[0].nama_cabang).html(html);
                console.log(html);
            },
            error: function(xhr, status, error) {
                // var err = eval("(" + xhr.responseText + ")");
                alert(error);
            }
        });
    }

    $(document).ready(function() {
        show_pic_ttd();
        $("#cabang_cross").change(function() {
            show_pic_ttd();
        });
    })
</script>