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

    <ul id="list-messages">
        
    </ul>

    

    <form id="form">
        <label for="input-messsage">Message</label>
        <input type="text" name="" id="input-message">
    </form>





    @vite('resources/js/app.js')

    {{-- <script>
        window.onload = function()
        {
            Echo.channel('home')
        .listen('NewMessage', (e) => {
            console.log(e.message);
        })

        }
      
    </script> --}}




    {{-- <script>
window.Echo = new Echo.channel('home')
.listen('NewMessage', (e) => {
    console.log(e.message);
})
</script> --}}



</body>

</html>
