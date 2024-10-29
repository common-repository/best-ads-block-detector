<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit(0);

// Clear Database Stored data

// Connect to database via SQL

global $wpdb;
$wpdb->query( "DELETE FROM wpuy_posts WHERE post_type = 'BestAdsBlockDetector'" );
$wpdb->query( "DELETE FROM wpuy_postmeta WHERE post_id NOT IN (SELECT id FROM wpuy_posts)" );
$wpdb->query( "DELETE FROM wpuy_term_relationships WHERE object_id NOT IN (SELECT id FROM wpuy_posts)" );