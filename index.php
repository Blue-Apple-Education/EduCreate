<?php

/**
 * The main template file
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$context          = Timber::context();
$context['posts'] = new Timber\PostQuery();
$context['foo']   = 'bar';
$context['options'] = get_fields('options');
$templates        = array('index.twig');
if (is_home()) {
	array_unshift($templates, 'front-page.twig', 'home.twig');
}
Timber::render($templates, $context);