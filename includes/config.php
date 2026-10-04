<?php
/**
 * Shared page defaults. Set $page_title / $current_page before including header.
 */
if (defined('CB_LOADED')) {
  return;
}
define('CB_LOADED', true);

if (!defined('BASE')) {
  define('BASE', '');
}

$page_title = $page_title ?? 'WTF Labs - Where Trends Form';
$page_description = $page_description ?? 'WTF Labs - Earn trust from buyers, partners, and investors. One senior team from strategy to launch.';
$current_page = $current_page ?? 'home';
$show_cookies = $show_cookies ?? true;
$page_palette = $page_palette ?? 'index2';
