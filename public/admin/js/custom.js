 $(document).ready(function () {
    $('#old_password').keyup(function () {
        var old_password = $('#old_password').val();

        $.ajax({ 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/auth/check-current-password',
            data: { 'old_password': old_password },
            success: function (response) {
                if(response == 'false'){
                    $('#check_password').html("<font color='red'>Currect password is not correct</font>");
                }
                else if(response == 'true'){
                    $('#check_password').html("<font color='green'>Currect password is correct</font>");
                }
            }, error: function () {
                alert('Error');
            }
        });
    })
});

$(document).ready(function () {
    $('#old_password').keyup(function () {
        var old_password = $('#old_password').val();

        $.ajax({ 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '/student/dashboard/check-current-password',
            data: { 'old_password': old_password },
            success: function (response) {
                if(response == 'false'){
                    $('#check_password').html("<font color='red'>Currect password is not correct</font>");
                }
                else if(response == 'true'){
                    $('#check_password').html("<font color='green'>Currect password is correct</font>");
                }
            }, error: function () {
                alert('Error');
            }
        });
    })
});