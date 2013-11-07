<?php

// hacer un desglose óptimo de billetes y monedas de una cantidad
// que se encuentra almacenada en la variable $valoradevolver

$valoradevolver = 1345.5;
$i = 0;
$resto = $valoradevolver;
$billetes= array(50000,20000,10000,5000,2000,1000,500,200,100,50,20,10,5,2,1,);
while ($resto != 0) // SI EL RESTO ES DISTINTO DE 0 HACEMOS SHIT DE BILLETES $I
{
	switch ($billetes[$i])     //valores ordinales
	{
		case 50000:  // billetes de 500
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 500 <br />";
				$resto = $resto % $billetes[$i]; // EL RESTO AHORA TENDRIA X 
			}
			break; //Y SE ACABA EL SHTI CON EL BREAK POR LO QUE SALE E INCREMENTE $I
		case 20000:  // billetes de 200
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 200 <br />";
				$resto = $resto % $billetes[$i]; 
			} 				// DARA UN RESTO, SALDRA DEL SHTI Y LEEREA EL SIGUIENTE DEL ARRAY HASTA QUE EL RESTO DE 0
			break;
		case 10000:  // billetes de 100
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 100 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 5000:  // billetes de 50
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 50 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 2000:  // billetes de 20
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 20 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 1000:  // billetes de 10
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 10 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 500:  // billetes de 5
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente billetes de 5 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 200:  // monedas de 2
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente monedas de 2 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
		case 100:  // monedas de 1
			$cociente = (int)($resto / $billetes[$i]);
			if ( $cociente != 0)
			{
				print "Necesito $cociente monedas de 1 <br />";
				$resto = $resto % $billetes[$i];
			}
			break;
			
			case 50:  // monedas de 1
				$cociente = (int)($resto / $billetes[$i]);
				if ( $cociente != 0)
				{
					print "Necesito $cociente monedas de 50 <br />";
					$resto = $resto % $billetes[$i];
				}
				break;
				case 20:  // monedas de 1
					$cociente = (int)($resto / $billetes[$i]);
					if ( $cociente != 0)
					{
						print "Necesito $cociente monedas de 20 <br />";
						$resto = $resto % $billetes[$i];
					}
						break;
						case 10:  // monedas de 1
							$cociente = (int)($resto / $billetes[$i]);
							if ( $cociente != 0)
							{
								print "Necesito $cociente monedas de 10 <br />";
								$resto = $resto % $billetes[$i];
							}
								break;
								case 5:  // monedas de 1
									$cociente = (int)($resto / $billetes[$i]);
									if ( $cociente != 0)
									{
										print "Necesito $cociente monedas de 5 <br />";
										$resto = $resto % $billetes[$i];
									}
										break;
										case 2:  // monedas de 1
											$cociente = (int)($resto / $billetes[$i]);
											if ( $cociente != 0)
											{
												print "Necesito $cociente monedas de 2 <br />";
												$resto = $resto % $billetes[$i];
											}
												break;
												case 1:  // monedas de 1
													$cociente = (int)($resto / $billetes[$i]);
													if ( $cociente != 0)
													{
														print "Necesito $cociente monedas de 1 <br />";
														$resto = $resto % $billetes[$i];
													}
														break;
	}
	$i++;
}
if ($valoradevolver == 0)
	echo "No hay cambio que devolver<br />";
?>