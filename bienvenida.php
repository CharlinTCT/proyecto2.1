<?php
include ("conexion-cotizacion.php");
$usuarios = "SELECT * FROM productos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="images/svg" href="img/logo1.svg">
    <title>MarBlue</title>
    <link rel="stylesheet" href="/css/bienvenido.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>     
    <div class="header">    
    <div class="welcome">      
     <img src="/img/logo3.png" alt="" class="logo-welcome">
     <img src="/img/logo2.png" alt="" class="logo3">
     <a href="cerrar-sesion.php" class="close-sesion">cerrar sesion</a>
    </div>
    
     <h1>
        <?php
            include("conexion.php");

            session_start();

            if (isset($_SESSION["loggedin"])) {
                $usuario = $_SESSION["usuario"];
                echo "<p> Bienvenido " . $usuario . "</p>";
            }

            ?> </h1>
     </h1>
    <form class="formulario" name="formulario"id="formulario"  method="post"action="insertar.php">
        <div class="contenedor">
        <table class="inputsdetabla">
            <tr>
                <td>
                <label class="form_nombre" for="">Nombre de tu proyecto</label>
               </td>
               <td>
                <input id="form_nombre" type="text" name="Nombre" value="">

               </td>
 
            </tr>
            <tr>
                <td><label class="form_fechacrea" for="">Fecha de creacion</label></td>
                <td>
                    <input  id="form_fechacrea" type="date" name="fecha_c" value="">
               
                </td>
            </tr>
            <tr>
                <td><label class="fe" for="">Fecha de entrega</label></td>
                <td>
                    <input  id="form_fechaentrega" type="date" name="fecha_f" value="">
                    
                </td>
            </tr>
            <tr>
                <td><label for="">Mi presupuesto</label></td>
                
              
                <td>
                    <select id="form_presupuesto" class="" name="form_presupuesto">
                        <option value="600000">600000</option>
                        <option value="1000000">1000000</option>
                        <option value="1300000">1300000</option> 
                        <option value="1800000">1800000</option>                   
                    </select>
          
                </td>
            </tr>
            <tr>
                <td><label class="extras" for="">Extras</label></td>
                
                <td>
                <select id="mancadeshit" class="" name="mancadeshit2" onchange="ShowSelected();">
                        <option value="">---LANDING PAGE:---</option>
                        <option value="1000">Cuenta de correo corporativo</option>
                        <option value="200000">Landing Page administrable</option>
                        <option value="200000">Banner principal con movimiento</option>
                        <option value="200000">Titulares llamativos</option> 
                        <option value="200000">Banner de Testimonios</option> 
                        <option value="200000">Puntos de fuga minimizados</option> 
                        <option value="200000">Formulario para captura de Leads</option> 
                        <option value="200000">Integración con Redes Sociales</option> 
                        <option value="200000">Diseño ideal para Google Ads</option> 
                        <option value="200000">Desarrollo en 6 días. </option>
                        <option value=""></option>
 
                        <option value="">---PAGINA WEB:---</option> 
                        <option value="500000">5 Cuentas de correo corporativo</option> 
                        <option value="500000">Estructuración de la información</option> 
                        <option value="500000">4 Banners principales con movimiento</option> 
                        <option value="500000">7 Páginas Internas definidas Pre-instalada</option> 
                        <option value="500000">Formulario de contacto avanzado</option> 
                        <option value="500000">Links a redes sociales</option> 
                        <option value="500000">Diseño web personalizado corporativo</option> 
                        <option value="500000">Botón flotante de llamada</option>     
                        <option value="500000">Galería de fotos y videos</option>
                        <option value="500000">Enlaces a sitios externos</option>
                        <option value="500000">Carrusel de testimonios</option>
                        <option value="500000">Búsqueda y compra de imágenes</option>
                        <option value="500000">SEO Básico</option>
                        <option value="500000">Desarrollo Optimizado (Carga Rápida)</option>   
                        <option value="500000">Desarrollo en 10 días</option>
                        <option value=""></option>  
                                               
                        <option value="">---TIENDA ONLINE:---</option>
                        <option value="1000000">Desarrollo en WooCommerce</option>
                        <option value="1000000">3 Banners principales con movimiento</option>
                        <option value="1000000">5 Páginas Internas definidas</option>    
                        <option value="1000000">25 Categorías y Subcategorías de producto</option>    
                        <option value="1000000">Productos Ilimitados (Sube los que quieras)</option>
                        <option value="1000000">50 productos pre-cargados</option>
                        <option value="1000000">Listas de deseos</option>
                        <option value="1000000">Carrito de compras seguro</option>
                        <option value="1000000">Vista de pedidos</option>
                        <option value="1000000">Registro e Ingreso de usuarios</option>
                        <option value="1000000">Métodos de pago (Payu, Epayco, Paypal...)</option>
                        <option value="1000000">Tienda Online 100% Administrable</option>
                                          
                    </select><br>
                    <br>
                    <input readonly="readonly"name="value" type="text" id="form_extras" >
                   
                    
                    <input style="visibility:hidden" name="name" type="text" id="form_extras1">
                </td>
            </tr>
            <tr>
                <td>
                
                <!--<input type="button" value="button" onclick="ShowSelected()">-->
                </td>
                <td colspan="1">
                    <button class="botoncito" type="button" name="button" onclick="ver_total()">Ver mi total</button>
                    
                </td>
                
            </tr>
            <td colspan="1"><input class="comprar"type="submit" value="Comprar"><br></td>
            
        </table>
   
    </div>
        
    </form>
    <br>
    <table border ="3">
        <thead>
            <tr>
                <th>Nombre de tu proyecto</th>
                <th>Fecha de creacion</th>
                <th>Fecha de entrega</th>
                <th>Presupuesto</th> 
                <th>Extra</th>                     
                <th>Valor Extra</th> 
                <th>Total</th>
            </tr>
            
            <?php
						$consulta = "SELECT * FROM productos";
                        
						$ejecutarConsulta = mysqli_query($conexion, $consulta);
						$verFilas = mysqli_num_rows($ejecutarConsulta);
						$fila = mysqli_fetch_array($ejecutarConsulta);

						if(!$ejecutarConsulta){
							echo"Error en la consulta";
						}else{
							if($verFilas<1){
								echo"<tr><td>Sin registros</td></tr>";
							}else{
								for($i=0; $i<=$fila; $i++){
									echo'
										<tr>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
											<td>'.$fila[3].'</td>
											<td>'.$fila[4].'</td>
                                            <td>'.$fila[5].'</td>
                                            <td>'.$fila[6].'</td>
                                            <td>'.$fila[7].'</td>
                                      
									</tr>
									';
									$fila = mysqli_fetch_array($ejecutarConsulta);

								}

							}
						}


					?>
        </thead>
        
        <tbody id="tabla_producto">
            
        </tbody>
        <tfoot>
            <tr>
                <th colspan="6">MarBlue</th>
                <th id="total">$</th>
            </tr>
        </tfoot>
    </table>
    <br>

    <!--<label for="proyectos">Mira tus proyectos</label>
    <select name="proyectos" id="proyectos">
        <option value="kansas">Kansas</option>
        <option value="marketplace">Marketplace</option>
        <option value="soonmarket">SOONMARKET</option>
    </select>
-->
<br>
        

    
</div>

    <script src="js/bienvenido.js"  ></script>
    <script src="js/fil.js"  ></script>
    <script src="js/select.js"  ></script>  

 
 </body>
</html>