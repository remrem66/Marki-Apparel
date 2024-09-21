<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    // $('.try').click(function(e){
    //     alert("hello");
    // })
</script>