    $(document).ready(function() {
        $('#main-carousel').find('.item').first().addClass('active');
        $('.carousel').carousel({
            interval: 7000
        });
        $("#iconn").owlCarousel({
            items:6,
            itemsMobile:[476,6],
            itemsTablet:[768,6],
            autoPlay:false
        });
    });
function dropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {

            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }