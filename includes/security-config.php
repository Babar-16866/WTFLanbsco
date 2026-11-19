<?php
/**
 * Spam protection and phone verification keys.
 *
 * Google reCAPTCHA v2 ("I'm not a robot" checkbox): https://www.google.com/recaptcha/admin
 * Stytch SMS codes (free for US and Canada numbers): Stytch dashboard > Project ID & API keys.
 *
 * Leave a value empty to switch that feature off.
 */
return [
  'recaptcha_site_key'   => '',
  'recaptcha_secret_key' => '',

  'stytch_project_id'    => 'project-live-760dabda-2a08-4f7c-92eb-a970c9877135',
  'stytch_secret'        => 'secret-live-6Y8wQsMomSdMQf3KxL48347bgeMsdL3oVD4=',
];
