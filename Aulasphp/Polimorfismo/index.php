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
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';

            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();

            $m->setPeso(85.5);
            $m->setIdade(2);
            $m->setMembros(4);
            $m->locomover();
            $m->alimentar();
            $m->emitirSom();

            $c = new Canguru();
            $c->setPeso(25.5);
            $c->setIdade(5);
            $c->setMembros(4);
            $c->locomover();
            $c->alimentar();
            $c->emitirSom();
            $k = new Cachorro();
            $k->setPeso(30.5);
            $k->setIdade(35);
            $k->setMembros(4);
            $k->locomover();
            $k->alimentar();
            $k->emitirSom();

            // $p->setPeso(0.50);
            // $p->setIdade(1);
            // $p->setMembros(0);
            // $p->locomover();
            // $p->alimentar();
            // $p->emitirSom();
            // $p->soltarBolha();

            // $a->setPeso(0.90);
            // $a->setIdade(2);
            // $a->setMembros(2);
            // $a->locomover();
            // $a->alimentar();
            // $a->emitirSom();
            // $a->fazerNinho();

            
        ?>
    </pre>
</body>
</html>