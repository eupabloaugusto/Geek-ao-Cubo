<?php
/**
 * Molecule: Card de Personagem (card-personagem)
 *
 * Card de personagem estilo ficha colecionável premium com imagem sangrada e overlay.
 *
 * @package hello-elementor-child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nome_personagem   = isset( $args['name'] ) ? esc_html( $args['name'] ) : '';
$anime_pertencente = isset( $args['anime'] ) ? esc_html( $args['anime'] ) : '';
$image_url        = isset( $args['image_url'] ) ? esc_url( $args['image_url'] ) : '';
$class            = isset( $args['class'] ) ? esc_attr( $args['class'] ) : '';
$redes            = isset( $args['social_links'] ) ? $args['social_links'] : array();
$aria_label       = isset( $args['aria_label'] ) ? esc_attr( $args['aria_label'] ) : sprintf( __( 'Personagem: %s', 'hello-elementor-child' ), $nome_personagem );
?>
<div class="card-personagem <?php echo $class; ?>" aria-label="<?php echo $aria_label; ?>">
    <div class="card-personagem__bg">
        <?php if ( ! empty( $image_url ) ) : ?>
            <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr( $nome_personagem ); ?>" loading="lazy" />
        <?php endif; ?>
    </div>
    
    <div class="card-personagem__overlay"></div>
    
    <div class="card-personagem__content">
        <span class="card-personagem__anime-title"><?php echo $anime_pertencente; ?></span>
        <h3 class="card-personagem__name"><?php echo $nome_personagem; ?></h3>
        
        <?php if ( ! empty( $redes ) ) : ?>
            <div class="card-personagem__actions">
                <!-- Ações sociais podem ser adicionadas aqui -->
            </div>
        <?php endif; ?>
    </div>
</div>
