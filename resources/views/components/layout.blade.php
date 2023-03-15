<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Builder Tech</title>
</head>
<body data-aos-easing="ease" data-aos-duration="1000" data-aos-delay="0">
    <x-navbar />
    <div class="min-vh-100">
        {{$slot}}
    </div>
    <x-contacts />
    <x-location />
    <x-footer />
    <div class="bottom py-2 text-light">
        <div class="container">
            <div>
                <p>Copyright © BuilderTech srl</p><br>
                <p>Created by: <span class="text-gradient">Giancarlo Quin Tito</span> </p>
            </div>
        </div> <!-- end of container -->
    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>