<?php

// phpcs:ignoreFile

// DDEV-created Drupal 10 settings.php from upstream default.settings.php

/**
 * Database settings:
 */
$databases = [];

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * The default number of entities to update in a batch process.
 */
$settings['entity_update_batch_size'] = 50;

/**
 * Entity update backup.
 */
$settings['entity_update_backup'] = TRUE;

/**
 * State caching.
 */
$settings['state_cache'] = TRUE;

/**
 * Node migration type.
 */
$settings['migrate_node_migrate_type_classic'] = FALSE;

// Automatically generated include for settings managed by ddev.
if (getenv('IS_DDEV_PROJECT') == 'true' && file_exists(__DIR__ . '/settings.ddev.php')) {
  include __DIR__ . '/settings.ddev.php';
}
