<?php if ( ashe_options('header_image_label') === true ) : ?>

<div class="entry-header">
	<div class="cv-outer">
		<div class="cv-inner">
			<div class="header-logo">

			<?php if ( has_custom_logo() ) :

				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo = wp_get_attachment_image_src( $custom_logo_id , 'small' );

				?>

				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( "Chic Dressing" ); ?>" class="logo-img">
					<span class="custom-title">Chic Dressing</span>
				</a>

				<?php // SEO Hidden Title

				if ( true === ashe_options( 'title_tagline_seo_title' ) ) {
					echo ( is_home() || is_front_page() || is_category() || is_search() ) ? '<h1 style="display: none;">Chic Dressing</h1>' : '';
				}

			?>

			<?php else : ?>

				<?php if ( is_home() || is_front_page() ) : ?>
					<a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-a"><span class="custom-title">Chic Dressing</span></a>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-a"><span class="custom-title">Chic Dressing</span></a>
				<?php endif; ?>

			<?php endif; ?>

			<p class="site-description"><?php echo bloginfo( 'description' ); ?></p>

			</div>
		</div>
	</div>
</div>

<?php endif; ?>
