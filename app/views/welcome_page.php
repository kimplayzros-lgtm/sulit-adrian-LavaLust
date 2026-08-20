<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$student = [
    'id' => 'MCC2024-00182',
    'name' => 'CYRUS KIM ADRIAN D. SULIT',
    'course' => 'BS Information Technology',
    'year' => '3rd Year',
    'section' => '3-F4',
    'email' => 'kimplayzros@gmial.com',
    'address' => 'Sta Isabel, Calapan City, Oriental Mindoro',
    'contact' => '+63 0961 653 3431',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clark's Student Desk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f5f0e5;
            --panel: #f3f1ea;
            --card: #f4f0e9;
            --ink: #1c1b1a;
            --muted: #5d5a57;
            --gold: #f3c94c;
            --gold-deep: #f2b90d;
            --line: #202020;
            --shadow: #1a1a1a;
        }

        * { box-sizing: border-box; }

        html, body {
            margin: 0;
            min-height: 100%;
            background: var(--bg);
            color: var(--ink);
            font-family: 'Inter', sans-serif;
        }

        body {
            padding: 26px 24px 70px;
        }

        .page {
            max-width: 1450px;
            margin: 0 auto;
            background: rgba(255,255,255,0.12);
            border: 4px solid var(--line);
            box-shadow: 12px 12px 0 var(--gold-deep);
            position: relative;
            overflow: hidden;
        }

        .page::before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            width: 10px;
            height: 100%;
            background: var(--gold);
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 28px 18px 22px;
            border-bottom: 4px solid var(--line);
            background: rgba(255,255,255,0.18);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(2rem, 2.6vw, 2.7rem);
            letter-spacing: -0.04em;
        }

        .brand-mark {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 3px solid var(--line);
            background: url('https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80') center/cover no-repeat;
            box-shadow: 0 0 0 4px rgba(0,0,0,0.05);
        }

        .home-btn,
        .pdf-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 120px;
            height: 46px;
            padding: 0 20px;
            border: 3px solid var(--line);
            background: #f2f0ea;
            font-size: 1.1rem;
            font-weight: 500;
            color: var(--ink);
            text-decoration: none;
            box-shadow: 6px 6px 0 var(--gold);
            cursor: pointer;
            font-family: inherit;
        }

        .pdf-btn {
            margin-left: 12px;
            background: var(--gold);
        }

        .hero {
            display: grid;
            grid-template-columns: 1.35fr 0.95fr;
            gap: 40px;
            padding: 52px 42px 46px;
            min-height: 620px;
            background: #f5f2ec;
        }

        .hero-copy {
            padding-top: 20px;
        }

        .tag {
            display: inline-block;
            background: var(--gold);
            border: 3px solid var(--line);
            padding: 8px 14px 7px;
            font-size: 1.2rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 18px;
            box-shadow: 4px 4px 0 var(--line);
        }

        .hero-title {
            margin: 0;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            line-height: 0.78;
            font-size: clamp(5rem, 8vw, 15rem);
            letter-spacing: -0.08em;
            text-transform: none;
        }

        .hero-sub {
            margin-top: 28px;
            max-width: 580px;
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2rem, 2vw, 3rem);
            line-height: 1.1;
            font-style: italic;
            color: rgba(24,24,24,0.9);
        }

        .hero-meta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-top: 28px;
            font-size: 1rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 700;
            color: var(--ink);
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--gold);
            border: 2px solid var(--line);
            box-shadow: 0 0 0 2px rgba(0,0,0,0.05);
        }

        .access-panel {
            align-self: center;
            background: rgba(255,255,255,0.08);
            margin-top: 30px;
            padding: 20px 0 0;
        }

        .panel-box {
            position: relative;
            background: #f3f0e7;
            border: 3px solid var(--line);
            min-height: 380px;
            padding: 28px 28px 22px;
            box-shadow: 10px 10px 0 var(--gold);
        }

        .panel-box::before {
            content: "01";
            position: absolute;
            right: 18px;
            top: -18px;
            background: var(--line);
            color: #fff;
            font-weight: 800;
            font-size: 1.2rem;
            padding: 8px 11px 7px;
            min-width: 54px;
            text-align: center;
        }

        .panel-title {
            margin: 0 0 16px;
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(2.5rem, 3vw, 4rem);
            line-height: 0.9;
            font-weight: 700;
        }

        .panel-sub {
            margin: 0 0 18px;
            font-size: 1.1rem;
            color: rgba(24,24,24,0.85);
            line-height: 1.5;
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
        }

        .field-label {
            display: block;
            margin: 18px 0 10px;
            font-size: 0.95rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--ink);
        }

        .field-input {
            width: 100%;
            height: 54px;
            border: 3px solid var(--line);
            background: rgba(255,255,255,0.15);
            font-size: 1.1rem;
            padding: 0 12px;
            outline: none;
            color: var(--ink);
        }

        .primary-btn {
            display: block;
            width: 100%;
            height: 58px;
            margin-top: 18px;
            border: 3px solid var(--line);
            background: var(--gold);
            color: var(--ink);
            font-size: 1.05rem;
            font-weight: 800;
            letter-spacing: 0.02em;
            cursor: pointer;
            box-shadow: 6px 6px 0 rgba(0,0,0,0.95);
        }

        .profile-section {
            padding: 14px 34px 46px;
            background: #f5f2ec;
        }

        .profile-title {
            margin: 0 0 26px;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(5rem, 9vw, 12rem);
            line-height: 0.8;
            letter-spacing: -0.07em;
        }

        .profile-layout {
            display: grid;
            grid-template-columns: minmax(300px, 420px) minmax(0, 1fr);
            gap: 40px;
            align-items: start;
        }

        .profile-card {
            background: #f3f0e7;
            border: 3px solid var(--line);
            box-shadow: 8px 8px 0 var(--gold);
            padding: 26px 26px 20px;
            min-height: 560px;
            position: relative;
        }

        .profile-image-wrap {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 22px;
        }

        .profile-image {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            border: 3px solid var(--line);
            object-fit: cover;
            box-shadow: 0 0 0 10px rgba(0,0,0,0.06);
            background: #ddd;
        }

        .online {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--gold);
            border: 3px solid var(--line);
            right: 66px;
            bottom: 32px;
        }

        .student-name {
            margin: 0;
            text-align: center;
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            font-size: clamp(2.5rem, 3vw, 4rem);
            line-height: 0.9;
            letter-spacing: -0.04em;
        }

        .course-pill {
            display: block;
            width: 100%;
            margin-top: 18px;
            background: var(--ink);
            color: #f4f0e9;
            text-align: center;
            font-size: 0.92rem;
            letter-spacing: 0.18em;
            font-weight: 800;
            padding: 14px 0;
            text-transform: uppercase;
            border: 3px solid var(--line);
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px 20px;
        }

        .info-box {
            background: rgba(255,255,255,0.08);
            border: 3px solid rgba(32,32,32,0.8);
            min-height: 110px;
            padding: 18px 16px 14px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0 0 1px rgba(32,32,32,0.05);
        }

        .info-label {
            display: block;
            font-size: 0.9rem;
            letter-spacing: 0.02em;
            color: #54514f;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: lowercase;
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-style: italic;
        }

        .info-value {
            display: block;
            font-size: clamp(1.1rem, 1.6vw, 2.4rem);
            line-height: 1.2;
            font-weight: 700;
            letter-spacing: -0.03em;
            font-family: 'Cormorant Garamond', serif;
        }

        .info-box.wide {
            grid-column: span 2;
            min-height: 92px;
        }

        .info-box.contact {
            min-height: 84px;
        }

        @media (max-width: 980px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .profile-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            body {
                padding: 16px 12px 32px;
            }

            .topbar {
                padding: 14px 16px;
            }

            .brand {
                font-size: 1.7rem;
            }

            .home-btn,
            .pdf-btn {
                min-width: 90px;
                height: 40px;
                font-size: 0.95rem;
            }

            .hero, .profile-section {
                padding-left: 16px;
                padding-right: 16px;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .info-box.wide {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <div class="brand">
                <span class="brand-mark" aria-label="student avatar"></span>
                <span>CLARK'S STUDENT DESK</span>
            </div>
            <div style="display:flex; align-items:center; gap:12px;">
                <a class="home-btn" href="#">Home</a>
                <button class="pdf-btn" type="button" onclick="window.print()">Save as PDF</button>
            </div>
        </header>

        <section class="hero">
            <div class="hero-copy">
                <div class="tag">Student Information</div>
                <h1 class="hero-title">Welcome,<br>Student<br>User.</h1>
                <div class="hero-sub">A bright little corner for the essential details of a BS Information Technology student.</div>
                <div class="hero-meta"><span class="dot"></span> Mcc / 3f4 / 3rd year</div>
            </div>

            <div class="access-panel">
                <div class="panel-box">
                    <h2 class="panel-title">Profile access</h2>
                    <p class="panel-sub">Verify the student name to open the full profile.</p>
                    <label class="field-label" for="student-name">Student Name</label>
                    <input class="field-input" id="student-name" type="text" value="<?= htmlspecialchars($student['name']) ?>" />
                    <button class="primary-btn" type="button">Open student profile</button>
                </div>
            </div>
        </section>

        <section class="profile-section">
            <h2 class="profile-title">Student profile</h2>

            <div class="profile-layout">
                <aside class="profile-card">
                    <div class="profile-image-wrap">
                        <img class="profile-image" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80" alt="Student portrait" />
                        <span class="online" aria-label="online status"></span>
                    </div>

                    <h3 class="student-name"><?= htmlspecialchars($student['name']) ?></h3>
                    <span class="course-pill"><?= htmlspecialchars($student['course']) ?></span>
                </aside>

                <div class="info-grid">
                    <div class="info-box">
                        <span class="info-label">Student ID</span>
                        <span class="info-value"><?= htmlspecialchars($student['id']) ?></span>
                    </div>
                    <div class="info-box">
                        <span class="info-label">Name</span>
                        <span class="info-value"><?= htmlspecialchars($student['name']) ?></span>
                    </div>

                    <div class="info-box">
                        <span class="info-label">Course</span>
                        <span class="info-value"><?= htmlspecialchars($student['course']) ?></span>
                    </div>
                    <div class="info-box">
                        <span class="info-label">Year level</span>
                        <span class="info-value"><?= htmlspecialchars($student['year']) ?></span>
                    </div>

                    <div class="info-box">
                        <span class="info-label">Section</span>
                        <span class="info-value"><?= htmlspecialchars($student['section']) ?></span>
                    </div>
                    <div class="info-box">
                        <span class="info-label">Email</span>
                        <span class="info-value"><?= htmlspecialchars($student['email']) ?></span>
                    </div>

                    <div class="info-box wide">
                        <span class="info-label">Address</span>
                        <span class="info-value"><?= htmlspecialchars($student['address']) ?></span>
                    </div>

                    <div class="info-box contact" style="grid-column: 1 / -1;">
                        <span class="info-label">Contact</span>
                        <span class="info-value"><?= htmlspecialchars($student['contact']) ?></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>


        .btn-ghost {
            background: transparent;
            color: var(--text-muted);
            border: 1px solid var(--border);
        }

        .btn-ghost:hover {
            color: var(--text);
            border-color: rgba(255,255,255,0.2);
            background: var(--bg3);
        }

        /* ── STAT BAR ── */
        .stats {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            padding: 3rem 2rem;
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            position: relative;
            z-index: 1;
        }

        .stat { text-align: center; }

        .stat-value {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text);
            letter-spacing: -0.03em;
            line-height: 1;
        }

        .stat-value span { color: var(--lava); }

        .stat-label {
            font-size: 0.78rem;
            color: var(--text-muted);
            font-weight: 500;
            margin-top: 0.3rem;
            text-transform: uppercase;
            letter-spacing: 0.06em;
        }

        /* ── SECTION ── */
        section {
            padding: 5rem 2rem;
            position: relative;
            z-index: 1;
        }

        .section-label {
            font-family: var(--mono);
            font-size: 0.72rem;
            font-weight: 500;
            color: var(--lava);
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 0.75rem;
        }

        .section-title {
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 800;
            letter-spacing: -0.03em;
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .section-desc {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.7;
            max-width: 480px;
        }

        /* ── FEATURES GRID ── */
        .features-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            border-radius: 16px;
            overflow: hidden;
            margin-top: 3rem;
        }

        .feature {
            background: var(--bg);
            padding: 2rem;
            transition: background 0.2s;
            position: relative;
        }

        .feature:hover { background: var(--bg2); }

        .feature::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--lava-glow-strong), transparent);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .feature:hover::before { opacity: 1; }

        .feature-icon {
            width: 40px; height: 40px;
            background: rgba(221,72,20,0.1);
            border: 1px solid var(--border-hot);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-bottom: 1rem;
        }

        .feature h3 {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.01em;
        }

        .feature p {
            font-size: 0.875rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* ── CODE SECTION ── */
        .code-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .code-block {
            background: var(--bg2);
            border: 1px solid var(--border);
            border-radius: 12px;
            overflow: hidden;
        }

        .code-header {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--border);
            background: var(--bg3);
        }

        .dot { width: 10px; height: 10px; border-radius: 50%; }
        .dot-r { background: #ff5f57; }
        .dot-y { background: #febc2e; }
        .dot-g { background: #28c840; }

        .code-filename {
            font-family: var(--mono);
            font-size: 0.75rem;
            color: var(--text-muted);
            margin-left: 0.5rem;
        }

        .code-body {
            padding: 1.5rem;
            font-family: var(--mono);
            font-size: 0.82rem;
            line-height: 1.8;
            color: #a1a1aa;
            overflow-x: auto;
        }

        .code-body .kw { color: #f97316; }
        .code-body .fn { color: #60a5fa; }
        .code-body .str { color: #86efac; }
        .code-body .cm { color: #3f3f46; }
        .code-body .cl { color: #fde68a; }
        .code-body .var { color: #c4b5fd; }

        /* ── STRUCTURE ── */
        .structure-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .dir-item {
            background: var(--bg2);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 0.875rem 1rem;
            font-family: var(--mono);
            font-size: 0.8rem;
            color: var(--text-muted);
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dir-item:hover {
            border-color: var(--border-hot);
            color: var(--text);
            background: rgba(221,72,20,0.05);
        }

        .dir-item .dir-icon { color: var(--lava); font-size: 0.9rem; }

        /* ── FOOTER ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .footer-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .footer-meta {
            font-family: var(--mono);
            font-size: 0.75rem;
            color: var(--text-dim);
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .footer-meta span { color: var(--text-muted); }

        .footer-links {
            display: flex;
            gap: 1rem;
        }

        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 0.82rem;
            transition: color 0.2s;
        }

        .footer-links a:hover { color: var(--lava); }

        /* ── DIVIDER ── */
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 0 2rem;
            position: relative;
            z-index: 1;
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(24px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .hero > * {
            animation: fadeUp 0.6s ease both;
        }

        .hero .badge         { animation-delay: 0.05s; }
        .hero h1             { animation-delay: 0.15s; }
        .hero .hero-sub      { animation-delay: 0.25s; }
        .hero .hero-actions  { animation-delay: 0.35s; }

        @media (max-width: 768px) {
            .features-layout { grid-template-columns: 1fr; }
            .code-section { grid-template-columns: 1fr; }
            nav { padding: 1rem 1.5rem; }
            .nav-links a:not(.btn-nav) { display: none; }
            section { padding: 3rem 1.5rem; }
        }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

<!-- NAV -->
<nav>
    <a class="nav-logo" href="#">
        <div class="flame">🔥</div>
        LavaLust
    </a>
    <div class="nav-links">
        <a href="https://lavalust.netlify.app/docs/" target="_blank">Docs</a>
        <a href="https://github.com/ronmarasigan/LavaLust" target="_blank">GitHub</a>
        <a href="https://lavalust.netlify.app/docs/" target="_blank" class="btn-nav">Get Started →</a>
    </div>
</nav>

<!-- HERO -->
<div class="hero wrap">
    <div class="badge">v<?php echo config_item('VERSION') ?? '4.x'; ?> — Now Available</div>
    <h1>
        <span class="word-lava">Lava</span><span class="word-lust">Lust</span><br>Framework
    </h1>
    <p class="hero-sub">
        A lightweight, expressive PHP MVC framework built for developers who want structure without the bloat.
    </p>
    <div class="hero-actions">
        <a href="https://lavalust.netlify.app/docs/" target="_blank" class="btn btn-primary">
            Read the Docs
        </a>
        <a href="https://github.com/ronmarasigan/LavaLust" target="_blank" class="btn btn-ghost">
            View on GitHub
        </a>
    </div>
</div>

<!-- STATS -->
<div class="stats">
    <div class="stat">
        <div class="stat-value">MVC<span>+</span></div>
        <div class="stat-label">Architecture</div>
    </div>
    <div class="stat">
        <div class="stat-value"><span>4</span> DB</div>
        <div class="stat-label">Drivers</div>
    </div>
    <div class="stat">
        <div class="stat-value">HMVC<span>✓</span></div>
        <div class="stat-label">Module Support</div>
    </div>
    <div class="stat">
        <div class="stat-value">REST<span>*</span></div>
        <div class="stat-label">API Ready</div>
    </div>
</div>

<div class="divider"></div>

<!-- FEATURES -->
<section>
    <div class="wrap">
        <div class="section-label">// features</div>
        <h2 class="section-title">Everything you need.<br>Nothing you don't.</h2>
        <p class="section-desc">LavaLust gives you a clean, consistent structure so you can focus on building — not configuring.</p>

        <div class="features-layout">
            <div class="feature">
                <div class="feature-icon">🧠</div>
                <h3>MVC Architecture</h3>
                <p>Clean separation between Models, Views, and Controllers keeps your codebase maintainable as it grows.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">⚙️</div>
                <h3>Flexible Routing</h3>
                <p>Define routes with GET, POST, PUT, DELETE and more. Supports named routes, closures, and grouped prefixes.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🗄️</div>
                <h3>ORM-style Models</h3>
                <p>Fluent query builder with relationships, soft deletes, timestamps, mass assignment protection, and eager loading.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📦</div>
                <h3>HMVC Modules</h3>
                <p>Scale your app with self-contained modules. Each module owns its controllers, models, and views.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🔗</div>
                <h3>REST API Support</h3>
                <p>Build JSON APIs out of the box using built-in conventions, response helpers, and content negotiation.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">🛡️</div>
                <h3>Libraries & Helpers</h3>
                <p>Sessions, form validation, file uploads, pagination, encryption — batteries included where it counts.</p>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- CODE EXAMPLE -->
<section>
    <div class="wrap">
        <div class="code-section">
            <div>
                <div class="section-label">// quick start</div>
                <h2 class="section-title">Up and running in minutes.</h2>
                <p class="section-desc">Define a route, write a controller method, render a view. That's the whole loop.</p>
            </div>

            <div>
                <div class="code-block" style="margin-bottom:1rem;">
                    <div class="code-header">
                        <div class="dot dot-r"></div>
                        <div class="dot dot-y"></div>
                        <div class="dot dot-g"></div>
                        <span class="code-filename">app/config/routes.php</span>
                    </div>
                    <div class="code-body">
<span class="var">$router</span>-><span class="fn">get</span>(<span class="str">'/'</span>, <span class="str">'Welcome::index'</span>);<br>
<span class="var">$router</span>-><span class="fn">get</span>(<span class="str">'/users'</span>, <span class="str">'Users::index'</span>);<br>
<span class="var">$router</span>-><span class="fn">post</span>(<span class="str">'/users/store'</span>, <span class="str">'Users::store'</span>);
                    </div>
                </div>

                <div class="code-block">
                    <div class="code-header">
                        <div class="dot dot-r"></div>
                        <div class="dot dot-y"></div>
                        <div class="dot dot-g"></div>
                        <span class="code-filename">app/controllers/Welcome.php</span>
                    </div>
                    <div class="code-body">
<span class="kw">class</span> <span class="cl">Welcome</span> <span class="kw">extends</span> <span class="cl">Controller</span> {<br>
&nbsp;&nbsp;<span class="kw">public function</span> <span class="fn">index</span>() {<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$this</span>-><span class="fn">call</span>-><span class="fn">model</span>(<span class="str">'UserModel'</span>);<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$data</span>[<span class="str">'users'</span>] = <span class="var">$this</span>-><span class="cl">UserModel</span>-><span class="fn">all</span>();<br>
&nbsp;&nbsp;&nbsp;&nbsp;<span class="var">$this</span>-><span class="fn">call</span>-><span class="fn">view</span>(<span class="str">'welcome'</span>, <span class="var">$data</span>);<br>
&nbsp;&nbsp;}<br>
}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="divider"></div>

<!-- STRUCTURE -->
<section>
    <div class="wrap">
        <div class="section-label">// project structure</div>
        <h2 class="section-title">Organized by default.</h2>
        <p class="section-desc">A predictable directory layout so every file has a logical home from day one.</p>

        <div class="structure-grid">
            <?php
            $dirs = [
                ['app/config',      '⚙'],
                ['app/controllers', '🎮'],
                ['app/helpers',     '🔧'],
                ['app/libraries',   '📚'],
                ['app/language',    '🌐'],
                ['app/middlewares', '🛡️'],
                ['app/migrations',  '🔄'],
                ['app/models',      '🗄'],
                ['app/modules',     '📦'],
                ['app/views',       '🖼'],
                ['public/',         '🌍'],
                ['runtime/',        '⚡'],
                ['console/',        '💻'],
                ['scheme/',         '📐'],
            ];
            foreach ($dirs as [$name, $icon]): ?>
            <div class="dir-item">
                <span class="dir-icon"><?php echo $icon; ?></span>
                <?php echo $name; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-inner">
        <div class="footer-meta">
            <span>rendered in <span><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?>s</span></span>
            <span>memory <span><?php echo lava_instance()->performance->memory_usage(); ?></span></span>
            <?php if(config_item('environment') === 'development'): ?>
            <span>version <span><?php echo config_item('version'); ?></span></span>
            <span style="color: #dd4814;">● development</span>
            <?php endif; ?>
        </div>
        <div class="footer-links">
            <a href="https://github.com/ronmarasigan/LavaLust" target="_blank">GitHub</a>
            <a href="https://lavalust.netlify.app/docs/" target="_blank">Docs</a>
            <a href="https://opensource.org/licenses/MIT" target="_blank">MIT License</a>
        </div>
    </div>
</footer>

</body>
</html>