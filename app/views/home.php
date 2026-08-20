<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kim Sulit Desk | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #eef3f8;
            --card: #ffffff;
            --soft: #f5f8fb;
            --ink: #1d2733;
            --muted: #5f6f81;
            --line: #dfe9f2;
            --navy: #24364d;
            --deep: #1b2d42;
            --gold: #c8a96b;
            --green: #2d8f6b;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(180deg, #f5f8fb 0%, #edf2f7 100%);
            color: var(--ink);
        }

        .shell {
            max-width: 980px;
            margin: 70px auto;
            padding: 28px;
        }

        .hero {
            background: rgba(255,255,255,0.9);
            border: 1px solid var(--line);
            border-radius: 22px;
            box-shadow: 0 22px 35px rgba(22, 34, 51, 0.06);
            overflow: hidden;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 28px;
            border-bottom: 1px solid var(--line);
            background: #fafcff;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.78rem;
            letter-spacing: 0.18em;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--navy);
        }

        .brand-mark {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--gold);
            box-shadow: 0 0 0 4px rgba(200, 169, 107, 0.12);
        }

        .content {
            display: grid;
            grid-template-columns: 1.3fr 0.9fr;
            gap: 28px;
            padding: 36px 28px 42px;
        }

        .eyebrow {
            color: var(--green);
            font-size: 0.8rem;
            letter-spacing: 0.12em;
            font-weight: 700;
            text-transform: uppercase;
        }

        h1 {
            margin: 14px 0 12px;
            font-size: clamp(2.2rem, 4vw, 4rem);
            line-height: 1.05;
            letter-spacing: -0.06em;
        }

        .lead {
            margin: 0 0 24px;
            max-width: 580px;
            color: var(--muted);
            font-size: 1.04rem;
            line-height: 1.7;
        }

        .cta-row {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 14px 24px;
            border-radius: 999px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .btn-primary {
            background: var(--deep);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--navy);
        }

        .btn-secondary {
            background: var(--soft);
            color: var(--deep);
            border: 1px solid var(--line);
        }

        .info-card {
            background: linear-gradient(180deg, #f8fafc 0%, #eef3f8 100%);
            border: 1px solid var(--line);
            border-radius: 18px;
            padding: 22px;
        }

        .mini-label {
            display: block;
            margin-bottom: 10px;
            color: var(--muted);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        .stat {
            display: block;
            margin-bottom: 18px;
            font-size: 2rem;
            font-weight: 800;
            letter-spacing: -0.06em;
            color: var(--deep);
        }

        .meta {
            margin: 0;
            padding-left: 18px;
            color: var(--muted);
            line-height: 1.8;
        }

        @media (max-width: 760px) {
            .shell {
                margin: 28px 14px;
                padding: 0;
            }

            .content {
                grid-template-columns: 1fr;
                padding: 24px 20px 28px;
            }

            .topbar {
                padding: 18px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="shell">
        <div class="hero">
            <header class="topbar">
                <div class="brand">
                    <span class="brand-mark"></span>
                    <span>Kim Sulit Desk</span>
                </div>
            </header>

            <div class="content">
                <section>
                    <div class="eyebrow">Student Portal</div>
                    <h1>Formal, focused, and ready to present.</h1>
                    <p class="lead">
                        This home page introduces the student profile experience with a clean academic layout,
                        a professional tone, and a direct path to the protected profile record.
                    </p>

                    <div class="cta-row">
                        <a class="btn btn-primary" href="/profile?access=1">Open Profile</a>
                        <a class="btn btn-secondary" href="/">Refresh Home</a>
                    </div>
                </section>

                <aside class="info-card">
                    <span class="mini-label">Quick Summary</span>
                    <span class="stat">3-F4</span>
                    <ul class="meta">
                        <li>BS Information Technology</li>
                        <li>3rd Year Student</li>
                        <li>Academic profile ready</li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</body>
</html>
