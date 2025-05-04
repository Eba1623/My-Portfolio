# My Portfolio 👨‍💻

A modern, responsive personal portfolio website built with HTML, CSS, JavaScript, and PHP. This project showcases my skills, projects, and includes a contact form that uses PHPMailer to send messages via email.

---

## 🌟 Features

- Clean, modern design  
- Mobile-responsive layout  
- Portfolio section with dynamic PHP rendering  
- Testimonials section with PHP  
- Contact form with **PHPMailer** integration  
- Dark mode toggle  
- Simple animations and interactions using JavaScript  

---

## 📂 Project Structure

my-portfolio/ │ ├── index.php # Main PHP file with HTML structure
                ├── send_message.php # Handles contact form submission with PHPMailer 
                ├── style.css # All styles for the portfolio 
                ├── script.js # JavaScript (e.g., dark mode toggle) 
                ├── phpmailer/ # PHPMailer library folder │ 
                ├── src/ 
                │ └── ... 
                ├── images/ │ 
                ├── download.jpg │ 
                ├── down.jpg │ └── do.jpg 
                ├── README.md # You're reading it!

---

## ✉️ Contact Form Configuration

To enable the contact form:

1. Download PHPMailer from [https://github.com/PHPMailer/PHPMailer](https://github.com/PHPMailer/PHPMailer)  
2. Extract the `src` folder into your `phpmailer/` directory  
3. In `send_message.php`, set:
   - Your Gmail address
   - Your Gmail App Password (not your regular password)
4. Enable SMTP in the file and allow access if required via Google security settings

---

## 🚀 Deployment (Localhost using XAMPP)

1. Move the project folder into the `htdocs` directory of your XAMPP installation  
2. Start Apache from the XAMPP Control Panel  
3. Visit `http://localhost/my-portfolio/` in your browser  

---

## 🔒 Security Notes

- **Do not upload your real password or App Password to GitHub**  
- Add these to your `.gitignore` file:


---

## 🧑‍💻 Author

**Ebisa Gutema**  
GitHub: [@Eba1623](https://github.com/Eba1623)

---

## 📄 License

This project is open source and available under the [MIT License](https://opensource.org/licenses/MIT).
