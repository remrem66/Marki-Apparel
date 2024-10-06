<script>

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

@if(session()->has('message'))
    toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session()->get('message') }}");
@endif

@if(session()->has('warning'))
    toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.warning("{{ session()->get('warning') }}");
@endif

$('#resend').click(function(e){

    var user_id = $('#user_id').val();

    $.ajax({
        url: '/resendcode',
        type: 'POST',
        data: {
            user_id:user_id,
        },
        dataType: 'HTML',
        success: function(response){

        }
    });

    var timer2 = "2:00";
    $('#codenotreceived').hide();
    var interval = setInterval(function() {

        var timer = timer2.split(':');
        $('#codecountdown').show();

        var minutes = parseInt(timer[0], 10);
        var seconds = parseInt(timer[1], 10);
        --seconds;
        minutes = (seconds < 0) ? --minutes : minutes;
        if (minutes < 0) clearInterval(interval);
        seconds = (seconds < 0) ? 59 : seconds;
        seconds = (seconds < 10) ? '0' + seconds : seconds;
        //minutes = (minutes < 10) ?  minutes : minutes;
        $('#codecountdown').html("<strong id='codecountdown'>You can request a code again in " + minutes + ":" + seconds);
        timer2 = minutes + ':' + seconds;
        if(timer2 == "-1:59"){
            $('#codecountdown').hide();
            $('#codenotreceived').show()
        }
    }, 1000);

});

$('#addtocart').click(function(e){

    e.preventDefault();

    let quantity = parseInt($('#quantity').val());
    let productStock = parseInt($('#currentproductstock').val());
    let productID = $('#productID').val();
    let productName = $('#productname').val();
    let productCategory = $('#productcategory').val();
    let productColor = $('#currentproductcolor').val();
    let productSize = $('#currentproductsize').val();

    if(quantity <= 0){
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "You cannot put zero or a negative number",
        });
    }
    else{
        if(quantity > productStock){
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "The quantity entered is greater than the product stock (" + productStock + ")"
            });
        }
        else{
            Swal.fire(
                'Success!',
                'Successfully added this item on your cart.',
                'success'
            ).then((confirmCart) => {
                if(confirmCart){
                    $.ajax({
                        url: '/addtocart',
                        type: 'POST',
                        data: {
                            productID:productID,
                            quantity:quantity,
                            productName:productName,
                            productCategory:productCategory,
                            productColor:productColor,
                            productSize:productSize
                        },
                        dataType: 'HTML',
                        success: function(response){
                            window.location.href = window.location.href;
                        }
                    });
                }
            });
        }
    }
})
</script>