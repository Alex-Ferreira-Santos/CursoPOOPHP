<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        $c = new Cachorro();
        $c->reagirDono(true);
        $c->reagirDono(false);
        $c->reagirIdadePeso(2, 12.5);
        $c->reagirIdadePeso(17, 4.5);

    ?>
    </pre>
</body>
</html>