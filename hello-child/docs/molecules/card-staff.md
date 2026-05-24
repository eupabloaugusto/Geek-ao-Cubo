# Card Staff (card-staff)

## Descrição

Molécula de card de membro da equipe técnica. Apresenta foto circular, nome e cargo (Diretor, Compositor, etc.) em layout horizontal compacto.

## Uso

```php
<?php
mm_render_component( 'molecules', 'card-staff', array(
    'nome'       => 'Koyoharu Gotouge',
    'funcao'     => 'Autor Original',
    'avatar_url' => 'https://exemplo.com/gotouge.jpg'
) );
?>
```

## Parâmetros

| Parâmetro | Tipo | Padrão | Descrição |
|-----------|------|--------|-----------|
| `nome` | string | `'Nome do Profissional'` | Nome do membro da equipe |
| `funcao` | string | `'Cargo'` | Cargo ou função (ex: Diretor, Compositor) |
| `avatar_url` | string | `''` | URL da foto do profissional |

## Estrutura HTML

```html
<div class="card-staff">
    <div class="card-staff__avatar">
        <img src="..." alt="..." />
    </div>
    <div class="card-staff__info">
        <span class="card-staff__role">Cargo</span>
        <h4 class="card-staff__name">Nome do Profissional</h4>
    </div>
</div>
```

## Variáveis CSS

O componente utiliza as seguintes variáveis de design tokens:

- `--neutral-800` - Cor de fundo do card
- `--neutral-700` - Cor do fallback do avatar
- `--color-border` - Cor da borda
- `--color-primary` - Cor do cargo/função
- `--neutral-100` - Cor do nome
- `--font-heading` - Fonte do nome
- `--font-body` - Fonte do cargo
- `--text-sm-size` - Tamanho da fonte do nome
- `--text-xxs-size` - Tamanho da fonte do cargo
- `--space-300` - Gap entre avatar e info
- `--space-200` - Padding do card
- `--border-radius-200` - Raio da borda do card

## Características Visuais

- **Avatar circular:** aspect-ratio 1:1 com border-radius 50%
- **Layout horizontal:** Avatar à esquerda, informações à direita
- **Cargo em destaque:** Cor primária para destacar a função
- **Fallback:** Avatar placeholder quando não há imagem

## SEO

- Imagem com atributo `alt` descritivo
- Texto do nome em HTML para indexação

## Acessibilidade

- Imagem com `loading="lazy"` para performance
- Estrutura semântica com tags apropriadas

## Responsividade

O componente é responsivo e se ajusta automaticamente:

- **Desktop/Tablet:** Layout horizontal completo
- **Mobile:** Mantém layout horizontal compacto

## Exemplo de Uso

```php
<!-- Card com foto -->
<?php 
mm_render_component( 'molecules', 'card-staff', array(
    'nome'       => 'Koyoharu Gotouge',
    'funcao'     => 'Autor Original',
    'avatar_url' => 'https://exemplo.com/gotouge.jpg'
) );
?>
```
