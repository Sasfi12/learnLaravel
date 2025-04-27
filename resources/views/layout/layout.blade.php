<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>
<body>
    <nav>
        <a href="{{url('/about')}}">about us</a>
        <a href="{{url('/livre')}}">our books</a>
        <a href="{{url('/flashcards')}}">our flashcards</a>
        <a href="{{url('/member')}}">our members</a>
        <a href="{{url('/seeder')}}">our products</a>
    </nav>
    <main>
        @yield("content")
    </main>
    
</body>
</html>