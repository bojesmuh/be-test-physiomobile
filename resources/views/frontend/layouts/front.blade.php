<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/flag-icons/css/flag-icons.min.css') }}">
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/slick/slick.css') }}" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{{ asset('build/assets/slick/slick-theme.css') }}" />

    <title>GEO Website</title>
</head>

<body>
    
    @include('frontend/layouts/menu')

    @yield('content')
    
    @include('frontend/layouts/footer')

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('build/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            const dontMiss = $('.slide-dont-miss');
            dontMiss.slick({
                // centerMode: false,
                // centerPadding: '10px',
                slidesToShow: 4,
                infinite: true,
                speed: 300,
                // autoplay: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });

            $('#dont-miss').find('button.arrow-left').on('click', function () {
                dontMiss.slick('slickPrev');
            });

            $('#dont-miss').find('button.arrow-right').on('click', function () {
                dontMiss.slick('slickNext');
            });
        })
    </script>
</body>

</html>