/**
 * Created by Mikhail on 05.05.2015.
 */

$(document).ready(function() {

    $('#user_update').click(function() {
        url = $(this).attr('data-url');
        updateProfile(url);
    });

    function updateProfile(url){
        $.ajax({
            url: url,
            cache: false,
            success: function (data) {
                $("#profile").html(data);
                $('#user_update').click(function() {
                    url = $(this).attr('data-url');
                    updateProfile(url);
                });
            }
        });
    }

});