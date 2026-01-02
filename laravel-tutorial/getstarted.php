<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Navigation | Modern Guide</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #FF2D20;
            --primary-light: #fff5f5;
            --dark: #1e1e24;
            --text-gray: #6b7280;
            --radius: 12px;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            padding: 50px;
            margin: 0;
        }

        /* --- Sidebar Container --- */
        .nav-card {
            background: white;
            width: 320px;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        /* --- Header & Switcher --- */
        .nav-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .nav-title {
            font-weight: 800;
            color: var(--dark);
            font-size: 1.1rem;
        }

        .lang-toggle {
            background: #eee;
            border: none;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
        }
        .lang-toggle:hover { background: #ddd; }

        /* --- Navigation List --- */
        ul.menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li.menu-item {
            margin-bottom: 8px;
        }

        /* Link Styling */
        a.nav-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            text-decoration: none;
            color: var(--text-gray);
            border-radius: var(--radius);
            transition: all 0.3s ease;
            font-weight: 500;
            border: 1px solid transparent;
        }

        /* Icon styling */
        .nav-icon {
            width: 30px;
            color: #9ca3af;
            font-size: 1.1rem;
            transition: 0.3s;
        }

        /* Hover & Active States */
        a.nav-link:hover {
            background-color: var(--primary-light);
            color: var(--primary);
            border-color: rgba(255, 45, 32, 0.1);
            transform: translateX(5px);
        }

        a.nav-link:hover .nav-icon {
            color: var(--primary);
        }

        /* Active Class (For current page) */
        a.nav-link.active {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 5px 15px rgba(255, 45, 32, 0.3);
        }
        a.nav-link.active .nav-icon { color: white; }

        /* Bangla Font support */
        .bn-font { font-family: 'Hind Siliguri', sans-serif; }
        
        /* Utility */
        .hidden { display: none; }
        
        /* Badge for QNA */
        .badge {
            margin-left: auto;
            background: #10b981;
            color: white;
            font-size: 0.7rem;
            padding: 2px 8px;
            border-radius: 10px;
        }

    </style>
</head>
<body>

<div class="nav-card">
    
    <div class="nav-header">
        <div class="nav-title">
            <i class="fab fa-laravel" style="color: var(--primary);"></i>
            <span class="lang-en">Course Menu</span>
            <span class="lang-bn hidden">কোর্স মেনু</span>
        </div>
        <button class="lang-toggle" onclick="toggleLang()">
            <span class="lang-text">EN / বাংলা</span>
        </button>
    </div>

    <ul class="menu-list">
        
        <li class="menu-item">
            <a href="index.php" class="nav-link">
                <i class="fas fa-book-open nav-icon"></i>
                <span class="lang-en">Why Laravel?</span>
                <span class="lang-bn hidden">কেন লারাভেল?</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="installation.php" class="nav-link active">
                <i class="fas fa-download nav-icon"></i>
                <span class="lang-en">Installation</span>
                <span class="lang-bn hidden">ইনস্টলেশন</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="structure.php" class="nav-link">
                <i class="fas fa-folder-tree nav-icon"></i>
                <span class="lang-en">Directory Structure</span>
                <span class="lang-bn hidden">ফোল্ডার স্ট্রাকচার</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="routing.php" class="nav-link">
                <i class="fas fa-route nav-icon"></i>
                <span class="lang-en">Routing Basics</span>
                <span class="lang-bn hidden">রাউটিং ধারণা</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="mvc.php" class="nav-link">
                <i class="fas fa-cubes nav-icon"></i>
                <span class="lang-en">MVC & Controllers</span>
                <span class="lang-bn hidden">MVC এবং কন্ট্রোলার</span>
            </a>
        </li>

        <li class="menu-item">
            <a href="database.php" class="nav-link">
                <i class="fas fa-database nav-icon"></i>
                <span class="lang-en">Database & Migrations</span>
                <span class="lang-bn hidden">ডাটাবেস ও মাইগ্রেশন</span>
            </a>
        </li>

        <li class="menu-item" style="border-top: 1px solid #eee; margin-top: 10px; padding-top: 10px;">
            <a href="qna.php" class="nav-link">
                <i class="fas fa-question-circle nav-icon"></i>
                <div>
                    <span class="lang-en">Q&A</span>
                    <span class="lang-bn hidden">প্রশ্নোত্তর</span>
                </div>
                <span class="badge">Hot</span>
            </a>
        </li>

    </ul>
</div>

<script>
    let currentLang = 'en';

    function toggleLang() {
        // Switch state
        currentLang = (currentLang === 'en') ? 'bn' : 'en';

        // Select elements
        const enElements = document.querySelectorAll('.lang-en');
        const bnElements = document.querySelectorAll('.lang-bn');
        const body = document.body;

        // Toggle visibility
        if (currentLang === 'en') {
            enElements.forEach(el => el.classList.remove('hidden'));
            bnElements.forEach(el => el.classList.add('hidden'));
            body.style.fontFamily = "'Inter', sans-serif";
        } else {
            enElements.forEach(el => el.classList.add('hidden'));
            bnElements.forEach(el => el.classList.remove('hidden'));
            body.style.fontFamily = "'Hind Siliguri', sans-serif";
        }
    }
</script>

</body>
</html>