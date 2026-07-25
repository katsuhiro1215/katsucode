<?php

/**
 * Katsucode WordPress Theme Setup
 * 
 * @author Katsuhiro Kakoi <katsuhiro.k1215@katsucode.jp>
 * @link  https://katsucode.jp/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later * 
 */
if (!defined('ABSPATH')) exit;

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/filters.php';
require get_template_directory() . '/inc/breadcrumbs.php';
require get_template_directory() . '/inc/plugins.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/acf-fields.php';
