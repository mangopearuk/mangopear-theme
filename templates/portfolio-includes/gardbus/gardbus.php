<?php

	/**
	 * Template include: [Portfolio] Gardbus: Gardbus landing
	 *
	 * @category 	Template include
	 * @package  	mangopear
	 * @author  	Andi North <andi@mangopear.co.uk>
	 * @copyright  	2016 Mangopear creative
	 * @license   	GNU General Public License <http://opensource.org/licenses/gpl-license.php>
	 * @version  	3.0.0
	 * @link 		https://mangopear.co.uk/
	 * @since   	2.0.0
	 */
	
?>


	<header class="u-clearfix  o-header--portfolio  o-header--portfolio--gardbus">
		<div class="c-portfolio-header__gradient"></div>
		

		<div class="c-portfolio-header__content">
			<h1 class="c-portfolio-header__title">Gardbus</h1>
			<h2 class="c-portfolio-header__title--sub">A Mangopear Creative client</h2>
			<h3 class="c-portfolio-header__descriptor">A collection of lovingly cared for projects skillfully undertaken by Mangopear for Ringwood's local bus operator.</h3>
		</div><!-- /.c-portfolio-header__content -->
	</header>





	<main class="o-panel">
		<div class="o-container">
			<div class="o-grid">
				<div class="o-grid__item  u-two-thirds  u-portable--one-whole">
					<div class="o-container  o-container--optimise-readability  o-container--align-left">
						<?php

							/**
							 * Output page content loop
							 *
							 * @see /themes/hildon/functions/source/hildon/hildon.output.page-content.php
							 */
							
							mangopear_output_page_content();

						?>
					</div><!-- /.o-container -->
				</div><!-- /.o-grid__item -->





				<aside class="o-grid__item  u-one-third  u-portable--one-whole  c-portfolio-sidebar">
					<?php mangopear_component_visit_website__default(get_the_ID()); ?>
				</aside><!-- /.o-grid__item -->
			</div><!-- /.o-grid -->
		</div><!-- /.o-container -->
	</main><!-- /.o-panel -->