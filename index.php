<?php 
$page_title = "Rajitha Lakshan - Software Developer";
include_once 'header.php';
?>

<main>
    <section class="hero hacker-hero">
        <div class="terminal-container">
            <div class="terminal-header">
                <div class="terminal-buttons">
                    <span class="terminal-btn red"></span>
                    <span class="terminal-btn yellow"></span>
                    <span class="terminal-btn green"></span>
                </div>
                <div class="terminal-title">root@rajitha:~#</div>
            </div>
            <div class="terminal-body">
                <div class="typewriter">
                    <span class="prompt">></span> <span class="command">./init_portfolio.sh</span><br>
                    <span class="output">Initializing portfolio...</span><br><br>
                    
                    <span class="prompt">></span> <span class="command">whois Rajitha</span><br>
                    <span class="output">Full Stack Developer </span><br>
                    <span class="output">React | Node | Flutter | C# | PHP</span><br><br>
                    
                    <span class="prompt">></span> <span class="command">scan --skills</span><br>
                    <span class="output">[+] Frontend: React | Flutter | JavaScript</span><br>
                    <span class="output">[+] Backend: Node.js | .NET | C# | PHP</span><br>
                    <span class="output">[+] Databases: SQL | MongoDB</span><br>
                    <span class="output">[+] Tools: Git | Figma | Visual Studio</span><br><br>
                    
                    <span class="prompt">></span> <span class="command">connect --hire-me</span><br>
                    <span class="output blinking">Establishing secure connection...</span>
                </div>
                <div class="hacker-image">
                    <div class="glow-effect"></div>
                    <img src="images/profile-main.jpg" alt="Rajitha Lakshan">
                    <div class="scanlines"></div>
                    <div class="binary-overlay">01001000 01001001 01010010 01000101 00100000 01001101 01000101</div>
                </div>
            </div>
        </div>
        <div class="matrix-rain"></div>
    </section>

    <section class="skills-section hacker-skills">
        <div class="hacker-border">
            <h2 class="hacker-title">[ Skills ]</h2>
            <div class="skills-grid">
                <div class="skill-item hacker-skill">
                    <i class="fas fa-terminal"></i>
                    <h3>Frontend Systems</h3>
                    <p>React.js | Flutter | JavaScript | HTML | CSS | TailwindCSS</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 50%"></div>
                    </div>
                </div>
                <div class="skill-item hacker-skill">
                    <i class="fas fa-server"></i>
                    <h3>Backend Infrastructure</h3>
                    <p>Node.js | C# | .NET | SQL | PHP</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 45%"></div>
                    </div>
                </div>
                <div class="skill-item hacker-skill">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Operations</h3>
                    <p>Flutter | Android | Java</p>
                    <div class="skill-bar">
                        <div class="skill-level" style="width: 60%"></div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="highlight-section hacker-highlight">
        <div class="hacker-border">
            <h2 class="hacker-title">[ Mission Achievements ]</h2>
            <div class="highlight-content">
                <p class="hacker-text">> Successfully infiltrated and secured Kothmale Tea Factory systems</p>
                <p class="hacker-text">> Obtained ISO 22000:2018 certification through advanced audit techniques</p>
                <a href="about.php#experience" class="hacker-btn">View Mission Details</a>
            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>