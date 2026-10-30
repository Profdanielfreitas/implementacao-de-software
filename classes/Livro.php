
<?php
class Livro {
    private string $titulo;
    private string $autor;
    private bool $disponivel = true;

    public function __construct(
        string $titulo,
        string $autor
    ) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function estaDisponivel(): bool {
        return $this->disponivel;
    }

    public function emprestar(): bool {

        if (!$this->disponivel) {

            return false;
        }
        $this->disponivel = false;
        return true;
    }

    public function devolver(): void {

        $this->disponivel = true;
    }
}
