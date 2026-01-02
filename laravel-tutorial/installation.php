<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Setup Guide | Modern Guide</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #FF2D20; /* Laravel Red */
            --accent: #F2C94C;  /* Warning/Highlight */
            --dark: #1e1e24;
            --light: #f8f9fa;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
            --radius: 16px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f0f2f5;
            color: var(--dark);
            margin: 0;
            padding-bottom: 50px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        /* --- Navbar & Switcher (Same as before) --- */
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
        .lang-switch-container {
            position: relative;
            display: flex;
            background: #e2e2e2;
            border-radius: 30px;
            padding: 4px;
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

        /* --- Cards & Steps --- */
        .step-card {
            background: white;
            border-radius: var(--radius);
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: var(--shadow);
            border-left: 5px solid var(--primary);
            position: relative;
        }

        .step-number {
            position: absolute;
            top: -15px;
            left: -15px;
            background: var(--primary);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            box-shadow: 0 5px 15px rgba(255, 45, 32, 0.4);
        }

        .step-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-download {
            display: inline-block;
            background: var(--dark);
            color: white;
            padding: 8px 15px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 0.9rem;
            margin-top: 10px;
            transition: transform 0.2s;
        }
        .btn-download:hover { transform: translateY(-2px); }

        /* Code & Terminal */
        .terminal {
            background: #1e1e1e;
            color: #00ff00;
            font-family: 'Courier New', monospace;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            font-size: 0.9rem;
        }
        .terminal span { color: #fff; } /* Commands in white */

        /* Concept Box for Composer */
        .concept-box {
            background: #fff8e1;
            border: 1px solid #ffe082;
            padding: 20px;
            border-radius: 10px;
            margin-top: 15px;
        }
        .concept-title {
            color: #f57f17;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        /* Hide elements based on language */
        .lang-en, .lang-bn { display: block; }
        .hidden { display: none !important; }
        
        /* Bangla Font */
        .bn-font { font-family: 'Hind Siliguri', sans-serif; }

    </style>
</head>
<body>

<div class="container">
    
    <nav>
        <div class="logo">
            <i class="fas fa-tools"></i>
            <span>Environment Setup</span>
        </div>
        <div class="lang-switch-container">
            <button class="lang-btn active" onclick="setLanguage('en')">English</button>
            <button class="lang-btn" onclick="setLanguage('bn')">বাংলা</button>
        </div>
    </nav>

    <div class="step-card">
        <div class="step-number">1</div>
        <h2 class="step-title">
            <span class="lang-en">Install XAMPP (Local Server)</span>
            <span class="lang-bn hidden">XAMPP ইনস্টল করুন (লোকাল সার্ভার)</span>
        </h2>
        
        <p class="lang-en">XAMPP provides the PHP environment needed to run Laravel.</p>
        <p class="lang-bn hidden">Laravel চালানোর জন্য প্রয়োজনীয় PHP এনভায়রনমেন্ট XAMPP প্রদান করে।</p>
        
        <a href="https://www.apachefriends.org/download.html" target="_blank" class="btn-download">
            <i class="fas fa-download"></i> Download XAMPP
        </a>

        <div style="margin-top: 20px;">
            <strong class="lang-en"><i class="fas fa-exclamation-triangle"></i> Important Note:</strong>
            <span class="lang-en">Check if the PHP version is compatible with the latest Laravel version.</span>
            
            <strong class="lang-bn hidden"><i class="fas fa-exclamation-triangle"></i> জরুরি নোট:</strong>
            <span class="lang-bn hidden">PHP ভার্সনটি লেটেস্ট লারাভেল ভার্সনের সাথে সাপোর্ট করে কিনা তা দেখে নিন।</span>
        </div>

        <p style="margin-top: 15px;">
            <span class="lang-en">Open CMD and check version:</span>
            <span class="lang-bn hidden">CMD ওপেন করে ভার্সন চেক করুন:</span>
        </p>
        <div class="terminal">
            C:\Users\You> <span>php -v</span>
        </div>
    </div>

    <div class="step-card">
        <div class="step-number">2</div>
        <h2 class="step-title">
            <span class="lang-en">Install Composer</span>
            <span class="lang-bn hidden">Composer ইনস্টল করুন</span>
        </h2>
        
        <a href="https://getcomposer.org/Composer-Setup.exe" target="_blank" class="btn-download">
            <i class="fas fa-download"></i> Download Composer
        </a>

        <ul style="margin-top: 15px;">
            <li>
                <span class="lang-en">During install, browse and select the correct <b>php.exe</b> (usually inside xampp/php folder).</span>
                <span class="lang-bn hidden">ইনস্টল করার সময় সঠিক <b>php.exe</b> ফাইলটি সিলেক্ট করুন (সাধারণত xampp/php ফোল্ডারে থাকে)।</span>
            </li>
            <li>
                <span class="lang-en">Skip Proxy URL settings if asked.</span>
                <span class="lang-bn hidden">প্রক্সি URL চাইলে স্কিপ (Skip) করে যান।</span>
            </li>
        </ul>

        <div class="concept-box">
            <span class="concept-title">
                <i class="fas fa-lightbulb"></i> 
                <span class="lang-en">What is Composer?</span>
                <span class="lang-bn hidden">Composer কী?</span>
            </span>
            
            <p class="lang-en">
                <b>Dependency Manager for PHP.</b><br>
                Think of it like a construction manager. You don't make bricks or cement yourself; you buy them. Composer is the manager that automatically downloads all the tools (libraries) your project needs so you don't have to download them manually.
            </p>
            <p class="lang-bn hidden">
                <b>PHP-এর ডিপেন্ডেন্সি ম্যানেজার।</b><br>
                মনে করুন আপনি একটি বাড়ি বানাচ্ছেন। ইট বা সিমেন্ট আপনি নিজে তৈরি করেন না, কিনে আনেন। Composer হলো এমন এক ম্যানেজার, যে আপনার প্রজেক্টের জন্য প্রয়োজনীয় সব টুলস বা লাইব্রেরি ইন্টারনেট থেকে খুঁজে এনে স্বয়ংক্রিয়ভাবে সেটআপ করে দেয়।
            </p>

            <hr style="border: 0; border-top: 1px solid #ffe082; margin: 10px 0;">
            
            <strong class="lang-en">Key Features:</strong>
            <strong class="lang-bn hidden">প্রধান সুবিধাসমূহ:</strong>
            <ul style="margin-bottom: 0;">
                <li><span class="lang-en">Installs packages with a single command.</span><span class="lang-bn hidden">এক কমান্ডেই প্যাকেজ ইনস্টল করা যায়।</span></li>
                <li><span class="lang-en">Updates libraries easily.</span><span class="lang-bn hidden">লাইব্রেরি আপডেট করা সহজ।</span></li>
                <li><span class="lang-en">Works with any PHP framework.</span><span class="lang-bn hidden">যেকোনো পিএইচপি ফ্রেমওয়ার্কের সাথে কাজ করে।</span></li>
            </ul>
        </div>

        <p style="margin-top: 15px;">
            <span class="lang-en">Verify installation in CMD:</span>
            <span class="lang-bn hidden">CMD-তে ইনস্টলেশন যাচাই করুন:</span>
        </p>
        <div class="terminal">
            C:\Users\You> <span>composer</span>
        </div>
    </div>

    <div class="step-card">
        <div class="step-number">3</div>
        <h2 class="step-title">
            <span class="lang-en">Install Laravel</span>
            <span class="lang-bn hidden">লারাভেল ইনস্টল করুন</span>
        </h2>
        
        <p class="lang-en">Once Composer is installed, you can install the Laravel installer globally.</p>
        <p class="lang-bn hidden">Composer ইনস্টল হয়ে গেলে, নিচের কমান্ডটি দিয়ে লারাভেল ইনস্টলার সেটআপ করুন।</p>

        <div class="terminal">
            C:\Users\You> <span>composer global require laravel/installer</span>
        </div>
        
        <p class="lang-en">Or create a project directly:</p>
        <p class="lang-bn hidden">অথবা সরাসরি নতুন প্রজেক্ট তৈরি করুন:</p>
        <div class="terminal">
            C:\Users\You> <span>composer create-project laravel/laravel my-app</span>
        </div>
    </div>

    <div class="step-card" style="border-left-color: #0078d7;">
        <div class="step-number" style="background: #0078d7;">4</div>
        <h2 class="step-title">
            <span class="lang-en">Install VS Code</span>
            <span class="lang-bn hidden">VS Code ইনস্টল করুন</span>
        </h2>
        
        <p class="lang-en">The best code editor for modern web development.</p>
        <p class="lang-bn hidden">আধুনিক ওয়েব ডেভেলপমেন্টের জন্য সেরা কোড এডিটর।</p>
        
        <a href="https://code.visualstudio.com/" target="_blank" class="btn-download">
            <i class="fas fa-code"></i> Download VS Code
        </a>
    </div>

</div>

<script>
    function setLanguage(lang) {
        // Toggle Active Button
        const buttons = document.querySelectorAll('.lang-btn');
        buttons.forEach(btn => btn.classList.remove('active'));
        
        if(lang === 'en') buttons[0].classList.add('active');
        else buttons[1].classList.add('active');

        // Toggle Content
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
