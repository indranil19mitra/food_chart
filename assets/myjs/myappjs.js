$(document).ready(function () {

    default_home_header();

    $(".search_populate").on("click", "#search_addon", function () {
        var html = '<div class="input-group rounded">';
        html += '<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />';
        html += '</div><div class="rounded">';
        html += '<span class="input-group-text border-0" id="close_addon"><i class="fas fa-close"></i></span>';
        html += '</div>';

        $(".search_populate").html(html);
    });

    // Use event delegation for the close_addon click event
    $(".search_populate").on("click", "#close_addon", function () {
        default_home_header(); // Call the function when close_addon is clicked
    });

    function default_home_header() {
        var html = ' <div class=""><img src="assets/images/home_page_plate_img.png" alt="" class="home_page_top_img">';
        html += '</div><div class="rounded">';
        html += '<span class="input-group-text border-0" id="search_addon"><i class="fas fa-search"></i></span>';
        html += '</div>';

        $(".search_populate").html(html);
    }
});
