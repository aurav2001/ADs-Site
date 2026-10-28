# BGMI APK Pro - High-CTR Gaming & APK Download WordPress Theme

An ultra-fast, SEO-friendly, high-converting WordPress Theme & Website layout inspired by [bgminewapk.com](https://bgminewapk.com/), specially designed for Battlegrounds Mobile India (BGMI), Free Fire, and Android gaming APK portals.

---

## 🚀 Key Features

- **Signature Visual Design**:
  - Deep Royal Purple banner titles (`#5B12BE`) with drop shadows.
  - Vibrant Electric Blue CTA action buttons (`#0086FF`) with hover transitions.
  - Core Download Specification Card (`.box2`) with app logo, version badges, requirements, and file sizes.
- **Interactive 10-Second Download Timer**:
  - High-retention countdown timer with high-CTR ad placement before generating direct APK & OBB download links.
- **Monetization & AdSense Ready**:
  - 728x90 Header leaderboard ad slot
  - In-Feed native ad unit between homepage cards
  - In-Article top and bottom display ad units
  - High-CTR ad slot within the download countdown timer
  - 300x250 / 300x600 Sticky sidebar banner unit
- **SEO & Rich Snippets**:
  - Pre-configured `SoftwareApplication` JSON-LD structured data (Google Rich Snippets ready).
  - Built-in FAQ Accordion with Schema.org formatting.
  - Numbered step-by-step installation guide format.
- **Full WordPress Theme**:
  - Located in [`wp-theme-bgmi-apk/`](./wp-theme-bgmi-apk/)
  - Custom Meta Box for APK details (App Name, Version, Size, OBB, Requirements, Play Store link, Download links).
  - Navigation menus, widget areas, responsive mobile drawer, and floating back-to-top button.

---

## 📂 Project Structure

```
├── index.html                   # Standalone browser preview for Homepage
├── single-post.html             # Standalone browser preview for Single APK Post
├── server.js                    # Zero-dependency local Node.js server (port 3000)
├── wp-theme-bgmi-apk/           # Complete WordPress Theme
│   ├── style.css                # Full responsive styles & theme definitions
│   ├── functions.php            # Theme setup, custom APK fields, shortcodes
│   ├── header.php               # Sticky header, search modal, top banner
│   ├── footer.php               # 3-column footer, DMCA notice, copyright
│   ├── index.php                # 2-column post cards grid, pagination, sidebar
│   ├── single.php               # APK download page, countdown timer, specs table
│   ├── page.php                 # Generic content page template (DMCA, About)
│   ├── sidebar.php              # Trending games, search, sticky ad slot
│   ├── screenshot.png           # WordPress theme dashboard preview
│   └── assets/
│       ├── css/
│       ├── js/main.js           # Countdown timer, mobile menu, FAQ accordion
│       └── images/              # Game banners & high-res app icon
└── README.md
```

---

## 💻 How to Run Locally

```bash
node server.js
```
Then visit [http://localhost:3000/](http://localhost:3000/) in your browser.

---

## 📦 How to Install on WordPress

1. Zip the `wp-theme-bgmi-apk` folder.
2. Go to your WordPress Admin Dashboard: **Appearance > Themes > Add New > Upload Theme**.
3. Choose the zip file and click **Install Now > Activate**.
