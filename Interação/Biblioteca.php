
<?php

require_once __DIR__ . '/Livro.php';

class Biblioteca {
    private string $nome;
    private array $livros = [];

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function adicionarLivro(Livro $livro): void {
        $this->livros[] = $livro;
    }

    public function listarLivros(): array {
        return $this->livros;
    }

    public function buscarLivro(string $titulo): ?Livro {
        foreach ($this->livros as $livro) {
            if ($livro->getTitulo() === $titulo) {
                return $livro;
            }
        }
        return null;
    }
}
