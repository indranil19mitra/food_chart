$(document).ready(function () {
    const cnt_url = 'my_controller/';

    $("#menuCart").on("click", function () {
        var url = cnt_url + 'homePage';
        $.ajax({
            url: url,
            type: 'post',
            // dataType:'json',
            success: function (data) {
                // console.log(data);
                $("#home_page").html(data.html);
            }
        });

        // $.post(url, {}, function (data) {
        //     // console.log(data);
        //     alert('abcd');
        //     $("#home_page").html(data.html);
        // });
    });
});