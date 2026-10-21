<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIFT | Watch Anime</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --red: #ff2d46;
            --red-deep: #c40f26;
            --bg: #08080c;
            --panel: #101017;
            --line: #1e1e28;
            --white: #ffffff;
            --muted: #8b8b9c;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: "Poppins", Arial, sans-serif;
            background: var(--bg);
            color: var(--white);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .wrap {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(8, 8, 12, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            max-width: 1120px;
            margin: 0 auto;
            padding: 14px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 9px;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 1rem;
        }

        .brand i {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--red);
            box-shadow: 0 0 12px var(--red);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 0.86rem;
            font-weight: 500;
            letter-spacing: 0.4px;
        }

        .nav-links a:hover {
            color: var(--white);
        }

        .nav-cta {
            padding: 8px 18px;
            border: 1px solid var(--red);
            color: var(--red) !important;
            border-radius: 6px;
            font-weight: 600;
        }

        .nav-cta:hover {
            background: var(--red);
            color: var(--white) !important;
        }

        .hero {
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--line);
        }

        .hero-glow {
            position: absolute;
            width: 620px;
            height: 620px;
            right: -160px;
            top: -220px;
            background: radial-gradient(circle, rgba(255, 45, 70, 0.32), transparent 62%);
            filter: blur(30px);
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 620px;
            padding: 84px 0 88px;
        }

        .live {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 13px;
            border: 1px solid var(--red);
            border-radius: 999px;
            color: var(--red);
            font-size: 0.7rem;
            font-weight: 600;
            letter-spacing: 1.4px;
            text-transform: uppercase;
        }

        .live i {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--red);
            animation: blink 1.6s ease-in-out infinite;
        }

        @keyframes blink {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.25;
            }
        }

        .hero h1 {
            font-size: 3.1rem;
            font-weight: 700;
            line-height: 1.06;
            letter-spacing: -1px;
            margin: 18px 0 14px;
        }

        .hero p {
            color: var(--muted);
            font-size: 1rem;
            max-width: 500px;
        }

        .hero-meta {
            display: flex;
            gap: 18px;
            margin-top: 20px;
            color: var(--muted);
            font-size: 0.78rem;
            letter-spacing: 0.6px;
            text-transform: uppercase;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 13px 26px;
            border-radius: 8px;
            font-size: 0.92rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            transition: transform 0.14s ease, box-shadow 0.14s ease, background 0.14s ease;
        }

        .btn-red {
            background: var(--red);
            color: var(--white);
            box-shadow: 0 0 0 rgba(255, 45, 70, 0);
        }

        .btn-red:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(255, 45, 70, 0.45);
        }

        .btn-ghost {
            border: 1px solid var(--line);
            color: var(--white);
        }

        .btn-ghost:hover {
            border-color: var(--red);
            color: var(--red);
        }

        .section {
            padding: 62px 0;
        }

        .section h2 {
            font-size: 1.3rem;
            letter-spacing: 1.6px;
            text-transform: uppercase;
            margin-bottom: 26px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .section h2::before {
            content: "";
            width: 22px;
            height: 2px;
            background: var(--red);
        }

        .spot-grid {
            display: grid;
            grid-template-columns: 1.45fr 1fr;
            gap: 20px;
        }

        .feature {
            display: grid;
            grid-template-columns: 200px 1fr;
            gap: 20px;
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 18px;
            transition: border-color 0.18s ease;
        }

        .feature:hover {
            border-color: var(--red);
        }

        .feature .art {
            aspect-ratio: 3 / 4;
            border-radius: 10px;
        }

        .feature h3 {
            font-size: 1.25rem;
            margin-bottom: 8px;
        }

        .feature p {
            color: var(--muted);
            font-size: 0.86rem;
            margin-bottom: 14px;
        }

        .tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .tag {
            padding: 4px 10px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--line);
            border-radius: 5px;
            font-size: 0.7rem;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            color: var(--muted);
        }

        .score {
            display: inline-block;
            margin-top: 14px;
            color: var(--red);
            font-weight: 700;
            font-size: 1.05rem;
        }

        .side {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .mini {
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 12px;
            transition: border-color 0.18s ease, transform 0.18s ease;
        }

        .mini:hover {
            border-color: var(--red);
            transform: translateX(4px);
        }

        .mini .art {
            width: 54px;
            flex: 0 0 54px;
            aspect-ratio: 3 / 4;
            border-radius: 8px;
        }

        .mini h4 {
            font-size: 0.9rem;
            margin-bottom: 3px;
        }

        .mini span {
            color: var(--muted);
            font-size: 0.76rem;
        }

        .a1 {
            background: linear-gradient(160deg, #7f1d1d, #ff2d46 70%, #7c2d12);
        }

        .a2 {
            background: linear-gradient(160deg, #0f172a, #1e293b 45%, #ff2d46);
        }

        .a3 {
            background: linear-gradient(160deg, #4c1d95, #7c3aed 55%, #ff2d46);
        }

        .a4 {
            background: linear-gradient(160deg, #7c2d12, #b45309 55%, #ff2d46);
        }

        .a5 {
            background: linear-gradient(160deg, #134e4a, #0f766e 55%, #ff2d46);
        }

        .a6 {
            background: linear-gradient(160deg, #1e1b4b, #312e81 55%, #ff2d46);
        }

        .a7 {
            background: linear-gradient(160deg, #450a0a, #991b1b 55%, #f59e0b);
        }

        .rail {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 18px;
        }

        .ep {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 12px;
            transition: border-color 0.18s ease;
        }

        .ep:hover {
            border-color: var(--red);
        }

        .ep .art {
            aspect-ratio: 16 / 10;
            border-radius: 8px;
            margin-bottom: 11px;
        }

        .ep h4 {
            font-size: 0.87rem;
            margin-bottom: 7px;
        }

        .bar {
            height: 3px;
            background: var(--line);
            border-radius: 999px;
            overflow: hidden;
        }

        .bar i {
            display: block;
            height: 100%;
            background: var(--red);
        }

        .ep small {
            display: block;
            margin-top: 6px;
            color: var(--muted);
            font-size: 0.72rem;
        }

        .cta {
            border-top: 1px solid var(--line);
            background: radial-gradient(circle at 50% 0%, rgba(255, 45, 70, 0.18), transparent 60%);
        }

        .cta-inner {
            max-width: 1120px;
            margin: 0 auto;
            padding: 60px 22px;
            text-align: center;
        }

        .cta h2 {
            font-size: 2rem;
            letter-spacing: -0.4px;
        }

        .cta p {
            color: var(--muted);
            margin: 10px auto 26px;
            max-width: 460px;
        }

        .footer {
            border-top: 1px solid var(--line);
        }

        .footer-inner {
            max-width: 1120px;
            margin: 0 auto;
            padding: 26px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            flex-wrap: wrap;
            color: var(--muted);
            font-size: 0.8rem;
        }

        .fade {
            animation: rise 0.55s ease both;
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: none;
            }
        }

        .d1 {
            animation-delay: 0.06s;
        }

        .d2 {
            animation-delay: 0.14s;
        }

        .d3 {
            animation-delay: 0.22s;
        }

        .d4 {
            animation-delay: 0.3s;
        }

        @media (max-width: 860px) {
            .spot-grid {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 620px) {
            .nav-links a:not(.nav-cta) {
                display: none;
            }

            .feature {
                grid-template-columns: 1fr;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .fade,
            .live i {
                animation: none;
            }
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-inner">
            <a class="brand" href="landing_page.php"><i></i>RIFT</a>
            <div class="nav-links">
                <a href="#spotlight">Spotlight</a>
                <a href="#continue">Continue</a>
                <a href="register.php">Register</a>
                <a class="nav-cta" id="nav-cta" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-glow"></div>
        <div class="wrap">
            <div class="hero-inner">
                <span class="live"><i></i>Now Airing</span>
                <h1 id="hero-title">Midnight Rampage</h1>
                <p id="hero-sub">A street racer with nothing to lose. Twelve episodes of neon, noise and bad decisions, streaming tonight.</p>
                <div class="hero-meta">
                    <span>TV-14</span>
                    <span>24 Episodes</span>
                    <span>4K HDR</span>
                </div>
                <div class="hero-actions">
                    <a class="btn btn-red" href="login.php">Watch now</a>
                    <a class="btn btn-ghost" href="register.php">Join free</a>
                </div>
            </div>
        </div>
    </header>

    <section class="section" id="spotlight">
        <div class="wrap">
            <h2>Spotlight</h2>
            <div class="spot-grid">
                <article class="feature fade d1">
                    <div class="art a1"></div>
                    <div>
                        <h3>Blade of the Rising Sun</h3>
                        <p>A wandering swordsman takes a single contract that should take a week. It takes a season, and he does not stop smiling.</p>
                        <div class="tags">
                            <span class="tag">Action</span>
                            <span class="tag">Adventure</span>
                            <span class="tag">2026</span>
                        </div>
                        <span class="score">9.4</span>
                    </div>
                </article>

                <div class="side">
                    <a class="mini fade d2" href="login.php">
                        <div class="art a2"></div>
                        <div>
                            <h4>Neon Sakura</h4>
                            <span>Cyberpunk &middot; EP 12</span>
                        </div>
                    </a>
                    <a class="mini fade d3" href="login.php">
                        <div class="art a3"></div>
                        <div>
                            <h4>Starlight Academy</h4>
                            <span>Fantasy &middot; EP 31</span>
                        </div>
                    </a>
                    <a class="mini fade d3" href="login.php">
                        <div class="art a4"></div>
                        <div>
                            <h4>Last Ronin X</h4>
                            <span>Samurai &middot; EP 9</span>
                        </div>
                    </a>
                    <a class="mini fade d4" href="login.php">
                        <div class="art a5"></div>
                        <div>
                            <h4>Mecha Frontier</h4>
                            <span>Sci-Fi &middot; EP 18</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="continue">
        <div class="wrap">
            <h2>Continue watching</h2>
            <div class="rail">
                <article class="ep fade d1">
                    <div class="art a7"></div>
                    <h4>Moonlight Diner</h4>
                    <div class="bar"><i style="width: 68%"></i></div>
                    <small>Episode 15 of 22</small>
                </article>
                <article class="ep fade d2">
                    <div class="art a2"></div>
                    <h4>Neon Sakura</h4>
                    <div class="bar"><i style="width: 42%"></i></div>
                    <small>Episode 5 of 12</small>
                </article>
                <article class="ep fade d3">
                    <div class="art a4"></div>
                    <h4>Iron Tides</h4>
                    <div class="bar"><i style="width: 85%"></i></div>
                    <small>Episode 21 of 24</small>
                </article>
                <article class="ep fade d4">
                    <div class="art a6"></div>
                    <h4>Hollow Sky</h4>
                    <div class="bar"><i style="width: 25%"></i></div>
                    <small>Episode 3 of 13</small>
                </article>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-inner">
            <h2>Watch everything. Ad free.</h2>
            <p>Free account, no card needed. New episodes every Thursday at midnight.</p>
            <a class="btn btn-red" href="register.php">Create account</a>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-inner">
            <span>RIFT &mdash; WebDev Activity</span>
            <span>Login &middot; Register &middot; Landing</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            var username = localStorage.getItem('webdev_session');

            if (username) {
                $('#hero-title').text('Welcome back, ' + username + '!');
                $('#hero-sub').text('Your continue-watching row is right below. Everything else can wait.');
                $('#nav-cta').text('Logout');

                $('#nav-cta').on('click', function (event) {
                    event.preventDefault();
                    localStorage.removeItem('webdev_session');
                    window.location.replace('login.php');
                });
            }
        });
    </script>
</body>
</html>