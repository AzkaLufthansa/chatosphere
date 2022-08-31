<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatosphere | {{ $title }}</title>
    <script src="https://kit.fontawesome.com/713f5c53f1.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#bfb2db]">
    @include('partials.navbar')

    @yield('container')

    <script>
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
    </script>
</body>
</html>