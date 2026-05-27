@extends('layouts.app')

@section('section')

<!-- Hero Section -->
<section id="hero" class="bg-slate-950 flex items-center pt-16" style="min-height: 100vh;">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="flex flex-col-reverse md:flex-row items-center justify-between gap-12">

            <!-- Left: Text Content -->
            <div class="flex-1 anim-content">
                <h1 class="text-5xl md:text-7xl font-black text-white uppercase leading-tight tracking-tight mb-2">
                    Hi, I'm <span class="text-cyan-400">Rendell!</span>
                </h1>
                <h2 class="text-4xl md:text-6xl font-black uppercase leading-tight mb-6">
                    <span class="text-white">IT </span><span class="text-cyan-400 italic">Student</span>
                </h2>
                <p class="text-slate-400 text-base md:text-lg leading-relaxed max-w-lg mb-10">
                    A passionate IT student and freelance web developer based in Davao,
                    with a growing interest in cybersecurity. I build clean, functional
                    web experiences and love tackling new challenges.
                </p>

                <!-- CTAs -->
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#certifications"
                        class="flex items-center gap-2 bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-bold text-sm px-6 py-3 transition duration-200">
                        View Certifications
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </a>
                    <a href="#projects"
                        class="flex items-center gap-3 text-white hover:text-cyan-400 font-medium text-sm transition duration-200">
                        <span class="w-10 h-10 rounded-full border border-slate-600 flex items-center justify-center hover:border-cyan-400 transition duration-200">
                            <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </span>
                        View Projects
                    </a>
                </div>
            </div>

            <!-- Right: Hexagon Image -->
            <div class="flex-1 flex justify-center items-center anim-fade">
                <div class="relative w-72 h-72 md:w-96 md:h-96">
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polygon points="100,4 190,52 190,148 100,196 10,148 10,52" stroke="#22d3ee" stroke-width="2" fill="none" stroke-dasharray="8 4"/>
                    </svg>
                    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="10,80 10,52 35,38" stroke="#22d3ee" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <polyline points="190,80 190,52 165,38" stroke="#22d3ee" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <polyline points="10,120 10,148 35,162" stroke="#22d3ee" stroke-width="3" fill="none" stroke-linecap="round"/>
                        <polyline points="190,120 190,148 165,162" stroke="#22d3ee" stroke-width="3" fill="none" stroke-linecap="round"/>
                    </svg>
                    <div class="absolute inset-4" style="clip-path: polygon(50% 0%, 95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%); background: #164e63;">
                        <img src="{{ asset('images/profile.png') }}" alt="Rendell" class="w-full h-full object-cover" onerror="this.style.display='none'"/>
                        <div class="w-full h-full flex items-center justify-center text-5xl font-black text-cyan-400">R</div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="bg-white pt-16 pb-24 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-12">
            <div class="w-8 h-0.5 bg-cyan-400"></div>
            <span class="text-cyan-500 font-mono text-xs tracking-widest uppercase">About Me</span>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <!-- Left: Text -->
            <div>
                <h2 class="text-4xl font-black text-slate-900 uppercase leading-tight mb-6">
                    Who I <span class="text-cyan-400">Am</span>
                </h2>
                <div class="space-y-4 text-slate-600 leading-relaxed">
                    <p>
                        I'm Rendell Jhon Alfanta IT student from Davao City currently in my 2nd year, 
                        passionate about web development and cybersecurity. I work as a freelance web 
                        developer, building real-world applications for clients while continuously 
                        sharpening my technical skills.
                    </p>
                    <p>
                        I've participated in hackathons including a blockchain project using Ganache,
                        and joined a zero-day cybersecurity event — experiences that sparked my deeper
                        interest in information security.
                    </p>
                    <p>
                        My goal is to bridge web development and cybersecurity, writing code that
                        doesn't just work — but works <span class="text-cyan-500 font-semibold">securely</span>.
                    </p>
                </div>
            </div>

            <!-- Right: Info Cards -->
            <div class="grid grid-cols-2 gap-4">

                <div class="bg-slate-50 rounded-2xl p-6 flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422A12.083 12.083 0 0121 20.055a12 12 0 01-18 0 12.083 12.083 0 012.84-9.477L12 14z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider">Education</p>
                    <p class="text-slate-800 font-bold text-sm">IT Student</p>
                    <p class="text-slate-500 text-xs">University of Mindanao</p>
                </div>

                <div class="bg-slate-50 rounded-2xl p-6 flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider">Location</p>
                    <p class="text-slate-800 font-bold text-sm">Davao City</p>
                    <p class="text-slate-500 text-xs">Philippines</p>
                </div>

                <div class="bg-slate-50 rounded-2xl p-6 flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-cyan-50 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-wider">Role</p>
                    <p class="text-slate-800 font-bold text-sm">Freelance Dev</p>
                    <p class="text-slate-500 text-xs">Web Development</p>
                </div>

                <div class="bg-cyan-400 rounded-2xl p-6 flex flex-col gap-2">
                    <div class="w-10 h-10 rounded-xl bg-cyan-300 flex items-center justify-center mb-2">
                        <svg class="w-5 h-5 text-slate-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <p class="text-xs text-slate-700 font-medium uppercase tracking-wider">Aspiring</p>
                    <p class="text-slate-900 font-bold text-sm">Cybersecurity</p>
                    <p class="text-slate-700 text-xs">Professional</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="bg-slate-950 py-24 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-12">
            <div class="w-8 h-0.5 bg-cyan-400"></div>
            <span class="text-cyan-500 font-mono text-xs tracking-widest uppercase">What I Work With</span>
        </div>

        <h2 class="text-4xl font-black text-white uppercase leading-tight mb-16">
            My <span class="text-cyan-400">Skills</span>
        </h2>

        <!-- Languages -->
        <div class="mb-14">
            <p class="text-xs text-slate-500 font-mono uppercase tracking-widest mb-6">Languages</p>
            <div class="flex flex-wrap gap-4">

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-7 h-7" alt="PHP"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">PHP</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" class="w-7 h-7" alt="JavaScript"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">JavaScript</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" class="w-7 h-7" alt="Python"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Python</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg" class="w-7 h-7" alt="Java"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Java</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-7 h-7" alt="HTML5"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">HTML5</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" class="w-7 h-7" alt="CSS3"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">CSS3</span>
                </div>

            </div>
        </div>

        <!-- Frameworks & Libraries -->
        <div class="mb-14">
            <p class="text-xs text-slate-500 font-mono uppercase tracking-widest mb-6">Frameworks & Libraries</p>
            <div class="flex flex-wrap gap-4">

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" class="w-7 h-7" alt="Laravel"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Laravel</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" class="w-7 h-7" alt="Vue 3"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Vue 3</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" class="w-7 h-7" alt="Tailwind CSS"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Tailwind CSS</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" class="w-7 h-7" alt="Bootstrap"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Bootstrap</span>
                </div>

            </div>
        </div>

        <!-- Tools & Platforms -->
        <div class="mb-14">
            <p class="text-xs text-slate-500 font-mono uppercase tracking-widest mb-6">Tools & Platforms</p>
            <div class="flex flex-wrap gap-4">

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" class="w-7 h-7" alt="MySQL"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">MySQL</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="w-7 h-7" alt="Git"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Git</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" class="w-7 h-7 invert" alt="GitHub"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">GitHub</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg" class="w-7 h-7" alt="Figma"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">Figma</span>
                </div>

                <div class="flex items-center gap-3 bg-slate-900 border border-slate-800 hover:border-cyan-400/40 px-5 py-3 rounded-xl transition duration-200 group">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original.svg" class="w-7 h-7" alt="VS Code"/>
                    <span class="text-slate-300 group-hover:text-white text-sm font-semibold transition duration-200">VS Code</span>
                </div>

            </div>
        </div>

        <!-- Concepts & Interests -->
        <div>
            <p class="text-xs text-slate-500 font-mono uppercase tracking-widest mb-6">Concepts & Interests</p>
            <div class="flex flex-wrap gap-2">
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Full-Stack Web Development</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">UI/UX Design</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Human-Computer Interaction</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">REST APIs</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Database Design</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Cybersecurity</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">CTF Competitions</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Penetration Testing</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Blockchain</span>
                <span class="bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium px-4 py-2 rounded-full">Freelancing</span>
            </div>
        </div>

    </div>
</section>

<!-- Certifications Section -->
<section id="certifications" class="bg-white py-24 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-12">
            <div class="w-8 h-0.5 bg-cyan-400"></div>
            <span class="text-cyan-500 font-mono text-xs tracking-widest uppercase">Credentials</span>
        </div>

        <h2 class="text-4xl font-black text-slate-900 uppercase leading-tight mb-16">
            My <span class="text-cyan-400">Certifications</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Cert 1: Java -->
            <div class="group bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:border-cyan-400/50 hover:shadow-lg transition duration-300">
                <div class="relative w-full aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img
                        src="{{ asset('images/cert-java.png') }}"
                        alt="ITS Java Certificate"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center flex-col gap-3 bg-slate-100">
                        <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-slate-400 text-xs font-medium">cert-java.png</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">ITS</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Certiport</span>
                    </div>
                    <h3 class="text-slate-900 font-black text-lg mb-1">Java Programming</h3>
                    <p class="text-slate-500 text-sm">Fundamentals of Java development and object-oriented programming.</p>
                </div>
            </div>

            <!-- Cert 2: HTML & CSS -->
            <div class="group bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:border-cyan-400/50 hover:shadow-lg transition duration-300">
                <div class="relative w-full aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img
                        src="{{ asset('images/cert-html&css.png') }}"
                        alt="ITS HTML & CSS Certificate"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center flex-col gap-3 bg-slate-100">
                        <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-slate-400 text-xs font-medium">cert-html&css.png</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">ITS</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Certiport</span>
                    </div>
                    <h3 class="text-slate-900 font-black text-lg mb-1">HTML & CSS</h3>
                    <p class="text-slate-500 text-sm">Web standards, semantic markup, and modern CSS styling techniques.</p>
                </div>
            </div>

            <!-- Cert 3: Databases -->
            <div class="group bg-slate-50 rounded-2xl overflow-hidden border border-slate-100 hover:border-cyan-400/50 hover:shadow-lg transition duration-300">
                <div class="relative w-full aspect-[4/3] bg-slate-100 overflow-hidden">
                    <img
                        src="{{ asset('images/cert-databases.png') }}"
                        alt="ITS Databases Certificate"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center flex-col gap-3 bg-slate-100">
                        <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="text-slate-400 text-xs font-medium">cert-databases.png</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider bg-blue-50 px-2 py-0.5 rounded">ITS</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Certiport</span>
                    </div>
                    <h3 class="text-slate-900 font-black text-lg mb-1">Databases</h3>
                    <p class="text-slate-500 text-sm">Relational database concepts, SQL querying, and data management.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="bg-slate-950 py-24 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-12">
            <div class="w-8 h-0.5 bg-cyan-400"></div>
            <span class="text-cyan-500 font-mono text-xs tracking-widest uppercase">What I've Built</span>
        </div>

        <h2 class="text-4xl font-black text-white uppercase leading-tight mb-16">
            My <span class="text-cyan-400">Projects</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">

            <!-- Project 1: CounselConnect -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-400/50 transition duration-300 flex flex-col">
                <div class="relative w-full aspect-video bg-slate-800 overflow-hidden">
                    <img
                        src="{{ asset('images/counselconnect.png') }}"
                        alt="CounselConnect Preview"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center bg-slate-800">
                        <span class="text-5xl font-black text-slate-700 select-none">CC</span>
                    </div>
                    <div class="absolute top-3 right-3 flex items-center gap-1.5 bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 text-xs font-bold px-3 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        Live
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-white font-black text-xl mb-2">CounselConnect</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-1">
                        A multi-role school counseling management system built for IT9. Features student, counselor, and admin dashboards, appointment scheduling, session records, Google OAuth, and Gmail SMTP — deployed on Render.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Laravel</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Blade</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">MySQL</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Docker</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="https://counselconnect-k2to.onrender.com" target="_blank" rel="noreferrer"
                            class="flex items-center gap-2 bg-cyan-400 hover:bg-cyan-300 text-slate-950 text-xs font-bold px-4 py-2 rounded-lg transition duration-200">
                            <i class="ti ti-external-link text-sm"></i> View Live
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: Swapy -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-400/50 transition duration-300 flex flex-col">
                <div class="relative w-full aspect-video bg-slate-800 overflow-hidden">
                    <img
                        src="{{ asset('images/swapy.jpg') }}"
                        alt="Swapy Preview"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center bg-slate-800">
                        <span class="text-5xl font-black text-slate-700 select-none">SW</span>
                    </div>
                    <div class="absolute top-3 right-3 flex items-center gap-1.5 bg-amber-500/20 border border-amber-500/40 text-amber-400 text-xs font-bold px-3 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                        In Progress
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-white font-black text-xl mb-2">Swapy</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-1">
                        A U.S.-founded startup platform for item swapping. As the lead developers,
                        we are building the full product under an American founder — featuring smart matchmaking,
                        3-way swapping, Google Maps integration, distance filtering, and a premium subscription tier.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Laravel</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Vue 3</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Tailwind CSS</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">MySQL</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center gap-2 text-amber-400/70 text-xs font-medium">
                            <i class="ti ti-clock text-sm"></i> Launching soon
                        </span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Payroll System -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-400/50 transition duration-300 flex flex-col">
                <div class="relative w-full aspect-video bg-slate-800 overflow-hidden">
                    <img
                        src="{{ asset('images/payroll.png') }}"
                        alt="Payroll System Preview"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center bg-slate-800">
                        <span class="text-5xl font-black text-slate-700 select-none">PS</span>
                    </div>
                    <div class="absolute top-3 right-3 flex items-center gap-1.5 bg-amber-500/20 border border-amber-500/40 text-amber-400 text-xs font-bold px-3 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                        In Progress
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-white font-black text-xl mb-2">Payroll System</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-1">
                        A freelance desktop payroll management system built for a client agency.
                        Handles biometric attendance data import, automated salary computation,
                        and payroll reporting — packaged as a standalone desktop app.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Electron</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Python Flask</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">SQLite</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center gap-2 text-amber-400/70 text-xs font-medium">
                            <i class="ti ti-lock text-sm"></i> Private client project
                        </span>
                    </div>
                </div>
            </div>

            <!-- Project 4: Anytime Fitness -->
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-slate-800 hover:border-cyan-400/50 transition duration-300 flex flex-col">
                <div class="relative w-full aspect-video bg-slate-800 overflow-hidden">
                    <img
                        src="{{ asset('images/anytimefitness.jpg') }}"
                        alt="Anytime Fitness System Preview"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    />
                    <div class="absolute inset-0 hidden items-center justify-center bg-slate-800">
                        <span class="text-5xl font-black text-slate-700 select-none">AF</span>
                    </div>
                    <div class="absolute top-3 right-3 flex items-center gap-1.5 bg-violet-500/20 border border-violet-500/40 text-violet-400 text-xs font-bold px-3 py-1 rounded-full">
                        <span class="w-1.5 h-1.5 rounded-full bg-violet-400"></span>
                        Completed
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-1">
                    <h3 class="text-white font-black text-xl mb-2">Anytime Fitness PH</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-4 flex-1">
                        A web-based branch management system built for IT6 (Database Systems). Implements a centralized database architecture for managing members, branches, and records across multiple Anytime Fitness PH locations.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-5">
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Laravel</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Blade</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">MySQL</span>
                        <span class="text-xs bg-slate-800 text-slate-400 px-3 py-1 rounded-full">Tailwind CSS</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center gap-2 text-violet-400/70 text-xs font-medium">
                            <i class="ti ti-school text-sm"></i> IT6 Academic Project
                        </span>
                    </div>
                </div>
            </div>

        </div>

        <!-- GitHub CTA -->
        <div class="flex flex-col items-center text-center gap-4 pt-8 border-t border-slate-800">
            <p class="text-slate-400 text-sm">Want to see more of my work?</p>
            <a href="https://github.com/renxsaurrr" target="_blank" rel="noreferrer"
                class="flex items-center gap-3 bg-slate-900 hover:bg-slate-800 border border-slate-700 hover:border-cyan-400/50 text-white font-semibold text-sm px-6 py-3 rounded-xl transition duration-200">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/></svg>
                View more projects on GitHub
                <i class="ti ti-arrow-right text-sm text-cyan-400"></i>
            </a>
        </div>

    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-white py-24 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex items-center gap-3 mb-12">
            <div class="w-8 h-0.5 bg-cyan-400"></div>
            <span class="text-cyan-500 font-mono text-xs tracking-widest uppercase">Get In Touch</span>
        </div>

        <div class="grid md:grid-cols-2 gap-16 items-start">

            <!-- Left: Text -->
            <div>
                <h2 class="text-4xl font-black text-slate-900 uppercase leading-tight mb-6">
                    Let's <span class="text-cyan-400">Connect</span>
                </h2>
                <p class="text-slate-500 text-base leading-relaxed mb-10">
                    Whether you have a project in mind, a freelance opportunity, or just want to talk
                    tech — feel free to reach out. I'm always open to new challenges.
                </p>

                <!-- Contact Info -->
                <div class="space-y-5">
                    <a href="mailto:rendellalfanta@gmail.com"
                        class="flex items-center gap-4 group">
                        <div class="w-11 h-11 rounded-xl bg-cyan-50 flex items-center justify-center shrink-0 group-hover:bg-cyan-100 transition duration-200">
                            <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-0.5">Email</p>
                            <p class="text-slate-700 font-semibold text-sm group-hover:text-cyan-500 transition duration-200">rendellalfanta@gmail.com</p>
                        </div>
                    </a>

                    <a href="https://github.com/renxsaurrr" target="_blank" rel="noreferrer"
                        class="flex items-center gap-4 group">
                        <div class="w-11 h-11 rounded-xl bg-slate-100 flex items-center justify-center shrink-0 group-hover:bg-slate-200 transition duration-200">
                            <svg class="w-5 h-5 text-slate-700" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0C5.374 0 0 5.373 0 12c0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23A11.509 11.509 0 0112 5.803c1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576C20.566 21.797 24 17.3 24 12c0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-0.5">GitHub</p>
                            <p class="text-slate-700 font-semibold text-sm group-hover:text-cyan-500 transition duration-200">github.com/renxsaurrr</p>
                        </div>
                    </a>

                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-xl bg-cyan-50 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-cyan-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-slate-400 font-medium uppercase tracking-wider mb-0.5">Location</p>
                            <p class="text-slate-700 font-semibold text-sm">Davao City, Philippines</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                    @csrf
                    @if(session('success'))
                    <div class="bg-cyan-400/10 border border-cyan-400/30 text-cyan-500 text-sm px-4 py-3 rounded-xl">
                    {{ session('success') }}
                    </div>
                    @endif
                    <div>
                        <label class="block text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Name</label>
                        <input type="text" name="name" placeholder="Your name"
                            class="w-full bg-white border border-slate-200 text-slate-800 text-sm px-4 py-3 rounded-xl focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition duration-200 placeholder-slate-400"/>
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Email</label>
                        <input type="email" name="email" placeholder="your@email.com"
                            class="w-full bg-white border border-slate-200 text-slate-800 text-sm px-4 py-3 rounded-xl focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition duration-200 placeholder-slate-400"/>
                    </div>
                    <div>
                        <label class="block text-xs text-slate-500 font-medium uppercase tracking-wider mb-2">Message</label>
                        <textarea name="message" rows="5" placeholder="Tell me about your project or just say hi..."
                            class="w-full bg-white border border-slate-200 text-slate-800 text-sm px-4 py-3 rounded-xl focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition duration-200 placeholder-slate-400 resize-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-cyan-400 hover:bg-cyan-300 text-slate-950 font-bold text-sm px-6 py-3 rounded-xl transition duration-200 flex items-center justify-center gap-2">
                        Send Message
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection