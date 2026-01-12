# 📜 Drag0n Power Portal - Project Plan

## 1. Project Overview
**Name**: Drag0n Power Portal (`drag0n.ca`)
**Goal**: A central digital hub acting as a gateway to the organization's applications and mystical lore. It unifies the technical portfolio with the storytelling elements of the Drag0n universe.
**Repository**: `Drag0nPower/drag0n.ca`

## 2. Technical Architecture
*   **Backend**: PHP 8.3+ (Lightweight, no heavy frameworks).
*   **Data Storage**: JSON files for static content (Projects, Lore snippets); MySQL (Optional/Future) if dynamic user data is needed.
*   **Frontend**: HTML5, CSS3 (Custom, Semantic, Responsive).
*   **Hosting**: Standard LAMP/LEMP stack.

## 3. Roadmap & Phases

### 📅 Phase 1: The Foundation (Current)
**Objective**: Establish the core file structure and display the organization's projects.
*   [ ] **Structure**: Set up `index.php`, `includes/`, `assets/`.
*   [ ] **Data**: Create `data/projects.json` to store project metadata.
*   [ ] **Logic**: Write PHP functions to parse and display projects.
*   [ ] **Design**: Implement the "Technomancer" aesthetic (Dark mode, mystical elements).

### 🔮 Phase 2: Lore Integration
**Objective**: Connect the portal to the broader narrative ecosystem.
*   [ ] **Blog Feed**: Implement a simple RSS parser to fetch headlines from `blog.drag0n.ca`.
*   [ ] **Project Æ Teaser**: Create a dynamic section that fetches status/prophecies from `ae.drag0n.ca` (or shared JSON).
*   [ ] **Mystic Elements**: Add subtle CSS animations or "secrets" in the UI.

### 🚀 Phase 3: Polish & Expansion
**Objective**: Optimize for production and future growth.
*   [ ] **SEO**: Meta tags, Open Graph data, Sitemap.
*   [ ] **Performance**: Asset minification, caching headers.
*   [ ] **Accessibility**: Ensure WCAG compliance.

## 4. File Structure
```text
drag0n.ca/
├── .gemini/          # AI Context & Prompts
├── assets/
│   ├── css/          # Stylesheets
│   ├── images/       # Graphics & Icons
│   └── js/           # Client-side scripts (minimal)
├── data/
│   └── projects.json # Project metadata
├── docs/             # Documentation
├── includes/
│   ├── header.php    # Common top section
│   ├── footer.php    # Common bottom section
│   └── functions.php # Helper logic
├── index.php         # Main Entry Point
└── README.md
```

## 5. Coding Standards
*   **PHP**: Strict typing where possible, secure input handling.
*   **HTML**: Semantic tags (`<header>`, `<main>`, `<article>`).
*   **CSS**: Mobile-first, organized by component.