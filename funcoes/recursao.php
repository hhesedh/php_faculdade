<?php 

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Início: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Início: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Termino:Gerente de Vendas
				)
			),
			//Termio: Diretor Comercial
			//Iníco: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=> array(
					//Início: Gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a pagar',
						'subordinados'=> array(
							array(
							//Início: Supervisor de Pagamentos
							'nome_cargo'=> 'Supervisor de Pagamentos'
							)
							//Termino: Supervisor de Pagamentos
						)
					),
					//Termino: Gerente de contas a pagar
					//Início: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos'
							)
							//Termino:Supervisor de Suprimentos
						)
					)
					//Termino: Gerente de Compras
				)
			)
			//Termino: Diretor Financeiro
		)
	)
);

function exibe($cargos){
	$html = '<ul>';
	foreach ($cargos as $cargo) {
		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){
			$html .= exibe($cargo['subordinados']);
		}
		$html .= "</li>";
	}
	$html .= '</ul>';

	return $html;
}
echo exibe($hierarquia);
?>