function menuToggle() {
    var nav = document.getElementById("nav")
    var toggle = document.getElementById("toggle")
    nav.classList.toggle("active")
    toggle.classList.toggle("active")
}

$('[data-text]').on('keyup', function(){
    $(this).attr('data-text', $(this).text());
});