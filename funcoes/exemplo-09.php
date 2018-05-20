<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Diretor comercial
            array(
                'nome_cargo'=>'Diretor comercial',
                'subordinados'=>array(
                    //Gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //FIM Gerente de vendas
                )
            ),
            //FIM Diretor comercial

            //Diretor financeiro
            array(
                'nome_cargo'=>'Diretor financeiro',
                'subordinados'=>array(
                    //Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Supervisor
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos'
                            )
                            //FIM Supervisor
                        )
                    ),
                    //FIM Gerente de contas a pagar
                    //Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'=>array(
                            //Supervidor de suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'Funcionário'
                                    )
                                )
                            )
                            //FIM Supervidor de suprimentos
                        )
                    )
                    //FIM Gerente de compras
                )
            )
            //FIM Diretor financeiro
        )
    )
);

function exibe($cargos){
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);
?>