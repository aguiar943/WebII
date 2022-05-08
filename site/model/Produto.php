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
    private $subcategoria;
    private $marca;
    private $cores = array();
    private $imgs_vitrine = array();
    private $imgs_detalhes = array();
    
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
    
    public function getMarca(){
        return $this->marca;
    }

    public function getSubcategoria(){
        return $this->subcategoria;
    }   

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setSubcategoria($subcategoria){
        $this->subcategoria = $subcategoria;
    }
    
    public function getCores(){

        return $this->cores;

    }

    public function setCores($cores){

        $this->cores = $cores;

    }

    public function getImgsVitrine(){

        return $this->imgs_vitrine;

    }

    public function setImgsVitrine($imgs_vitrine){

        $this->imgs_vitrine = $imgs_vitrine;

    }

    public function getImgsDetalhes(){

        return $this->imgs_detalhes;

    }

    public function setImgsDetalhes($imgs_detalhes){

        $this->imgs_detalhes = $imgs_detalhes;

    }

}
?>
