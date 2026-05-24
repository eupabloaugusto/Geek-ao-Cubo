# Card de Personagem (card-personagem)

## Descrição

Molécula de card de personagem com imagem quadrada e bloco de texto isolado abaixo. Usado na página de detalhe do anime para exibir o elenco. A imagem possui aspect-ratio 1:1 (quadrada) e o texto fica em bloco separado, sem sobreposição.

## Uso

```php
<?php
mm_render_component( 'molecules', 'card-personagem', array(
    'name'      => 'Tanjiro Kamado',
    'anime'     => 'Demon Slayer',
    'image_url' => 'https://exemplo.com/tanjiro.jpg'
) );
?>
```

## Parâmetros

| Parâmetro | Tipo | Padrão | Descrição |
|-----------|------|--------|-----------|
| `name` | string | `''` | Nome do personagem |
| `anime` | string | `''` | Nome do anime a que pertence |
| `image_url` | string | `''` | URL da imagem do personagem |
| `class` | string | `''` | Classe CSS adicional |
| `aria_label` | string | `'Personagem: {name}'` | Label de acessibilidade |
| `social_links` | array | `[]` | Links de redes sociais (opcional) |

## Estrutura HTML

```html
<article class="card-personagem">
    <div class="card-personagem__banner">
        <img src="..." alt="..." />
    </div>
    <div class="card-personagem__info">
        <span class="card-personagem__anime-title">Nome do Anime</span>
        <h3 class="card-personagem__name">Nome do Personagem</h3>
    </div>
</article>
```

## Variáveis CSS

O componente utiliza as seguintes variáveis de design tokens:

- `--neutral-800` - Cor de fundo do card
- `--neutral-100` - Cor do nome
- `--color-primary` - Cor do título do anime
- `--color-border` - Cor da borda
- `--font-body` - Fonte do título do anime
- `--font-heading` - Fonte do nome
- `--text-sm-size` - Tamanho da fonte do nome (compactado para mobile)
- `--text-xxs-size` - Tamanho da fonte do título do anime
- `--font-weight-700` - Peso da fonte do título do anime e nome
- `--space-300` - Padding do bloco de texto (compactado para mobile)
- `--space-050` - Gap entre elementos do bloco de texto
- `--border-radius-300` - Raio da borda do card

## SEO

- Imagem com atributo `alt` descritivo
- `aria-label` para leitores de tela
- Texto do nome em HTML para indexação

## Acessibilidade

- Suporta navegação por teclado
- `aria-label` apropriado para leitores de tela
- Imagem com `loading="lazy"` para performance
- Estrutura semântica com tag `<article>`

## Responsividade

O componente é responsivo e se ajusta automaticamente:

- **Desktop/Tablet:** Imagem quadrada 1:1, padding completo
- **Mobile:** Tipografia compactada com `--text-sm-size` e `--space-300`

## Exemplo de Uso

```php
<!-- Card com imagem -->
<?php 
mm_render_component( 'molecules', 'card-personagem', array(
    'name'      => 'Tanjiro Kamado',
    'anime'     => 'Demon Slayer',
    'image_url' => 'https://exemplo.com/tanjiro.jpg'
) );
?>
```
