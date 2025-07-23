<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script src="js/transition.js" defer></script>
</head>
<body>
    <header class="hacker-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">> Rajitha_Lakshan<span class="blinking-cursor">_</span></a>
            </div>
            <nav class="hacker-nav">
                <ul>
                    <li><a href="index.php">> home</a></li>
                    <li><a href="about.php">> about</a></li>
                    <li><a href="projects.php">> projects</a></li>
                    <li><a href="contact.php">> contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-btn">
                <i class="fas fa-terminal"></i>
            </div>
        </div>


   
    </header>

   <!-- Hacker Transition Overlay -->
<div class="hacker-transition" id="hackerTransition">
    <div class="terminal-output" id="terminalOutput">
        <div class="terminal-line">Initializing system<span class="blinking-cursor">|</span></div>
        <div class="terminal-line">Loading resources<span class="blinking-cursor">|</span></div>
        <div class="terminal-line">Access granted<span class="blinking-cursor">|</span></div>
    </div>
    <div class="matrix-overlay"></div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.pathname.split('/').pop().toLowerCase();
    const pagesWithTransition = ['about.php', 'project.php', 'contact.php'];

    if (!pagesWithTransition.includes(currentPage)) {
        return;
    }

    const transition = document.getElementById('hackerTransition');
    if (!transition) return;

    const lines = transition.querySelectorAll('.terminal-line');

    transition.classList.add('active');

    lines.forEach((line, index) => {
        line.style.animation = `typing 1s steps(30) ${index * 0.5}s forwards`;
    });

    setTimeout(() => {
        transition.classList.remove('active');
    }, 2500);

    document.querySelectorAll('a[href]').forEach(link => {
        const url = link.getAttribute('href');
        if (url && !url.startsWith('#') && !url.startsWith('mailto:') && !url.startsWith('javascript:')) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                transition.classList.add('active');
                setTimeout(() => {
                    window.location.href = this.href;
                }, 1500);
            });
        }
    });
});
</script>

