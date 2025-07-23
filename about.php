<?php 
$page_title = "About Rajitha Lakshan";
include_once 'header.php';
?>

<!-- Link to custom CSS for this page -->
<link rel="stylesheet" href="./css/about.css">

<main class="about-page">
    <section class="about-section">
        <div class="about-image">
            <img src="images/profile-main.jpg" alt="Rajitha Lakshan">
        </div>
        <div class="about-content">
            <h1>About Me</h1>
            <p>Motivated and passionate IT student seeking an opportunity in the IT industry to enhance my technical skills, gain practical experience, and contribute to a dynamic team.</p>
            
            <div class="personal-info">
                <h2>Personal Information</h2>
                <ul>
                    <li><strong>Email:</strong> rajitha.developement@gmail.com</li>
                    <li><strong>Phone:</strong> +94767517769</li>
                    <li><strong>Address:</strong> Aviruppala Niwasa, Thispane, Nawathispane, Nawalapitiya, 70670, Sri Lanka</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="education-section" id="education">
        <h2>Education</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">Aug 2021 - Dec 2026</div>
                <div class="timeline-content">
                    <h3>Bachelor of Software Engineering Honors</h3>
                    <p>The Open University of Sri Lanka</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">Feb 2022 - July 2022</div>
                <div class="timeline-content">
                    <h3>Applied Information Technology</h3>
                    <p>Sri Lankan Telecom Training Center</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2023</div>
                <div class="timeline-content">
                    <h3>Software Testing and Quality Assurance</h3>
                    <p>University of Moratuwa</p>
                </div>
                <div class="timeline-content">
                    <h3>Web developement</h3>
                    <p>University of Moratuwa</p>
                </div>

            </div>
        </div>
    </section>

    <section class="experience-section" id="experience">
        <h2>Work Experience</h2>
        <div class="experience-grid">
            <div class="experience-card">
                <h3>System Assistant</h3>
                <p class="company">Kothmale Tea Factory</p>
                <p class="duration">October 2024 - May 2025</p>
                <ul>
                    <li>Provided technical assistance to employees</li>
                    <li>Conducted IT training sessions for staff</li>
                    <li>Monitored and maintained CCTV systems</li>
                    <li>Troubleshot hardware/software issues</li>
                </ul>
            </div>
            <div class="experience-card">
                <h3>ISO Coordination</h3>
                <p class="company">Kothmale Tea Factory</p>
                <p class="duration">October 2024 - May 2025</p>
                <ul>
                    <li>Managed documentation and audits</li>
                    <li>Ensured compliance with ISO 22000:2018</li>
                    <li>Led successful ISO certification process</li>
                </ul>
            </div>
            <div class="experience-card">
                <h3>Data Entry Operator</h3>
                <p class="company">Sri Lanka Telecom, Gampola</p>
                <p class="duration">June 2023 - September 2023</p>
                <ul>
                    <li>Handled high volumes of data entry tasks</li>
                    <li>Met strict deadlines consistently</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="hobbies-section">
        <h2>Hobbies & Interests</h2>
        <div class="hobbies-grid">
            <div class="hobby-item">
                <i class="fas fa-music"></i>
                <p>Acoustic Music Band</p>
            </div>
            <div class="hobby-item">
                <i class="fas fa-drum"></i>
                <p>Playing Drums</p>
            </div>
            <div class="hobby-item">
                <i class="fas fa-plane"></i>
                <p>Traveling</p>
            </div>
            <div class="hobby-item">
                <i class="fas fa-film"></i>
                <p>Watching Movies</p>
            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>
