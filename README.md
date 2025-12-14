# hrs.jobs - Free Job Board and Job Posting Platform

A modern, dark-themed, and SEO-optimized multi-page website serving as a job board with a focus on free job posting for recruiters and a clean job search experience for candidates.

## 🌟 Features

* **Multi-Page Structure:** Includes Home (`index.html`), About (`about.html`), Contact (`contact.html`), and FAQs (`faqs.html`).
* **Modern Design:** Sleek, dark-themed aesthetic using pure CSS.
* **Fully Responsive:** Optimized for desktop, tablet, and mobile devices (includes a responsive collapsible sidebar).
* **Job Filtering:** Real-time client-side job search functionality on the homepage.
* **SEO Optimized:** Aggressive keyword implementation across all pages to target "Free Job Posting," "Job Board," and "Remote Jobs."
* **Clean Codebase:** Minimized redundant code, with all JavaScript functions consolidated into `script.js`.

## 📂 Project Structure

hrs.jobs/
├── index.html          # Homepage (Job Listings & Search)
├── about.html          # About Us Page
├── contact.html        # Contact Page (Email links)
├── faqs.html           # Frequently Asked Questions (Accordion)
├── styles.css          # Primary CSS styles
├── script.js           # JavaScript for job filtering and sidebar functionality
├── README.md           # This file
└── assets/             # Directory for images (logos, etc.)
└── logos/
└── *.png       # Placeholder company logos
## 🛠️ Setup and Installation

This is a static HTML/CSS/JS website and requires no backend setup.

1.  **Clone the Repository:**
    ```bash
    git clone [Your Repository URL]
    ```
2.  **Navigate to the Directory:**
    ```bash
    cd hrs.jobs
    ```
3.  **Run Locally:**
    Open the `index.html` file directly in any modern web browser (Chrome, Firefox, Edge).

## 💡 Customization Guide

### 1. Job Data Management (`script.js`)

To add new job listings, edit the `jobData` array at the top of `script.js`:

```javascript
const jobData = [
    // Add your new job object here:
    {
        id: 4,
        title: "New Role Title",
        company: "New Company Name",
        logo: "assets/logos/new_logo.png", // Must exist in the assets/logos folder
        experience: "Mid-Level (2-4 yrs)",
        salary: "Negotiable",
        location: "City, Country / Remote",
        fresher: false,
        keywords: "backend, python, django, remote",
        applyLink: "[https://yourcompany.com/application-link](https://yourcompany.com/application-link)"
    },
    // ... existing jobs
];

2. Styling (styles.css)
Colors and themes can be quickly modified by changing the variables in the :root block:
:root {
    --color-primary: #FFD833; /* Change this for main accent color */
    --color-background-dark: #111111; /* Change this for main background */
    --color-subscribe-cta: #E74C3C; /* Change this for the red CTA button */
    /* ... other variables */
}

3. Contact Emails
Ensure you update the placeholder email links in all HTML files:
 * mailto:hrs.team.a@gmail.com (Used for job posting requests).
 * [Your_Partnership_Email] (In contact.html).
 * [Your_Support_Email] (In contact.html).
