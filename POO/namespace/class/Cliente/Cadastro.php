<?php

namespace Cliente;

class Cadastro extends \Cadastro { //Essa barra faz voltar na raiz
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
    }
}

?>