<?php
    use Site\Utils\ImageUtils;
?>
<div class="content">
    <div class="contentHeader">
        <h1>A Flor Negra</h1>
        <p>
            Uma novela policial
        </p>
    </div>
    <?php
        echo ImageUtils::renderImageContainer(
            'book-cover-container',
            COVERS_PATH . 'a-flor-negra.jpg',
            'A Flor Negra'
    ); ?>
    <p>
        Sem qualquer motivo específico, eu não era muito interessado em romances policiais. Confesso que nunca li
        qualquer obra de mestres deste gênero como Agatha Christie ou Conan Doyle, por exemplo. Honestamente falando,
        prefiro a ficção-científica - como <span class='book-title'>"Frankenstein"</span>, <span
            class='book-title'>"Permutation City"</span>, <span class='book-title'>"1984"</span> e
        <span class='book-title'>"Snow Crash"</span> -, os épicos da fantasia - como <span class='book-title'>"O Senhor
            dos Anéis"</span> e <span class='book-title'>"Uma Canção de Gelo e Fogo"</span> - e os romances com pegada
        medieval, na linha de <span class='book-title'>"As Crônicas Saxônicas"</span>, <span class='book-title'>"As
            Brumas de Avalon"</span> e <span class='book-title'>"O Gigante Esquecido"</span>.
    </p>
    <p>
        Mesmo não sendo um aficcionado por este tipo de romance, acabei, contudo, escrevendo a novela
        <span class='book-title'>"A Flor Negra"</span>. O texto conta a história do detetive Ricardo Rodrigues e sua
        luta pra desvendar um misterioso assassinato ocorrido na pequena cidade de Antunes, em Minas Gerais. A ideia
        para o enredo deste livro foi do meu irmão Ricardo Rodrigues, que disse a ter concebido após um sonho. Achei que
        o argumento daria uma boa história e decidi transformá-la numa novela policial com pouco mais de oitenta
        páginas. Os capítulos são divididos por datas, como um diário, para imprimir um ritmo mais dinâmico à narrativa.
    </p>
    <p>
        Para ler um excerto de <span class='book-title'>"A Flor Negra"</span>, clique
        <a target="_blank" href="<?php echo DOCS_PATH . "a-flor-negra-excerto.pdf" ?>">aqui</a>.
    </p>
</div>