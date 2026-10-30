
<?php

require_once __DIR__ . '/Biblioteca.php';

class ServicoEmprestimo {
    private Biblioteca $biblioteca;
    public function __construct(Biblioteca $biblioteca) {
        $this->biblioteca = $biblioteca;
    }
    public function emprestarLivro(string $titulo): string {
        $livro = $this->biblioteca->buscarLivro($titulo);
        if ($livro === null) {
            return 'Livro não encontrado: ' . $titulo;
        }
        if ($livro->emprestar()) {
            return 'Empréstimo realizado: ' . $titulo;
        }
        return 'Livro indisponível: ' . $titulo;
    }

    public function devolverLivro(string $titulo): string {
        $livro = $this->biblioteca->buscarLivro($titulo);
        if ($livro === null) {
            return 'Livro não encontrado: ' . $titulo;
        }
        if ($livro->estaDisponivel()) {
            return 'O livro já estava disponível: ' . $titulo;
        }
        $livro->devolver();

        return 'Devolução realizada: ' . $titulo;
    }
}
