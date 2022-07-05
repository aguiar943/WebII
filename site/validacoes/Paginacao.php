<?php

    define("ITENS_POR_PAGINA", "8");

    class Paginacao{

        public static function obterProximaPagina($proxima_pg, $arr_itens, $last_pg){

            $qtd_itens = count($arr_itens);

            $qtd_paginas = $qtd_itens / ITENS_POR_PAGINA ;

            if( $qtd_paginas % 2 != 0 && $proxima_pg < $qtd_paginas) {

                $qtd_paginas++;

                $qtd_paginas = intval($qtd_paginas);

            }

            if($proxima_pg > $qtd_paginas){

                return intval($qtd_paginas);

            } else if($proxima_pg < $qtd_paginas) {

                return $proxima_pg+1;

            }else {

                return $proxima_pg;

            }

        }

        public static function obterPaginaAnterior($pg_anterior){

            if($pg_anterior == 0){

                return 1;
                
            } else {

                return $pg_anterior;

            }

        }

        public static function itemPertencePaginaAtual($pg_atual, $indice_atual){

            $intervalo_inicial = ($pg_atual * ITENS_POR_PAGINA) - ITENS_POR_PAGINA;

            $intervalo_final = $intervalo_inicial + ITENS_POR_PAGINA;

            if($indice_atual >= $intervalo_inicial && $indice_atual < $intervalo_final){

                return true;

            }

            return false;

        }
        
        public static function obterQtdPaginas($arr_itens){
            
            $intervalo = ITENS_POR_PAGINA;
            $pgs = 1;
            $j = 0;
            
            for($i = 0 ; $i < count($arr_itens); $i++){

                if($intervalo == $j){

                    $pgs++;
                    $j = 0;

                } 

                $j++;

            }

            return $pgs;

        }

    }

?>
