<?php 
// 1. Get the current file name (e.g., 'index.php') to set active menu class
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Laravel Modern Guide'; ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Hind+Siliguri:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #FF2D20;
            --primary-hover: #e0261b;
            --dark: #111116;
            --dark-gray: #1e1e24;
            --text-gray: #9ca3af;
            --light: #ffffff;
            --border: #e5e7eb;
            --radius: 16px;
            --shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9fafb;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .bn-font { font-family: 'Hind Siliguri', sans-serif; }
        
        /* Utility */
        a { text-decoration: none; color: inherit; transition: 0.3s; }
        ul { list-style: none; padding: 0; margin: 0; }
        .hidden { display: none !important; }

        /* ================= HEADER ================= */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--border);
            padding: 15px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo */
        .brand {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .brand span { color: var(--dark); }

        /* Navigation */
        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-item {
            font-weight: 500;
            color: #4b5563;
            font-size: 0.95rem;
            position: relative;
        }

        /* Active State Styling */
        .nav-item:hover, .nav-item.active {
            color: var(--primary);
        }
        
        /* Optional: Add a small dot under active item */
        .nav-item.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
            border-radius: 2px;
        }

        /* Header Actions (Search + Lang) */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        /* Modern Switcher */
        .lang-switch {
            background: #f3f4f6;
            border-radius: 20px;
            padding: 3px;
            display: flex;
            border: 1px solid #e5e7eb;
        }
        .lang-opt {
            border: none;
            background: transparent;
            font-size: 0.8rem;
            padding: 5px 12px;
            border-radius: 15px;
            cursor: pointer;
            font-weight: 600;
            color: #6b7280;
            transition: 0.3s;
        }
        .lang-opt.active {
            background: white;
            color: var(--primary);
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        /* Responsive Mobile Menu Fix */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            /* You might want to add a hamburger menu icon here later */
        }
    </style>
</head>
<body>

    <header>
        <div class="container header-container">
            <a href="index.php" class="brand">
                <i class="fab fa-laravel"></i>
                <span>Laravel<span style="font-weight:400">Guide</span></span>
            </a>

            <nav class="nav-links">
                <a href="index.php" class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                    <span class="lang-en">Home</span>
                    <span class="lang-bn hidden">হোম</span>
                </a>
                <a href="installation.php" class="nav-item <?php echo ($current_page == 'installation.php') ? 'active' : ''; ?>">
                    <span class="lang-en">Installation</span>
                    <span class="lang-bn hidden">ইনস্টলেশন</span>
                </a>
                <a href="qna.php" class="nav-item <?php echo ($current_page == 'qna.php') ? 'active' : ''; ?>">
                    <span class="lang-en">Q&A</span>
                    <span class="lang-bn hidden">প্রশ্নোত্তর</span>
                </a>
            </nav>

            <div class="header-actions">
                <div class="lang-switch">
                    <button class="lang-opt active" id="btn-en" onclick="setLang('en')">EN</button>
                    <button class="lang-opt" id="btn-bn" onclick="setLang('bn')">BN</button>
                </div>
            </div>
        </div>
    </header>
    <div style="flex: 1;">