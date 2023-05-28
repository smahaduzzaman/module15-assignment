<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment Module 15</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        * {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 16px;
    line-height: 1.6;
}

header {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

header nav ul {
    list-style: none;
}

header nav ul li {
    display: inline-block;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px;
}

header nav ul li a:hover {
    background: #666;
}

main {
    padding: 10px;
}

.hero {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

.hero h1 {
    font-size: 50px;
    margin-bottom: 20px;
}

.hero p {
    font-size: 20px;
    width: 75%;
    margin: 20px auto;
}

.hero .btn {
    display: inline-block;
    background: #fff;
    color: #333;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
}

.hero .btn:hover {
    background: #666;
    color: #fff;
}

    </style>
</head>
<body>
    <center>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="heading">
                <h2>Welcome to Laravel!</h2>
            </section>
            <section class="hero">
                <div class="container">
                    {{-- <img src="{{ asset('images/hero.jpg') }}" alt="Hero Image"> --}}
                    <h1>Byke Race Competetion 2023</h1>
                    <p>The Bike Race Competition 2023 is an exhilarating event that brings together bike enthusiasts, professional riders, and adrenaline seekers from around the world. Held annually, this highly anticipated competition showcases the ultimate display of speed, skill, and endurance in the realm of bike racing.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </section>

        </main>
    </center>
</body>
</html>
