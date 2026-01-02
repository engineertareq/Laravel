</div> <style>
        /* Footer Specific CSS */
        footer {
            background: var(--dark);
            color: var(--light);
            padding-top: 60px;
            border-top: 5px solid var(--primary);
            margin-top: auto; /* Pushes footer to bottom */
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            padding-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 1.1rem;
            margin-bottom: 20px;
            font-weight: 700;
            color: white;
        }

        .footer-desc {
            color: var(--text-gray);
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }

        .footer-links li { margin-bottom: 12px; }
        .footer-links a {
            color: var(--text-gray);
            font-size: 0.9rem;
        }
        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .newsletter-box {
            display: flex;
            background: var(--dark-gray);
            border-radius: 8px;
            padding: 5px;
            margin-top: 15px;
        }
        .newsletter-box input {
            background: transparent;
            border: none;
            color: white;
            padding: 10px;
            width: 100%;
            outline: none;
        }
        .newsletter-box button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0 15px;
            border-radius: 6px;
            cursor: pointer;
        }

        .footer-bottom {
            background: var(--dark-gray);
            padding: 20px 0;
            text-align: center;
            color: var(--text-gray);
            font-size: 0.85rem;
            border-top: 1px solid #333;
        }

        @media (max-width: 768px) {
            .footer-grid { grid-template-columns: 1fr; gap: 30px; }
        }
    </style>

    <footer>
        <div class="container footer-grid">
            <div class="footer-col">
                <div class="brand" style="margin-bottom: 15px;">
                    <i class="fab fa-laravel"></i>
                    <span style="color:white;">LaravelGuide</span>
                </div>
                <p class="footer-desc">
                    <span class="lang-en">Master Laravel with our comprehensive documentation.</span>
                    <span class="lang-bn hidden">আমাদের বিস্তারিত গাইড দিয়ে লারাভেল শিখুন।</span>
                </p>
                <div style="display: flex; gap: 15px;">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>
                    <span class="lang-en">Explore</span>
                    <span class="lang-bn hidden">অনুসন্ধান</span>
                </h3>
                <ul class="footer-links">
                    <li><a href="installation.php"><span class="lang-en">Installation</span><span class="lang-bn hidden">ইনস্টলেশন</span></a></li>
                    <li><a href="#"><span class="lang-en">Database</span><span class="lang-bn hidden">ডাটাবেস</span></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>
                    <span class="lang-en">Support</span>
                    <span class="lang-bn hidden">সহায়তা</span>
                </h3>
                <ul class="footer-links">
                    <li><a href="qna.php"><span class="lang-en">Q&A</span><span class="lang-bn hidden">প্রশ্নোত্তর</span></a></li>
                    <li><a href="#"><span class="lang-en">Contact</span><span class="lang-bn hidden">যোগাযোগ</span></a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>
                    <span class="lang-en">Newsletter</span>
                    <span class="lang-bn hidden">নিউজলেটার</span>
                </h3>
                <div class="newsletter-box">
                    <input type="email" placeholder="Email...">
                    <button><i class="fas fa-paper-plane"></i></button>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <span class="lang-en">&copy; <?php echo date('Y'); ?> Laravel Guide.</span>
            <span class="lang-bn hidden">&copy; <?php echo date('Y'); ?> লারাভেল গাইড।</span>
        </div>
    </footer>
    <script>
        // Check for saved language in LocalStorage on load
        document.addEventListener("DOMContentLoaded", function() {
            const savedLang = localStorage.getItem('siteLang') || 'en';
            setLang(savedLang);
        });

        function setLang(lang) {
            // 1. Save Preference
            localStorage.setItem('siteLang', lang);

            // 2. Update Header Buttons (with safety check)
            const btnEn = document.getElementById('btn-en');
            const btnBn = document.getElementById('btn-bn');
            
            if(btnEn && btnBn) {
                btnEn.classList.remove('active');
                btnBn.classList.remove('active');
                if(lang === 'en') btnEn.classList.add('active');
                else btnBn.classList.add('active');
            }

            // 3. Toggle Text Content
            const enElements = document.querySelectorAll('.lang-en');
            const bnElements = document.querySelectorAll('.lang-bn');
            const body = document.body;

            if (lang === 'en') {
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