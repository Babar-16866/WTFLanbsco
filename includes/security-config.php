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
  'recaptcha_site_key'   => '6LdcrScuAAAAAM3Z8Llk-VJwej9EIH_RJhIzqc8Z',
  'recaptcha_secret_key' => '6LdcrScuAAAAAB95Mw0OjVDfmuF2DnMTY_tZszjO',

  'stytch_project_id'    => 'project-test-bd89f3fb-3a49-47f0-a841-1964f55144a4',
  'stytch_secret'        => 'secret-test-byxixdJiSQBNifIpDDZG-FdV_KMYGNEVNYQ=',
];
