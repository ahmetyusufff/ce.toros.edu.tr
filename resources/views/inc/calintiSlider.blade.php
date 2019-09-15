<div id="main-carousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img src="/images/slider/img1.jpg" data-lazyload="" data-bgposition="left 20%" alt>
        </div>
        <div class="item">
            <img src="/images/slider/img2.jpg" data-lazyload="" data-bgposition="left 20%" alt>
        </div>
        <div class="item">
            <img src="/images/slider/img3.png" data-lazyload="" data-bgposition="left 20%" alt>
        </div>
        <div class="item">
            <img src="/images/slider/img4.jpg" data-lazyload="" data-bgposition="left 20%" alt>
        </div>
    </div>

    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script type="text/javascript">
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
</script>