$(document).ready(function () {

    $("#menuCart").on("click", function () {
        var url = cnt_url + 'homePage';
        alert(1);
        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            success: function (data) {
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