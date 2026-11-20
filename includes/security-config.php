<?php
/**
 * Spam protection and phone verification keys.
 *
 * Google reCAPTCHA v2 ("I'm not a robot" checkbox): https://www.google.com/recaptcha/admin
 * textbee.dev SMS codes: textbee dashboard > API key, and the Device ID of the connected phone.
 *
 * Leave a value empty to switch that feature off.
 */
return [
  'recaptcha_site_key'   => '',
  'recaptcha_secret_key' => '',

  'textbee_api_key'      => '',
  'textbee_device_id'    => '',
];
