<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel with vue </title>




</head>

<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
</body>

</html>

<script>
    var LaravelToken = {
        'csrfToken': '{{csrf_token()}}'
    };

    function checkmethod() {
        alert("Its Working");
    }
</script>