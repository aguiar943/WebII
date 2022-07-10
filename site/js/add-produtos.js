var $qtd_produtos = document.getElementById('qtd_produtos');

var $diminuir = document.getElementById('diminuir');
var $aumentar = document.getElementById('aumentar');

var $qtd = 1;



function adicionar(operacao){

    if(operacao === 'aumentar'){

        $qtd++;

        $qtd_produtos.textContent = $qtd;

    } else if($qtd > 1) {

        $qtd--;

        $qtd_produtos.textContent = $qtd;

    }


}