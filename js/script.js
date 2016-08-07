$(document).ready(function () {

    $("#sign-up").submit(function (evt) {
        evt.preventDefault();
        var url = $(this).attr('action');
        var formData = $(this).serialize();
        $.ajax(url, {
            cache: false,
            data: formData,
            type: "POST",
            success: function(response) {
                $("#sign-up input").val(null);
                var $new = $('#success-message');
                $('#sign-up-message').append($new);
                $new.slideDown('slow');
                setTimeout(function () {
                    $new.slideUp('slow');
                }, 3000);
            }

        });
    });



}); // End jquery
