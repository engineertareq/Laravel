<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installing Laravel | Setup Guide</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* --- COPYING STYLES FROM REFERENCE --- */
        :root {
            --primary: #FF2D20; /* Laravel Red */
            --dark: #1e1e24;
            --light: #f8f9fa;
            --success: #00C851;
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

        /* Sections */
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

        /* Lists */
        ul { list-style: none; padding: 0; }
        ul li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        ul li:last-child { border-bottom: none; }
        ul li i { color: var(--primary); width: 20px; text-align: center; }

        /* Code Block */
        .code-block {
            background: #2d2d2d;
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
        .code-cmd { border-left: 4px solid var(--primary); }
        .code-fix { border-left: 4px solid #ffbb33; }

        /* Helpers */
        .lang-en, .lang-bn { display: block; }
        .hidden { display: none !important; }
        .text-muted { color: #666; font-size: 0.9em; margin-top: 5px; display: block; }
        
        .badge {
            background: var(--primary);
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 0.7em;
            vertical-align: middle;
            margin-left: 8px;
        }
    </style>
</head>
<body>

<div class="container">
    
    <nav>
        <div class="logo">
            <i class="fab fa-laravel fa-2x"></i>
            <span>Laravel Setup</span>
        </div>
        <div class="lang-switch-container">
            <button class="lang-btn active" onclick="setLanguage('en')">English</button>
            <button class="lang-btn" onclick="setLanguage('bn')">বাংলা</button>
        </div>
    </nav>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Laravel Installation Methods</span>
            <span class="lang-bn hidden">ইনস্টলেশন পদ্ধতিসমূহ</span>
        </h2>
        
        <div class="grid-2">
            <div>
                <h3 style="color: var(--success);">
                    <i class="fas fa-check-circle"></i>
                    <span class="lang-en">Global Installer (Recommended)</span>
                    <span class="lang-bn hidden">গ্লোবাল ইনস্টলার (রেকমেন্ডেড)</span>
                </h3>
                <p class="lang-en">Install the installer once, then create projects instantly.</p>
                <p class="lang-bn hidden">একবার ইনস্টলার ডাউনলোড করুন, তারপর দ্রুত প্রোজেক্ট তৈরি করুন।</p>
                
                <div class="code-block code-cmd">
                    <span class="code-title">Step 1: Install Globally</span>
                    composer global require laravel/installer
                </div>
                
                <div class="code-block code-cmd" style="margin-top: 10px;">
                    <span class="code-title">Step 2: Create App</span>
                    laravel new example-app
                </div>
            </div>

            <div>
                <h3 style="color: #666;">
                    <i class="fas fa-download"></i>
                    <span class="lang-en">Create Project</span>
                    <span class="lang-bn hidden">ক্রিয়েট প্রজেক্ট কমান্ড</span>
                </h3>
                <p class="lang-en">Downloads the framework every time you start a new project.</p>
                <p class="lang-bn hidden">প্রতিটি নতুন প্রোজেক্টের সময় ফ্রেমওয়ার্ক ডাউনলোড করতে হয়।</p>

                <div class="code-block code-cmd">
                    <span class="code-title">Command</span>
                    composer create-project laravel/laravel:^10.0 my1
                </div>
                
                <ul style="margin-top: 15px;">
                    <li>
                        <i class="fas fa-question-circle" style="color:#ffbb33"></i> 
                        <span class="lang-en"><strong>Which is good?</strong> Go with Global Installer.</span>
                        <span class="lang-bn hidden"><strong>কোনটি ভালো?</strong> গ্লোবাল ইনস্টলার ব্যবহার করাই ভালো।</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Troubleshooting</span>
            <span class="lang-bn hidden">সমস্যা সমাধান</span>
        </h2>

        <div class="grid-2">
            <div>
                <h4>
                    <span class="lang-en">Proxy Issues?</span>
                    <span class="lang-bn hidden">প্রক্সি সমস্যা হচ্ছে?</span>
                </h4>
                <p class="lang-en">If you face installation errors, clear your proxy settings in CMD.</p>
                <p class="lang-bn hidden">ইনস্টলেশনে সমস্যা হলে CMD তে প্রক্সি সেটিংস ক্লিয়ার করুন।</p>

                <div class="code-block code-fix">
                    <span class="code-title">CMD Commands (Temporary)</span>
                    set http_proxy=<br>
                    set https_proxy=
                </div>
            </div>
            <div>
                <h4>
                    <span class="lang-en">Composer Config Fix</span>
                    <span class="lang-bn hidden">কম্পোজার কনফিগ ফিক্স</span>
                </h4>
                <p class="lang-en">Permanently remove proxy from composer config.</p>
                <p class="lang-bn hidden">কম্পোজার কনফিগ থেকে পার্মানেন্টলি প্রক্সি রিমুভ করুন।</p>

                <div class="code-block code-fix">
                    <span class="code-title">Terminal</span>
                    composer config --global --unset http-proxy<br>
                    composer config --global --unset https-proxy
                </div>
            </div>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Run & Setup Editor</span>
            <span class="lang-bn hidden">রান এবং এডিটর সেটআপ</span>
        </h2>

        <div class="grid-2">
            <div>
                <h3>
                    <i class="fas fa-server"></i>
                    <span class="lang-en">Run Local Server</span>
                    <span class="lang-bn hidden">লোকাল সার্ভার রান করা</span>
                </h3>
                <p class="lang-en">Navigate to your project folder and run:</p>
                <p class="lang-bn hidden">আপনার প্রজেক্ট ফোল্ডারে গিয়ে এই কমান্ডটি দিন:</p>
                
                <div class="code-block code-cmd">
                    <span class="code-title">Terminal</span>
                    cd my-first-app<br>
                    php artisan serve
                </div>
                <small class="text-muted">Access at: http://127.0.0.1:8000</small>
            </div>

            <div>
                <h3>
                    <i class="fas fa-puzzle-piece"></i>
                    <span class="lang-en">VS Code Extensions</span>
                    <span class="lang-bn hidden">ভিএস কোড এক্সটেনশনসমূহ</span>
                </h3>
                <ul>
                    <li>
                        <i class="fab fa-php"></i>
                        <span>PHP Intelephense</span>
                    </li>
                    <li>
                        <i class="fas fa-search"></i>
                        <span>PHP Namespace Resolver</span>
                    </li>
                    <li>
                        <i class="fab fa-laravel"></i>
                        <span>Laravel Extension Pack</span>
                    </li>
                    <li>
                        <i class="fas fa-code"></i>
                        <span>Laravel Blade Snippets</span>
                    </li>
                    <li>
                        <i class="fas fa-eye"></i>
                        <span>Laravel Go To View</span>
                    </li>
                </ul>
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