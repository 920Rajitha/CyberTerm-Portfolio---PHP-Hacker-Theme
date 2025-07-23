<?php 
$page_title = "Contact Rajitha Lakshan";
include_once 'header.php';
?>

<main class="contact-page">
    <section class="contact-form-section">
        <h1>Get In Touch</h1>
        <p>Feel free to reach out for collaborations or just a friendly hello!</p>
        
        <form action="send_email.php" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>

    <section class="contact-info-section">
        <h2>Contact Information</h2>
        <div class="contact-info-grid">
            <div class="contact-info-item">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <p>rajitha.developement@gmail.com</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-phone"></i>
                <h3>Phone</h3>
                <p>+94767517769</p>
            </div>
            <div class="contact-info-item">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Address</h3>
                <p>Aviruppala Niwasa, Thispane, Nawathispane, Nawalapitiya, 70670, Sri Lanka</p>
            </div>
        </div>
        
        <div class="social-links">
            <h3>Connect With Me</h3>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php'; ?>