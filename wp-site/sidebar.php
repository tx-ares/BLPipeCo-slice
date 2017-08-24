<!-- ******************************************************* -->
<!-- Aside Content -->
<!-- ******************************************************* -->
<div class="col-md-4 col-sm-5 col-xs-12 aside">
	<div class="container-fluid">
			<!-- Sidebar General -->
			<?php if ( is_active_sidebar( 'sidebar_general' ) ) : ?>
				<?php dynamic_sidebar( 'sidebar_general' ); ?>
			<?php endif; ?>
			
			<!-- Side Navigation -->
			<div class="side-nav">
					<?php g2is_menu_list_pages(); ?>
			</div>
	</div>
</div>