
<?php
require_once __DIR__ . '/Biblioteca.php';

$biblioteca = new Biblioteca('Biblioteca do IFSul');
$livro1 = new Livro('Clean Code', 'Robert C. Martin');
$livro2 = new Livro('Engenharia de Software', 'Ian Sommerville');
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

echo '=== ' . $biblioteca->getNome() . ' ===' . PHP_EOL;
foreach ($biblioteca->listarLivros() as $livro) {
    echo 'Título: ' . $livro->getTitulo() . PHP_EOL;
    echo 'Autor: ' . $livro->getAutor() . PHP_EOL;
    echo '----------------------' . PHP_EOL;
}
$livro = $biblioteca->buscarLivro('Clean Code');

if ($livro !== null) {

    echo 'Livro encontrado: ' . $livro->getTitulo() . PHP_EOL;
    if ($livro->estaDisponivel()) {
        echo 'O livro está disponível.' . PHP_EOL;
    } else {
        echo 'O livro está indisponível.' . PHP_EOL;
    }

    if ($livro->emprestar()) {
        echo 'Empréstimo realizado!' . PHP_EOL;
    } else {
        echo 'Não foi possível emprestar!' . PHP_EOL;
    }

    if ($livro->estaDisponivel()) {
        echo 'O livro está disponível.' . PHP_EOL;
    } else {
        echo 'O livro está indisponível.' . PHP_EOL;
    }
    if ($livro->emprestar()) {
        echo 'Empréstimo realizado!' . PHP_EOL;
    } else {
        echo 'Livro já está emprestado!' . PHP_EOL;
    }
    $livro->devolver();

    echo 'Livro devolvido!' . PHP_EOL;

    if ($livro->estaDisponivel()) {
        echo 'O livro está disponível novamente.' . PHP_EOL;
    }

} else {
    echo 'Livro não encontrado!' . PHP_EOL;
}
