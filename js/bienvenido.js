function ver_total() {
    let nombre = document.getElementById("form_nombre");
    let fecha_creacion = document.getElementById("form_fechacrea");
    let fecha_entrega = document.getElementById("form_fechaentrega");
    let presupuesto = document.getElementById("form_presupuesto");
    let extras = document.getElementById("form_extras");

    let datos = document.getElementById("tabla_producto");

   let total = Number(presupuesto.value) + Number(extras.value);

    datos.innerHTML = datos.innerHTML + "<tr>"+
                                          "<td>"+nombre.value+"</td>"+
                                          "<td>"+fecha_creacion.value+"</td>"+
                                          "<td>"+fecha_entrega.value+"</td>"+
                                          "<td>"+presupuesto.value+"</td>"+
                                          "<td>"+extras.value+"</td>"+
                                          "<td>"+total+"</td>"+
                                          "<td><button onclick = 'eliminar(this)'>Eliminar</button></td>"+
                                          "</tr>";
   calcular_total();                                       
}


function calcular_total(){
    
    let total = document.getElementById('total').addEventListener("button", ver_total);

    let suma = 0;

    total.innerText = "$"+suma;
    
}


function eliminar(variable){
    console.log(variable.parentElement.parentElement);
    variable.parentElement.parentElement.remove();
    calcular_total();
}


    

