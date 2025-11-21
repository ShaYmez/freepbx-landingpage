# FreePBX Landing Page

A custom landing page for FreePBX 17 designed to provide users with a branded, user-friendly interface when accessing your PBX server.

## Features

- Branded welcome screen for FreePBX.
- Easily customizable content and styles (logo, text, colors).
- Lightweight and fast – minimal dependencies.
- Responsive design for all device types.

## Screenshots

Here are examples of what your FreePBX landing page can look like:
![Welcome Screen](images/screenshot1.png)
*Fully branded main welcome view.*

![Mobile View](images/screenshot2.png)
*Responsive design on mobile devices.*
   
### Prerequisites

- FreePBX instance (recommended: latest release)
- Web server access (Apache, Nginx, etc.)
- PHP installed and enabled

### Installation

1. Clone the repository to your FreePBX server web root or preferred location:
    ```bash
    git clone https://github.com/ShaYmez/freepbx-landingpage.git
    ```
2. Customize the landing page:
    - Edit `index.php` to set your welcome message, branding, and other settings.
    - Replace `logo.png` with your organization's logo.
    - Edit CSS styles in `styles.css` to match your branding.
3. Set up your web server to point to the new landing page directory.

### Example Usage

Once installed, visiting your PBX server's address in a browser will display your customized landing page.

## Customization

- **Logo:** Replace the `logo.png` file in the project directory.
- **Text:** Edit `index.php` to update heading, description, support information, etc.
- **Style:** Tweak `styles.css` for colors, layout, or branding elements.

## Contributing

Contributions and suggestions are welcome! Please open an issue or submit a pull request.

## Author

**ShaYmez (M0VUB)**  
[GitHub Profile](https://github.com/ShaYmez)  
[FreeSTAR](https://freestar.network)

---

Want to help improve this project or request more features? Open an issue or get in touch!
