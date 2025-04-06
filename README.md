# Simple Essence Theme

A stripped-down, developer-first WordPress theme built for performance, clarity, and full control.

**Simple Essence** removes the bloat of the standard WordPress frontend—no unnecessary styles, scripts, or head clutter. It's designed as a lightweight foundation for developers who want a clean slate to build custom themes without fighting default behaviors.

---

## 🚀 Features

### ✅ Adds Support For:
- `title-tag` — Dynamic page titles
- `automatic-feed-links` — RSS feed support
- `post-thumbnails` — Featured images
- `html5` markup for:
  - comment list
  - comment form
  - search form
  - galleries
  - captions

### ❌ Removes:
- WordPress version from RSS and HTML output
- Emoji scripts and styles
- REST API and oEmbed discovery links in `<head>`
- Shortlinks and remote service links (RSD, WLWManifest)
- Default RSS feed links from `<head>`
- Default auto image sizing styles
- Block editor styles:
  - `wp-block-library`
  - `wp-block-library-theme`
  - `wc-block-style` (WooCommerce)
  - `global-styles`
  - `classic-theme-styles`

---

## 📁 Theme Structure

```text
simple-essence/
├── functions.php               # Main functions file, where we include files from the includes folder
├── index.php                   # Main template router
├── style.css                   # Theme info + optional minimal styles
├── screenshot.jpg              # Theme image
├── page-templates/
│   ├── 404.php                 # Custom 404 template
│   ├── archive.php             # Loop for archives
│   ├── search.php              # Search results layout
│   └── single.php              # Single post/page layout
├── includes/
│   ├── theme-support.php       # Theme support functions (e.g., title-tag, post-thumbnails)
│   ├── optimizations.php       # Optimization-related code (e.g., removing WordPress bloat)
│   └── custom-functions.php    # Custom helper functions or additional customizations
├── header.php                  # Site header markup
└── footer.php                  # Site footer markup
```

---

## 🛠️ Installation

1. Clone or download the theme:
```bash
git clone https://github.com/RickOnGitHub/simple-essence-theme.git
```
2. Move the folder to your WordPress wp-content/themes/ directory.

3. In your WordPress admin dashboard, go to Appearance → Themes and activate Simple Essence Theme.

---

## 📜 License
Simple Essence Theme is licensed under the GPLv2 or later.

```bash
Copyright (c) 2025 Rick van Oirschot
```
You are free to use, modify, and distribute this theme under the same license.

---

## 🙌 Contributing
Contributions, issues, and suggestions are welcome! Feel free to fork the project, open pull requests, or file issues in the GitHub repo.

---

## 💬 About the Author
Rick van Oirschot – Full-stack developer focused on performance-first, cleanly structured web experiences.