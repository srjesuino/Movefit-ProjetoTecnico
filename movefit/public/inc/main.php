<!--
    Este arquivo contém a estrutura principal da página inicial do site.
    Ele inclui seções como "Bem-vindo", "Benefícios", "Depoimentos" e "Galeria".
    Cada seção é estilizada com classes CSS específicas para garantir uma apresentação visual atraente.
    A seção de depoimentos utiliza a biblioteca Swiper para criar um carrossel interativo.
    As imagens e ícones utilizados são importados de diretórios específicos dentro do projeto.
-->

<div class="main-content">
    <div class="main-welcome">
        <div class="container">
            <div class="main-welcome-text" id="inicio">
                <!-- Título principal da página -->
                <h1>Tranforme sua jornada fitness</h1>
                <p>
                    Descubra nossos planos personalizados,
                    elaborados especialmente para se adequar
                    ao seu estilo de vida. Esses planos são projetados
                    não apenas para atender às suas necessidades,
                    mas também para te capacitar em sua jornada rumo à
                    realização de seus objetivos com facilidade e eficiência.
                </p>
            </div>
            <div class="main-welcome-btns">
                <!-- Botões de ação principais: Teste Grátis e Fale Conosco -->
                <button class="btn-teste">Teste Grátis</button>
                <button class="btn-fale">Fale Conosco</button>
            </div>
            <div class="main-welcome-img">
                <!-- Imagem principal da seção de boas-vindas, o exemplo podia ser feito com elementos HTML, 
                     mas para um resultado mais rapido utlizei a imagem importada do Figma -->
                <img src="../assets/img/hero-desktop-UI.png" alt="Imagem de exemplo">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-beneficios" id="beneficios">
            <!-- Seção de benefícios -->
            <h3>Benefícios</h3>
            <div class="beneficios-grid">
                <!-- Lista de itens de benefícios com ícones, títulos e descrições -->
                <div class="beneficio-item">
                    <img src="../assets/icons/block.png" alt="Benefício 1">
                    <h4>Transações rápidas e seguras</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
                <div class="beneficio-item">
                    <img src="../assets/icons/info.png" alt="Benefício 2">
                    <h4>Interface amigável ao usuário</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
                <div class="beneficio-item">
                    <img src="../assets/icons/info.png" alt="Benefício 3">
                    <h4>Suporte 24 horas</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
                <div class="beneficio-item">
                    <img src="../assets/icons/info.png" alt="Benefício 4">
                    <h4>Planos de preços flexíveis</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
                <div class="beneficio-item">
                    <img src="../assets/icons/info.png" alt="Benefício 5">
                    <h4>Integração sem costura</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
                <div class="beneficio-item">
                    <img src="../assets/icons/chart.png" alt="Benefício 6">
                    <h4>Análises abrangentes</h4>
                    <p>Uma ferramenta notável com suporte excepcional. Não poderia pedir mais.</p>
                </div>
            </div>
        </div>

        <div class="main-depoimentos" id="depoimentos">
            <!-- Seção de depoimentos, construida usando a biblioteca Swiper para mais agilidade no desenvolvimento-->
            <h3>Depoimentos</h3>
            <div class="swiper-fade-wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Inclusão de um arquivo PHP externo contendo os depoimentos -->
                        <?php include_once '../inc/depoimentos.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <hr class="divider">
    <div class="container">
        <div class="main-galeria" id="galeria">
            <!-- Seção de galeria de imagens -->
            <h3>Galeria</h3>
            <div class="flex-galeria">
                <div class="galeria-row">
                    <!-- Primeira linha de imagens da galeria -->
                    <div class="galeria-item img1">
                        <img src="../assets/img/img1.png" alt="Galeria 1">
                    </div>
                    <div class="galeria-item img2">
                        <img src="../assets/img/img2.png" alt="Galeria 2">
                    </div>
                </div>
                <div class="galeria-row">
                    <!-- Segunda linha de imagens da galeria -->
                    <div class="galeria-item img3">
                        <img src="../assets/img/img3.png" alt="Galeria 3">
                    </div>
                    <div class="galeria-item img4">
                        <img src="../assets/img/img4.png" alt="Galeria 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>