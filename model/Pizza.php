<?

class Pizza {

    private $sabores = array('4 queijos', 'bacon', 'calabresa', 'milho', 'catupiri');
    private $tamanho = array('P', 'M', 'G', 'F');
    private $observacao;
    private $valor;

    public function getSabores() {
        return $this->sabores;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setObservacao($obs) {
        $this->observacao = $obs;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }
}
