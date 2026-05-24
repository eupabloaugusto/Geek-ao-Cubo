<?php
/**
 * Molecule: Card Staff
 * Card de membro da equipe técnica: foto + nome + cargo.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nome       = $args['nome'] ?? 'Nome do Profissional';
$funcao     = $args['funcao'] ?? 'Cargo';
$avatar_url = $args['avatar_url'] ?? '';
?>

<div class="card-staff">
    <div class="card-staff__avatar">
        <?php if ($avatar_url): ?>
            <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php echo esc_attr($nome); ?>" loading="lazy">
        <?php else: ?>
            <div class="card-staff__avatar-fallback"></div>
        <?php endif; ?>
    </div>
    <div class="card-staff__info">
        <span class="card-staff__role"><?php echo esc_html($funcao); ?></span>
        <h4 class="card-staff__name"><?php echo esc_html($nome); ?></h4>
    </div>
</div>
