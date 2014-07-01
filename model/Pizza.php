<?

class Pizza {

    private $sabores;
    private $tamanho;
    private $valor;

    public function setSabores($sabores) {
        $this->sabores = $sabores;
    }

    public function getSabores() {
        return $this->sabores;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }
}
