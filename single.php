<?php

/**
 * The Template for displaying all single posts
 * *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context         = Timber::get_context();
$timber_post     = Timber::get_post();
$context['post'] = $timber_post;
Timber::render(array('single-' . $timber_post->ID . '.twig', 'single-' . $timber_post->post_type . '.twig', 'single-' . $timber_post->slug . '.twig', 'single.twig'), $context);