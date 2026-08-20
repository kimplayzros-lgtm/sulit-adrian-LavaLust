<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
$student = $student ?? [
    'id' => 'MCC2024-00182',
    'name' => 'CYRUS KIM ADRIAN D. SULIT',
    'course' => 'BS Information Technology',
    'year' => '3rd Year',
    'section' => '3-F4',
    'email' => 'kimplayzros@gmail.com',
    'address' => 'Sta Isabel, Calapan City, Oriental Mindoro',
    'contact' => '+63 0961 653 3431',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kim Sulit Desk | Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #edf2f6;
            --card: #ffffff;
            --soft: #f5f8fb;
            --ink: #1f2a37;
            --muted: #586777;
            --line: #dfe7ee;
            --navy: #23374d;
            --navy-soft: #edf3f9;
            --green: #31a36d;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: linear-gradient(180deg, #f2f6f9 0%, #e9eff5 100%);
            font-family: 'Inter', sans-serif;
            color: var(--ink);
        }

        .page {
            max-width: 980px;
            margin: 40px auto;
            background: rgba(255,255,255,0.78);
            border: 1px solid var(--line);
            box-shadow: 0 18px 36px rgba(31, 42, 55, 0.08);
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 28px;
            border-bottom: 1px solid var(--line);
            background: rgba(255,255,255,0.7);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--navy);
        }

        .brand-mark {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--green);
            box-shadow: 0 0 0 4px rgba(49, 163, 109, 0.12);
        }

        .nav-link {
            color: var(--navy);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .profile-wrap {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 30px;
            padding: 36px 28px 40px;
        }

        .profile-card {
            background: var(--card);
            border: 1px solid var(--line);
            padding: 22px 18px;
            text-align: center;
        }

        .photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--navy);
            display: block;
            margin: 0 auto 18px;
        }

        .profile-name {
            margin: 0;
            font-size: clamp(1.6rem, 2vw, 2.2rem);
            line-height: 1.2;
            letter-spacing: -0.04em;
        }

        .course {
            margin-top: 10px;
            color: var(--muted);
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .info-panel {
            display: grid;
            grid-template-columns: repeat(2, minmax(160px, 1fr));
            gap: 16px;
            align-content: start;
        }

        .info-box {
            background: var(--soft);
            border: 1px solid var(--line);
            padding: 16px 18px;
            min-height: 110px;
        }

        .label {
            display: block;
            margin-bottom: 8px;
            color: var(--muted);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .value {
            display: block;
            font-size: 1.03rem;
            font-weight: 700;
            line-height: 1.4;
            color: var(--ink);
        }

        .wide {
            grid-column: 1 / -1;
        }

        @media (max-width: 760px) {
            .page {
                margin: 20px 12px;
            }

            .topbar {
                padding: 16px 18px;
            }

            .profile-wrap {
                grid-template-columns: 1fr;
                padding: 20px 18px 28px;
            }

            .info-panel {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <header class="topbar">
            <div class="brand">
                <span class="brand-mark"></span>
                <span>Kim Sulit Desk</span>
            </div>
            <a href="/" class="nav-link">Back to Home</a>
        </header>

        <main class="profile-wrap">
            <aside class="profile-card">
                <img class="photo" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=900&q=80" alt="Student portrait" />
                <div class="course">Student Profile</div>
                <h1 class="profile-name"><?= htmlspecialchars($student['name']) ?></h1>
                <div class="course"><?= htmlspecialchars($student['course']) ?></div>
            </aside>

            <section class="info-panel">
                <div class="info-box">
                    <span class="label">Student ID</span>
                    <span class="value"><?= htmlspecialchars($student['id']) ?></span>
                </div>

                <div class="info-box">
                    <span class="label">Year</span>
                    <span class="value"><?= htmlspecialchars($student['year']) ?></span>
                </div>

                <div class="info-box">
                    <span class="label">Section</span>
                    <span class="value"><?= htmlspecialchars($student['section']) ?></span>
                </div>

                <div class="info-box">
                    <span class="label">Email</span>
                    <span class="value"><?= htmlspecialchars($student['email']) ?></span>
                </div>

                <div class="info-box wide">
                    <span class="label">Address</span>
                    <span class="value"><?= htmlspecialchars($student['address']) ?></span>
                </div>

                <div class="info-box wide">
                    <span class="label">Contact</span>
                    <span class="value"><?= htmlspecialchars($student['contact']) ?></span>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
