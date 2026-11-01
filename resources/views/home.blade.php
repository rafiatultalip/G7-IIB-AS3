<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sips Brownies | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { font-family: 'Fredoka', Arial, sans-serif; margin: 0; color: #3b2314;
               background: #fff4e6; min-height: 100vh; display: flex; flex-direction: column; }
        h1, h2, .brand { font-family: 'Pacifico', cursive; font-weight: normal; }

        nav { background: #4a2c17; padding: 14px 24px; display: flex; align-items: center; gap: 22px; }
        nav .brand { color: #f5c98a; font-size: 26px; margin-right: auto; }
        nav a { color: #fff; text-decoration: none; font-weight: 600; }
        nav a:hover { color: #f5c98a; }

        .hero { text-align: center; color: #fff; padding: 90px 24px;
                background: linear-gradient(rgba(40,20,8,.55), rgba(40,20,8,.55)),
                            url('{{ asset('images/hero.jpg') }}') center/cover, #6b3f1d; }
        .hero h1 { font-size: 56px; margin: 0 0 10px; color: #ffd9a0; text-shadow: 3px 3px 0 #4a2c17; }
        .hero p { font-size: 20px; margin: 0 0 24px; }
        .btn { display: inline-block; background: #f5a623; color: #3b2314; padding: 12px 28px;
               border-radius: 999px; text-decoration: none; font-weight: 600; }
        .btn:hover { background: #ffc15c; }

        main { flex: 1; width: 100%; max-width: 1000px; margin: 0 auto; padding: 40px 24px; }
        h2 { font-size: 34px; color: #4a2c17; text-align: center; margin-bottom: 24px; }

        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 22px; }
        .card { background: #fff; border-radius: 16px; overflow: hidden;
                box-shadow: 0 6px 16px rgba(74,44,23,.15); transition: transform .2s; }
        .card:hover { transform: translateY(-6px) rotate(-1deg); }
        .card img { width: 100%; height: 180px; object-fit: cover; display: block; background: #6b3f1d; }
        .card .info { padding: 16px; }
        .card h3 { margin: 0 0 6px; font-size: 22px; color: #4a2c17; }
        .card p { margin: 0; }

        footer { background: #4a2c17; color: #f5c98a; text-align: center; padding: 16px; font-size: 14px; }

        @media (max-width: 600px) { .hero h1 { font-size: 38px; } }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Sips Brownies</span>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <section class="hero">
        <h1>Sips Brownies</h1>
        <p>Fudgy, gooey, homemade brownies baked fresh just for you 🍫</p>
        <a class="btn" href="/contact">Order Now</a>
    </section>

    <main>
        <h2>Our Yummy Favourites</h2>
        <div class="cards">
            <div class="card">
                <img src="{{ asset('images/classic.svg') }}" alt="Classic Fudge brownie">
                <div class="info">
                    <h3>Classic Fudge</h3>
                    <p>Rich dark chocolate with a crackly top and a soft centre.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/walnut.svg') }}" alt="Walnut Crunch brownie">
                <div class="info">
                    <h3>Walnut Crunch</h3>
                    <p>Our classic recipe loaded with toasted walnut pieces.</p>
                </div>
            </div>
            <div class="card">
                <img src="{{ asset('images/caramel.svg') }}" alt="Salted Caramel brownie">
                    <h3>Salted Caramel</h3>
                    <p>Chocolate brownie swirled with caramel and sea salt.</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Group 7 | G7-IIB-AS3</p>
    </footer>
</body>
</html>
