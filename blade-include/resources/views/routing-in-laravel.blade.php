@include('pages.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Routing | Guide</title>
    
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
        .keyword { color: #c678dd; } /* purple */
        .string { color: #98c379; } /* green */
        .func { color: #61afef; } /* blue */

        /* Comparison Bad/Good */
        .compare-bad { border-left: 4px solid #ff4444; padding-left: 10px; margin-bottom: 15px; }
        .compare-good { border-left: 4px solid #00C851; padding-left: 10px; }

        /* Helpers */
        .lang-en, .lang-bn { display: block; }
        .hidden { display: none !important; }
        .tip-box {
            background: #e3f2fd;
            border-left: 4px solid #2196f3;
            padding: 10px;
            margin-top: 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    
    <nav>
        <div class="logo">
            <i class="fas fa-route fa-2x"></i>
            <span>Laravel Routes</span>
        </div>
        <div class="lang-switch-container">
            <button class="lang-btn active" onclick="setLanguage('en')">English</button>
            <button class="lang-btn" onclick="setLanguage('bn')">বাংলা</button>
        </div>
    </nav>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">What is Routing?</span>
            <span class="lang-bn hidden">রাউটিং কী?</span>
        </h2>
        
        <p class="lang-en" style="text-align: center; margin-bottom: 20px;">
            Webpage URLs are called routes. It defines how the application responds to a client request.
        </p>
        <p class="lang-bn hidden" style="text-align: center; margin-bottom: 20px;">
            ওয়েবপেজের URL-কেই রাউট বলা হয়। এটি ঠিক করে যে অ্যাপলিকেশনটি ক্লায়েন্টের রিকোয়েস্টে কীভাবে সাড়া দেবে।
        </p>

        <div class="grid-2">
            <div class="compare-bad">
                <h4>
                    <i class="fas fa-times-circle" style="color: #ff4444;"></i>
                    <span class="lang-en">Pure PHP (Insecure)</span>
                    <span class="lang-bn hidden">সাধারণ পিএইচপি (অনিরাপদ)</span>
                </h4>
                <div class="code-block" style="background: #fff; border: 1px solid #ddd; color: #333;">
                    abx.com/about.php
                </div>
                <p class="lang-en"><small>Disadvantage: Exposes file extension (.php). Users know the technology and folder structure.</small></p>
                <p class="lang-bn hidden"><small>অসুবিধা: ফাইলের এক্সটেনশন (.php) দেখা যায়। ইউজাররা বুঝে ফেলে সাইটটি পিএইচপি দিয়ে তৈরি এবং ফোল্ডার স্ট্রাকচারও অনুমান করতে পারে।</small></p>
            </div>

            <div class="compare-good">
                <h4>
                    <i class="fas fa-check-circle" style="color: #00C851;"></i>
                    <span class="lang-en">Laravel (Clean URL)</span>
                    <span class="lang-bn hidden">লারাভেল (ক্লিন URL)</span>
                </h4>
                <div class="code-block" style="background: #fff; border: 1px solid #ddd; color: #333;">
                    abx.com/about
                </div>
                <p class="lang-en"><small>Advantage: No file extension. In the background, it runs specific logic or a View file securely.</small></p>
                <p class="lang-bn hidden"><small>সুবিধা: কোনো এক্সটেনশন থাকে না। ব্যাকগ্রাউন্ডে এটি নিরাপদে নির্দিষ্ট লজিক বা ভিউ রান করে।</small></p>
            </div>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Defining Routes</span>
            <span class="lang-bn hidden">রাউট ডিফাইন করা</span>
        </h2>
        <div style="text-align: center; margin-bottom: 15px;">
            <span class="lang-en">File Location: <code>routes/web.php</code></span>
            <span class="lang-bn hidden">ফাইলের অবস্থান: <code>routes/web.php</code></span>
        </div>

        <div class="code-block">
            <span class="code-title">Basic Syntax</span>
            <span class="keyword">Route</span>::<span class="func">get</span>(<span class="string">'/about'</span>, <span class="keyword">function</span> () {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;<span class="keyword">return</span> <span class="func">view</span>(<span class="string">'hello'</span>);<br>
            });
        </div>
        <ul style="margin-top: 10px;">
            <li><strong class="lang-en">get:</strong> <span class="lang-en">Inbuilt method for HTTP GET request.</span><span class="lang-bn hidden">HTTP GET রিকোয়েস্টের জন্য ইনবিল্ট মেথড।</span></li>
            <li><strong class="lang-en">function():</strong> <span class="lang-en">Anonymous function (Closure).</span><span class="lang-bn hidden">অ্যানোনিমাস ফাংশন।</span></li>
            <li><strong class="lang-en">view():</strong> <span class="lang-en">Helper to return a blade file.</span><span class="lang-bn hidden">ব্লেড ফাইল রিটার্ন করার হেল্পার।</span></li>
        </ul>

        <div class="grid-2" style="margin-top: 20px;">
            <div>
                <h4>
                    <i class="fas fa-level-down-alt"></i>
                    <span class="lang-en">Sub-Routes</span>
                    <span class="lang-bn hidden">সাব-রাউট</span>
                </h4>
                <div class="code-block">
                    <span class="comment">// URL: abx.com/team/tareq</span><br>
                    <span class="keyword">Route</span>::<span class="func">get</span>(<span class="string">'/team/tareq'</span>, <span class="keyword">function</span> () {<br>
                    &nbsp;&nbsp;<span class="keyword">return</span> <span class="func">view</span>(<span class="string">'mrtareq'</span>);<br>
                    });
                </div>
            </div>
            
            <div>
                <h4>
                    <i class="fas fa-code"></i>
                    <span class="lang-en">Return Raw HTML</span>
                    <span class="lang-bn hidden">র 'HTML' রিটার্ন করা</span>
                </h4>
                <div class="code-block">
                    <span class="keyword">Route</span>::<span class="func">get</span>(<span class="string">'/html'</span>, <span class="keyword">function</span> () {<br>
                    &nbsp;&nbsp;<span class="keyword">return</span> <span class="string">"&lt;h1&gt;Hello&lt;/h1&gt;"</span>;<br>
                    });
                </div>
            </div>
        </div>

        <div class="tip-box">
            <i class="fas fa-bolt"></i> 
            <strong>Short Cut:</strong> 
            <span class="lang-en">Use `Route::view` if you only need to return a page without logic.</span>
            <span class="lang-bn hidden">লজিক ছাড়া শুধু পেজ রিটার্ন করতে `Route::view` ব্যবহার করুন।</span>
            <br>
            <code>Route::view('post', '/blog');</code>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Commands & Tools</span>
            <span class="lang-bn hidden">কমান্ড এবং টুলস</span>
        </h2>

        <div class="grid-2">
            <div>
                <h3><i class="fas fa-terminal"></i> Terminal (Artisan)</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">
                        <code>php artisan route:list</code>
                        <div class="lang-en" style="font-size: 0.85em; color: #666;">See all route list.</div>
                        <div class="lang-bn hidden" style="font-size: 0.85em; color: #666;">সব রাউটের লিস্ট দেখা।</div>
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">
                        <code>php artisan route:list --except-vendor</code>
                        <div class="lang-en" style="font-size: 0.85em; color: #666;">See only routes created by you.</div>
                        <div class="lang-bn hidden" style="font-size: 0.85em; color: #666;">শুধুমাত্র আপনার তৈরি রাউটগুলো দেখা।</div>
                    </li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">
                        <code>php artisan route:clear</code>
                        <div class="lang-en" style="font-size: 0.85em; color: #666;">Clear route cache.</div>
                        <div class="lang-bn hidden" style="font-size: 0.85em; color: #666;">রাউট ক্যাশ ক্লিয়ার করা।</div>
                    </li>
                </ul>
            </div>

            <div>
                <h3><i class="fas fa-lightbulb"></i> Pro Tips</h3>
                
                <div style="margin-bottom: 15px;">
                    <strong><i class="fas fa-search"></i> VS Code Search:</strong><br>
                    <span class="lang-en">Press <code>Ctrl + P</code> to find files quickly.</span>
                    <span class="lang-bn hidden">দ্রুত ফাইল খুজতে <code>Ctrl + P</code> চাপুন।</span>
                </div>

                <div style="margin-bottom: 15px;">
                    <strong><i class="fas fa-exclamation-triangle"></i> 404 Error:</strong><br>
                    <span class="lang-en">If you type a wrong URL (e.g., abx.com/xyz), Laravel automatically shows a 404 Not Found page.</span>
                    <span class="lang-bn hidden">ভুল URL টাইপ করলে (যেমন: abx.com/xyz), লারাভেল অটোমেটিক 404 পেজ দেখায়।</span>
                </div>

                <div>
                    <strong><i class="fas fa-network-wired"></i> Network Tab:</strong><br>
                    <span class="lang-en">Inspect Element > Network to see request details.</span>
                    <span class="lang-bn hidden">রিকোয়েস্ট ডিটেইলস দেখতে Inspect Element > Network ট্যাবে যান।</span>
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