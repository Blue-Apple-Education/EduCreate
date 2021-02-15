<?php

/**
 * *
 * Template Name: Page Builder
 * Description: EduCreate Template for: ACF PRO Flexible Content Page Builder
 *
 * @package Wordpress
 * @subpackage Timber
 * @since 2021
 *
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;

Timber::render('views/page-builder.twig', $context);