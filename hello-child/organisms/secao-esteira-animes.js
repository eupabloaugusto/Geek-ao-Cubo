/**
 * Organism: Seção de Esteira de Animes (secao-esteira-animes) JS
 *
 * Lógica de alta fidelidade visual e performance para a esteira horizontal.
 * Controla navegação reativa de setas baseada na posição física do scroll (Scroll-Spy).
 * Suporta múltiplos sliders independentes na mesma página com total responsividade.
 */

document.addEventListener('DOMContentLoaded', () => {
    const esteiras = document.querySelectorAll('.js-esteira-container');

    esteiras.forEach((esteira) => {
        const track = esteira.querySelector('.js-esteira-track');
        const prevArrow = esteira.querySelector('.js-esteira-prev');
        const nextArrow = esteira.querySelector('.js-esteira-next');

        if (!track) return;

        // 1. Rolagem Suave por Cliques nas Setas (Move 75% da largura visual para reter contexto)
        const getScrollStep = () => {
            return track.clientWidth * 0.75;
        };

        if (prevArrow) {
            prevArrow.addEventListener('click', () => {
                track.scrollBy({
                    left: -getScrollStep(),
                    behavior: 'smooth'
                });
            });
        }

        if (nextArrow) {
            nextArrow.addEventListener('click', () => {
                track.scrollBy({
                    left: getScrollStep(),
                    behavior: 'smooth'
                });
            });
        }

        // 2. Funcionalidade Premium de Arrastar com o Mouse (Desktop Drag-to-Scroll)
        let isDown = false;
        let isDragging = false;
        let startX;
        let scrollLeftVal;
        const dragThreshold = 8; // px

        track.addEventListener('mousedown', (e) => {
            // Ignora se for clique com o botão direito
            if (e.button !== 0) return;
            
            isDown = true;
            isDragging = false;
            
            // Desativa temporariamente o scroll-snap e scroll suave para arrasto físico responsivo
            track.style.scrollSnapType = 'none';
            track.style.scrollBehavior = 'auto';
            
            startX = e.pageX - track.offsetLeft;
            scrollLeftVal = track.scrollLeft;
        });

        track.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            
            const x = e.pageX - track.offsetLeft;
            const walk = (x - startX) * 1.5; // Fator de sensibilidade otimizado
            
            if (Math.abs(x - startX) > dragThreshold) {
                isDragging = true;
                track.classList.add('is-dragging');
            }
            
            track.scrollLeft = scrollLeftVal - walk;
        });

        const stopDragging = () => {
            if (!isDown) return;
            isDown = false;
            
            // Remove a classe com delay sutil para impedir disparos de clique em links
            setTimeout(() => {
                track.classList.remove('is-dragging');
                isDragging = false;
            }, 80);

            // Restaura o snap físico original para atração final do card mais próximo
            track.style.scrollSnapType = 'x mandatory';
            track.style.scrollBehavior = 'smooth';
        };

        track.addEventListener('mouseleave', stopDragging);
        track.addEventListener('mouseup', stopDragging);

        // Bloqueia cliques em links e imagens se o usuário estava arrastando o carrossel
        track.addEventListener('click', (e) => {
            if (isDragging) {
                e.preventDefault();
                e.stopPropagation();
            }
        }, true); // Fase de captura para interceptar antes de atingir os cards
    });
});
