<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 POO</title>
</head>
<body>
    <pre>
    <?php
        require_once './Lutador.php';
        $l1 = new Lutador("pretty boy","França",31,1.75,68.9,11,2,1);   
        $l1->setCategoria("leve");

        $l2 = new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
        $l2->setCategoria("leve");

        $l3 = new Lutador();
        $l3->setNome("Snapshadow");
        $l3->setNacionalidade("EUA");
        $l3->setIdade(35);
        $l3->setAltura(1.65);
        $l3->setPeso(80.9);
        $l3->setCategoria("Médio");
        $l3->setVitorias(12);
        $l3->setDerrotas(2);
        $l3->setEmpates(1);

        $l4 = new Lutador();
        $l4->setNome("Dead Code");
        $l4->setNacionalidade("Austrália");
        $l4->setIdade(28);
        $l4->setAltura(1.93);
        $l4->setPeso(81.6);
        $l4->setCategoria("Médio");
        $l4->setVitorias(13);
        $l4->setDerrotas(0);
        $l4->setEmpates(2);

        $l5 = new Lutador();
        $l5->setNome("Ufocobol");
        $l5->setNacionalidade("Brasil");
        $l5->setIdade(37);
        $l5->setAltura(1.70);
        $l5->setPeso(119.3);
        $l5->setCategoria("Pesado");
        $l5->setVitorias(5);
        $l5->setDerrotas(4);
        $l5->setEmpates(3);

        $l6 = new Lutador();
        $l6->setNome("Nerdaard");
        $l6->setNacionalidade("EUA");
        $l6->setIdade(30);
        $l6->setAltura(1.81);
        $l6->setPeso(105.7);
        $l6->setCategoria("Pesado");
        $l6->setVitorias(12);
        $l6->setDerrotas(2);
        $l6->setEmpates(4);

    ?>
    </pre>
</body>
</html>