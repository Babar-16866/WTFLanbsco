<?php
/**
 * Spam protection and phone verification keys.
 *
 * Google reCAPTCHA v2 ("I'm not a robot" checkbox): https://www.google.com/recaptcha/admin
 * Firebase phone verification: Firebase console > Project settings > Your apps (Web app config).
 *
 * Leave a value empty to switch that feature off.
 */
return [
  'recaptcha_site_key'   => '',
  'recaptcha_secret_key' => '',

  'firebase_api_key'     => '',
  'firebase_auth_domain' => '',
  'firebase_project_id'  => '',
  'firebase_app_id'      => '',
];
