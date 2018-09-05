<?php
require_once("../../../app/models/usuario.class.php");
try
{
    $object = new Usuario;
    if($object->getUsuario()){
        if(isset($_POST['entrar'])){
            $_POST = $object->validateForm($_POST);

                    if($object->setNombre($_POST['usuario'])){
                        if($object->checkUsuario()){
							$traerFecha= $object->gettiempo_intentos();
							$traerFechaAct = date("Y-m-d H:i:s");
							$d1 = new DateTime($traerFecha);
							$d2 = new DateTime($traerFechaAct);
							if($d1<=$d2){
								$numero_intentosnew=$object->getnumb_ingresos();
								if($numero_intentosnew==3){
									$numeroNewIntentos=0;
									if($object->setnumb_ingresos($numeroNewIntentos)){
										$object->updateNumeroIntentos();								
									}
								}
                                if($object->setClave($_POST['contraseña'])){
									if($object->checkClaveUsuario()){
                                        $_SESSION['IdUsuario'] = $object->getId();
                                        $_SESSION['NombreUsuario'] = $object->getNombre();
                                        $_SESSION['cargo'] = $object->getCargo();
										$diaOpcion = date("Y-m-d");
										#echo $diaOpcion."<br>";
										$date1 = new DateTime($diaOpcion);
										$date2 = new DateTime($object->getFechaContra());
										if($date1>=$date2){
											$diff = $date1->diff($date2);
											// will output 2 days
											$diferenciaDias= $diff->days;
											if($diferenciaDias>=90){
												# necesita cambiar la contraseña
												Page::showMessage(3, "Por razones de seguridad usted tiene que cambiar su contraseña (cada 90 dias)", "contro90dias.php");
											}
											else{
												if($diferenciaDias>=85 && $diferenciaDias<90){
													$numeroSuccesIntentos=0;
													if($object->setnumb_ingresos($numeroSuccesIntentos)){
														$modificarNum= $object->updateNumeroIntentos();
														if($modificarNum){
															$Id_estado= $object->getestado_sesion();
															if($Id_estado==0){
																$sumaEstadoSesion=$Id_estado+1;
																if($object->setestado_sesion($sumaEstadoSesion)){
																	$object->updateEstadoSesion();
																	#	redireccionar al menu normalmente pero tiene que cambiar su contraseña en: ".$diasRestantes." dias
																	$diasRestantes=90 - $diferenciaDias;
																	Page::showMessage(1, "Inicio de sesion correcto (Por razones de seguridad usted tiene que cambiar su contraseña en ".$diasRestantes." dias)", "index.php");						
																}
															}
															else if($Id_estado==1){
																$sumaEstadoSesion=$Id_estado+1;
																if($object->setestado_sesion($sumaEstadoSesion)){
																$object->updateEstadoSesion();
																#redireccionar al menu normalmente
																throw new Exception("Error la sesion de este usuario ya estaba activo, por razón de seguridad esta cuenta se suspendera");						
																}
															}
															else if($Id_estado==2){
																throw new Exception("Por motivos de seguridad este usuario a sido suspendido, revisar correo electronico con las instrucciones a seguir(recupera tu contraseña para verificar tu identidad)","correo.php");
															}
														}
													}
													else{
														throw new Exception("Error al ingresar numero de intentos");
													}									
												}
												else{
													$numeroSuccesIntentos=0;
													if($object->setnumb_ingresos($numeroSuccesIntentos)){
														$modificarNum= $object->updateNumeroIntentos();
														if($modificarNum){
															$Id_estado= $object->getestado_sesion();
															if($Id_estado==0){
																$sumaEstadoSesion=$Id_estado+1;
																if($object->setestado_sesion($sumaEstadoSesion)){
																	$object->updateEstadoSesion();
																	#redireccionar al menu normalmente
																	Page::showMessage(1, "Inicio de sesion correcto", "index.php");								
																}
															}
															else if($Id_estado==1){
																$sumaEstadoSesion=$Id_estado+1;
																if($object->setestado_sesion($sumaEstadoSesion)){
																$object->updateEstadoSesion();
																#redireccionar al menu normalmente
																throw new Exception("Error la sesion de este usuario ya estaba activo, por razón de seguridad esta cuenta se suspendera");						
																}
															}
															else if($Id_estado==2){
																throw new Exception("Por motivos de seguridad este usuario a sido suspendido, revisar correo electronico con las instrucciones a seguir");
															}													
														}
													}
													else{
														throw new Exception("Error al ingresar numero de intentos");
													}
												}
											}
										}else
										{
											throw new Exception("Cambio de contraseño forzada o erroneo (fecha de ultimo cambio de contraseña en futuro)");								
										}							
                                    }
                                    else{
										#Inicio
										$numero_intentos=$object->getnumb_ingresos();
										#echo $numero_intentos;
										if($numero_intentos<3){
											$SumaNum=$numero_intentos+1;
											if($SumaNum<=2){
												if($object->setnumb_ingresos($SumaNum)){
													$modificarNum= $object->updateNumeroIntentos();
													if($modificarNum){
														$intentos= 3-$SumaNum;
														throw new Exception("Contraseña incorrecta, numero de intentos restantes: ".$intentos);
													}
												}
												else{
													throw new Exception("Error al ingresar numero de intentos");
												}
											}
											else{
												if($object->setnumb_ingresos($SumaNum)){
													$fecha = date("Y-m-d");
													$hora = date("H:i:s");
													//Incrementando 1 dias
													$procesosuma = strtotime($fecha."+ 1 days");
													$sumaDia=date("Y-m-d",$procesosuma);
													$FechaNueva=$sumaDia." ".$hora;
													#echo $FechaNueva." Despues <br>";
													if($object->settiempo_intentos($FechaNueva)){
														$modificarNumlast= $object->updateLastNumeroIntentos();
														if($modificarNumlast){
															$intentos= 3-$SumaNum;
															throw new Exception("Limite de intentos excedido porfavor, vuelve a intentarlo luego de 24 horas");
														}
													}
													else{
														throw new Exception("Error al ingresar Tiempo de intentos");
													}
												}
												else{
													throw new Exception("Error al ingresar numero de intentos");
												}
											}								
										}
										else{
											throw new Exception("Limite de intentos excedido, porfavor vuelve a intentarlo luego de 24 horas");
										}
									}
									}else{
										#Inicio
										$numero_intentos=$object->getnumb_ingresos();
										#echo $numero_intentos;
										if($numero_intentos<3){
											$SumaNum=$numero_intentos+1;
											if($SumaNum<=2){
												if($object->setnumb_ingresos($SumaNum)){
													$modificarNum= $object->updateNumeroIntentos();
													if($modificarNum){
														$intentos= 3-$SumaNum;
														throw new Exception("Contraseña incorrecta, numero de intentos restantes: ".$intentos);
													}
												}
												else{
													throw new Exception("Error al ingresar numero de intentos");
												}
											}
											else{
												if($object->setnumb_ingresos($SumaNum)){
													$fecha = date("Y-m-d");
													$hora = date("H:i:s");
													//Incrementando 1 dias
													$procesosuma = strtotime($fecha."+ 1 days");
													$sumaDia=date("Y-m-d",$procesosuma);
													$FechaNueva=$sumaDia." ".$hora;
													#echo $FechaNueva." Despues <br>";
													if($object->settiempo_intentos($FechaNueva)){
														$modificarNumlast= $object->updateLastNumeroIntentos();
														if($modificarNumlast){
															$intentos= 3-$SumaNum;
															throw new Exception("Limite de intentos excedido, porfavor vuelve a intentarlo luego de 24 horas");
														}
													}
													else{
														throw new Exception("Error al ingresar Tiempo de intentos");
													}
												}
												else{
													throw new Exception("Error al ingresar numero de intentos");
												}
											}								
										}
										else{
											throw new Exception("Limite de intentos excedido porfavor, vuelve a intentarlo luego de 24 horas");
										}
									}
								}
							else{
								throw new Exception("Su usuario fue bloqueado temporalmente, porfavor intentarlo luego de 24 horas de su ultimo intento");
							}
						}else{
							throw new Exception("Este Alias no perneten a ninguna cuenta");
						}
					}else{
						throw new Exception("Alias es invalido");
					}
        }
    }
    else{
        Page::showMessage(3, "No hay usuarios disponibles", null);
    }

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}


require_once("../../../app/views/dashboard/page/login_view.php");
?>