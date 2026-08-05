<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Khier | Introduction</title>
        <meta name="description" content="Hello, I'm Khier, a BSIT student from Trimex.">
        <meta name="color-scheme" content="dark">

        @fonts
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Serif:wght@500;600;700&display=swap" rel="stylesheet">

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        <style>
            :root {
                color-scheme: dark;
                --bg-0: #040814;
                --bg-1: #08111f;
                --bg-2: #0b1020;
                --panel: rgba(8, 13, 25, 0.92);
                --panel-strong: rgba(10, 18, 34, 0.96);
                --border: rgba(148, 163, 184, 0.16);
                --border-strong: rgba(125, 211, 252, 0.24);
                --text: #f8fbff;
                --lead: rgba(224, 231, 255, 0.9);
                --muted: rgba(191, 219, 254, 0.78);
                --fact-label: rgba(165, 180, 252, 0.82);
                --glow-a: rgba(125, 211, 252, 0.18);
                --glow-b: rgba(167, 139, 250, 0.18);
                --glow-c: rgba(244, 114, 182, 0.12);
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }

            html,
            body {
                min-height: 100%;
            }

            body {
                margin: 0;
                font-family: 'IBM Plex Sans', ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
                color: var(--text);
                background:
                    radial-gradient(circle at 18% 16%, rgba(125, 211, 252, 0.16), transparent 28%),
                    radial-gradient(circle at 84% 12%, rgba(167, 139, 250, 0.18), transparent 28%),
                    radial-gradient(circle at 52% 96%, rgba(59, 130, 246, 0.12), transparent 34%),
                    linear-gradient(160deg, var(--bg-0) 0%, var(--bg-1) 48%, var(--bg-2) 100%);
                overflow-x: hidden;
            }

            body::before {
                content: '';
                position: fixed;
                inset: 0;
                background:
                    radial-gradient(circle at 14% 18%, rgba(125, 211, 252, 0.11), transparent 28%),
                    radial-gradient(circle at 84% 18%, rgba(167, 139, 250, 0.12), transparent 26%),
                    radial-gradient(circle at 50% 50%, rgba(15, 23, 42, 0.12), transparent 50%);
                pointer-events: none;
                opacity: 0.9;
            }

            body::after {
                content: '';
                position: fixed;
                inset: auto auto 8% -8%;
                width: 28rem;
                height: 28rem;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(244, 114, 182, 0.12), transparent 68%);
                filter: blur(14px);
                pointer-events: none;
                animation: drift 14s ease-in-out infinite;
            }

            @keyframes drift {
                0%,
                100% {
                    transform: translate3d(0, 0, 0) scale(1);
                }
                50% {
                    transform: translate3d(3%, -3%, 0) scale(1.05);
                }
            }

            .page {
                position: relative;
                min-height: 100vh;
                display: grid;
                place-items: center;
                padding: clamp(20px, 4vw, 48px);
                isolation: isolate;
            }

            .shell {
                position: relative;
                z-index: 1;
                width: min(1140px, 100%);
                display: grid;
                grid-template-columns: minmax(0, 1.1fr) minmax(320px, 0.9fr);
                gap: clamp(20px, 3vw, 32px);
                align-items: stretch;
            }

            .hero,
            .profile {
                border-radius: 32px;
                border: 1px solid var(--border);
                background: linear-gradient(180deg, rgba(11, 16, 32, 0.92), rgba(5, 9, 18, 0.95));
                box-shadow:
                    0 24px 60px rgba(2, 6, 23, 0.48),
                    inset 0 1px 0 rgba(255, 255, 255, 0.04);
            }

            .hero {
                min-height: 540px;
                padding: clamp(32px, 5vw, 60px);
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .hero h1 {
                margin: 0;
                max-width: 9ch;
                font-family: 'IBM Plex Serif', Georgia, serif;
                font-size: clamp(3.1rem, 8vw, 6.4rem);
                line-height: 0.92;
                letter-spacing: -0.06em;
                text-wrap: balance;
            }

            .lead {
                margin: 18px 0 0;
                max-width: 18ch;
                font-size: clamp(1.2rem, 2.4vw, 1.7rem);
                line-height: 1.35;
                color: var(--lead);
            }

            .copy {
                margin: 22px 0 0;
                max-width: 62ch;
                font-size: 1rem;
                line-height: 1.75;
                color: var(--muted);
            }

            .chips {
                display: flex;
                flex-wrap: wrap;
                gap: 12px;
                margin-top: 34px;
            }

            .chip {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 42px;
                padding: 0 16px;
                border-radius: 999px;
                border: 1px solid rgba(125, 211, 252, 0.2);
                background: rgba(255, 255, 255, 0.03);
                color: rgba(226, 232, 255, 0.92);
                font-size: 0.88rem;
                font-weight: 600;
                letter-spacing: 0.02em;
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.04);
            }

            .footer-line {
                margin-top: 28px;
                padding-top: 18px;
                border-top: 1px solid rgba(148, 163, 184, 0.14);
                font-size: 0.98rem;
                line-height: 1.65;
                color: var(--muted);
            }

            .profile {
                position: relative;
                overflow: hidden;
                padding: clamp(24px, 4vw, 40px);
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                gap: 28px;
                background: linear-gradient(180deg, rgba(11, 17, 33, 0.98), rgba(7, 10, 19, 0.96));
            }

            .profile::before {
                content: '';
                position: absolute;
                inset: 0 0 auto;
                height: 6px;
                background: linear-gradient(90deg, #7dd3fc 0%, #a78bfa 50%, #f472b6 100%);
            }

            .portrait-wrap {
                display: grid;
                place-items: center;
                padding-top: 12px;
            }

            .portrait {
                width: clamp(150px, 20vw, 210px);
                aspect-ratio: 1;
                border-radius: 50%;
                display: grid;
                place-items: center;
                font-size: clamp(4rem, 7vw, 6rem);
                font-weight: 700;
                letter-spacing: -0.08em;
                color: #08111f;
                background: linear-gradient(135deg, #7dd3fc 0%, #a78bfa 48%, #f472b6 100%);
                box-shadow:
                    0 26px 60px rgba(125, 211, 252, 0.22),
                    inset 0 1px 0 rgba(255, 255, 255, 0.36);
                animation: float 8s ease-in-out infinite;
            }

            @keyframes float {
                0%,
                100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-8px);
                }
            }

            .profile h2 {
                margin: 0;
                font-family: 'IBM Plex Serif', Georgia, serif;
                font-size: clamp(1.8rem, 3vw, 2.45rem);
                line-height: 1;
                letter-spacing: -0.05em;
            }

            .profile-copy {
                margin: 12px 0 0;
                font-size: 1rem;
                line-height: 1.7;
                color: var(--muted);
            }

            .facts {
                margin: 26px 0 0;
                display: grid;
                gap: 12px;
            }

            .fact {
                display: grid;
                grid-template-columns: minmax(0, 1fr) auto;
                gap: 16px;
                align-items: center;
                padding: 14px 16px;
                border-radius: 18px;
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(148, 163, 184, 0.12);
                box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.03);
            }

            .fact dt {
                margin: 0;
                color: var(--fact-label);
                font-size: 0.82rem;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 0.18em;
            }

            .fact dd {
                margin: 0;
                color: var(--text);
                font-size: 1rem;
                font-weight: 600;
                text-align: right;
            }

            @media (max-width: 920px) {
                .shell {
                    grid-template-columns: minmax(0, 1fr);
                }

                .hero {
                    min-height: auto;
                }

                .profile {
                    min-height: auto;
                }

                .portrait {
                    animation-duration: 10s;
                }
            }

            @media (max-width: 640px) {
                .hero h1 {
                    max-width: 8ch;
                }

                .lead {
                    max-width: 100%;
                }

                .fact {
                    grid-template-columns: minmax(0, 1fr);
                }

                .fact dd {
                    justify-self: start;
                    text-align: left;
                }
            }

            @media (prefers-reduced-motion: reduce) {
                body::after,
                .portrait {
                    animation: none;
                }
            }
        </style>
    </head>
    <body>
        <main class="page">
            <section class="shell" aria-label="Introduction">
                <article class="hero">
                    <h1>Hello, I’m Khier.</h1>
                    <p class="lead">BSIT student from Trimex.</p>
                    <p class="copy">
                        A calm introduction page with a clean, direct first impression.
                    </p>
                </article>

                <aside class="profile" aria-label="Personal snapshot">
                    <div class="portrait-wrap">
                        <div class="portrait" aria-hidden="true">K</div>
                    </div>

                    <div>
                        <h2>At a glance</h2>

                        <dl class="facts">
                            <div class="fact">
                                <dt>Name</dt>
                                <dd>Khier</dd>
                            </div>
                            <div class="fact">
                                <dt>Program</dt>
                                <dd>BSIT</dd>
                            </div>
                            <div class="fact">
                                <dt>School</dt>
                                <dd>Trimex</dd>
                            </div>
                        </dl>
                    </div>
                </aside>
            </section>
        </main>
    </body>
</html>