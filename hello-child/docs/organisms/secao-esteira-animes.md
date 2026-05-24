# Seção de Esteira de Animes (secao-esteira-animes)

**Tipo:** Organismo  
**Arquivo:** `organisms/secao-esteira-animes.php`  
**CSS:** `organisms/secao-esteira-animes.css`  
**JS:** `organisms/secao-esteira-animes.js`  
**Criado em:** 2026-05-23  
**Última atualização:** 2026-05-23  

## Descrição
Organismo nobre em formato de trilho horizontal deslizante (esteira/carousel) no estilo de plataformas de streaming premium (Netflix, Crunchyroll). Exibe uma coleção de animes usando Scroll Snap físico de altíssimo desempenho, acompanhado de setas inteligentes que aparecem no hover nos desktops e se ocultam no mobile para priorizar a experiência de gestos por toque.

## Moléculas/Átomos utilizados
- `molecules/card-anime.php`
- `atoms/btn-nav-arrow.php`

## Variáveis CSS utilizadas
- `--neutral-100`, `--neutral-400` (cores do cabeçalho)
- `--color-primary` (destaque de hover)
- `--space-300`, `--space-500`, `--space-800` (alinhamentos estruturais e gap entre cards)
- `--border-radius-300` (arredondamento do trilho)

## Parâmetros PHP
| Parâmetro | Tipo | Descrição |
|---|---|---|
| `$titulo_secao` | string | Título principal da esteira (ex: "Em Exibição nesta Temporada") |
| `$url_ver_todos` | string | URL opcional para a página de arquivos completa ("Ver Todos") |
| `$animes` | array | Lista de arrays contendo os dados de cada `card-anime` a ser renderizado |

## SEO aplicado
- Cabeçalho estruturado usando a tag semântica `<header>` e título com `<h2>` para manter a integridade da hierarquia estrutural SEO do blog.
- Tag `<section>` com `aria-label` associado ao título da seção para acessibilidade de leitores de tela.
- Link de "Ver Todos" com `aria-label` estendido contextualizando qual seção está sendo expandida.

## Responsividade
- **Mobile-first com layout fluido**: A largura dos slides individuais é controlada dinamicamente via `clamp(145px, 22vw, 215px)`.
- **Mobile (< 768px)**: Setas físicas de navegação são totalmente ocultadas para poupar espaço visual. A navegação ocorre nativamente via gestos por toque (swipe) com aceleração física do iOS/Android e alinhamento snap das células.
- **Desktop (>= 768px)**: Setas circular glassmorphism surgem nas bordas laterais do trilho ao pairar com o mouse (hover).
- **JS inteligente reativo**: O Javascript monitora o estado físico da rolagem por meio de eventos reativos de alto desempenho e desativa as setas (`.is-disabled`) quando o usuário atinge a extremidade esquerda (início) ou direita (fim) do trilho.

## Exemplo de uso
```php
<?php mm_render_component('organisms', 'secao-esteira-animes', [
    'titulo_secao'  => 'Temporada de Outono 2026',
    'url_ver_todos' => home_url('/temporada/outono-2026/'),
    'animes'        => [
        [
            'titulo'     => 'Chainsaw Man',
            'url'        => '#',
            'imagem_url' => 'https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?w=600&q=80',
            'nota'       => '8.6',
            'horario'    => 'Sábados, 12h',
            'generos'    => ['Ação', 'Gore']
        ],
        [
            'titulo'     => 'Solo Leveling',
            'url'        => '#',
            'imagem_url' => 'https://images.unsplash.com/photo-1578632767115-351597cf2477?w=600&q=80',
            'nota'       => '8.9',
            'generos'    => ['Ação', 'Fantasia']
        ]
    ]
]); ?>
```
