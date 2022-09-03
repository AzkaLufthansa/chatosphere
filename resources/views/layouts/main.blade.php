<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatosphere | {{ $title }}</title>
    <script src="https://kit.fontawesome.com/713f5c53f1.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body id="body" class="bg-[#bfb2db]">
    @include('partials.navbar')

    @yield('container')

    <script>
        // untuk navbar responsive
        const navdropping = document.getElementById('collapse');
        const menu_x = document.getElementById('menu_x')
    
        function collapse() {
            if(navdropping.classList.contains('hidden')) {
                navdropping.classList.remove('hidden');
                menu_x.classList.remove('hidden');
            }else{
                navdropping.classList.add('hidden');
                menu_x.classList.add('hidden');
            }
        }

        // untuk popup login
        document.getElementById('signin_button').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'flex';
            document.getElementById('body').classList.add('overflow-hidden');
        })

        document.getElementById('signup_button').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'flex';
            document.getElementById('body').classList.add('overflow-hidden');
        })

        document.getElementById('close').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('body').classList.remove('overflow-hidden');
        })

        $('.signup').hide();

        $('#signin, #signup').on('click', function() {
            $('.signin, .signup').toggle();
        })
    </script>
</body>
</html>