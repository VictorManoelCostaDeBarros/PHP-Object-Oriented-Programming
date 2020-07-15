<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("aula 2 de PHP");
        $v[2] = new Video("aula 15 de HTML");

        $g[0] = new Gafanhoto("Victor", 20, "m", "Vitinho");
        $g[1] = new Gafanhoto("Joao", 40, "M", "jao");

        $vis[0] = new Visualizacao($g[0],$v[2]);
        $vis[1] = new Visualizacao($g[0],$v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarPorc(85);
 
        // print_r($v);

        // print_r($g);

        print_r($vis);
    ?>
    </pre>
</body>
</html>