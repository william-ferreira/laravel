<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <!--Check class 21 of the course to check on the showned options-->
    @forelse ($posts as $post)
        {{ $loop->parent }}
    @empty
        <p>No posts have been set</p>
    @endforelse

</body>
</html>