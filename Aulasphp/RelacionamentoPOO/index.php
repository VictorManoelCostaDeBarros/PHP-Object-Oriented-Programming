<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento</title>
</head>
<body>
    <pre>
    <?php 
        require_once 'Lutador.php';

        $l = [];
        $l[0] = new Lutador('Pretty Boy','Franca',31,1.75,68.9,11,3,1);
        $l[1] = new Lutador('Putscript','Brasil',29,1.68,57.8,14,2,3);
        $l[2] = new Lutador('Snapshadow','EUA',35,1.65,80.9,12,2,1);
        $l[3] = new Lutador('Dead Code','Australia',28,1.93,81.6,13,1,2);
        // $l[4] = new Lutador();
        // $l[5] = new Lutador();
        
        print_r($l[0]);
    ?>
    </pre>
</body>
</html>