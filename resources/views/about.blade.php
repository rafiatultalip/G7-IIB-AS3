<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sips Brownies | About</title>
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

        .banner { background: #6b3f1d; color: #ffd9a0; text-align: center; padding: 50px 24px; }
        .banner h1 { font-size: 46px; margin: 0; text-shadow: 3px 3px 0 #4a2c17; }

        main { flex: 1; width: 100%; max-width: 1000px; margin: 0 auto; padding: 40px 24px; }
        h2 { font-size: 32px; color: #4a2c17; text-align: center; margin-bottom: 20px; }
        .story { background: #fff; border-radius: 16px; padding: 24px;
                 box-shadow: 0 6px 16px rgba(74,44,23,.15); line-height: 1.6; }

        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 22px; }
        .card { background: #fff; border-radius: 16px; padding: 22px; text-align: center;
                box-shadow: 0 6px 16px rgba(74,44,23,.15); }
        .card .emoji { font-size: 48px; }
        .card h3 { margin: 8px 0 4px; font-size: 22px; color: #4a2c17; }
        .card p { margin: 0; }

        footer { background: #4a2c17; color: #f5c98a; text-align: center; padding: 16px; font-size: 14px; }
        @media (max-width: 600px) { .banner h1 { font-size: 32px; } }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Sips Brownies</span>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <section class="banner">
        <h1>About Us</h1>
    </section>

    <main>
        <h2>Our Story</h2>
        <div class="story">
            <p>Sips Brownies started as a Group 7 class project and a shared love of chocolate.
               We bake fudgy, gooey brownies using real cocoa and fresh butter, and we built
               this website to share them with you.</p>
        </div>

        <h2 style="margin-top:40px;">Meet the Team</h2>
        <div class="cards">
            <div class="card">
                <div class="emoji">🧑‍🍳</div>
                <h3>Shifa</h3>
                <p>Role, e.g. Head baker</p>
            </div>
            <div class="card">
                <div class="emoji">🎨</div>
                <h3>Damia</h3>
                <p>Role, e.g. Designer</p>
            </div>
            <div class="card">
                <div class="emoji">💻</div>
                <h3>Rafiatul</h3>
                <p>Role, e.g. Developer</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Group 7 | G7-IIB-AS3</p>
    </footer>
</body>
</html>