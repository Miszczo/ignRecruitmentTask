<?php
if (!defined('ABSPATH')) {
    exit;
}

// Prepare and sanitize data for the card partial (right column)
$brand_badge_text = sanitize_text_field(get_field('brand_badge_text') ?: 'SUPERBET');
$header_label = sanitize_text_field(get_field('header_label') ?: __('Kod promocyjny', 'acf-block'));
$old_threshold = trim((string) get_field('old_threshold'));
$main_amount = (float) get_field('main_amount');
$bonus_amount = (float) get_field('bonus_amount');
$bonus_unit = sanitize_text_field(get_field('bonus_unit') ?: 'PLN');
$amount_note = sanitize_text_field(get_field('amount_note') ?: __('więcej na start', 'acf-block'));
$promo_code = sanitize_text_field(get_field('promo_code') ?: '');
$cta_label = sanitize_text_field(get_field('cta_label') ?: __('Odbierz kod', 'acf-block'));
$cta_url = esc_url_raw(get_field('cta_url') ?: '#');
$cta_new_tab = (bool) get_field('cta_new_tab');
$benefits_title = sanitize_text_field(get_field('benefits_title') ?: __('Co otrzymasz z kodem?', 'acf-block'));
$offer_valid_until = sanitize_text_field(get_field('offer_valid_until'));
$legal_note = sanitize_text_field(get_field('legal_note') ?: __('Legalny Polski Bukmacher', 'acf-block'));
$show_outline = (bool) get_field('show_outline');
$accent_color = get_field('accent_color') ?: '#00A83F';
$accent_color = sanitize_hex_color($accent_color) ?: '#00A83F';

// Prepare assets URL
$assets_url = plugin_dir_url(__FILE__) . 'assets/';

// Prepare benefits data from repeater
$benefits = [];
if (have_rows('benefits_lines')) {
	while (have_rows('benefits_lines')) {
		the_row();
		$benefits[] = [
			'amount'      => sanitize_text_field(get_sub_field('benefit_amount')),
			'description' => sanitize_text_field(get_sub_field('benefit_description')),
		];
	}
}

$target = $cta_new_tab ? '_blank' : '_self';

?>
<div class="promo-section">
  <div class="promo-section__inner">
    <div class="promo-section__col promo-section__col--left">
      <?php include __DIR__ . '/partials/header.php'; ?>
    </div>
    <div class="promo-section__col promo-section__col--right">
      <?php include __DIR__ . '/partials/card.php'; ?>
    </div>
  </div>
</div>


