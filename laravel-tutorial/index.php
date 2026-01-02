<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Laravel? | Modern Guide</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #FF2D20; /* Laravel Red */
            --dark: #1e1e24;
            --light: #f8f9fa;
            --glass: rgba(255, 255, 255, 0.8);
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

        /* Bangla Font Class */
        .bn-font {
            font-family: 'Hind Siliguri', sans-serif;
        }

        /* Container */
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        /* --- Modern Navbar & Switcher --- */
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

        /* Aesthetic Switcher */
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
            z-index: 2;
        }

        .lang-btn.active {
            color: var(--primary);
            background: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* --- Sections & Cards --- */
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

        /* List Styling */
        ul {
            list-style: none;
            padding: 0;
        }
        
        ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        ul li:last-child { border-bottom: none; }
        
        ul li i { color: var(--primary); }

        /* Code Block Styling */
        .code-block {
            background: #2d2d2d;
            color: #ccc;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            font-size: 0.85rem;
            margin-top: 10px;
        }
        .code-title {
            font-size: 0.8rem;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            display: block;
        }
        .code-bad { border-left: 4px solid #ff4444; }
        .code-good { border-left: 4px solid #00C851; }

        /* MVC Diagram representation */
        .mvc-diagram {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-top: 20px;
        }
        .mvc-box {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            border: 1px solid #ddd;
            width: 30%;
        }
        .mvc-box strong { display: block; color: var(--primary); margin-bottom: 5px; }

        /* Hide elements based on language */
        .lang-en, .lang-bn { display: block; }
        .hidden { display: none !important; }

    </style>
</head>
<body>

<div class="container">
    
    <nav>
        <div class="logo">
            <i class="fab fa-laravel fa-2x"></i>
            <span>Laravel Guide</span>
        </div>
        <div class="lang-switch-container">
            <button class="lang-btn active" onclick="setLanguage('en')">English</button>
            <button class="lang-btn" onclick="setLanguage('bn')">বাংলা</button>
        </div>
    </nav>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Why Laravel?</span>
            <span class="lang-bn hidden">কেন লারাভেল ব্যবহার করবেন?</span>
        </h2>
        
        <div class="grid-2">
            <div>
                <h3 class="lang-en">Definition</h3>
                <h3 class="lang-bn hidden">সংজ্ঞা</h3>
                <ul>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <span class="lang-en">Laravel is a free, open-source PHP framework.</span>
                        <span class="lang-bn hidden">লারাভেল একটি সম্পূর্ণ ফ্রি এবং ওপেন সোর্স পিএইচপি ফ্রেমওয়ার্ক।</span>
                    </li>
                    <li>
                        <i class="fas fa-project-diagram"></i>
                        <span class="lang-en">It follows the MVC (Model-View-Controller) architecture strictly.</span>
                        <span class="lang-bn hidden">এটি কঠোরভাবে MVC (মডেল-ভিউ-কন্ট্রোলার) আর্কিটেকচার অনুসরণ করে।</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="lang-en">Major Uses</h3>
                <h3 class="lang-bn hidden">প্রধান ব্যবহারসমূহ</h3>
                <ul>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span class="lang-en">Build any type of Web Application (E-commerce, CMS, Social Media).</span>
                        <span class="lang-bn hidden">যেকোনো ধরণের ওয়েব অ্যাপ্লিকেশন তৈরি করা যায় (ই-কমার্স, সিএমএস)।</span>
                    </li>
                    <li>
                        <i class="fas fa-plug"></i>
                        <span class="lang-en">Create Robust APIs (e.g., Backend for React/Vue or Mobile Apps).</span>
                        <span class="lang-bn hidden">শক্তিশালী API তৈরি করা (রিয়্যাক্ট বা মোবাইল অ্যাপের ব্যাকএন্ড হিসেবে)।</span>
                    </li>
                    <li>
                        <i class="fas fa-layer-group"></i>
                        <span class="lang-en">Full Stack Development (Laravel + React/Vue).</span>
                        <span class="lang-bn hidden">ফুল স্ট্যাক ডেভেলপমেন্ট (লারাভেল + রিয়্যাক্ট/ভিউ)।</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Core PHP vs. MVC Architecture</span>
            <span class="lang-bn hidden">কোর পিএইচপি বনাম MVC আর্কিটেকচার</span>
        </h2>

        <div class="grid-2">
            <div>
                <h3 style="color: #d9534f;">
                    <i class="fas fa-times-circle"></i> 
                    <span class="lang-en">The Core PHP Way (Messy)</span>
                    <span class="lang-bn hidden">সাধারণ পিএইচপি পদ্ধতি (অগোছালো)</span>
                </h3>
                <p class="lang-en">In a single file (`index.php`), 3 things happen at once:</p>
                <p class="lang-bn hidden">একটি মাত্র ফাইলে (`index.php`) ৩টি কাজ একসাথে হয়:</p>
                <ul>
                    <li><span class="lang-en">1. Database Connection & Query</span><span class="lang-bn hidden">১. ডাটাবেস কানেকশন ও কুয়েরি</span></li>
                    <li><span class="lang-en">2. HTML / Design</span><span class="lang-bn hidden">২. এইচটিএমএল / ডিজাইন</span></li>
                    <li><span class="lang-en">3. Business Logic (Calculations)</span><span class="lang-bn hidden">৩. লজিক বা হিসাব-নিকাশ</span></li>
                </ul>
                <div class="code-block code-bad">
                    <span class="code-title">Legacy Code (Spaghetti)</span>
                    &lt;?php<br>
                    $conn = mysqli_connect(...);<br>
                    $sql = "SELECT * FROM users"; // Logic<br>
                    ?&gt;<br>
                    &lt;h1&gt;User List&lt;/h1&gt; &lt;!-- HTML --&gt;
                </div>
            </div>

            <div>
                <h3 style="color: #00C851;">
                    <i class="fas fa-check-circle"></i> 
                    <span class="lang-en">The MVC Way (Organized)</span>
                    <span class="lang-bn hidden">MVC পদ্ধতি (সুশৃঙ্খল)</span>
                </h3>
                <p class="lang-en">Separation of Concerns (Code Organization):</p>
                <p class="lang-bn hidden">কাজের পৃথকীকরণ (কোড অর্গানাইজেশন):</p>
                
                <div class="mvc-diagram">
                    <div class="mvc-box">
                        <strong>M</strong>
                        <span class="lang-en">Model</span><span class="lang-bn hidden">মডেল</span>
                        <small>Database</small>
                    </div>
                    <div class="mvc-box">
                        <strong>V</strong>
                        <span class="lang-en">View</span><span class="lang-bn hidden">ভিউ</span>
                        <small>HTML/UI</small>
                    </div>
                    <div class="mvc-box">
                        <strong>C</strong>
                        <span class="lang-en">Controller</span><span class="lang-bn hidden">কন্ট্রোলার</span>
                        <small>Logic</small>
                    </div>
                </div>

                <div class="code-block code-good">
                    <span class="code-title">Laravel Code</span>
                    // Controller calls Model<br>
                    $users = User::all();<br><br>
                    // Returns specific View<br>
                    return view('user-list', compact('users'));
                </div>
            </div>
        </div>

        <div style="margin-top: 20px; border-top: 1px solid #eee; padding-top:15px;">
            <strong class="lang-en">Benefits of MVC:</strong>
            <span class="lang-en">Easy maintenance, Code Reusability, Independent blocks (Frontend dev can work on View while Backend dev works on Controller).</span>
            
            <strong class="lang-bn hidden">MVC-এর সুবিধাসমূহ:</strong>
            <span class="lang-bn hidden">সহজ রক্ষণাবেক্ষণ, কোড পুনরায় ব্যবহারযোগ্যতা, স্বাধীনভাবে কাজ করা (ফ্রন্টএন্ড ডেভেলপার ভিউ নিয়ে এবং ব্যাকএন্ড ডেভেলপার কন্ট্রোলার নিয়ে কাজ করতে পারে)।</span>
        </div>
    </section>

    <section class="card">
        <h2 class="section-title">
            <span class="lang-en">Why Use a Framework?</span>
            <span class="lang-bn hidden">কেন ফ্রেমওয়ার্ক ব্যবহার করবেন?</span>
        </h2>
        <p class="lang-en">A framework is a collection of pre-written code, libraries, and tools. Instead of writing raw code from scratch, you use established components.</p>
        <p class="lang-bn hidden">ফ্রেমওয়ার্ক হলো আগে থেকে লেখা কোড, লাইব্রেরি এবং টুলের সমষ্টি। শূন্য থেকে সব কোড লেখার বদলে আপনি তৈরি করা কম্পোনেন্ট ব্যবহার করেন।</p>

        <div class="grid-2" style="margin-top: 20px;">
            <div>
                <h4>
                    <span class="lang-en">Included Features</span>
                    <span class="lang-bn hidden">অন্তর্ভুক্ত সুবিধাসমূহ</span>
                </h4>
                <ul>
                    <li><i class="fas fa-lock"></i> Security Mechanism</li>
                    <li><i class="fas fa-database"></i> Pagination & Caching</li>
                    <li><i class="fas fa-user-shield"></i> User Authentication</li>
                    <li><i class="fas fa-credit-card"></i> Payment Gateway Integration Support</li>
                </ul>
            </div>
            <div>
                <h4>
                    <span class="lang-en">Top Laravel Benefits</span>
                    <span class="lang-bn hidden">লারাভেলের সেরা সুবিধাসমূহ</span>
                </h4>
                <ul>
                    <li>
                        <strong>Elegant Syntax:</strong> 
                        <span class="lang-en">Code reads like English.</span>
                        <span class="lang-bn hidden">কোড পড়া ইংরেজির মতোই সহজ।</span>
                    </li>
                    <li>
                        <strong>ORM (Eloquent):</strong> 
                        <span class="lang-en">Interact with database without writing complex SQL.</span>
                        <span class="lang-bn hidden">জটিল SQL না লিখেও ডাটাবেস এর সাথে কাজ করা যায়।</span>
                    </li>
                    <li>
                        <strong>Blade Engine:</strong> 
                        <span class="lang-en">Powerful template engine for Views.</span>
                        <span class="lang-bn hidden">ভিউ এর জন্য শক্তিশালী টেমপ্লেট ইঞ্জিন।</span>
                    </li>
                    <li>
                        <strong>Security:</strong> 
                        <span class="lang-en">Built-in protection against XSS, CSRF, SQL Injection.</span>
                        <span class="lang-bn hidden">XSS, CSRF, এবং SQL Injection থেকে বিল্ট-ইন সুরক্ষা।</span>
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
        
        // Find the button that was clicked (based on text logic or simple indexing)
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