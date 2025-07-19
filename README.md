# VisionSage

An intelligent image classification web app built with PHP, MySQL, and a custom AI model (SmolVM). VisionSage allows users to register, log in, upload images, and get real-time AI-powered predictions, all from a user-friendly interface.

---

## 🚀 Features

- User registration & login system  
- Secure image upload process  
- AI model prediction via SmolVM  
- Prediction results saved with timestamps  
- Responsive frontend built on HTML, CSS, Bootstrap, JavaScript  
- Backend powered by PHP and MySQL  

---

## 📁 Project Structure

/
├── uploads/ # Uploaded images stored here
├── assets/ # CSS, JS, and image assets
├── inc/ # PHP includes (e.g. DB connection)
├── pages/ # Login, register, dashboard pages
├── smolvm/ # Integration with SmolVM model
├── sql/ # Database schema and seed files
└── README.md # Project overview

---

## ⚙️ Installation

1. **Clone the repo**

    ```bash
    git clone https://github.com/souravnewbee/VisionSage.git
    cd VisionSage
    ```

2. **Configure MySQL database**

    - Create a database (e.g. `visionsage_db`).
    - Run the SQL schema: `sql/schema.sql`.
    - Update DB credentials in `inc/db.php`.

3. **Set up PHP environment**

    - Install XAMPP or WAMP (for Windows) / MAMP (for Mac).
    - Place project in `htdocs` or `www` directory.
    - Restart Apache and MySQL services.

4. **Place AI model**

    - Add your SmolVM model files into `smolvm/`.
    - Update model loading path in `smolvm/predict.php`.

5. **Run the app**

    - Open `http://localhost/VisionSage/pages/register.php` in your browser.

---

## 🛠️ Technologies

- **Frontend**: HTML5, CSS3, Bootstrap 5, JavaScript  
- **Backend**: PHP 8+  
- **Database**: MySQL  
- **AI**: Custom SmolVM-based image prediction model  

---

## 🧩 Usage

1. **Register** a new user account.  
2. **Log in** using your credentials.  
3. **Upload** an image via the dashboard.  
4. View the **AI-generated prediction** along with accuracy % and timestamp.  
5. All predictions are **saved** in your user history.  

---

## 🧪 Database

The schema includes:

- **users** (`id`, `username`, `email`, `password_hash`, …)  
- **predictions** (`id`, `user_id`, `image_path`, `label`, `confidence`, `created_at`)  

Refer to `sql/schema.sql` for full table definitions.

---

## 🧑‍💻 Author

- Sourav Newbee – Computer Vision undergraduate (North South University)  
- Contact: [Your Email or GitHub Link]  

---

## 🤝 Contributing

Contributions are welcome! To get started:

1. Fork the repo  
2. Create a new branch (`git checkout -b feature/awesome-feature`)  
3. Make your changes and commit (`git commit -m 'Add awesome feature'`)  
4. Push to your branch (`git push origin feature/awesome-feature`)  
5. Open a Pull Request

---

## 📄 License

MIT License. See `LICENSE` for details.

---

## 🧭 Future Work

- Add pagination or search in prediction history  
- Improve model with advanced deep learning integration  
- Implement email verification for user registration  
- Enhance UI/UX with dynamic previews and animations  

---

## 🎉 Credits

Thanks to the open-source PHP community, Bootstrap contributors, and the developers of SmolVM AI framework!

---

Want enhancements or a custom version? Just let me know! 😊
::contentReference[oaicite:0]{index=0}
