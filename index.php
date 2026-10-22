<?php
// Portfolio PHP sederhana — ubah informasi pribadi di bagian $profile dan $projects.
$profile = [
    'name' => 'Nama Kamu',
    'role' => 'IT Enthusiast · Web Developer',
    'location' => 'Indonesia',
    'email' => 'emailkamu@example.com',
    'availability' => 'Terbuka untuk peluang kerja',
    'initials' => 'NK',
    'github' => 'https://github.com/',
    'linkedin' => 'https://www.linkedin.com/',
];

$skills = [
    ['name' => 'PHP & Laravel', 'level' => 'Web Development'],
    ['name' => 'MySQL', 'level' => 'Database'],
    ['name' => 'HTML, CSS & Bootstrap', 'level' => 'Frontend'],
    ['name' => 'Java, JSP & Servlet', 'level' => 'Application Development'],
    ['name' => 'Python', 'level' => 'Data & Automation'],
    ['name' => 'Troubleshooting PC', 'level' => 'IT Support'],
    ['name' => 'Computer Networking', 'level' => 'Networking'],
    ['name' => 'UI/UX Fundamentals', 'level' => 'Design'],
];

$projects = [
    [
        'number' => '01',
        'type' => 'WEB APPLICATION',
        'title' => 'Sistem Rekomendasi Laptop',
        'description' => 'Aplikasi berbasis web untuk membantu pengguna menemukan laptop sesuai anggaran dan kebutuhan melalui pengolahan data spesifikasi.',
        'stack' => ['PHP', 'Laravel', 'MySQL', 'Python'],
        'icon' => '⌘',
        'class' => 'project-purple',
        'status' => 'Academic Project',
        'url' => '',
    ],
    [
        'number' => '02',
        'type' => 'INFORMATION SYSTEM',
        'title' => 'Sistem Antrian Digital',
        'description' => 'Sistem pelayanan administrasi dengan pengambilan antrian online, pengelolaan layanan, dan pembaruan status antrian.',
        'stack' => ['Java', 'JSP / Servlet', 'MySQL', 'Bootstrap'],
        'icon' => '↗',
        'class' => 'project-green',
        'status' => 'Academic Project',
        'url' => '',
    ],
    [
        'number' => '03',
        'type' => 'WEB MANAGEMENT',
        'title' => 'Sistem Manajemen Rekomendasi',
        'description' => 'Konsep sistem untuk mengelola data laptop, kriteria penilaian, serta hasil rekomendasi dalam satu antarmuka web.',
        'stack' => ['PHP', 'Laravel', 'MySQL', 'AdminLTE'],
        'icon' => '▦',
        'class' => 'project-orange',
        'status' => 'Development Project',
        'url' => '',
    ],
];

$services = [
    ['icon' => '⌘', 'title' => 'Web Development', 'text' => 'Membangun website dan sistem informasi sederhana dengan struktur yang rapi dan mudah dikembangkan.'],
    ['icon' => '⚙', 'title' => 'IT Support', 'text' => 'Membantu troubleshooting dasar perangkat keras, perangkat lunak, instalasi aplikasi, dan Windows.'],
    ['icon' => '⌁', 'title' => 'Database & Networking', 'text' => 'Memahami dasar pengelolaan database relasional serta konsep dan troubleshooting jaringan komputer.'],
];

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio <?php echo e($profile['name']); ?> — pengembangan web, sistem informasi, dan IT support.">
    <meta name="theme-color" content="#101311">
    <title><?php echo e($profile['name']); ?> — Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="noise" aria-hidden="true"></div>
    <header class="site-header">
        <nav class="nav container" aria-label="Navigasi utama">
            <a class="brand" href="#home" aria-label="Kembali ke beranda"><span class="brand-mark">✳</span><span>portfolio<span class="brand-dot">.</span></span></a>
            <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false"><span></span><span></span></button>
            <div class="nav-links" id="navLinks">
                <a href="#about">Tentang</a>
                <a href="#skills">Keahlian</a>
                <a href="#projects">Proyek</a>
                <a href="#contact" class="nav-cta">Hubungi saya <span>↗</span></a>
            </div>
        </nav>
    </header>

    <main>
        <section class="hero container" id="home">
            <div class="hero-copy reveal">
                <div class="availability"><span class="pulse"></span><?php echo e($profile['availability']); ?></div>
                <p class="eyebrow">HALO, SAYA</p>
                <h1><?php echo e($profile['name']); ?><span class="accent">.</span><br><span class="headline-muted">Membangun solusi</span><br>digital yang berguna.</h1>
                <p class="hero-description">Saya seorang <strong><?php echo e($profile['role']); ?></strong> yang tertarik mengembangkan aplikasi web, sistem informasi, dan solusi teknologi untuk kebutuhan nyata.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#projects">Jelajahi proyek <span>↘</span></a>
                    <a class="button button-ghost" href="#contact">Mari terhubung <span>↗</span></a>
                </div>
                <div class="hero-meta">
                    <span><i class="meta-dot"></i> Berbasis di <?php echo e($profile['location']); ?></span>
                    <span class="mono">WEB · IT · PROBLEM SOLVING</span>
                </div>
            </div>
            <div class="hero-visual reveal" aria-label="Ilustrasi profil dan kode">
                <div class="visual-orbit orbit-one"></div>
                <div class="visual-orbit orbit-two"></div>
                <div class="profile-card">
                    <div class="card-top"><span class="window-dots"><i></i><i></i><i></i></span><span class="mono">PROFILE.EXE</span><span class="card-menu">•••</span></div>
                    <div class="avatar-wrap"><div class="avatar"><?php echo e($profile['initials']); ?></div><span class="avatar-spark">✳</span></div>
                    <p class="profile-label mono">CURRENT FOCUS</p>
                    <h2>Build. Learn.<br><span>Improve.</span></h2>
                    <div class="profile-divider"></div>
                    <div class="profile-bottom"><span>Curious mind, practical solutions.</span><span class="arrow-round">↗</span></div>
                </div>
                <div class="float-chip chip-code"><span class="chip-icon">&lt;/&gt;</span><span><b>Clean code</b><small>One step at a time</small></span></div>
                <div class="float-chip chip-spark"><span class="spark-symbol">✦</span><span><b>Always learning</b><small>Growing every day</small></span></div>
                <div class="visual-caption mono">FIG. 01 — A LITTLE ABOUT ME</div>
            </div>
            <a href="#about" class="scroll-cue"><span class="scroll-line"></span> SCROLL TO EXPLORE</a>
        </section>

        <section class="intro-strip">
            <div class="container strip-inner"><span class="mono strip-label">AREA OF INTEREST</span><div class="strip-items"><span>Web Development</span><b>✳</b><span>IT Support</span><b>✳</b><span>System Information</span><b>✳</b><span>Problem Solving</span></div></div>
        </section>

        <section class="section container" id="about">
            <div class="section-heading reveal"><p class="eyebrow">01 / TENTANG SAYA</p><h2>Teknologi bukan cuma soal kode.<br><span class="headline-muted">Tapi soal membantu orang.</span></h2></div>
            <div class="about-grid">
                <div class="about-main reveal"><p class="about-lead">Saya menikmati proses memahami masalah, mencari pendekatan yang tepat, lalu mengubahnya menjadi solusi yang bisa digunakan.</p><p>Saya memiliki ketertarikan pada pengembangan web, database, pemeliharaan komputer, dan jaringan. Melalui proyek akademik dan latihan mandiri, saya terus mengembangkan kemampuan teknis serta membiasakan diri bekerja secara terstruktur.</p><p>Saat ini saya terbuka untuk kesempatan yang memungkinkan saya belajar lebih banyak, berkolaborasi, dan memberikan kontribusi nyata dalam tim.</p><a class="text-link" href="#contact">Punya kesempatan menarik? Mari bicara <span>↗</span></a></div>
                <div class="about-facts reveal"><div class="fact"><span class="fact-number">01</span><div><b>Practical mindset</b><p>Fokus pada solusi yang berguna dan mudah dipahami.</p></div></div><div class="fact"><span class="fact-number">02</span><div><b>Continuous learner</b><p>Terbuka terhadap teknologi, masukan, dan tantangan baru.</p></div></div><div class="fact"><span class="fact-number">03</span><div><b>Versatile interest</b><p>Memadukan pengembangan web dengan dasar-dasar IT support.</p></div></div></div>
            </div>
        </section>

        <section class="section skills-section" id="skills"><div class="container">
            <div class="section-heading reveal"><p class="eyebrow">02 / KEAHLIAN</p><h2>Tools yang saya gunakan<span class="accent">.</span></h2><p class="section-subtitle">Teknologi dan area yang pernah saya pelajari atau gunakan dalam proyek.</p></div>
            <div class="skills-grid">
                <?php foreach ($skills as $index => $skill): ?>
                <div class="skill-card reveal"><span class="skill-index mono"><?php echo str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT); ?></span><div><h3><?php echo e($skill['name']); ?></h3><p><?php echo e($skill['level']); ?></p></div><span class="skill-arrow">↗</span></div>
                <?php endforeach; ?>
            </div>
            <p class="skills-note mono">* Daftar ini dapat disesuaikan dengan kemampuan dan pengalaman aktual.</p>
        </div></section>

        <section class="section container" id="projects">
            <div class="section-heading project-heading reveal"><div><p class="eyebrow">03 / PROYEK PILIHAN</p><h2>Belajar dengan<br><span class="headline-muted">membangun sesuatu.</span></h2></div><p class="section-subtitle">Beberapa proyek yang merepresentasikan proses belajar dan penerapan kemampuan teknis saya.</p></div>
            <div class="projects-list">
                <?php foreach ($projects as $project): ?>
                <article class="project-card reveal">
                    <div class="project-art <?php echo e($project['class']); ?>"><span class="project-number mono"><?php echo e($project['number']); ?> / 03</span><div class="art-grid"></div><div class="art-icon"><?php echo e($project['icon']); ?></div><span class="art-orbit orbit-a"></span><span class="art-orbit orbit-b"></span><span class="art-bottom-label mono"><?php echo e($project['type']); ?></span></div>
                    <div class="project-content"><div class="project-topline"><span class="project-status"><i></i><?php echo e($project['status']); ?></span><span class="mono project-index">PROJECT <?php echo e($project['number']); ?></span></div><h3><?php echo e($project['title']); ?></h3><p><?php echo e($project['description']); ?></p><div class="tag-list"><?php foreach ($project['stack'] as $tag): ?><span><?php echo e($tag); ?></span><?php endforeach; ?></div><?php if (!empty($project['url'])): ?><a class="project-link" href="<?php echo e($project['url']); ?>" target="_blank" rel="noopener noreferrer">Lihat proyek <span>↗</span></a><?php else: ?><span class="project-link project-link-muted">Detail tersedia saat diminta <span>↗</span></span><?php endif; ?></div>
                </article>
                <?php endforeach; ?>
            </div>
            <p class="project-disclaimer mono">CATATAN: Pastikan deskripsi proyek sesuai implementasi yang benar-benar kamu kerjakan. Tambahkan tautan demo atau repositori setelah tersedia.</p>
        </section>

        <section class="section services-section"><div class="container"><div class="section-heading reveal"><p class="eyebrow">04 / YANG BISA SAYA BANTU</p><h2>Ruang untuk berkontribusi<span class="accent">.</span></h2></div><div class="services-grid"><?php foreach ($services as $service): ?><article class="service-card reveal"><span class="service-icon"><?php echo e($service['icon']); ?></span><h3><?php echo e($service['title']); ?></h3><p><?php echo e($service['text']); ?></p><span class="service-line"></span></article><?php endforeach; ?></div></div></section>

        <section class="contact-section" id="contact"><div class="container contact-inner reveal"><div><p class="eyebrow">05 / KONTAK</p><h2>Siap memulai<br>hal <span class="accent">berikutnya?</span></h2><p class="contact-description">Saya terbuka untuk peluang kerja, kolaborasi, dan kesempatan belajar. Jika profil saya relevan dengan kebutuhan tim Anda, mari terhubung.</p></div><div class="contact-card"><span class="mono contact-label">GET IN TOUCH</span><a class="contact-email" href="mailto:<?php echo e($profile['email']); ?>"><?php echo e($profile['email']); ?> <span>↗</span></a><div class="contact-links"><a href="<?php echo e($profile['github']); ?>" target="_blank" rel="noopener noreferrer">GitHub <span>↗</span></a><a href="<?php echo e($profile['linkedin']); ?>" target="_blank" rel="noopener noreferrer">LinkedIn <span>↗</span></a></div><button class="copy-email" type="button" data-email="<?php echo e($profile['email']); ?>">Salin alamat email <span>▣</span></button><p class="copy-feedback" id="copyFeedback" aria-live="polite"></p></div></div></section>
    </main>
    <footer class="footer"><div class="container footer-inner"><a class="brand" href="#home"><span class="brand-mark">✳</span><span>portfolio<span class="brand-dot">.</span></span></a><span class="footer-note">Dibuat dengan rasa ingin tahu & PHP.</span><span class="mono footer-year">© <?php echo date('Y'); ?> <?php echo e($profile['name']); ?></span></div></footer>
    <script src="assets/js/main.js"></script>
</body>
</html>
