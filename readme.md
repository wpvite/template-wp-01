## WordPress Installation with Composer for WP-Vite Template Site

This project sets up WordPress using **Composer**, making it easier to manage dependencies, plugins, and themes while keeping the WordPress core separate from custom content.

### 📌 Features

- **Composer-based WordPress installation**.
- **Keeps WordPress core files separate** in the `wp/` directory.
- **Manages plugins and themes using WPackagist**.
- **Supports environment variables** via `.env` using `vlucas/phpdotenv`.
- **Includes security and performance plugins**.

---

## 🚀 Installation

### 1️⃣ Download the Repository
Instead of cloning, **download the required files as a ZIP**:

```bash
wget https://github.com/wp-vite/template-wp-01/archive/refs/heads/main.zip
```

After downloading, extract the ZIP file:
```bash
unzip main.zip
cd template-wp-01-main
```

Move the extracted files to your root directory:
```bash
mv .[!.]* * ../
cd ../
rm -r main.zip template-wp-01-main
```

### 2️⃣ Install Dependencies
Ensure **Composer** is installed, then run:
```bash
composer install
```

### 3️⃣ Configure Environment
Copy `.env.example` to `.env` and update the values accordingly:
```bash
cp .env.example .env
```
Modify the `.env` file with your **database credentials**, **site URL**, and other configurations.

### 4️⃣ Set Up File Permissions
Ensure the necessary permissions for WordPress:
```bash
chmod -R 775 wp
chmod -R 775 content
```

### 5️⃣ Configure Web Server
Point your web server’s **document root** to the `wp/` directory.

---

## 📂 Project Structure
```
├── wp/                 # WordPress core installation
├── content/            # Plugins & themes directory
│   ├── plugins/        # Installed plugins
│   ├── themes/         # Installed themes
│   ├── vendor/         # Composer dependencies
├── .env.example        # Environment config template
├── .gitignore          # Files to be ignored in Git
├── .htaccess           # Apache configuration (if needed)
├── composer.json       # Composer configuration
├── index.php           # Entry point for WordPress
├── wp-config.php       # WordPress configuration
```

---

## 🔌 Managed Dependencies

- **WordPress Core**: `johnpbloch/wordpress`
- **Plugins**:
  - Amazon S3 & CloudFront (`wpackagist-plugin/amazon-s3-and-cloudfront`)
  - Contact Form 7 (`wpackagist-plugin/contact-form-7`)
  - Wordfence Security (`wpackagist-plugin/wordfence`)
  - Yoast SEO (`wpackagist-plugin/wordpress-seo`)
  - WP Mail SMTP (`wpackagist-plugin/wp-mail-smtp`)
- **Theme**: GeneratePress (`wpackagist-theme/generatepress`)
- **Environment Management**: `vlucas/phpdotenv`

---

## 📜 License
This project is open-source and available under the **MIT License**.

---

## 📧 Support
For any issues or improvements, feel free to open a GitHub issue or submit a pull request.