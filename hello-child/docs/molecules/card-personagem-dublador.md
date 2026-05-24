# Card Personagem Dublador (card-personagem-dublador)

## Descrição

Molécula que apresenta o personagem e o dublador de forma espelhada e simétrica. O personagem fica à esquerda com avatar e nome, enquanto o dublador fica à direita com nome e avatar, criando uma composição visual equilibrada.

## Uso

```php
<?php
mm_render_component( 'molecules', 'card-personagem-dublador', array(
    'nome_personagem' => 'Tanjiro Kamado',
    'tipo_personagem' => 'Principal',
    'img_personagem' => 'https://exemplo.com/tanjiro.jpg',
    'nome_dublador' => 'Natsuki Hanae',
    'idioma_dublagem' => 'Japonês (Seiyuu)',
    'img_dublador' => 'https://exemplo.com/hanae.jpg'
) );
?>
```

## Parâmetros

| Parâmetro | Tipo | Padrão | Descrição |
|-----------|------|--------|-----------|
| `nome_personagem` | string | `'Nome do Personagem'` | Nome do personagem |
| `tipo_personagem` | string | `'Principal'` | Tipo do personagem (Principal, Coadjuvante, etc.) |
| `img_personagem` | string | `''` | URL da imagem do personagem |
| `nome_dublador` | string | `'Nome do Dublador'` | Nome do dublador/voice actor |
| `idioma_dublagem` | string | `'Japonês (Seiyuu)'` | Idioma da dublagem |
| `img_dublador` | string | `''` | URL da imagem do dublador |

## Estrutura HTML

```html
<div class="card-character-voice">
    <div class="card-character-voice__side card-character-voice__side--character">
        <div class="card-character-voice__avatar">
            <img src="..." alt="..." />
        </div>
        <div class="card-character-voice__meta">
            <span class="card-character-voice__label">Tipo</span>
            <h4 class="card-character-voice__name">Nome do Personagem</h4>
        </div>
    </div>
    <div class="card-character-voice__side card-character-voice__side--voice-actor">
        <div class="card-character-voice__meta">
            <span class="card-character-voice__label">Idioma</span>
            <h4 class="card-character-voice__name">Nome do Dublador</h4>
        </div>
        <div class="card-character-voice__avatar">
            <img src="..." alt="..." />
        </div>
    </div>
</div>
```

## Variáveis CSS

O componente utiliza as seguintes variáveis de design tokens:

- `--neutral-800` - Cor de fundo do card
- `--neutral-700` - Cor da borda e fallback do avatar
- `--brand-500` - Cor da borda em hover
- `--neutral-400` - Cor dos labels
- `--neutral-100` - Cor dos nomes
- `--font-body` - Fonte dos labels
- `--font-heading` - Fonte dos nomes
- `--text-sm-size` - Tamanho da fonte dos nomes (compactado para mobile)
- `--text-xxs-size` - Tamanho da fonte dos labels
- `--space-300` - Gap entre avatar e meta
- `--space-200` - Padding lateral e vertical
- `--space-050` - Margin bottom dos labels
- `--border-radius-300` - Raio da borda do card

## Características Visuais

- **Avatares 1:1:** Aspect-ratio quadrado para imagens de personagem e dublador
- **Layout espelhado:** Personagem à esquerda (avatar + texto), Dublador à direita (texto + avatar)
- **Hover:** Elevação sutil e borda com cor primária
- **Truncamento:** Nomes longos são cortados com ellipsis para manter layout
- **Fallback:** Avatar placeholder quando não há imagem

## SEO

- Imagens com atributo `alt` descritivo
- Texto dos nomes em HTML para indexação
- Estrutura semântica com tags apropriadas

## Acessibilidade

- Imagens com `loading="lazy"` para performance
- Texto dos nomes truncado graciosamente com ellipsis
- Labels discretos para contexto adicional

## Responsividade

O componente é responsivo e se ajusta automaticamente:

- **Desktop/Tablet:** Layout horizontal espelhado completo
- **Mobile (< 480px):** Fonte dos nomes reduzida para 0.875rem se necessário

## Exemplo de Uso

```php
<!-- Card com imagens -->
<?php 
mm_render_component( 'molecules', 'card-personagem-dublador', array(
    'nome_personagem' => 'Tanjiro Kamado',
    'tipo_personagem' => 'Principal',
    'img_personagem' => 'https://exemplo.com/tanjiro.jpg',
    'nome_dublador' => 'Natsuki Hanae',
    'idioma_dublagem' => 'Japonês (Seiyuu)',
    'img_dublador' => 'https://exemplo.com/hanae.jpg'
) );
?>
```
