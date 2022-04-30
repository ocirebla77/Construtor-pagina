
<?php

echo " hello World PHP"

$artigos = [
    [
        'titulo' => 'Primeiros passos com Spring',
        'conteudo' => '  Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
        programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.',
        'link' => 'primeiros-passos-com-spring.html',

    ],
    [
        'titulo' => 'Primeiros passos com Spring',
        'conteudo' => '  Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
        programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos.',
        'link' => 'o-que-e-metodologia-agil.html',

    ],
    [
        'titulo' => 'Como é o funil do Growth Hacking?',
        'conteudo' => '       Minha amiga que possui um clube de assinaturas começou a utilizar o Growth Hacking após conhecer um pouco
        mais sobre ele.',
        'link' => 'como-e-o-funil-do-growth-hacking.html',

    ],  
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Meu Blog</h1>


        <?php foreach ($artigos as $artigo) ?>



        <h2>
            <a href="<?php echo $artigo1['link'] ?>">
                
            </a>
        </h2>
        <p>
            <?php echo $artigo1['conteudo']?>
            <!-- Na empresa onde trabalho começamos um Coding Dojo, que é basicamente uma reunião com programadores e
            programadoras a fim de resolver desafios e aperfeiçoar as habilidades com algoritmos. -->
        </p>
        <h2>
            <a href="">
            </a>
        </h2>
        <p>
        </p>
        <h2>
            <a href="">
                
            </a>
        </h2>
        <p>
      
        </p>
        <?php endforeach ?>
    </div>
</body>

</html>