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
        $('#hide, .users').hide();
        var radioValue = $("input[name='cross_branch']:checked").val();
        if (radioValue == 'Tidak') {
            $("#hide").hide();
            $(".users").show();
            $('#pic_ttd, #surveyor').attr('required', 'required');
            $('#cabang_cross').removeAttr('required');
        } else if (radioValue == 'Ya') {
            $("#hide").show()
            $('.users').hide();
            $('#cabang_cross').attr('required', 'required');
            $('#pic_ttd, #surveyor').removeAttr('required');
        }

        //Jika form prospek cross branch 
        // if ($("input[name='cross_branch']:checked").val() == 'Ya' && $("#id_branch").val() != $("#id_cabang_cross").val()) {
        //menon-aktifkan form surveyor & pic ttd
        // $("#surveyor, #pic_ttd").attr('disabled', 'disabled');
        // $("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").removeAttr('disabled');
        // }
        //Jika form prospek bukan cross branch (milik sendiri) 
        if ($("input[name='cross_branch']:checked").val() == 'Ya' && $("#id_branch").val() == $("#id_cabang_cross").val()) {
            //meng-aktifkan form surveyor & pic ttd
            $("#surveyor, #pic_ttd").removeAttr('disabled');
            $("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").attr('disabled', 'disabled');
        } else if ($("input[name='cross_branch']:checked").val() == 'Tidak' && $("#id_branch").val() != $("#id_cabang_cross").val()) {
            $("#surveyor, #pic_ttd").removeAttr('disabled');
            $("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").attr('disabled', 'disabled');
        }

        $("input[name='cross_branch']").click(function() {
            var cross_branch = $(this).val();
            if (cross_branch == 'Ya') {
                $('#hide').show();
                $('.users').hide();
                $('#pic_ttd, #surveyor').removeAttr('required');
                $('#cabang_cross').attr('required', 'required');

                $("#surveyor, #pic_ttd").attr('disabled', 'disabled');
                $("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").removeAttr('disabled');
            } else if (cross_branch == 'Tidak') {
                $('#hide').hide();
                $(".users").show();
                $("#cabang_cross").val("");
                $('#pic_ttd, #surveyor').attr('required', 'required');
                $('#cabang_cross').removeAttr('required');

                $("#surveyor, #pic_ttd").removeAttr('disabled');
                $("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").attr('disabled', 'disabled');
                show_pic_ttd();
            }
        })
    })
</script>

<!-- // $("input[name='cross_branch']").click(function() {
// if ($(this).val() == 'Ya') {

// } else {

// }
// }) -->

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

<!-- number only -->
<script>
    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        };
    }(jQuery));

    $(".number-only").inputFilter(function(value) {
        return /^\d*$/.test(value);
    });
</script>
<!-- number only -->

<!-- format rupiah -->
<script>
    // Jquery Dependency
    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") {
            return;
        }

        // original length
        var original_len = input_val.length;

        // initial caret position 
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "00";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            // input_val = "$" + left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            // input_val = "$" + input_val;

            // final formatting
            // if (blur === "blur") {
            //     input_val += ".00";
            // }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }
</script>
<!-- format rupiah -->

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
            $(".form_mou").show();
        } else {
            $(".form_mou").hide();
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
            url: "<?= base_url('branch/update_superior') ?>",
            dataType: "JSON",
            data: {
                has_superior: has_superior,
                id_branch: id_branch
            },
            success: function(data) {
                alert('Success, \n ID Branch: ' + id_branch + '\n Status: ' + has_superior);
            }
        });
        // return false;
    });
</script>

<!-- //Script untuk mark as read notifikasi -->
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

<!-- Memunculkan list nama anggota cabang di field surveyor & pic ttd -->
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

<!-- Loading Screen -->
<script>
    var myVar;

    function myFunction() {
        myVar = setTimeout(showPage, 1000);
    }

    function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("loadermobile").style.display = "none";
        document.getElementById("hilang").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
    }
</script>

<!-- Memunculkan nama surveyor dan pic tdd -->
<script>
    function show_leads() {
        var id_leads = $("#id_leads").val();
        $.ajax({
            type: 'POST',
            url: '<?= base_url('Leads/get_leads/') ?>' + id_leads,
            dataType: 'json',
            data: {
                id_leads: id_leads
            },
            success: function(data) {
                $("#surveyor").val(data.surveyor);
                $("#pic_ttd").val(data.pic_ttd);
            }
        });
    }
    $(document).ready(function() {
        setTimeout(function() {
            show_leads();
        }, 1000);

        if ($("input[name='cross_branch']:checked").val() == 'Ya') {
            $("#hide").show();
        } else {
            $("#hide").hide();
        }
    })
</script>