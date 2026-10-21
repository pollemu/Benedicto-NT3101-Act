<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeHub | Landing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --red: #dc2626;
            --red-dark: #b91c1c;
            --red-soft: #fef2f2;
            --white: #ffffff;
            --ink: #111827;
            --muted: #6b7280;
            --line: #eef0f3;
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
            color: var(--ink);
            background: var(--white);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        .wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 22px;
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 13px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 0.4px;
            color: var(--red);
        }

        .brand svg {
            display: block;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 0.9rem;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: var(--red);
        }

        .nav-cta {
            padding: 8px 17px;
            background: var(--red);
            color: var(--white) !important;
            border-radius: 8px;
            font-weight: 600;
        }

        .nav-cta:hover {
            background: var(--red-dark);
            color: var(--white) !important;
        }

        .hero {
            position: relative;
            overflow: hidden;
            background: linear-gradient(155deg, #ffffff 0%, #fff5f5 55%, #fee2e2 100%);
            border-bottom: 1px solid var(--line);
        }

        .hero-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            opacity: 0.55;
        }

        .blob-a {
            width: 320px;
            height: 320px;
            background: #fca5a5;
            top: -90px;
            right: -60px;
        }

        .blob-b {
            width: 260px;
            height: 260px;
            background: #fecdd3;
            bottom: -120px;
            right: 220px;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 640px;
            padding: 68px 0 72px;
        }

        .badge {
            display: inline-block;
            padding: 6px 13px;
            background: var(--red);
            color: var(--white);
            border-radius: 999px;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.6px;
            text-transform: uppercase;
        }

        .hero h1 {
            font-size: 2.7rem;
            line-height: 1.12;
            letter-spacing: -0.6px;
            margin: 16px 0 14px;
        }

        .hero p {
            color: var(--muted);
            font-size: 1rem;
            max-width: 520px;
        }

        .hero-actions {
            display: flex;
            gap: 12px;
            margin-top: 26px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 600;
            transition: transform 0.14s ease, box-shadow 0.14s ease, background 0.14s ease;
        }

        .btn-red {
            background: linear-gradient(135deg, var(--red) 0%, #ef4444 100%);
            color: var(--white);
            box-shadow: 0 8px 18px rgba(220, 38, 38, 0.3);
        }

        .btn-red:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(220, 38, 38, 0.36);
        }

        .btn-ghost {
            background: var(--white);
            color: var(--red);
            border: 1.5px solid var(--red);
        }

        .btn-ghost:hover {
            background: var(--red-soft);
        }

        .stats {
            display: flex;
            gap: 34px;
            margin-top: 36px;
        }

        .stat b {
            display: block;
            font-size: 1.3rem;
        }

        .stat span {
            font-size: 0.74rem;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 0.6px;
        }

        .section {
            padding: 56px 0;
        }

        .section-head {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 14px;
            margin-bottom: 24px;
        }

        .section h2 {
            font-size: 1.4rem;
            letter-spacing: -0.2px;
        }

        .section-head a {
            color: var(--red);
            font-size: 0.88rem;
            font-weight: 600;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(168px, 1fr));
            gap: 20px;
        }

        .show {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 14px;
            overflow: hidden;
            transition: transform 0.18s ease, box-shadow 0.18s ease;
        }

        .show:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 34px rgba(17, 24, 39, 0.12);
        }

        .poster {
            position: relative;
            aspect-ratio: 3 / 4;
            display: flex;
            align-items: flex-end;
            padding: 12px;
        }

        .poster .name {
            color: var(--white);
            font-size: 0.88rem;
            font-weight: 600;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.55);
        }

        .poster .ep {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 3px 9px;
            background: rgba(0, 0, 0, 0.55);
            color: var(--white);
            border-radius: 999px;
            font-size: 0.7rem;
            font-weight: 600;
        }

        .poster .play {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(220, 38, 38, 0.5);
            opacity: 0;
            transition: opacity 0.18s ease;
        }

        .show:hover .poster .play {
            opacity: 1;
        }

        .play svg {
            width: 44px;
            height: 44px;
            padding: 11px;
            background: var(--white);
            color: var(--red);
            border-radius: 50%;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        }

        .p1 {
            background: linear-gradient(160deg, #7f1d1d 0%, #dc2626 60%, #f97316 100%);
        }

        .p2 {
            background: linear-gradient(160deg, #1e3a8a 0%, #7c3aed 55%, #dc2626 100%);
        }

        .p3 {
            background: linear-gradient(160deg, #4c1d95 0%, #db2777 60%, #f472b6 100%);
        }

        .p4 {
            background: linear-gradient(160deg, #065f46 0%, #10b981 55%, #dc2626 100%);
        }

        .p5 {
            background: linear-gradient(160deg, #7c2d12 0%, #f59e0b 58%, #dc2626 100%);
        }

        .p6 {
            background: linear-gradient(160deg, #0f172a 0%, #334155 50%, #dc2626 100%);
        }

        .info {
            padding: 12px 14px 14px;
        }

        .info h3 {
            font-size: 0.9rem;
        }

        .info p {
            display: flex;
            gap: 9px;
            margin-top: 5px;
            font-size: 0.76rem;
            color: var(--muted);
        }

        .info .score {
            color: var(--red);
            font-weight: 600;
        }

        .genres {
            background: #fafafa;
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .chip-gen {
            padding: 8px 17px;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 999px;
            font-size: 0.85rem;
            color: var(--muted);
            transition: border-color 0.14s ease, color 0.14s ease;
        }

        .chip-gen:hover {
            border-color: var(--red);
            color: var(--red);
        }

        .cta {
            background: linear-gradient(135deg, var(--red) 0%, var(--red-dark) 100%);
            color: var(--white);
        }

        .cta-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 54px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }

        .cta h2 {
            font-size: 1.6rem;
        }

        .cta p {
            font-size: 0.9rem;
            opacity: 0.9;
            margin-top: 6px;
        }

        .btn-white {
            background: var(--white);
            color: var(--red);
        }

        .btn-white:hover {
            transform: translateY(-2px);
        }

        .footer {
            border-top: 1px solid var(--line);
        }

        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 26px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            flex-wrap: wrap;
            font-size: 0.82rem;
            color: var(--muted);
        }

        .fade {
            animation: fadeUp 0.5s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }
            to {
                opacity: 1;
                transform: none;
            }
        }

        .d1 {
            animation-delay: 0.05s;
        }

        .d2 {
            animation-delay: 0.15s;
        }

        .d3 {
            animation-delay: 0.25s;
        }

        .d4 {
            animation-delay: 0.35s;
        }

        .d5 {
            animation-delay: 0.45s;
        }

        .d6 {
            animation-delay: 0.55s;
        }

        @media (max-width: 640px) {
            .nav-links a:not(.nav-cta) {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .stats {
                gap: 22px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            .fade {
                animation: none;
            }
        }
    </style>