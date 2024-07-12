<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Primi Passi</title>
    @vite('resources/css/style.css')
    
    
</head>
<body>
    <header>
        <div>
            <a href="/">Home</a>
            <a href="/aboutUs">About Us</a>
            <a href="/help">Help</a>
        </div>
    </header>

    <main>
        <h1>{{ $titolozzo }}</h1>
    </main>
</body>
</html>