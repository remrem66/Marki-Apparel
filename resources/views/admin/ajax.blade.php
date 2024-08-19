

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.addproductvariation').click(function(e) {
        let id = $(this).attr("id");

        $('#product_id').val(id);
    });
</script>