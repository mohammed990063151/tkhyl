<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Plus | Institutional Investment — Saudi Arabia</title>
    <meta name="description" content="Elite Plus connects investment funds, corporations, and strategic investors with secure, high-value opportunities across Saudi Arabia’s most critical growth sectors." />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url('/') }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Elite Plus | Institutional Investment" />
    <meta property="og:description" content="A specialized Saudi investment platform connecting strategic capital with vetted opportunities, in partnership with Connected Capital." />
    <meta property="og:url" content="{{ url('/') }}" />

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.ico') }}" />

    {{-- Original Elite Plus styles --}}
    <link rel="stylesheet" crossorigin href="/assets/index-Da7rkSx_.css">

    {{-- Extra motion layer on top of the original site animations --}}
    <style>
        html { scroll-behavior: smooth; }

        /* Page enter */
        @keyframes ep-page-in {
            from { opacity: 0; filter: blur(8px); }
            to { opacity: 1; filter: blur(0); }
        }
        #root {
            animation: ep-page-in 0.9s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        /* Soft ambient gold glow behind hero */
        @keyframes ep-glow-pulse {
            0%, 100% { opacity: 0.35; transform: scale(1); }
            50% { opacity: 0.55; transform: scale(1.06); }
        }
        body::before {
            content: "";
            position: fixed;
            inset: -20% auto auto 50%;
            width: min(900px, 90vw);
            height: 520px;
            transform: translateX(-50%);
            background: radial-gradient(ellipse at center, hsl(43 74% 66% / 0.18), transparent 70%);
            pointer-events: none;
            z-index: 0;
            animation: ep-glow-pulse 7s ease-in-out infinite;
        }
        #root { position: relative; z-index: 1; }

        /* Live indicator pulse */
        @keyframes ep-live-pulse {
            0%, 100% { box-shadow: 0 0 0 0 hsl(142 76% 45% / 0.55); }
            70% { box-shadow: 0 0 0 10px hsl(142 76% 45% / 0); }
        }
        #root .fill-emerald-400,
        #root [class*="emerald"] svg {
            animation: ep-live-pulse 2.2s ease-out infinite;
            border-radius: 999px;
        }

        /* Marquee continuity boost */
        @keyframes ep-marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }

        /* Button / card micro-interactions */
        #root a, #root button {
            transition: transform 0.35s cubic-bezier(0.22, 1, 0.36, 1),
                        box-shadow 0.35s ease,
                        filter 0.35s ease,
                        background-color 0.35s ease,
                        border-color 0.35s ease !important;
        }
        #root a:hover, #root button:hover {
            transform: translateY(-2px);
        }

        /* Section reveal polish when framer mounts */
        @keyframes ep-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }
        #root [class*="rounded"][class*="border"][class*="bg-card"],
        #root [class*="rounded-2xl"],
        #root [class*="rounded-3xl"] {
            will-change: transform;
        }

        /* Scroll progress bar */
        #ep-progress {
            position: fixed;
            top: 0;
            left: 0;
            height: 2px;
            width: 0%;
            z-index: 9999;
            background: linear-gradient(90deg, hsl(43 74% 66%), hsl(43 90% 78%));
            box-shadow: 0 0 12px hsl(43 74% 66% / 0.65);
            transition: width 0.08s linear;
        }

        /* Curtain wipe on first load */
        #ep-curtain {
            position: fixed;
            inset: 0;
            z-index: 10000;
            background: hsl(240 14% 5%);
            display: grid;
            place-items: center;
            pointer-events: none;
            animation: ep-curtain-out 1.15s cubic-bezier(0.76, 0, 0.24, 1) 0.35s forwards;
        }
        #ep-curtain span {
            font-family: "Space Grotesk", system-ui, sans-serif;
            font-weight: 700;
            letter-spacing: 0.18em;
            color: hsl(43 74% 66%);
            font-size: clamp(1.4rem, 3vw, 2rem);
            animation: ep-mark 0.8s ease both;
        }
        @keyframes ep-mark {
            from { opacity: 0; letter-spacing: 0.4em; transform: translateY(12px); }
            to { opacity: 1; letter-spacing: 0.18em; transform: translateY(0); }
        }
        @keyframes ep-curtain-out {
            to { opacity: 0; visibility: hidden; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation: none !important;
                transition: none !important;
            }
            #ep-curtain { display: none; }
        }
    </style>
</head>
<body>
    <div id="ep-progress" aria-hidden="true"></div>
    <div id="ep-curtain" aria-hidden="true"><span>E+</span></div>

    <div id="root"></div>

    {{-- Original Elite Plus application (full site) --}}
    <script type="module" crossorigin src="/assets/index-Dc1N5w59.js"></script>

    <script>
        // Scroll progress + gentle parallax accent
        (function () {
            const bar = document.getElementById('ep-progress');
            const onScroll = () => {
                const max = document.documentElement.scrollHeight - window.innerHeight;
                const pct = max > 0 ? (window.scrollY / max) * 100 : 0;
                if (bar) bar.style.width = pct + '%';
            };
            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();

            // Remove curtain from DOM after animation
            const curtain = document.getElementById('ep-curtain');
            if (curtain) {
                curtain.addEventListener('animationend', () => curtain.remove());
            }
        })();
    </script>
</body>
</html>
