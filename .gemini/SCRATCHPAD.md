# 📝 Developer Scratchpad

## 🔮 Phase 2: Lore Integration (Immediate To-Do)

### 1. RSS Feed Integration (The Scrolls)
- [ ] **Research**: Confirm structure of `blog.drag0n.ca` feed (Standard RSS/XML).
- [ ] **Backend**: Create `includes/FeedReader.php` (or add to `functions.php`).
    - Needs `fetch_feed($url)` function.
    - **Crucial**: Implement simple file-based caching (e.g., cache for 1 hour) to prevent slow page loads and blocking.
- [ ] **Frontend**: Add "Latest from the Scrolls" section to `index.php`.

### 2. Project Æ Status (The Prophecy)
- [ ] **Data**: Create `data/ae_status.json`.
    - Fields: `status` (e.g., "Dormant", "Stirring"), `message`, `last_update`.
- [ ] **Backend**: Add `get_ae_status()` to `includes/functions.php`.
- [ ] **Frontend**: Add a "Prophecy" widget to `index.php` that reads this file.

### 3. Visual Polish ("Technomancer" Style)
- [ ] Add subtle CSS glow effects to the new sections.
- [ ] Ensure mobile responsiveness for the feed list.