

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

    $('.dispatch').click(function(e){

        let orderID = $(this).attr("id");
        $('#order_id').val(orderID);
        
        
    });

    $('.savecourier').click(function(e){

        let orderID = $('#order_id').val();
        let courier = $('#courier option:selected').val();

        Swal.fire(
                'Success!',
                'Successfully Selected Courier.',
                'success'
        ).then((confirmCourier) => {
            if(confirmCourier){
                $.ajax({
                    url: '/selectcourier',
                    type: 'POST',
                    data: {
                        orderID : orderID,
                        courier : courier
                    },
                    dataType: 'HTML',
                    success: function(response){
                        window.location.href = window.location.href;
                    }
                })  
            }
        })
    });

    $('.changeorderstatus').click(function(e){

    
        let data = $(this).attr("id");
        data = data.split("-");

        let orderID = data[0];

        let status = data[1];

        Swal.fire(
                'Success!',
                'Successfully Changed Order Status.',
                'success'
        ).then((confirmCourier) => {
            if(confirmCourier){
                $.ajax({
                    url: '/changeorderstatus',
                    type: 'POST',
                    data: {
                        orderID : orderID,
                        status : status
                    },
                    dataType: 'HTML',
                    success: function(response){
                        window.location.href = window.location.href;
                    }
                })  
            }
        })

    })
</script>