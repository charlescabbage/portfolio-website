<?php
/**
 * The header template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage ExS
 * @since 0.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//meta
$exs_meta = exs_get_theme_meta();

$exs_fluid              = exs_option( 'topline_fluid' ) ? '-fluid' : '';
$exs_topline_background = exs_option( 'topline_background', '' );
if ( is_page_template( 'page-templates/header-overlap.php' ) ) {
	$exs_topline_background = 'i';
}
$exs_font_size          = exs_option( 'topline_font_size', '' );
$exs_login_links        = exs_option( 'topline_login_links' );
$disable_dropdown       = exs_option( 'topline_disable_dropdown', '' );
?>
<div id="topline" class="topline <?php echo esc_attr( $exs_topline_background . ' ' . $exs_font_size ); ?>">
	<div class="container<?php echo esc_attr( $exs_fluid ); ?>">
		<?php if ( ! empty( $exs_meta ) ) : ?>
			<?php if ( empty( $disable_dropdown ) ) : ?>
			<div id="topline_dropdown" class="dropdown">
				<button id="topline_dropdown_toggle" class="nav-btn type-dots"
						aria-controls="topline_dropdown"
						aria-expanded="false"
						aria-label="<?php esc_attr_e( 'Topline Info Toggler', 'exs' ); ?>"
						<?php if ( defined( 'AMP__VERSION' ) ) : ?>
						on="tap:topline_dropdown.toggleClass(class='active'),topline_dropdown_toggle.toggleClass(class='active'),body.toggleClass(class='topline-dropdown-active')"
						<?php endif; ?>
				>
					<span></span>
				</button>
				<span class="dropdown-menu dropdown-menu-md site-meta">
				<?php else: ?>
				<span class="site-meta">
				<?php endif; //disable_dropdown ?>
				<?php if ( ! empty( $exs_meta['phone'] ) ) : ?>
					<span class="icon-inline">
					<?php exs_icon( 'phone-outline' ); ?>
						<span>
							<?php if ( ! empty( $exs_meta['phone_label'] ) ) : ?>
								<strong><?php echo wp_kses_post( $exs_meta['phone_label'] ); ?></strong>
							<?php endif; ?>
							<span><?php echo wp_kses_post( $exs_meta['phone'] ); ?></span>
						</span>
					</span>
					<?php
				endif; //phone
				if ( ! empty( $exs_meta['email'] ) ) :
					?>
					<span class="icon-inline">
					<?php exs_icon( 'email-outline' ); ?>
						<span>
							<?php if ( ! empty( $exs_meta['email_label'] ) ) : ?>
								<strong><?php echo wp_kses_post( $exs_meta['email_label'] ); ?></strong>
							<?php endif; ?>
							<a href="mailto:<?php echo esc_attr( $exs_meta['email'] ); ?>"><?php echo wp_kses_post( $exs_meta['email'] ); ?></a>
						</span>
					</span>
					<?php
				endif; //email
				if ( ! empty( $exs_meta['address'] ) ) :
					?>
					<span class="icon-inline">
					<?php exs_icon( 'map-marker-outline' ); ?>
						<span>
							<?php if ( ! empty( $exs_meta['address_label'] ) ) : ?>
								<strong><?php echo wp_kses_post( $exs_meta['address_label'] ); ?></strong>
							<?php endif; ?>
							<span><?php echo wp_kses_post( $exs_meta['address'] ); ?></span>
						</span>
					</span>
					<?php
				endif; //address
				if ( ! empty( $exs_meta['opening_hours'] ) ) :
					?>
					<span class="icon-inline">
					<?php exs_icon( 'clock-outline' ); ?>
						<span>
							<?php if ( ! empty( $exs_meta['opening_hours_label'] ) ) : ?>
								<strong><?php echo wp_kses_post( $exs_meta['opening_hours_label'] ); ?></strong>
							<?php endif; ?>
							<span><?php echo wp_kses_post( $exs_meta['opening_hours'] ); ?></span>
						</span>
					</span>
				<?php endif; //opening_hours ?>
				</span><!-- .site-meta -->
				<?php if ( empty( $disable_dropdown ) ) : ?>
			</div><!-- #topline_dropdown -->
			<?php
			endif; //disable_dropdown

		endif; //! empty meta

		if ( ! empty( $exs_login_links ) ) :
			get_template_part( 'template-parts/header/login-links' );
		endif; //search

		exs_social_links();

		?>
	</div><!-- .container -->
</div><!-- #topline -->
