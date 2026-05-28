<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendell</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />
    <style>
        /* ── Page-load animations ── */
        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-16px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(32px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.96); }
            to   { opacity: 1; transform: scale(1); }
        }

        .anim-nav     { animation: fadeDown 0.5s cubic-bezier(.22,1,.36,1) both; }
        .anim-content { animation: fadeUp  0.7s cubic-bezier(.22,1,.36,1) both; animation-delay: 0.15s; }
        .anim-fade    { animation: fadeIn  0.9s cubic-bezier(.22,1,.36,1) both; animation-delay: 0.3s; }

        /* ── Scroll-reveal system ── */
        /* Default state: hidden & shifted down */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.6s cubic-bezier(.22,1,.36,1),
                        transform 0.6s cubic-bezier(.22,1,.36,1);
        }
        /* Variant: slide from left */
        .reveal-left {
            opacity: 0;
            transform: translateX(-32px);
            transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                        transform 0.65s cubic-bezier(.22,1,.36,1);
        }
        /* Variant: slide from right */
        .reveal-right {
            opacity: 0;
            transform: translateX(32px);
            transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                        transform 0.65s cubic-bezier(.22,1,.36,1);
        }
        /* Variant: subtle scale-up (for cards/pills) */
        .reveal-scale {
            opacity: 0;
            transform: translateY(20px) scale(0.97);
            transition: opacity 0.55s cubic-bezier(.22,1,.36,1),
                        transform 0.55s cubic-bezier(.22,1,.36,1);
        }

        /* Visible state — added by IntersectionObserver */
        .reveal.in-view,
        .reveal-left.in-view,
        .reveal-right.in-view,
        .reveal-scale.in-view {
            opacity: 1;
            transform: none;
        }

        /* Staggered delays for children */
        .stagger > *:nth-child(1)  { transition-delay: 0s; }
        .stagger > *:nth-child(2)  { transition-delay: 0.07s; }
        .stagger > *:nth-child(3)  { transition-delay: 0.14s; }
        .stagger > *:nth-child(4)  { transition-delay: 0.21s; }
        .stagger > *:nth-child(5)  { transition-delay: 0.28s; }
        .stagger > *:nth-child(6)  { transition-delay: 0.35s; }
        .stagger > *:nth-child(7)  { transition-delay: 0.42s; }
        .stagger > *:nth-child(8)  { transition-delay: 0.49s; }
        .stagger > *:nth-child(9)  { transition-delay: 0.56s; }
        .stagger > *:nth-child(10) { transition-delay: 0.63s; }

        /* Active nav link — cyan underline only */
        .nav-link.active {
            color: #06b6d4 !important;
            box-shadow: inset 0 -2px 0 0 #22d3ee;
        }

        /* Respect reduced-motion preference */
        @media (prefers-reduced-motion: reduce) {
            .reveal, .reveal-left, .reveal-right, .reveal-scale {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
            .anim-nav, .anim-content, .anim-fade {
                animation: none !important;
                opacity: 1 !important;
            }
        }
    </style>
</head>
<body class="bg-gray-50">

    @yield('section')

    <!-- Navigation Bar -->
    <nav class="anim-nav bg-white fixed w-full z-50 top-0 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="#hero" class="text-xl font-bold text-cyan-500 tracking-tight">Rendell</a>
                </div>

                <!-- Desktop Center — pill nav with Home -->
                <div class="hidden md:flex items-center bg-gray-100 rounded-full">
                    <a href="#hero" data-section="Home"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 rounded-l-full transition duration-200">
                        <i class="ti ti-home text-base"></i> Home
                    </a>
                    <a href="#about" data-section="About"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 transition duration-200">
                        <i class="ti ti-user text-base"></i> About
                    </a>
                    <a href="#skills" data-section="Skills"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 transition duration-200">
                        <i class="ti ti-code text-base"></i> Skills
                    </a>
                    <a href="#certifications" data-section="Certs"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 transition duration-200">
                        <i class="ti ti-certificate text-base"></i> Certs
                    </a>
                    <a href="#projects" data-section="Projects"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 transition duration-200">
                        <i class="ti ti-layout-grid text-base"></i> Projects
                    </a>
                    <a href="#contact" data-section="Contact"
                        class="nav-link flex items-center gap-1.5 px-5 py-2.5 text-sm font-semibold text-gray-700 hover:bg-gray-200 rounded-r-full transition duration-200">
                        <i class="ti ti-mail text-base"></i> Contact
                    </a>
                </div>

                <!-- Desktop Right — GitHub -->
                <div class="hidden md:flex items-center">
                    <a href="https://github.com/renxsaurrr" target="_blank" rel="noreferrer"
                        class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-sm font-medium text-gray-700 px-4 py-2 rounded-full transition duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <div class="flex md:hidden">
                    <button type="button" onclick="toggleMenu()"
                        class="inline-flex items-center justify-center p-2 rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-100 focus:outline-none transition duration-200">
                        <span class="sr-only">Open main menu</span>
                        <svg id="icon-open" class="block h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="icon-close" class="hidden h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>



        <!-- Mobile Menu -->
        <div class="md:hidden hidden bg-white border-t border-gray-100" id="mobile-menu">
            <div class="px-4 pt-3 pb-4 space-y-1">
                <a href="#hero" data-section="Home" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-home text-base"></i> Home
                </a>
                <a href="#about" data-section="About" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-user text-base"></i> About
                </a>
                <a href="#skills" data-section="Skills" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-code text-base"></i> Skills
                </a>
                <a href="#certifications" data-section="Certs" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-certificate text-base"></i> Certifications
                </a>
                <a href="#projects" data-section="Projects" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-layout-grid text-base"></i> Projects
                </a>
                <a href="#contact" data-section="Contact" class="nav-link flex items-center gap-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                    <i class="ti ti-mail text-base"></i> Contact
                </a>
                <div class="pt-2 border-t border-gray-100">
                    <a href="https://github.com/renxsaurrr" target="_blank" rel="noreferrer"
                        class="flex items-center gap-2 text-gray-700 hover:bg-gray-50 px-4 py-2 rounded-xl text-sm font-medium transition duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
        // Mobile menu toggle
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const iconOpen = document.getElementById('icon-open');
            const iconClose = document.getElementById('icon-close');
            menu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        }

        // Close mobile menu when a link is clicked
        document.querySelectorAll('#mobile-menu .nav-link').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('mobile-menu').classList.add('hidden');
                document.getElementById('icon-open').classList.remove('hidden');
                document.getElementById('icon-close').classList.add('hidden');
            });
        });

        // Scroll-spy: update active nav link + cyan progress line
        const sections = [
            { id: 'hero',           label: 'Home' },
            { id: 'about',          label: 'About' },
            { id: 'skills',         label: 'Skills' },
            { id: 'certifications', label: 'Certs' },
            { id: 'projects',       label: 'Projects' },
            { id: 'contact',        label: 'Contact' },
        ];

        function updateActiveSection() {
            const scrollY = window.scrollY + 80;
            let currentIndex = 0;

            for (let i = 0; i < sections.length; i++) {
                const el = document.getElementById(sections[i].id);
                if (el && el.offsetTop <= scrollY) {
                    currentIndex = i;
                }
            }

            const current = sections[currentIndex];

            // Update active nav link (desktop + mobile)
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.dataset.section === current.label) {
                    link.classList.add('active');
                }
            });
        }

        window.addEventListener('scroll', updateActiveSection, { passive: true });
        // Run once on load
        updateActiveSection();

        // ── Scroll-reveal IntersectionObserver ──
        // Adds 'in-view' when entering, removes when out — so it re-animates on scroll up too
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                } else {
                    entry.target.classList.remove('in-view');
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale').forEach(el => {
            revealObserver.observe(el);
        });
    </script>

</body>
</html>