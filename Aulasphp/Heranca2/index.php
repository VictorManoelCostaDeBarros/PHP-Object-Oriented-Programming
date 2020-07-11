<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 
            // Pessoa
            require_once 'Pessoa.php';
            // $p1 = new Pessoa(); Nao pode vira um objeto pq e abstrata

            // Visitante
            require_once 'Visitante.php';
            $v1 = new Visitante();
            $v1->setNome('Juvenal');
            $v1->setIdade(33);
            $v1->setSexo('M');

            print_r($v1);

            // Auluno
            require_once 'Aluno.php';
            $a1 = new Aluno();
            $a1->setNome("Victor");
            $a1->setMatricula(1111);
            $a1->setIdade(20);
            $a1->setSexo('M');
            $a1->setCurso('DS');
            $a1->pagarMensalidade();
            print_r($a1);

            // bolsista 
            require_once 'Bolsista.php';
            $b1 = new Bolsista();
            $b1->setNome("Jaoo");
            $b1->setBolsa(12.8);
            $b1->setMatricula(5555);
            $b1->setIdade(40);
            $b1->setSexo('M');
            $b1->setCurso('TI');
            $b1->pagarMensalidade();

            print_r($b1);

        ?>
    </pre>
</body>
</html>