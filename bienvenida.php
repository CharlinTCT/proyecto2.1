<<<<<<< HEAD
<?php
include ("conexion-cotizacion.php");
$usuarios = "SELECT * FROM productos";
?>

=======
a<?php
include ("conexion-cotizacion.php");
$usuarios = "SELECT * FROM productos";
//require "conexion-cotizacion.php";
// Iniciar una sesión nueva o reanudar una existente
   // session_start();
// Determina si una variable está declarada y es diferente de NULL
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //header("location: bienvenida.php");
    //exit;
//}

?>


>>>>>>> main
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="icon" type="images/svg" href="img/logo1.svg">
=======
>>>>>>> main
    <title>MarBlue</title>
    <link rel="stylesheet" href="css/bienvenido.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <div class="header">
     <img src="/img/logo1.svg" alt="" class="logo-welcome">
     <h1 class="title-welcome">Bienvenido</h1>

   
     <h1>Aqui puedes hacer tu cotizacion</h1>
    <form class=""name="formulario"id="formulario"  method="post"action="insertar.php">
        <table>
            <tr>
                <td><label class="form_nombre" for="">Nombre de tu proyecto</label></td>
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
<<<<<<< HEAD
                
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
                                          
                    </select>
                    <input name="value" type="text" id="form_extras" > 
                    <input style="visibility:hidden" name="name" type="text" id="form_extras1">
                </td>
            </tr>
            <tr>
                <td>
                <!--<input type="button" value="button" onclick="ShowSelected()">-->
                </td>
                <td colspan="1">
=======
                <td>
                    <input  id="form_extras"  name="extran" value="">
                    
                </td>
                <td>   
                    <select id="mancadeshit" class="" name="mancadeshit2">
                        <option value="">---LANDING PAGE:---</option>
                        <option value="1 Cuenta de correo corporativo:200000">*1 Cuenta de correo corporativo</option>
                        <option value="Landing Page administrable:200000">*Landing Page administrable</option>
                        <option value="Banner principal con movimiento:200000">*Banner principal con movimiento</option>
                        <option value="Titulares llamativos:200000">*Titulares llamativos</option> 
                        <option value="200000">*Banner de Testimonios</option> 
                        <option value="200000">*Puntos de fuga minimizados</option> 
                        <option value="200000">*Formulario para captura de Leads</option> 
                        <option value="200000">*Integración con Redes Sociales</option> 
                        <option value="200000">*Diseño ideal para Google Ads</option> 
                        <option value="200000">*Desarrollo en 6 días. </option>
                        <option value=""></option> 
 
                        <option value="">---PAGINA WEB:---</option> 
                        <option value="500000">*5 Cuentas de correo corporativo</option> 
                        <option value="500000">*Estructuración de la información</option> 
                        <option value="500000">*4 Banners principales con movimiento</option> 
                        <option value="500000">*7 Páginas Internas definidas Pre-instalada</option> 
                        <option value="500000">*Formulario de contácto avanzado</option> 
                        <option value="500000">*Links a redes sociales</option> 
                        <option value="500000">*Diseño web personalizado corporativo</option> 
                        <option value="500000">*Botón flotante de llamada</option>     
                        <option value="500000">*Galería de fotos y videos</option>
                        <option value="500000">*Enlaces a sitios externos</option>
                        <option value="500000">*Carrusel de testimonios</option>
                        <option value="500000">*Búsqueda y compra de imágenes</option>
                        <option value="500000">*SEO Básico</option>
                        <option value="500000">*Desarrollo Optimizado (Carga Rápida)</option>   
                        <option value="500000">*Desarrollo en 10 días</option>
                        <option value=""></option>  
                                               
                        <option value="">---TIENDA ONLINE:---</option>
                        <option value="1000000">*Desarrollo en WooCommerce</option>
                        <option value="1000000">*3 Banners principales con movimiento</option>
                        <option value="1000000">*5 Páginas Internas definidas</option>    
                        <option value="1000000">*25 Categorías y Subcategorías de producto</option>    
                        <option value="1000000">*Productos Ilimitados (Sube los que quieras)</option>
                        <option value="1000000">*50 productos pre-cargados</option>
                        <option value="1000000">*Listas de deseos</option>
                        <option value="1000000">*Carrito de compras seguro</option>
                        <option value="1000000">*Vista de pedidos</option>
                        <option value="1000000">*Registro e Ingreso de usuarios</option>
                        <option value="1000000">*Métodos de pago (Payu, Epayco, Paypal...)</option>
                        <option value="1000000">*Tienda Online 100% Administrable</option>
                        
                                          
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2">
>>>>>>> main
                    <button type="button" name="button" onclick="ver_total()">Ver mi total</button>
                </td>
            </tr>
        </table>
<<<<<<< HEAD
        
        <br>
        <input type="submit" value="Comprar">
=======
      
        <br>
        <input type="submit" value="ENVIAR PROYECTO">
>>>>>>> main
    </form>
    <br>
    <table border ="3">
        <thead>
            <tr>
                <th>Nombre de tu proyecto</th>
                <th>Fecha de creacion</th>
                <th>Fecha de entrega</th>
<<<<<<< HEAD
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
=======
                <th>Presupuesto</th>
                <th>Extras</th>
                <th name ="total" value="">Total</th>         
            </tr>
>>>>>>> main
        </thead>
        
        <tbody id="tabla_producto">
            
        </tbody>
        <tfoot>
            <tr>
<<<<<<< HEAD
                <th colspan="6">MarBlue</th>
                <th id="total">$</th>
            </tr>
        </tfoot>
    </table>
    <br>
=======
                <th colspan="5">MarBlue</th>
                <th id="total">$</th>
            </tr>
        </tfoot>
        <a href="/marblue/administrador/libreria/reportes.php">PDF</a>
    </table>
    <br>
    



    
>>>>>>> main

    <!--<label for="proyectos">Mira tus proyectos</label>
    <select name="proyectos" id="proyectos">
        <option value="kansas">Kansas</option>
        <option value="marketplace">Marketplace</option>
        <option value="soonmarket">SOONMARKET</option>
    </select>
-->

    <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesion</a>
</div>

    <script src="js/bienvenido.js"  ></script>
<<<<<<< HEAD
    <script src="js/fil.js"  ></script>
    <script src="js/select.js"  ></script>  

 
 </body>
</html>
     
=======
    <script src="js/fil.js"  ></script>   

 
</body>
</html>
       
       
>>>>>>> main
