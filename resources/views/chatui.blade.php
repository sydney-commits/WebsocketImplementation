<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

</head>

<body>







    @vite('resources/js/app.js')

    <script>
        window.onload = function() {
            Echo.channel('chat')
                .listen('ChatMessage', (e) => {
                    console.log(e.data);
                })

        }
    </script>







</body>

</html>
