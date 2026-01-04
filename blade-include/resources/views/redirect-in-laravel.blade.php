@include('pages.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route Redirects | Laravel Guide</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- SHARED STYLES --- */
        :root {
            --primary: #FF2D20; /* Laravel Red */
            --dark: #1e1e24;
            --light: #f8f9fa;
            --code-bg: #2d2d2d;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
            --radius: 16px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            color: var(--dark);
            margin: 0;
            padding-bottom: 50px;
            transition: all 0.3s ease;
        }

        .bn-font { font-family: 'Hind Siliguri', sans-serif; }
        .container { max-width: 1000px; margin: 0 auto; padding: 20px; }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            margin-bottom: 40px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Language Switcher */
        .lang-switch-container {
            position: relative;
            display: flex;
            background: #e2e2e2;
            border-radius: 30px;
            padding: 4px;
            box-shadow: inset 0 2px 5px rgba(0,0,0,0.1);
        }

        .lang-btn {
            border: none;
            background: transparent;
            padding: 8px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.9rem;
            color: #666;
            transition: all 0.3s ease;
        }

        .lang-btn.active {
            color: var(--primary);
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Cards & Typography */
        .section-title {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            font-weight: 800;
        }

        .card {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.02);
        }

        .grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .grid-2 { grid-template-columns: 1fr; }
        }

        /* Code Block */
        .code-block {
            background: var(--code-bg);
            color: #ccc;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            margin-top: 10px;
            overflow-x: auto;
        }
        .code-title {
            font-size: 0.8rem;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            display: block;
            border-bottom: 1px solid #444;
            padding-bottom: 5px;
        }
        .comment { color: #6a9955; }
        .keyword { color: #c678dd; } 
        .string { color: #98c379; } 
        .func { color: #61afef; } 
        .num { color: #d19a66; }

        /* Visual Flow */
        .flow-box {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            background: #f1f8e9;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            color: #333;
            font-weight: bold;
        }

        /* Helpers */
        .lang-en, .lang-bn { display: block; }
        .hidden { display: none !important; }
        .badge { 
            background: #eee; 
            padding: 2px 6px; 
            border-radius: 4px; 
            font-size: 0.8em; 
            color: #555; 
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<div class="container">
    
    <nav>
        <div class="logo">
            <i class="fas fa-exchange-alt fa-2x"></i>
            <span>Redirects</span>
        </div>
        <div class="lang-switch-container">
            <button class="lang-btn active" onclick="setLanguage('en')">English</button>
            <button class="lang-btn" onclick="setLanguage('bn')">বাংলা</button>
        </div>
    </nav>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">What is Redirect?</span>
            <span class="lang-bn hidden">রিডাইরেক্ট কী?</span>
        </h2>
        
        <p class="lang-en" style="text-align: center;">
            Forwarding a user from one URL to another automatically.
        </p>
        <p class="lang-bn hidden" style="text-align: center;">
            ব্যবহারকারীকে একটি URL থেকে স্বয়ংক্রিয়ভাবে অন্য URL-এ পাঠিয়ে দেওয়া।
        </p>

        <div class="flow-box">
            <span>/about</span>
            <i class="fas fa-arrow-right" style="color: var(--primary);"></i>
            <span>/post</span>
        </div>

        <div class="code-block">
            <span class="code-title">Syntax</span>
            <span class="comment">// 1. Old URL, 2. New URL</span><br>
            <span class="keyword">Route</span>::<span class="func">redirect</span>(<span class="string">'/about'</span>, <span class="string">'/post'</span>);
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Status Codes</span>
            <span class="lang-bn hidden">স্ট্যাটাস কোড (301 vs 302)</span>
        </h2>
        <p class="lang-en" style="margin-bottom: 20px;">The 3rd parameter defines <strong>why</strong> the page moved.</p>
        <p class="lang-bn hidden" style="margin-bottom: 20px;">তৃতীয় প্যারামিটারটি নির্দেশ করে পেজটি <strong>কেন</strong> সরানো হয়েছে।</p>

        <div class="grid-2">
            
            <div>
                <h4>
                    <i class="fas fa-archive" style="color: #ff4444;"></i>
                    <span class="lang-en">301 : Permanent</span>
                    <span class="lang-bn hidden">৩০১ : পার্মানেন্ট (স্থায়ী)</span>
                </h4>
                <p class="lang-en"><small>The old page is gone forever. SEO / Google will replace the old link with the new one.</small></p>
                <p class="lang-bn hidden"><small>পুরানো পেজটি চিরতরে মুছে ফেলা হয়েছে। এসইও বা গুগল পুরানো লিংকটি সরিয়ে নতুনটি সেভ করবে।</small></p>

                <div class="code-block">
                    <span class="keyword">Route</span>::<span class="func">redirect</span>(<span class="string">'/about'</span>, <span class="string">'/post'</span>, <span class="num">301</span>);
                </div>
                <div style="margin-top: 5px;">
                    <span class="badge">Short:</span> 
                    <code>Route::permanentRedirect(...)</code>
                </div>
            </div>

            <div>
                <h4>
                    <i class="fas fa-clock" style="color: #ffbb33;"></i>
                    <span class="lang-en">302 : Temporary</span>
                    <span class="lang-bn hidden">৩০২ : টেম্পোরারি (সাময়িক)</span>
                </h4>
                <p class="lang-en"><small>Moved for a short time (e.g., Maintenance). Google will keep the old link in search results.</small></p>
                <p class="lang-bn hidden"><small>অল্প সময়ের জন্য সরানো হয়েছে (যেমন: মেইনটেইনেন্স)। গুগল সার্চ রেজাল্টে পুরানো লিংকটিই রেখে দিবে।</small></p>

                <div class="code-block">
                    <span class="comment">// Default behavior</span><br>
                    <span class="keyword">Route</span>::<span class="func">redirect</span>(<span class="string">'/about'</span>, <span class="string">'/post'</span>, <span class="num">302</span>);
                </div>
            </div>

        </div>
    </section>

</div>

<script>
    function setLanguage(lang) {
        // Update Buttons
        const buttons = document.querySelectorAll('.lang-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        
        // Find the button that was clicked
        if(lang === 'en') buttons[0].classList.add('active');
        else buttons[1].classList.add('active');

        // Logic to toggle text
        const enElements = document.querySelectorAll('.lang-en');
        const bnElements = document.querySelectorAll('.lang-bn');

        if (lang === 'en') {
            enElements.forEach(el => el.classList.remove('hidden'));
            bnElements.forEach(el => el.classList.add('hidden'));
            document.body.style.fontFamily = "'Inter', sans-serif";
        } else {
            enElements.forEach(el => el.classList.add('hidden'));
            bnElements.forEach(el => el.classList.remove('hidden'));
            document.body.style.fontFamily = "'Hind Siliguri', sans-serif";
        }
    }
</script>

</body>
</html>
@include('pages.footer')