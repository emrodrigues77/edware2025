<?php
    use Site\Utils\PageUtils;
?>
<div class="content">
    <div class="contentHeader">
        <h1>Contato</h1>
        <p>
            Vamos conversar?
        </p>
    </div>
    <p>
        Se você também é um amante dos livros e quer conversar sobre obras e autores; se quer conhecer um pouco mais
        sobre minhas obras e/ou meus processos criativos; ou simplesmente trocar ideias; entre em contato!
    </p>
    <?php
        echo PageUtils::generateContactLinks();
    ?>
</div>