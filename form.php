<?php

/*$imagens[] = '';*/

// Definição da chave manualmente
/*$imagens[0] = 'Novo valor';
echo $imagens[0];
*/
$i = 1;
while ($i <= 5):  
	if (! empty($_POST['image_base64_'.$i])){  
		$image = file_get_contents($_POST['image_base64_'.$i]);
		//echo $image;
		file_put_contents( 'images/foto'.$i.'.jpg', $image);
	}
    $i++;
endwhile;
/*
if (! empty($_POST['cliente'])){  
	echo $_POST['cliente'];
}

if (! empty($_POST['placa'])){  	
    echo $_POST['placa'];
}

if (! empty($_POST['usuario'])){  
    echo $_POST['usuario'];
}

if (! empty($_POST['end_entrega'])){  	
    echo $_POST['end_entrega'];
}

echo $_POST['dt_saida'];
echo $_POST['hr_saida'];		
echo $_POST['km_saida'];	
echo $_POST['combustivel_saida'];

echo $_POST['dt_retorno'];
echo $_POST['hr_retorno'];
echo $_POST['km_retorno'];
echo $_POST['combustivel_retorno'];

echo $_POST['radio_farois'];
echo $_POST['radio_calotas'];
echo $_POST['radio_rodas'];
echo $_POST['radio_alarme'];
echo $_POST['radio_acendedor'];
echo $_POST['radio_tag_placa'];
echo $_POST['radio_cartao_combus'];
echo $_POST['radio_radio_cd'];
echo $_POST['radio_multimidia'];
echo $_POST['radio_encosto_dvd'];
echo $_POST['radio_tapete'];
echo $_POST['radio_manual'];
echo $_POST['radio_dut'];
echo $_POST['radio_extintor'];
echo $_POST['radio_estepe'];
echo $_POST['radio_macaco'];
echo $_POST['radio_triangulo'];
echo $_POST['radio_chave_roda'];
echo $_POST['radio_chave_reserva'];
*/

echo "CheckList Salvo!"; 

/*$image = file_get_contents($_POST['image_base64']);
$image2 = file_get_contents($_POST['image_base64_2']);
$image3 = file_get_contents($_POST['image_base64_3']);
$image4 = file_get_contents($_POST['image_base64_4']);
$image5 = file_get_contents($_POST['image_base64_5']);

//salva a imagem com o nome sendo a data
file_put_contents( 'images/'.date('YmdHis').'.jpg', $image);
file_put_contents( 'images/'.date('YmdHis').'.jpg', $image2);
file_put_contents( 'images/'.date('YmdHis').'.jpg', $image3);
file_put_contents( 'images/'.date('YmdHis').'.jpg', $image4);
file_put_contents( 'images/'.date('YmdHis').'.jpg', $image5);

*/
//exibe a imagem
//header('Content-type: image/jpeg');
//echo $image;
