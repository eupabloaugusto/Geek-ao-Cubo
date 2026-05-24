<?php
/**
 * Molecule: Card Personagem Dublador
 * Apresenta o personagem e o dublador de forma espelhada e simétrica.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nome_personagem  = $args['nome_personagem'] ?? 'Nome do Personagem';
$tipo_personagem  = $args['tipo_personagem'] ?? 'Principal'; // ex: Principal, Coadjuvante
$img_personagem   = $args['img_personagem'] ?? '';

$nome_dublador    = $args['nome_dublador'] ?? 'Nome do Dublador';
$idioma_dublagem  = $args['idioma_dublagem'] ?? 'Japonês (Seiyuu)';
$img_dublador     = $args['img_dublador'] ?? '';
?>

<div class="card-character-voice">
    <div class="card-character-voice__side card-character-voice__side--character">
        <div class="card-character-voice__avatar">
            <?php if ($img_personagem): ?>
                <img src="<?php echo esc_url($img_personagem); ?>" alt="<?php echo esc_attr($nome_personagem); ?>" loading="lazy">
            <?php else: ?>
                <div class="card-character-voice__avatar-fallback"></div>
            <?php endif; ?>
        </div>
        <div class="card-character-voice__meta">
            <span class="card-character-voice__label"><?php echo esc_html($tipo_personagem); ?></span>
            <h4 class="card-character-voice__name"><?php echo esc_html($nome_personagem); ?></h4>
        </div>
    </div>

    <div class="card-character-voice__side card-character-voice__side--voice-actor">
        <div class="card-character-voice__meta">
            <span class="card-character-voice__label"><?php echo esc_html($idioma_dublagem); ?></span>
            <h4 class="card-character-voice__name"><?php echo esc_html($nome_dublador); ?></h4>
        </div>
        <div class="card-character-voice__avatar">
            <?php if ($img_dublador): ?>
                <img src="<?php echo esc_url($img_dublador); ?>" alt="<?php echo esc_attr($nome_dublador); ?>" loading="lazy">
            <?php else: ?>
                <div class="card-character-voice__avatar-fallback"></div>
            <?php endif; ?>
        </div>
    </div>
</div>
