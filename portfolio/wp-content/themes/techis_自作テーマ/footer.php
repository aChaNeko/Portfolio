</div>
<footer>
</footer>

<script>
    $('.slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        slidesToShow: 3,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });

    $('#profile').slick({
        autoplay: true,
        fade: true,
        arrows: false,
        speed: 2000,
    });
</script>
</body>

</html>