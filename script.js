// DOM Elements
const body = document.body;
const menuBtn = document.querySelector('.menu-btn');
const nav = document.querySelector('.nav');
const navLinks = document.querySelectorAll('.nav-link');
const darkModeToggle = document.getElementById('darkModeToggle');
const backToTop = document.querySelector('.back-to-top');
const sections = document.querySelectorAll('section');
const animatedElements = document.querySelectorAll('.animate-on-scroll');
const filterBtns = document.querySelectorAll('.filter-btn');
const projectCards = document.querySelectorAll('.project-card');
const contactForm = document.getElementById('contact-form');
const formMessage = document.getElementById('form-message');

// Mobile Menu Toggle
let menuOpen = false;
menuBtn?.addEventListener('click', () => {
  if (!menuOpen) {
    menuBtn.classList.add('open');
    nav.classList.add('active');
    body.classList.add('no-scroll');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    nav.classList.remove('active');
    body.classList.remove('no-scroll');
    menuOpen = false;
  }
});

// Close menu when clicking on a nav link
navLinks.forEach(link => {
  link.addEventListener('click', () => {
    menuBtn.classList.remove('open');
    nav.classList.remove('active');
    body.classList.remove('no-scroll');
    menuOpen = false;
  });
});

// Smooth scroll for nav links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    if (targetId === '#') return;
    
    const target = document.querySelector(targetId);
    if (target) {
      const headerOffset = 80;
      const elementPosition = target.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
      });
    }
  });
});

// Dark Mode Toggle
darkModeToggle?.addEventListener("click", () => {
  body.classList.toggle("dark-mode");

  // Save preference in local storage
  const isDark = body.classList.contains("dark-mode");
  localStorage.setItem("darkMode", isDark);
  
  // Update icon
  const icon = darkModeToggle.querySelector('i');
  if (isDark) {
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
  } else {
    icon.classList.remove('fa-sun');
    icon.classList.add('fa-moon');
  }
});

// Load user preference on page load
window.addEventListener("DOMContentLoaded", () => {
  const isDark = localStorage.getItem("darkMode") === "true";
  if (isDark) {
    body.classList.add("dark-mode");
    const icon = darkModeToggle.querySelector('i');
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
  }
});

// Typing effect in Hero section
document.addEventListener('DOMContentLoaded', function () {
  const typedText = document.querySelector('.typed-role');
  if (!typedText) return;
  
  const roles = ['Web Developer', 'UI/UX Designer', 'Mobile App Developer', 'Software Engineer', 'Tech Enthusiast'];
  let roleIndex = 0;
  let charIndex = 0;
  let isDeleting = false;

  function type() {
    const currentRole = roles[roleIndex];
    let typingDelay = Math.random() * (100 - 50) + 50; 

    if (isDeleting) {
      typedText.textContent = currentRole.substring(0, charIndex--);
    } else {
      typedText.textContent = currentRole.substring(0, charIndex++);
    }

    if (!isDeleting && charIndex === currentRole.length) {
      isDeleting = true;
      typingDelay = 1500; 
    } else if (isDeleting && charIndex === 0) {
      isDeleting = false;
      roleIndex = (roleIndex + 1) % roles.length;
      typingDelay = 500; 
    }

    setTimeout(type, typingDelay);
  }

  setTimeout(type, 1000); 
});

// Scroll to reveal animations
function checkAnimatedElements() {
  const triggerBottom = window.innerHeight * 0.85;
  
  animatedElements.forEach(element => {
    const elementTop = element.getBoundingClientRect().top;
    if (elementTop < triggerBottom) {
      element.classList.add('show');
    }
  });
}

// Active section highlighting in navigation
function highlightNavLink() {
  let scrollPosition = window.scrollY;

  sections.forEach(section => {
    const sectionTop = section.offsetTop - 100;
    const sectionHeight = section.offsetHeight;
    const sectionId = section.getAttribute('id');
    
    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
      navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${sectionId}`) {
          link.classList.add('active');
        }
      });
    }
  });
}

// Back to top button visibility
function toggleBackToTopButton() {
  if (window.scrollY > 500) {
    backToTop.classList.add('show');
  } else {
    backToTop.classList.remove('show');
  }
}

// Portfolio filtering
filterBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    
    filterBtns.forEach(b => b.classList.remove('active'));

    btn.classList.add('active');
    
    const filter = btn.dataset.filter;
    
    projectCards.forEach(card => {
      if (filter === 'all' || card.dataset.category === filter) {
        card.style.display = 'block';
        setTimeout(() => {
          card.classList.add('show');
        }, 100);
      } else {
        card.classList.remove('show');
        setTimeout(() => {
          card.style.display = 'none';
        }, 300);
      }
    });
  });
});

// Testimonial slider
const testimonials = document.querySelectorAll('.testimonial');
const dotsContainer = document.querySelector('.testimonial-dots');
let currentSlide = 0;

// Create dots
if (testimonials.length > 0 && dotsContainer) {
  testimonials.forEach((_, index) => {
    const dot = document.createElement('span');
    dot.classList.add('dot');
    if (index === 0) dot.classList.add('active');
    dot.addEventListener('click', () => {
      goToSlide(index);
    });
    dotsContainer.appendChild(dot);
  });
}

function goToSlide(index) {
  testimonials.forEach((testimonial, i) => {
    testimonial.style.transform = `translateX(${100 * (i - index)}%)`;
  });
  
  // Update dots
  document.querySelectorAll('.dot').forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });
  
  currentSlide = index;
}

// Initialize testimonial slider
function initTestimonialSlider() {
  if (testimonials.length > 0) {
    testimonials.forEach((testimonial, index) => {
      testimonial.style.transform = `translateX(${100 * (index - currentSlide)}%)`;
    });
  }
}

// Auto-advance testimonial slider
function autoAdvanceTestimonials() {
  if (testimonials.length <= 1) return;
  
  setInterval(() => {
    currentSlide = (currentSlide + 1) % testimonials.length;
    goToSlide(currentSlide);
  }, 5000);
}

// Contact form submission with AJAX
if (contactForm) {
  contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('button[type="submit"]');
    
    // Change button text to loading state
    const originalBtnText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
    submitBtn.disabled = true;
    
    fetch('send_message.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        formMessage.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
        contactForm.reset();
      } else {
        formMessage.innerHTML = `<div class="alert alert-error">${data.message}</div>`;
      }
      
      // Reset button state
      submitBtn.innerHTML = originalBtnText;
      submitBtn.disabled = false;
      
      // Clear message after 5 seconds
      setTimeout(() => {
        formMessage.innerHTML = '';
      }, 5000);
    })
    .catch(error => {
      formMessage.innerHTML = '<div class="alert alert-error">An error occurred. Please try again later.</div>';
      submitBtn.innerHTML = originalBtnText;
      submitBtn.disabled = false;
    });
  });
}

// Event listeners
window.addEventListener('scroll', () => {
  checkAnimatedElements();
  highlightNavLink();
  toggleBackToTopButton();
});

window.addEventListener('load', () => {
  checkAnimatedElements();
  highlightNavLink();
  initTestimonialSlider();
  autoAdvanceTestimonials();
});

// Initialize on DOM content loaded
document.addEventListener('DOMContentLoaded', () => {
  
  setTimeout(() => {
    document.body.classList.add('loaded');
  }, 500);
});