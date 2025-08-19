<?php
if (!defined('ABSPATH')) {
	exit;
}

// Zmiennie powinny być dostarczone przez promo-section/render.php (sanityzowane)
?>
<div class="promo-card" style="--accent: <?php echo esc_attr($accent_color); ?>;">
	<div class="promo-card__body">
		<div class="promo-card__main-offer">
			<div class="promo-card__head">
				<span class="promo-card__label"><?php echo esc_html($header_label); ?></span>
				<span class="promo-card__brand-badge" role="img" aria-label="<?php echo esc_attr($brand_badge_text); ?>" style="--bg-image-url: url('<?php echo esc_url($assets_url . 'superbet.svg'); ?>');"></span>
			</div>
			<div class="promo-card__value-wrapper">
				<div class="promo-card__value-content">
					<?php if ($old_threshold !== ''): ?>
						<span class="promo-card__old-pill">
							<?php echo esc_html($old_threshold); ?>
						</span>
					<?php endif; ?>
					<div class="promo-card__amount">
						<span class="promo-card__amount-main"><?php echo esc_html(number_format_i18n((float) $main_amount, 0)); ?></span>
						<div class="promo-card__amount-extra">
							<span class="promo-card__bonus">+<?php echo esc_html(number_format_i18n((float) $bonus_amount, 0)); ?> <?php echo esc_html($bonus_unit); ?></span>
							<span class="promo-card__note"><?php echo esc_html($amount_note); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="promo-card__details">
			<?php if ($benefits_title): ?>
				<h3 class="promo-card__benefits-title"><?php echo esc_html($benefits_title); ?></h3>
			<?php endif; ?>

			<?php if (!empty($benefits)) : ?>
				<ul class="promo-card__benefits" role="list">
					<?php foreach ($benefits as $benefit) : ?>
						<li class="benefit">
							<span class="benefit__icon" aria-hidden="true" style="--bg-image-url: url('<?php echo esc_url($assets_url . 'green-tick.svg'); ?>');"></span>
							<span class="benefit__desc">
								<?php if (!empty($benefit['amount'])) : ?>
									<span class="benefit__amount"><?php echo esc_html($benefit['amount']); ?> </span>
								<?php endif; ?>
								<?php echo esc_html($benefit['description']); ?>
							</span>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>

			<div class="mt-auto">
				<div class="promo-card__cta-wrapper">
					<div class="promo-card__code-pill">
						<span class="promo-card__code"><?php echo esc_html(strtoupper($promo_code)); ?></span>
					</div>
					<a class="btn btn-primary btn--pill" href="<?php echo esc_url($cta_url); ?>" target="<?php echo esc_attr($target); ?>" <?php echo $target === '_blank' ? 'rel="noopener"' : ''; ?>>
						<span class="btn__label"><?php echo esc_html($cta_label); ?></span>
						<svg class="btn__icon-svg" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="28" cy="28" r="28" fill="#F3F6F9" />
							<path d="M20 36L36 20M36 20H24M36 20V32" stroke="#00a83f" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</a>
				</div>
				<div class="promo-card__footer">
					<?php if (!empty($offer_valid_until)): ?>
						<span class="promo-card__offer" style="--icon-url: url('<?php echo esc_url($assets_url . 'calendar.svg'); ?>');"><?php echo esc_html(sprintf(__('oferta ważna do %s', 'acf-block'), $offer_valid_until)); ?></span>
					<?php endif; ?>
					<span class="promo-card__legal" style="--icon-url: url('<?php echo esc_url($assets_url . 'football.svg'); ?>');"><?php echo esc_html($legal_note); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>


