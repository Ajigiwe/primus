<?php
/**
 * Primus Group Holdings - Design Direction Showcase Hub
 * High-end visual gateway to launch our 2 elite inline theme variants.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Direction Portfolio | Primus Group Holdings</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    
    <style>
        :root {
            --color-bg: #070913;
            --color-card-bg: rgba(15, 20, 38, 0.7);
            --color-card-border: rgba(255, 255, 255, 0.08);
            --color-text-primary: #ffffff;
            --color-text-secondary: #8e9bb4;
            --color-accent-blue: #3b82f6;
            --color-accent-gold: #d4af37;
            --color-accent-cyan: #00f2fe;
            --color-accent-coral: #ef476f;
            --font-sans: 'Outfit', sans-serif;
            --transition-smooth: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--color-bg);
            color: var(--color-text-primary);
            font-family: var(--font-sans);
            line-height: 1.6;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* Premium Glowing Radial Blobs in Background */
        body::before {
            content: '';
            position: absolute;
            top: -20%;
            left: -10%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.12) 0%, rgba(0, 0, 0, 0) 70%);
            z-index: -1;
            pointer-events: none;
        }

        body::after {
            content: '';
            position: absolute;
            bottom: -10%;
            right: -10%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(239, 71, 111, 0.08) 0%, rgba(0, 0, 0, 0) 70%);
            z-index: -1;
            pointer-events: none;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 80px 24px;
        }

        /* Header Block */
        header {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .back-main-link {
            position: absolute;
            top: -20px;
            left: 0;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--color-text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 8px 16px;
            border-radius: 99px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: var(--transition-smooth);
        }

        .back-main-link:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--color-accent-blue);
            transform: translateX(-4px);
        }

        .brand-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(59, 130, 246, 0.1);
            border: 1px solid rgba(59, 130, 246, 0.25);
            color: #60a5fa;
            padding: 6px 16px;
            border-radius: 99px;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            font-weight: 700;
            margin-bottom: 24px;
        }

        header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: #ffffff;
            line-height: 1.2;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ffffff 30%, #a5b4fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        header p {
            color: var(--color-text-secondary);
            font-size: 1.15rem;
            max-width: 750px;
            margin: 0 auto;
        }

        /* Showcase Grid - Centered 2 Columns */
        .showcase-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 32px;
            max-width: 900px;
            margin: 0 auto 60px;
        }

        @media (max-width: 768px) {
            .showcase-grid {
                grid-template-columns: 1fr;
            }
            header h1 {
                font-size: 2.3rem;
            }
            .back-main-link {
                position: relative;
                top: 0;
                margin-bottom: 20px;
            }
        }

        /* Elegant Cards */
        .showcase-card {
            background: var(--color-card-bg);
            border: 1px solid var(--color-card-border);
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: var(--transition-smooth);
            position: relative;
        }

        .showcase-card:hover {
            transform: translateY(-8px);
            border-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
        }

        /* Card Header Accents */
        .card-header-accent {
            height: 6px;
            width: 100%;
        }

        .showcase-card.theme-futuristic .card-header-accent { background: linear-gradient(90deg, var(--color-accent-cyan), var(--color-accent-blue)); }
        .showcase-card.theme-cinematic .card-header-accent { background: var(--color-accent-coral); }

        /* Card Content */
        .card-body {
            padding: 32px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-badge {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            padding: 4px 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            align-self: flex-start;
        }

        .theme-futuristic .card-badge { background: rgba(0, 242, 254, 0.15); color: var(--color-accent-cyan); }
        .theme-cinematic .card-badge { background: rgba(239, 71, 111, 0.15); color: var(--color-accent-coral); }

        .card-body h3 {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 12px;
            color: #ffffff;
            letter-spacing: -0.01em;
        }

        .card-body p {
            color: var(--color-text-secondary);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        /* Tech Specs Grid */
        .tech-specs {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.04);
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 24px;
        }

        .spec-item {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            margin-bottom: 8px;
        }

        .spec-item:last-child {
            margin-bottom: 0;
        }

        .spec-label {
            color: var(--color-text-secondary);
            font-weight: 600;
        }

        .spec-value {
            color: #ffffff;
            font-family: monospace;
            font-weight: 500;
        }

        /* Palette Swatches */
        .color-palette {
            display: flex;
            gap: 8px;
            margin-bottom: 30px;
        }

        .color-bubble {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.15);
            position: relative;
        }

        .color-bubble::after {
            content: '';
            position: absolute;
            inset: 2px;
            border-radius: 50%;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }

        /* Action Buttons */
        .launch-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            padding: 14px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            transition: var(--transition-smooth);
        }

        .theme-futuristic .launch-btn {
            background: linear-gradient(135deg, var(--color-accent-cyan), var(--color-accent-blue));
            color: #060813;
        }
        .theme-futuristic .launch-btn:hover {
            box-shadow: 0 0 20px rgba(0, 242, 254, 0.4);
            transform: scale(1.02);
        }

        .theme-cinematic .launch-btn {
            background: linear-gradient(135deg, var(--color-accent-coral), #ef476f);
            color: #ffffff;
        }
        .theme-cinematic .launch-btn:hover {
            box-shadow: 0 0 20px rgba(239, 71, 111, 0.4);
            transform: scale(1.02);
        }

        /* Footer Hub */
        footer {
            text-align: center;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--color-text-secondary);
            font-size: 0.9rem;
        }

        footer p strong {
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container">
        
        <header>
            <a href="../index.php" class="back-main-link">
                <span class="material-symbols-outlined" style="font-size: 16px;">arrow_back</span>
                Back to Site
            </a>
            
            <div class="brand-pill">
                <span class="material-symbols-outlined" style="font-size: 14px; font-weight: 700;">layers</span>
                Variant Portfolio
            </div>
            
            <h1>Select A Design Direction</h1>
            <p>Explore two highly customized inline visual architectures. Each direction completely alters typography, colors, layouts, loading transitions, and visual hierarchies designed to present Primus Group Holdings.</p>
        </header>

        <div class="showcase-grid">

            <!-- Theme 3: Neo-Glassmorphism -->
            <div class="showcase-card theme-futuristic">
                <div class="card-header-accent"></div>
                <div class="card-body">
                    <span class="card-badge">Direction 01</span>
                    <h3>Neo-Glassmorphism</h3>
                    <p>Sleek, modern, and elegant glassmorphic corporate styling. Utilizes frosted-glass panels, subtle backlighting glow, dynamic interactive effects, and fluid animations.</p>
                    
                    <div class="tech-specs">
                        <div class="spec-item">
                            <span class="spec-label">Primary Font</span>
                            <span class="spec-value">Outfit (Rounded)</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Secondary Font</span>
                            <span class="spec-value">Plus Jakarta Sans</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Transition Style</span>
                            <span class="spec-value">Orbital Glow Spinner</span>
                        </div>
                    </div>

                    <div class="color-palette">
                        <div class="color-bubble" style="background-color: #060813;"></div>
                        <div class="color-bubble" style="background-color: #00f2fe;"></div>
                        <div class="color-bubble" style="background-color: #3b82f6;"></div>
                        <div class="color-bubble" style="background-color: rgba(15,20,38,0.75);"></div>
                    </div>

                    <a href="theme3-futuristic/index.html" class="launch-btn">
                        Launch Experience
                        <span class="material-symbols-outlined" style="font-size: 18px;">open_in_new</span>
                    </a>
                </div>
            </div>

            <!-- Theme 5: Split Cinematic -->
            <div class="showcase-card theme-cinematic">
                <div class="card-header-accent"></div>
                <div class="card-body">
                    <span class="card-badge">Direction 02</span>
                    <h3>Split Cinematic</h3>
                    <p>Immersive visual portfolio storytelling. Splitting the viewport: the left half is an active, crossfading full-screen photography deck; the right is scrollable text descriptions.</p>
                    
                    <div class="tech-specs">
                        <div class="spec-item">
                            <span class="spec-label">Primary Font</span>
                            <span class="spec-value">Playfair Display</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Secondary Font</span>
                            <span class="spec-value">Inter (Light)</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Transition Style</span>
                            <span class="spec-value">Vertical Split Slide</span>
                        </div>
                    </div>

                    <div class="color-palette">
                        <div class="color-bubble" style="background-color: #121212;"></div>
                        <div class="color-bubble" style="background-color: #c5a880;"></div>
                        <div class="color-bubble" style="background-color: #ffffff;"></div>
                        <div class="color-bubble" style="background-color: rgba(18,18,18,0.95);"></div>
                    </div>

                    <a href="theme5-cinematic/index.html" class="launch-btn">
                        Launch Experience
                        <span class="material-symbols-outlined" style="font-size: 18px;">open_in_new</span>
                    </a>
                </div>
            </div>

        </div>

        <footer>
            <p>&copy; 2026 <strong>Primus Group Holdings</strong>. Design Portfolio variants compiled into fully self-contained HTML templates.</p>
        </footer>

    </div>

</body>
</html>
