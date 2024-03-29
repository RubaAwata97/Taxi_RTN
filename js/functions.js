/*---------------------------------------*/
function openFareModal() {
    //check form value errors
    service_type = $('#service_type').val();
    start_location = $('#start_location').val();
    end_location = $('#end_location').val();
    errors = 0;
    if (service_type == null || service_type == '') {
        errors++;
        $('#service_type_error').html('Please choose service type')
    }

    if (start_location == '') {
        errors++;
        $('#start_location_error').html('please choose pick up location')
    }

    if (end_location == '') {
        errors++;
        $('#end_location_error').html('please choose drop location')
    }

    if (errors > 0)
        return

    $('#service_type_error').html('');
    $('#start_location_error').html('');
    $('#end_location_error').html('');

    //end

    //calc fare
    $.ajax({
        url: "back/calcFare.php",
        data: {
            'service_type': service_type
        },
        success: function (result) {
            $("#fare_value").html(result);
        }
    });
    //end

    $('#reservation_modal').modal();
}

function addReserve() {

    //check form value errors
    service_type = $('#service_type').val();
    start_location = $('#start_location').val();
    end_location = $('#end_location').val();
    user_name = $('#user_name').val();
    user_phone = $('#user_phone').val();
    user_email = $('#user_email').val();
    user_notes = $('#user_notes').val();
    errors = 0;

    if (user_name == '') {
        errors++;
        $('#user_name_error').html('Please enter your name')
    }

    if (user_phone == '') {
        errors++;
        $('#user_phone_error').html('Please enter your phone number')
    }

    if (user_email == '') {
        errors++;
        $('#user_email_error').html('Please enter your email')
    }
    if (errors > 0)
        return;
    //end

    //add reserve
    $('#pay_button').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>')
    $.ajax({
        url: "back/addReserve.php",
        type: 'POST',
        data: {
            'service_type': service_type,
            'start_location': start_location,
            'end_location': end_location,
            'user_name': user_name,
            'user_phone': user_phone,
            'user_email': user_email,
            'user_notes': user_notes
        },
        success: function (result) {
            $('#pay_button').html('Pay');
            showAlert('Your Booking Has Been Added Successfully', 'success');
            setTimeout(function () {
                hideAlert('success');
            }, 10000);
            $('#reservation_modal').modal('hide');
            resetReservationForm();
        },
        error: function (result) {
            $('#pay_button').html('Pay');
            showAlert('There Is Something Wrong, Please Try Again', 'error');
            setTimeout(function () {
                hideAlert('error');
            }, 10000);
        }
    });
    //end
}

function resetReservationForm() {
    $('#service_type').val('');
    $('#start_location').val('');
    $('#end_location').val('');
    $('#user_name').val('');
    $('#user_phone').val('');
    $('#user_email').val('');
    $('#user_notes').val('');
}

/*---------------------------------------*/
function addMessage() {
    //check form value errors
    message_name = $('#message_name').val();
    message_phone = $('#message_phone').val();
    message_message = $('#message_message').val();
    errors = 0;

    if (message_name == '') {
        errors++;
        $('#message_name_error').html('Please enter your name');
    }

    if (message_phone == '') {
        errors++;
        $('#message_phone_error').html('Please enter your phone number');
    }

    if (message_message == '') {
        errors++;
        $('#message_message_error').html('Please enter your message');
    }

    if (errors > 0)
        return;

    $('#send_button').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>')
    $.ajax({
        url: "back/addMessage.php",
        type: 'POST',
        data: {
            'name': message_name,
            'phone': message_phone,
            'message': message_message
        },
        success: function (result) {
            console.log(result);
            $('#send_button').html('Send');
            showAlert('Your Message Has Been Added Successfully', 'success');
            setTimeout(function () {
                hideAlert('success');
            }, 10000);
            $('#message_name').val('');
            $('#message_phone').val('');
            $('#message_message').val('');
        },
        error: function (result) {
            console.log(result);
            $('#pay_button').html('Pay');
            showAlert('There Is Something Wrong, Please Try Again', 'error');
            setTimeout(function () {
                hideAlert('error');
            }, 10000);
        }
    });
    //end

    /*---------------------------------------*/
    //end
}