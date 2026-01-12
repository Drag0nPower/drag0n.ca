<?php

/**
 * Helper function to safely escape HTML output.
 * Prevents XSS attacks by converting special characters to HTML entities.
 *
 * @param string|null $string The string to escape.
 * @return string The escaped string.
 */
function h(?string $string): string
{
    return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
}

/**
 * Fetch projects from the JSON data file.
 *
 * @return array An array of project data, or an empty array if error.
 */
function get_projects(): array
{
    // Define path relative to this file
    $jsonFile = __DIR__ . '/../data/projects.json';

    if (!file_exists($jsonFile)) {
        return [];
    }

    $jsonContent = file_get_contents($jsonFile);
    $projects = json_decode($jsonContent, true);

    // Return empty array if JSON is invalid
    return (json_last_error() === JSON_ERROR_NONE && is_array($projects)) ? $projects : [];
}