# Changelog — modomaratona.com

Todas as alterações notáveis, adições e exclusões de componentes do projeto serão documentadas neste arquivo de forma contínua.

## [1.4.0] — 2026-05-23

### Adicionado
- **Átomo badge-genero**: Pílula de gênero ou tag clicável moderna (`atoms/badge-genero.php` e `.css`) para categorização de animes com suporte a acessibilidade.
- **Molécula card-anime**: Card vertical premium (`molecules/card-anime.php` e `.css`) com animações de hover, exibição de nota MAL e gêneros alinhados perfeitamente.
- **Organismo secao-esteira-animes**: Seção de trilho horizontal deslizante (`organisms/secao-esteira-animes.php` e `.css`) estilo plataformas de streaming, com Scroll Snap nativo e navegação responsiva.
- **Script secao-esteira-animes.js**: Lógica vanilla JS para rolagem suave das setas reativas no desktop e desativação automática nos limites da esteira.
- **Documentações Técnicas**: Criados os manuais individuais `badge-genero.md`, `card-anime.md` e `secao-esteira-animes.md` mapeando toda a anatomia técnica e WCAG A11y.

### Alterado
- **Átomo imagem-capa**: Ajustada a pílula de placeholder (`.imagem-capa-placeholder`) em `imagem-capa.css` com `position: absolute`, `box-sizing: border-box` e `top/bottom/left/right: 0`, resolvendo um bug de cálculo de layout onde a borda de 2px causava transbordamento de largura do contêiner e gerava incompatibilidade com `card-anime__media-link`.
- **Molécula card-anime**: Removida a exibição do badge de status de transmissão para otimizar a visualização em catálogos de animes. Reordenado o conteúdo textual posicionando as tags de gênero (genres) acima do título. Corrigida a largura do link da capa (`.card-anime__media-link`) para `100%` com `max-width: 100%` e `overflow: hidden`, eliminando transbordamentos. Aplicado `min-width: 0`, `max-width: 100%` e `overflow: hidden` na molécula e no seu contêiner de conteúdo, eliminando em definitivo o bug de flexbox do navegador onde textos longos de títulos estouram a largura física do card, com a introdução de um padding lateral de `var(--space-200)` (8px) para excelente Proximity Spacing. **Correção Crítica**: Enfileirado explicitamente `box-sizing: border-box` no contêiner `.card-anime` e em todos os seus descendentes (`.card-anime *`), garantindo que o padding e bordas não causem transbordamento ou façam o texto ultrapassar a largura do card em ambientes sem reset global (como páginas integradas com Elementor no WordPress). Adicionados também `overflow-wrap: break-word` e `word-break: break-word` na manchete `.card-anime__title` para tratar strings ou palavras gigantes sem quebrar a largura do card. **Ajuste de Flexbox**: Removida a propriedade `aspect-ratio: 2 / 3` (deixando-a apenas no contêiner interno) e mantido apenas `flex-shrink: 0` em `.card-anime__media-link`. Isso soluciona o bug nativo de Flexbox onde o contêiner da imagem sofria encolhimento horizontal indevido quando a altura do card era esticada pelo CSS Grid ou carrossel, garantindo que a capa ocupe 100% da largura física e não pareça mais estreita que a caixa de textos.
- **Molécula card-noticia**: Aplicado preventivamente `box-sizing: border-box` no contêiner `.card-noticia` e em todos os seus filhos para imunizar o layout contra quebras de largura em diferentes contextos e builders do WordPress.
- **Organismo secao-esteira-animes**: Reduzido o espaçamento entre cartões (gap do trilho) de `space-400` (24px) para `space-300` (16px) aprimorando as proporções visuais e o aproveitamento de tela.
- **Molécula sidebar-assistir-agora**: Corrigido CSS removendo `!important`, ajustando `min-height` de 380px para 280px, e removendo `border-bottom: none !important` para evitar conflitos de estilo. O botão agora usa `width: 100%` sem `!important` e `display: flex` sem `!important`.
- **Vitrine Storybook (storybook.html) & Docs**: Atualizados os previews interativos e documentações refletindo as correções no `sidebar-assistir-agora`.

---

## [1.3.0] — 2026-05-23

### Adicionado
- **Átomo carousel-dot**: Indicador de slide estilo pílula ativa com transição de expansão horizontal e glow laranja primário.
- **Átomo btn-nav-arrow**: Botão circular de setas direcionais com efeito glassmorphism, sombra 3D e chevron reativo que sofre deslocamento micro-translação no hover.
- **Molécula carousel-nav**: Dock unificado centralizado que agrupa as setas direcionais e os bolinhas indicadoras.
- **Organismo secao-carrossel-destaque**: Nova seção de manchetes da homepage. Agrupa até 4 cards Hero Horizontal em um trilho Scroll Snap nativo acelerado por GPU.
- **Script secao-carrossel-destaque.js**: Inteligência vanilla JS com controle de setas/dots, Scroll-Spy de alta performance (atualização dinâmica no swipe gestual de celulares) e Autoplay temporizado acessível (pausa no hover e foco de teclado).
- **Documentação secao-carrossel-destaque.md**: Manual técnico mapeando a anatomia, parâmetros PHP, regras de acessibilidade WCAG e integração no WordPress.

---

## [1.2.1] — 2026-05-23

### Adicionado
- **Variação Hero Vertical (hero-vertical)**: Criada uma nova variação dedicada no PHP (`molecules/card-noticia.php`) e no CSS (`molecules/card-noticia.css` -> classe `.card-noticia--hero-vertical`) especificamente estruturada para destaques verticais em colunas, ideal para o organismo de destaque principal e widgets.
- **Vitrine Hero Vertical (storybook.html)**: Adicionada a demonstração viva e individual do Hero Vertical no showcase de moléculas.

### Alterado
- **Variação Hero Horizontal (hero)**: Revertida a variação `.card-noticia--hero` para o seu layout horizontal original de alto impacto (split widescreen 60/40), mantendo a máxima flexibilidade de banners do design system.
- **Organismo secao-destaque**: Atualizada a manchete principal no PHP (`secao-destaque.php`) e no Storybook (`storybook.html`) para renderizar a nova classe de destaque vertical `.card-noticia--hero-vertical`, garantindo o alinhamento pixel-perfect e paridade de rotação futura.
- **Documentações Técnicas**: Atualizadas `docs/molecules/card-noticia.md` e `docs/organisms/secao-destaque.md` detalhando a nova variante `hero-vertical` e a separação dos casos de uso de Hero Horizontal e Hero Vertical.

---

## [1.2.0] — 2026-05-23

### Adicionado
- **Organismo secao-destaque**: Nova seção de manchete em destaque nobre para o topo da homepage. Combina 1 manchete/Hero vertical gigante na esquerda (60%) e um painel stack de 3 variações Lista compactas na direita (40%), representando contextos de Lista Horizontal, Widget Lateral e Recomendações Relacionadas.
- **Documentação secao-destaque.md**: Manual técnico completo em `docs/organisms/secao-destaque.md` detalhando parâmetros PHP, estrutura HTML5, responsividade fluida e padrões WCAG A11y.

### Alterado
- **Molécula card-noticia (Variação Hero)**: Refatorada a classe `.card-noticia--hero` em `molecules/card-noticia.css` para renderizar o layout estritamente vertical em desktop. Isso cria um formato "outdoor/billboard" de enorme impacto e fornece a estrutura ideal para futura rotação e transição interativa dos 4 cards.
- **Vitrine Storybook (storybook.html)**: Atualizada a Seção de Destaque no Storybook com a exibição do Hero vertical e personalização dos cards da lista lateral representando as categorias "Lista Horizontal", "Widget Lateral" e "Recomendações".

---

## [1.1.0] — 2026-05-23

### Adicionado
- **Molécula card-noticia**: Card de notícias e artigos do blog inspirado na Crunchyroll, com suporte nativo a 3 variações de exibição (`grid`, `list`, `hero`), efeito zoom na capa widescreen `16:9` e transição de cor do título no hover.
- **Documentação card-noticia.md**: Manual técnico detalhando parâmetros PHP, BEM, acessibilidade (WCAG `aria-label` automatizado e alt de imagens) e proteção CLS (Core Web Vitals).
- **card-noticia ao storybook.html**: Vitrine interativa no Storybook exibindo as três variações em ação fluida.

### Corrigido
- **Consistência Tipográfica no Navigation Drawer**: Corrigido bug de especificidade no seletor `button.drawer-link` em `atoms/drawer-link.css` e `storybook.html` (removendo `font-family/size/weight: inherit`), alinhando os botões acordeão do menu lateral móvel na mesma família tipográfica, tamanho e negrito das demais tags de navegação `<a>` do design system.

---

## [1.0.1] — 2026-05-23

### Adicionado
- **Átomo input-busca-compact**: Input de busca simplificado para header sem botão integrado. Ao ser clicado (readonly), abre o modal de busca completo (`search-modal`) através da classe `.js-open-search-modal`.
- **Organismo search-modal ao storybook**: Adicionado componente do modal de busca ao storybook.html com CSS responsivo e logo SVG compactada.
- **Documentação search-modal.md**: Adicionado arquivo explicativo sobre funcionamento, SEO e WCAG A11y do modal.

### Alterado
- **organisms/header.php**: Substituído `form-busca` por `input-busca-compact` na barra de busca do header.
- **organisms/header.css**: Ajustado CSS para acomodar o `input-busca-compact` em vez do `form-busca`.
- **organisms/search-modal.php**: Substituído o formulário inconsistente `form-busca-modal` pela molécula unificada e padronizada `form-busca`.
- **organisms/search-modal.js**: Foco automático alterado para capturar a classe genérica `.input-field` do design system.
- **organisms/navigation-drawer.php**: Adicionado carregamento dinâmico de links do menu do WordPress e fallbacks de acessibilidade.
- **functions.php**: Adicionado o acoplamento global dos organismos `search-modal` e `navigation-drawer` no rodapé através do gancho `wp_footer`.

### Corrigido
- **organisms/header.php**: Reconstruído e restaurado o cabeçalho completo que estava truncado, estabelecendo a estrutura HTML5 semântica responsiva, acessibilidade por leitores de tela (tags role/aria) e integração funcional de buscas e menu mobile.
- **organisms/search-modal.js (Bug de Clique)**: Corrigido falha de disparo do modal adicionando **Delegação de Eventos (Event Delegation)** no objeto global `document` (evitando falhas por carregamento tardio ou dinâmico do Elementor).
- **organisms/navigation-drawer.js (Bug de Clique)**: Corrigido falha de abertura do menu lateral adicionando **Delegação de Eventos** escutando `.js-open-drawer` de forma global para garantir o funcionamento 100% integrado com o Elementor.

### Removido
- **molecules/form-busca-modal.php**: Removido arquivo redundante de formulário de busca específico do modal.
- **molecules/form-busca-modal.css**: Removido arquivo de estilização redundante.

---

## [1.0.0] — 2026-05-23

### Adicionado
- **Estrutura Base do Tema Filho**: Criada toda a árvore de diretórios do padrão **Atomic Design** (`atoms/`, `molecules/`, `organisms/`, `templates/`, `docs/`, `Novos-arquivos/`).
- **`hello-child/style.css`**: Identificação do tema filho no ecossistema do WordPress.
- **`hello-child/functions.php`**: Lógica de enfileiramento inteligente de CSS (Dynamic Component Enqueue) para ganho de Core Web Vitals e carregamento do Google Fonts.
- **`hello-child/design-tokens.css`**: Definição centralizada de todas as propriedades customizadas do CSS (Cores Brand, Neutral, Status, Tipografia, Espaçamentos, Bordas, Breakpoints).
- **`hello-child/docs/README.md`**: Manual do desenvolvedor, padrões BEM e guia de responsividade clamp.
- **Átomos Desenvolvidos**:
  - `atoms/btn-primary.php` & `.css`: Botão principal com suporte a links patrocinados.
  - `atoms/btn-secondary.php` & `.css`: Botão secundário de retorno e ações alternativas.
  - `atoms/badge-status.php` & `.css`: Badge em pílula pulsante ("Em exibição", "Finalizado").
  - `atoms/nota-mal.php` & `.css`: Score numérico com ícone de estrela SVG inline (com lógica de cor de erro dinâmica para scores < 5.0).
  - `atoms/imagem-capa.php` & `.css`: Posters com aspect-ratio 2:3, lazy load e overlay de score e suporte a badge de horários para lançamentos diários.
  - `atoms/aviso-adblock.php` & `.css`: Banner educativo responsivo (anti-interstitial invasivo).
  - `atoms/input-busca.php` & `.css`: Biblioteca de Inputs flexível (Busca com Lupa, texto simples e seletores/selects).
  - `atoms/badge-horario.php` & `.css`: Badge em pílula glassmorphic escura com relógio em laranja para lançamentos diários da grade de exibição.
  - `atoms/input-label.php` & `.css`: Rótulo (label) semântico em caixa alta para inputs de formulários.
  - `atoms/input-helper.php` & `.css`: Texto de apoio informativo ou alerta de erro de validação (com tags de acessibilidade WCAG).
- **Moléculas Desenvolvidas**:
  - `molecules/form-field.php` & `.css`: Grupo de campo de formulário modular (composição de label + input + helper/error).
  - `molecules/form-busca.php` & `.css`: Formulário de pesquisa integrado com campo de busca e botão de ação primário flat.
- **Organismos Desenvolvidos**:
  - `organisms/navigation-drawer.php`, `.css` & `.js`: Organismo de menu lateral móvel completo com suporte a acordeão e acessibilidade WCAG.
- **Estruturação do Navigation Drawer (Menu Lateral Mobile)**:
  - Criados os átomos `atoms/drawer-overlay.php` & `.css` (fundo com desfoque blur), `atoms/drawer-link.php` & `.css` (com chevron de dropdown automático) e `atoms/drawer-sub-link.php` & `.css` (sub-navegação com marcador).
- **`hello-child/functions.php`**: Estendido com suporte para Dynamic JS Enqueue, permitindo que scripts JavaScript de componentes sejam carregados automaticamente no rodapé somente se o respectivo componente for renderizado na página.
- **`hello-child/storybook.html`**: Atualizado com renderizações vivas, códigos de uso e controles interativos para o botão hamburger (que vira X), overlay blur de fundo, links de gaveta, sub-links com dot e o organismo do Navigation Drawer completo em ação.
- **Documentações individuais em `.md`**: Criada a documentação técnica para o organismo `organisms/navigation-drawer` no diretório `docs/organisms/`.

## [1.4.6] — 2026-05-23

### Adicionado
- **Molécula card-personagem:** Card de personagem com avatar, nome e tipo (Principal/Secundário). Com suporte a fallback de avatar sem imagem e responsividade.
- **Documentação card-personagem.md:** Manual técnico detalhando parâmetros PHP, variáveis CSS, SEO, acessibilidade, responsividade e exemplos de uso.

---

## [1.4.5] — 2026-05-23

### Adicionado
- **Átomo badge-rank:** Badge especial de ranking com cor dourada para exibir rankings especiais (#1, Top 10) na página de detalhe do anime. Com suporte a variações (default, top10, gold).
- **Documentação badge-rank.md:** Manual técnico detalhando parâmetros PHP, variáveis CSS, variações, SEO, acessibilidade e exemplos de uso.

---

## [1.4.4] — 2026-05-23

### Adicionado
- **Átomo progress-bar:** Barra de progresso genérica para exibir percentuais (usuários, estatísticas, etc.). Com suporte a label opcional, exibição de percentual e gradiente laranja.
- **Documentação progress-bar.md:** Manual técnico detalhando parâmetros PHP, variáveis CSS, SEO, acessibilidade e exemplos de uso.

---

## [1.4.3] — 2026-05-23

### Adicionado
- **Molécula stat-bloco:** Bloco de estatísticas para página de detalhes do anime. Compõe rating-score + rank + popularidade + membros em layout grid responsivo.
- **Documentação stat-bloco.md:** Manual técnico detalhando parâmetros PHP, variáveis CSS, responsividade e exemplos de uso.

---

## [1.4.2] — 2026-05-23

### Adicionado
- **Átomo icone-externo-link:** Ícone + label para links externos (ANN, Wiki, etc.). Indica visualmente que o link abre em nova aba/janela com ícone de seta externa.
- **Documentação icone-externo-link.md:** Manual técnico detalhando parâmetros PHP, variáveis CSS, SEO, acessibilidade e exemplos de uso.

---

## [1.4.1] — 2026-05-23

### Corrigido
- `molecules/sidebar-assistir-agora.php`: Corrigido parâmetro de chamada do átomo `imagem-capa` de `image_url` para `src` (conforme padrão do átomo).
- `molecules/sidebar-assistir-agora.css`: Atualizado seletor `.sidebar-assistir-agora__bg img` para `.sidebar-assistir-agora__bg .imagem-capa` para refletir a estrutura real do átomo.
