# Card de Personagem (card-personagem)

## Descrição

Molécula de card de personagem com avatar, nome e tipo (Principal/Secundário). Usado na página de detalhe do anime para exibir o elenco.

## Uso

```php
<?php
mm_render_component( 'molecules', 'card-personagem', array(
    'name'      => 'Tanjiro Kamado',
    'image_url' => 'https://exemplo.com/tanjiro.jpg',
    'role'      => 'Principal'
) );
?>
```

## Parâmetros

| Parâmetro | Tipo | Padrão | Descrição |
|-----------|------|--------|-----------|
| `name` | string | `''` | Nome do personagem |
| `image_url` | string | `''` | URL da imagem do avatar |
| `role` | string | `''` | Tipo do personagem (Principal, Secundário, etc.) |
| `class` | string | `''` | Classe CSS adicional |
| `aria_label` | string | `'Personagem: {name}'` | Label de acessibilidade |

## Variáveis CSS

O componente utiliza as seguintes variáveis de design tokens:

- `--neutral-800` - Cor de fundo do card
- `--neutral-700` - Cor de fundo do avatar placeholder
- `--neutral-600` - Cor da borda em hover
- `--neutral-100` - Cor do nome
- `--neutral-400` - Cor do placeholder
- `--color-primary` - Cor do tipo/role
- `--color-border` - Cor da borda
- `--font-body` - Fonte do tipo/role
- `--font-heading` - Fonte do nome e placeholder
- `--text-sm-size` - Tamanho da fonte do nome
- `--text-xs-size` - Tamanho da fonte do nome em mobile
- `--text-xxs-size` - Tamanho da fonte do tipo/role
- `--text-2xl-size` - Tamanho da fonte do placeholder
- `--text-xl-size` - Tamanho da fonte do placeholder em mobile
- `--text-sm-weight` - Peso da fonte do nome
- `--text-2xl-weight` - Peso da fonte do placeholder
- `--font-weight-700` - Peso da fonte do tipo/role
- `--space-300` - Espaçamento entre elementos
- `--space-200` - Espaçamento em mobile
- `--space-500` - Padding do card
- `--space-400` - Padding em mobile
- `--border-radius-300` - Raio da borda do card
- `--border-radius-200` - Raio da borda do avatar

## SEO

- Imagem com atributo `alt` descritivo
- `aria-label` para leitores de tela
- Texto do nome em HTML para indexação

## Acessibilidade

- Suporta navegação por teclado
- Estado de hover com feedback visual
- `aria-label` apropriado para leitores de tela
- Imagem com `loading="lazy"` para performance
- Fallback de avatar com inicial do nome

## Responsividade

O componente é responsivo e se ajusta automaticamente:

- **Desktop/Tablet (≥ 768px):** Avatar 80px, padding completo
- **Mobile (< 768px):** Avatar 64px, padding reduzido, fontes menores

## Estados

- **Normal:** Borda padrão, sem elevação
- **Hover:** Elevação sutil, borda mais clara, sombra

## Fallback

Se não houver imagem, o componente exibe:
- Fundo gradiente neutro
- Inicial do nome em grande
- Mantém a estrutura do card

## Exemplo de Uso

```php
<!-- Card com imagem -->
<?php 
mm_render_component( 'molecules', 'card-personagem', array(
    'name'      => 'Tanjiro Kamado',
    'image_url' => 'https://exemplo.com/tanjiro.jpg',
    'role'      => 'Principal'
) );
?>

<!-- Card sem imagem (fallback) -->
<?php 
mm_render_component( 'molecules', 'card-personagem', array(
    'name' => 'Nezuko Kamado',
    'role' => 'Principal'
) );
?>

<!-- Card secundário -->
<?php 
mm_render_component( 'molecules', 'card-personagem', array(
    'name'      => 'Zenitsu Agatsuma',
    'image_url' => 'https://exemplo.com/zenitsu.jpg',
    'role'      => 'Secundário'
) );
?>
```
