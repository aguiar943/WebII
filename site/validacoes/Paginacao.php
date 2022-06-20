<?php

    define("ITENS_POR_PAGINA", "4", true);

    class Paginacao{

        public static function obterProximaPagina($proxima_pg, $arr_itens){

            $qtd_itens = count($arr_itens);

            $qtd_paginas = $qtd_itens / ITENS_POR_PAGINA ;

            if( $qtd_paginas % 2 != 0 && $proxima_pg < $qtd_paginas) {

                $qtd_paginas++;

                $qtd_paginas = intval($qtd_paginas);

            }

            if($proxima_pg > $qtd_paginas){

                return intval($qtd_paginas);

            } else {

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

    }

?>
