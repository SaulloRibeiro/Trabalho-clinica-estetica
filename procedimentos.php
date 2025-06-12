<?php
include_once(__DIR__.'/classes/view/ProcedimentosView.php');

$procedimentoView = new ProcedimentoView();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/procedimentos/style.css">
    <link rel="stylesheet" href="assets/css/procedimentos/mobile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>S_etetics</title>
</head>
<body>
    <div class="pagina">
       <div class="pagina">
        <!-- criando o cabecalho -->
          <header>
            <div class="logo-empresa"></div>

            <div class="menu-btn-container" id="menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>

            <nav class="menu" id="sidebar">
                <ul>
                    <li id="btn-fechar"><i class="fa-solid fa-xmark"></i></li>
                    <li><a class="item-menu" href="index.html">Home</a></li>
                    <li><a class="item-menu" href="agendamento.html">Agendar</a></li>
                    <li><a class="item-menu" href="procedimentos.html">procedimentos</a></li>
                    <li><a class="item-menu" href="clinica.html">Clinica</a></li>
                    <li><a class="item-menu" href="login.html">Administrativo</a></li>
                </ul>    
            </nav>
          </header>

          
        <section id="section-h1">
            <h1>Procedimentos</h1>
        </section>
        
        <main>
            <section class="container-procedimento">
                <h2>Procedimentos capilar</h2>

                <div class="container-cards">
                    <?php
                        $procedimentoView->criarCardsDosProcedimentos("procedimento capilar");
                    ?>
                </div>
            </section>
                
            
            <section class="container-procedimento">
                <h2>Procedimentos corporais</h2>
                
                <div class="container-cards">
                    <?php
                        $procedimentoView->criarCardsDosProcedimentos("tratamento corporal");
                    ?>
                </div>
                
            </section>

            <section>
                <h2>Procedimentos faciais</h2>

                <div class="container-cards">
                    <?php
                        $procedimentoView->criarCardsDosProcedimentos("tratamento facial");
                    ?>
                </div>    
            </section>

        </main>

        <footer>
            <div class="container-footer">
                <div class="container-links-footer">
                    <div class="link-contatos">
                        <h4>Contatos</h4>
                        <a href=""><i class="fa-solid fa-phone"></i>(11)XXXX-XXXX</a>
                        <a href=""><i class="fa-brands fa-whatsapp"></i>WhatsApp</a>
                    </div>

                    <div class="link-redes-sociais">
                        <h4>Redes sociais</h4>
                        <a href=""><i class="fa-brands fa-tiktok"></i>TikTok</a>
                        <a href=""><i class="fa-brands fa-instagram"></i>Instagram</a>
                        <a href=""><i class="fa-brands fa-youtube"></i>Youtube</a>
                    </div>

                    <div class="container-endereco-footer">
                        <h4>Endereço</h4>
                        <p><i class="fa-solid fa-location-dot"></i>Rua Bananas de pijama, 259, White forest - Unova - Sp</p>
                    </div>

                </div>
            </div>
        </footer>

    </div>
    <script src="assets/js/menu.js"></script>
</body>
</html>