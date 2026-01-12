# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
### Added
- Initial project structure (`includes/`, `assets/`, `data/`).
- `data/projects.json` to store project metadata.
- `includes/functions.php` with JSON parsing and security helpers.
- `includes/header.php` and `includes/footer.php` for modular layout.
- `assets/css/style.css` with "Technomancer" dark mode styling.
- `index.php` main entry point with dynamic project listing.
- `.htaccess` for security and directory index configuration.
- Documentation: `README.md`, `docs/PROJECT_PLAN.md`.
- AI Context: `.gemini/PERSONA.md`, `.gemini/CONTEXT.md`, `.gemini/GEMINI.md`.

### Changed
- Updated `README.md` to reflect the new organization profile.
- Updated `index.php` to open project links in a new tab (`target="_blank"`).
- Updated `.gemini/GEMINI.md` and `.gemini/CONTEXT.md` to include `CHANGELOG.md` maintenance in the workflow.
- Populated `.gemini/SCRATCHPAD.md` with actionable tasks for Phase 2.