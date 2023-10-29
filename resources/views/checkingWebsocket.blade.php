<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- // setTimeout(() => {
        //     window.Echo.channel('testing')
        //         .listen('.MyWebSocket' , (e) => {
        //             console.log(e);
        //         });
        // }, 200); --}}
    <p>{{ Auth::id() }}</p>

    <div id="message"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    @vite('resources\js\app.js')
    <script>
        setTimeout(() => {
            window.Echo.private('myPrivateChannel.user.{{ Auth::id() }}')
                .listen('.private_msg', (e) => {
                    console.log(e);
                    $('#message').append('<p>'+e.myData+'</p>');
                });
        }, 200);
    </script>
</body>

</html>
