
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

    });

    $('.deactivateuser').click(function(e){

        let user_id = $(this).attr("id");
        let user_status = 0;

        Swal.fire({
            title: 'Are you sure?',
            text: "you want to deactivate this user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((willDeactivate) => {
            if (willDeactivate.isConfirmed) {
                Swal.fire(
                    'Success!',
                    'This user is now deactivated!.',
                    'success'
                ).then((confirmDeactivate) => {
                    if(confirmDeactivate){
                        $.ajax({
                            url: '/changeuserstatus',
                            type: 'POST',
                            data: {
                                user_id : user_id,
                                user_status : user_status
                            },
                            dataType: 'HTML',
                            success: function(response){
                                window.location.reload();
                            }
                        });
                    }
                });
            
            }
        }) 
    })

    $('.activateuser').click(function(e){

        let user_id = $(this).attr("id");
        let user_status = 1;
            
        Swal.fire({
            title: 'Are you sure?',
            text: "you want to activate this user?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((willDeactivate) => {
            if (willDeactivate.isConfirmed) {
                Swal.fire(
                    'Success!',
                    'This user is now Active!.',
                    'success'
                ).then((confirmDeactivate) => {
                    if(confirmDeactivate){
                        $.ajax({
                            url: '/changeuserstatus',
                            type: 'POST',
                            data: {
                                user_id : user_id,
                                user_status : user_status
                            },
                            dataType: 'HTML',
                            success: function(response){
                                window.location.reload();
                            }
                        });
                    }
                });
            
            }
        }) 
    })
</script>