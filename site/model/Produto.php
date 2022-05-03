<?php

class Produto {
    
    private $id;
    private $descricao;
    private $modelo;
    private $preco_custo;
    private $preco_venda;
    private $cd_barras;
    private $cd_referencia;
    private $unidade;
    private $ncm;
    
    public function __construct( $descricao, $modelo, $preco_custo, $preco_venda, $cd_barras, $cd_referencia, $unidade, $ncm)
    {

        $this->descricao = $descricao;
        $this->modelo = $modelo;
        $this->preco_custo = $preco_custo;
        $this->preco_venda = $preco_venda;
        $this->cd_barras = $cd_barras;
        $this->cd_referencia = $cd_referencia;
        $this->unidade = $unidade;
        $this->ncm = $ncm;

    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getDescricao() { return $this->descricao; }
    public function setDescricao($descricao) {$this->descricao = $descricao;}

    public function getModelo() { return $this->modelo; }
    public function setModelo($modelo) {$this->modelo = $modelo;}

    public function getPrecoCusto() { return $this->preco_custo; }
    public function setPrecoCusto($preco_custo) {$this->preco_custo = $preco_custo;}

    public function getPrecoVenda() { return $this->preco_venda; }
    public function setPrecoVenda($preco_venda) {$this->preco_venda = $preco_venda;}

    public function getCdBarras() { return $this->cd_barras; }
    public function setCdBarras($cd_barras) {$this->cd_barras = $cd_barras;}

    public function getCdReferencia() { return $this->cd_referencia; }
    public function setCdReferencia($cd_referencia) {$this->cd_referencia = $cd_referencia;}

    public function getUnidade() { return $this->unidade; }
    public function setUnidade($unidade) {$this->unidade = $unidade;}

    public function getNcm() { return $this->ncm; }
    public function setNcm($ncm) {$this->ncm = $ncm;}

}
?>