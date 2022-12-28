function ShowSelected() {
    var cod = document.getElementById("mancadeshit").value;

    var combo = document.getElementById("mancadeshit");
   //lo necesitamos internamente
   var selected = combo.options[combo.selectedIndex].text;
    document.formulario.name.value = selected;
    document.formulario.value.value = cod;
  }
  function enviar(){
    let valor =document.form.formulario.value.value;
    let name = document.form.formulario.name.value = selected;
    window.location = "insertar.php?name=" +name + valor
  
  }