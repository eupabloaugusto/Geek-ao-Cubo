<?php
/**
 * Molecule: Card de Personagem (card-personagem)
 *
 * Card de personagem com avatar, nome e tipo (Principal/Secundário).
 *
 * @package hello-elementor-child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$name         = isset( $args['name'] ) ? esc_html( $args['name'] ) : '';
$image_url    = isset( $args['image_url'] ) ? esc_url( $args['image_url'] ) : '';
$role         = isset( $args['role'] ) ? esc_html( $args['role'] ) : ''; // Principal, Secundário, etc.
$class        = isset( $args['class'] ) ? esc_attr( $args['class'] ) : '';
$aria_label   = isset( $args['aria_label'] ) ? esc_attr( $args['aria_label'] ) : sprintf( __( 'Personagem: %s', 'hello-elementor-child' ), $name );
?>
<div class="card-personagem <?php echo $class; ?>" aria-label="<?php echo $aria_label; ?>">
	<!-- Avatar do Personagem -->
	<?php if ( ! empty( $image_url ) ) : ?>
		<div class="card-personagem__avatar">
			<img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr( $name ); ?>" class="card-personagem__image" loading="lazy" />
		</div>
	<?php else : ?>
		<div class="card-personagem__avatar card-personagem__avatar--placeholder">
			<span class="card-personagem__placeholder"><?php echo substr( $name, 0, 1 ); ?></span>
		</div>
	<?php endif; ?>
	
	<!-- Informações do Personagem -->
	<div class="card-personagem__info">
		<?php if ( ! empty( $role ) ) : ?>
			<span class="card-personagem__role"><?php echo $role; ?></span>
		<?php endif; ?>
		
		<?php if ( ! empty( $name ) ) : ?>
			<h3 class="card-personagem__name"><?php echo $name; ?></h3>
		<?php endif; ?>
	</div>
</div>
