
<?php
require_once __DIR__ . '/ServicoEmprestimo.php';


$biblioteca = new Biblioteca('Biblioteca do IFSul');

$livro1 = new Livro('Clean Code', 'Robert C. Martin');

$livro2 = new Livro(
    'Engenharia de Software',
    'Ian Sommerville'
);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);

$servico = new ServicoEmprestimo($biblioteca);

echo '=== ' . $biblioteca->getNome() . ' ===' . PHP_EOL;

foreach ($biblioteca->listarLivros() as $livro) {

    echo 'Título: ' . $livro->getTitulo() . PHP_EOL;

    echo 'Autor: ' . $livro->getAutor() . PHP_EOL;

    echo '------------------------' . PHP_EOL;
}
echo PHP_EOL . '=== EMPRÉSTIMOS ===' . PHP_EOL;
echo $servico->emprestarLivro('Clean Code') . PHP_EOL;
echo $servico->emprestarLivro('Clean Code') . PHP_EOL;
echo $servico->emprestarLivro('Livro inexistente') . PHP_EOL;

echo PHP_EOL . '=== DEVOLUÇÕES ===' . PHP_EOL;

echo $servico->devolverLivro('Clean Code') . PHP_EOL;
echo $servico->devolverLivro('Clean Code') . PHP_EOL;
echo PHP_EOL . '=== NOVO EMPRÉSTIMO ===' . PHP_EOL;
echo $servico->emprestarLivro('Clean Code') . PHP_EOL;
