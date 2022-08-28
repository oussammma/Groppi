<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- link css --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/pro-detais.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/services.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/magasin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/toTop.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/userNavbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/user/footer.css') }}">

    {{-- js link --}}
    <script src="{{ url('/js/user/toTop.js') }}" defer></script>
    <script src="{{ url('/js/user/userNavbar.js') }}" defer></script>
    <script src="{{ url('/js/user/pro-detais.js') }}" defer></script>
    <script src="{{ url('/js/user/main.js') }}" defer></script>
    <script src="{{ url('/js/user/search.js') }}" defer></script>
    {{-- title icon --}}
    <link rel="icon" href="/upload/logo/logo-title.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    {{-- font goggle --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    {{-- jquery search --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <title>Groppi</title>
</head>

<body class="bg-light">
    @yield('userContent')
</body>

</html>
