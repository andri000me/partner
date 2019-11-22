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

<!-- script -->
<script>
    $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');
    $("table").on("click", ".not-clickable", function(e) {
        e.stopPropagation();
    });
    $("table").on('click', '.clickable-row', function() {
        $("tr.clickable-row").not("tr > td.not-clickable").css('cursor', 'pointer');
        window.location = $(this).data("href");
    })
</script>
<!-- script -->

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

