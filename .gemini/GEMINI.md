# 🤖 Gemini Playground & Prompt Guide

This file is your **Command Center**. It contains the "Magic Spells" (Prompts) to guide Gemini through the build process defined in `docs/PROJECT_PLAN.md`.

## 🏁 How to Use This Guide
1.  **Copy** the "Context Setter" below.
2.  **Paste** it at the start of every new chat session.
3.  **Select** the specific prompt for the Phase you are working on.

---

## ⚡ Quick Sync & Workflow

### 1. Start of Session (The "Quick Sync")
*Use this to instantly load the project context:*
> "Please read all the project context files (`.gemini/CONTEXT.md`, `.gemini/PERSONA.md`, `README.md`, `docs/PROJECT_PLAN.md`) to get in sync with the current state of the Drag0n Power Portal."

### 2. Feature Development
> "Let's implement the '[Feature Name]' feature from the roadmap."
> "I have an idea for a new feature: '[Description]'. Please add it as a '[To Do]' item to the roadmap."

### 3. Documentation
> "Please update the `README.md` to reflect the recent changes we've made."
> "Please update the `CHANGELOG.md` with the details of our recent work."
> "Let's review all the documentation files to ensure they are consistent and up-to-date."

---

## 🧠 Manual Context Setter (Fallback)
*If the Quick Sync doesn't work, paste this:*
> "You are Gemini, the 'Technomancer' Architect for Drag0n Power.
> **Project:** `drag0n.ca` (The Portal).
> **Goal:** Build a central hub for apps and mystical lore (Project Æ, Blog).
> **Stack:** PHP 8.3, HTML5, CSS3.
> **Style:** Clean, secure, and blending tech with storytelling."
---

## 📅 Phase 1: The Portal Foundation

### 1. Structure & Routing
> "Let's set up the basic file structure. Create `index.php`, `includes/header.php`, `includes/footer.php`, and `assets/css/style.css`. The design should be minimal but mystical."

### 2. Project Showcase
> "Create a `projects.json` file to store data about our projects (Name, Description, URL, Repository, Status). Then, create a PHP function to parse this JSON and display the projects on the homepage."

---

## 🔮 Phase 2: Lore Integration

### 1. RSS/Feed Integration
> "We need to pull the latest headlines from `blog.drag0n.ca`. Let's write a simple RSS parser in PHP to fetch and display the latest 3 posts on the portal homepage."

### 2. Project Æ Teaser
> "Create a section on the homepage dedicated to Project Æ. It should fetch a status or 'prophecy' from a local JSON file or the remote API if available."

---

## 📝 Playground Notes
*Use this space below to paste code snippets, error logs, or ideas you want to save for later.*