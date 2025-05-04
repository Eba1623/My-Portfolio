<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ebisa Gutema | Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <script defer src="script.js"></script>
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="container">
    <h1 class="logo">Ebisa<span>Gutema</span></h1>
    <div class="menu-btn">
      <div class="menu-btn__burger"></div>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="#hero" class="nav-link">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#skills" class="nav-link">Skills</a></li>
        <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
        <li><a href="#testimonials" class="nav-link">Testimonials</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
    </nav>
    <button id="darkModeToggle" class="btn-icon" aria-label="Toggle dark mode">
      <i class="fas fa-moon"></i>
    </button>
  </div>
</header>

<!-- Hero Section -->
<section id="hero" class="hero">
  <div class="container">
    <div class="hero-content">
      <h2 class="animate-on-scroll">Hello, I'm <span class="highlight">Ebisa Gutema</span></h2>
      <p class="animate-on-scroll">I'm a <span class="typed-role"></span></p>
      <div class="hero-buttons animate-on-scroll">
        <a href="#portfolio" class="btn btn-primary">View Portfolio</a>
        <a href="#contact" class="btn btn-outline">Contact Me</a>
      </div>
      <div class="social-icons animate-on-scroll">
        <a href="https://github.com/eba1623" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com/in/ebisa-gutema-75b733292" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
        <a href="https://twitter.com/pinakiler" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="hero-image animate-on-scroll">
      <div class="blob"></div>
      <div class="circle-spin"></div>
    </div>
  </div>
  <div class="scroll-down">
    <a href="#about">
      <i class="fas fa-chevron-down"></i>
    </a>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">About Me</h2>
      <div class="section-line"></div>
    </div>
    <div class="about-content">
      <div class="about-image animate-on-scroll">
        <div class="image-frame">
          <img src="images/eba.jpg" alt="Ebisa Gutema" />
        </div>
      </div>
      <div class="about-text animate-on-scroll">
        <h3>Software Developer & Designer</h3>
        <p>I'm a passionate and detail-oriented Software Developer with a strong foundation in building full-stack web applications. 
          I specialize in crafting clean, efficient code and intuitive user experiences using modern technologies like React, Laravel, and MySQL.</p>
        
        <p>Whether working on front-end interfaces or back-end systems, I enjoy turning complex problems into simple, elegant solutions. 
          I'm always eager to learn, grow, and contribute to impactful projects that make a difference.</p>
        
        <div class="about-info">
          <div class="info-item">
            <span class="info-title">Name:</span>
            <span class="info-value">Ebisa Gutema</span>
          </div>
          <div class="info-item">
            <span class="info-title">Email:</span>
            <span class="info-value">ebisagutema19@gmail.com</span>
          </div>
          <div class="info-item">
            <span class="info-title">Location:</span>
            <span class="info-value">Addis Ababa</span>
          </div>
          <div class="info-item">
            <span class="info-title">Availability:</span>
            <span class="info-value">Available for freelance</span>
          </div>
        </div>
        
        <a href="#" class="btn btn-primary">Download CV <i class="fas fa-download"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Skills / Services Section -->
<section id="skills" class="skills section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Skills & Services</h2>
      <div class="section-line"></div>
    </div>
    <div class="skills-grid">
      <div class="skill-card animate-on-scroll">
        <div class="skill-icon">
          <i class="fas fa-code"></i>
        </div>
        <h3>Web Development</h3>
        <p>Responsive and high-performance websites and web apps using modern frameworks and technologies.</p>
        <ul class="skill-list">
          <li>HTML5 & CSS3</li>
          <li>JavaScript (ES6+)</li>
          <li>React.js</li>
          <li>PHP & Laravel</li>
        </ul>
      </div>
      <div class="skill-card animate-on-scroll">
        <div class="skill-icon">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h3>UI/UX Design</h3>
        <p>Modern, user-friendly interfaces and experiences that engage and delight users.</p>
        <ul class="skill-list">
          <li>Prototyping</li>
          <li>User Research</li>
          <li>Responsive Design</li>
        </ul>
      </div>
      <div class="skill-card animate-on-scroll">
        <div class="skill-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h3>Mobile App Development</h3>
        <p>Cross-platform mobile apps with smooth performance and native feel for iOS and Android.</p>
        <ul class="skill-list">
          <li>React Native</li>
          <li>Flutter</li>
          <li>App Store Deployment</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Portfolio</h2>
      <div class="section-line"></div>
    </div>
    <div class="portfolio-filter">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="web">Web</button>
      <button class="filter-btn" data-filter="mobile">Mobile</button>
      <button class="filter-btn" data-filter="design">Design</button>
    </div>
    <div class="portfolio-grid">
      <?php foreach ($projects as $project): ?>
        <div class="project-card animate-on-scroll" data-category="<?= htmlspecialchars($project['category'] ?? 'web') ?>">
          <div class="project-img">
            <img src="<?= htmlspecialchars($project['image']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" />
            <div class="project-overlay">
              <div class="project-links">
                <a href="https://github.com/eba1623" class="project-link"><i class="fas fa-link"></i></a>
                <a href="https://github.com/eba1623" class="project-link"><i class="fab fa-github"></i></a>
              </div>
            </div>
          </div>
          <div class="project-info">
            <h3><?= htmlspecialchars($project['title']) ?></h3>
            <p><?= htmlspecialchars($project['description']) ?></p>
            <div class="project-tags">
              <?php foreach ($project['tags'] ?? ['HTML', 'CSS', 'JavaScript'] as $tag): ?>
                <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Testimonials</h2>
      <div class="section-line"></div>
    </div>
    <div class="testimonial-slider">
      <?php foreach ($testimonials as $testimonial): ?>
        <div class="testimonial animate-on-scroll">
          <div class="testimonial-content">
            <div class="quote-icon">
              <i class="fas fa-quote-left"></i>
            </div>
            <p>"<?= htmlspecialchars($testimonial['text']) ?>"</p>
          </div>
          <div class="testimonial-author">
            <?php if (!empty($testimonial['image'])): ?>
              <div class="author-image">
                <img src="<?= htmlspecialchars($testimonial['image']) ?>" alt="<?= htmlspecialchars($testimonial['author']) ?>">
              </div>
            <?php else: ?>
              <div class="author-avatar">
                <?= substr(htmlspecialchars($testimonial['author']), 0, 1) ?>
              </div>
            <?php endif; ?>
            <div class="author-info">
              <h4><?= htmlspecialchars($testimonial['author']) ?></h4>
              <p><?= htmlspecialchars($testimonial['position'] ?? 'Client') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="testimonial-dots"></div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact section">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title">Contact Me</h2>
      <div class="section-line"></div>
    </div>
    <div class="contact-content">
      <div class="contact-info animate-on-scroll">
        <div class="contact-item">
          <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div class="contact-details">
            <h3>Location</h3>
            <p>ASTU, Adama, Ethiopia</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="contact-details">
            <h3>Email</h3>
            <p>ebisagutema19@gmail.com</p>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-icon">
            <i class="fas fa-phone"></i>
          </div>
          <div class="contact-details">
            <h3>Phone</h3>
            <p><a href="tel:+251953896286">+251953896286</a></p>
            <p><a href="tel:+251703896286">+251703896286</a></p>
          </div>

        </div>
        <div class="social-links">
          <a href="https://github.com/eba1623" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
          <a href="https://linkedin.com/in/ebisa-gutema-75b733292" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
          <a href="https://twitter.com/pinakiler" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com/pinakiller3" class="social-link" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="contact-form-container animate-on-scroll">
        <form id="contact-form" action="send_message.php" method="POST">
          <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Your Name" required />
            <label for="name">Your Name</label>
          </div>
          <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Your Email" required />
            <label for="email">Your Email</label>
          </div>
          <div class="form-group">
            <input type="text" name="subject" id="subject" placeholder="Subject" required />
            <label for="subject">Subject</label>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" placeholder="Your Message" rows="5" required></textarea>
            <label for="message">Your Message</label>
          </div>
          <button type="submit" class="btn btn-primary">
            Send Message <i class="fas fa-paper-plane"></i>
          </button>
          <div id="form-message"></div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-logo">
        <h3>Ebisa<span>Gutema</span></h3>
        <p>Creating digital experiences that make a difference.</p>
      </div>
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-newsletter">
        <h4>Stay Updated</h4>
        <p>Subscribe to my newsletter for the latest updates.</p>
        <form class="newsletter-form">
          <input type="email" placeholder="Your Email" required>
          <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Ebisa Gutema. All rights reserved.</p>
      <div class="footer-social">
        <a href="https://github.com/eba1623" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
        <a href="https://linkedin.com/in/ebisa-gutema-75b733292" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
        <a href="https://twitter.com/pinakiler" class="social-icon" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to top button -->
<a href="#hero" class="back-to-top">
  <i class="fas fa-arrow-up"></i>
</a>

</body>
</html>