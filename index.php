<?php
require_once 'includes/functions.php';

$domainName = "drag0n.ca";
$siteName = "Drag0n Power";
$contactEmail = "hello@" . $domainName;

$projects = get_projects();

require 'includes/header.php';
?>

        <h1><?php echo h($siteName); ?></h1>
        
        <p class="subtitle">
            We are currently forging our digital lair.<br>
            Check back soon.
        </p>

        <a href="mailto:<?php echo h($contactEmail); ?>" class="contact-btn">
            Contact Us
        </a>

        <?php foreach ($projects as $project): ?>
            <a href="<?php echo h($project['url']); ?>" class="mystic-link" target="_blank" rel="noopener noreferrer" title="<?php echo h($project['description']); ?>">
                <?php echo h($project['name']); ?>
            </a>
        <?php endforeach; ?>

<?php require 'includes/footer.php'; ?>