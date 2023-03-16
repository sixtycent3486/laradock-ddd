$(document).ready(function () {
    $(".sidebar .sidebar-nav .nav-dropdown-toggle span, .sidebar .sidebar-nav .nav-dropdown-toggle .nav-icon").click(function () {
        $(this).closest(".nav-item").toggleClass("open");
    });
});
