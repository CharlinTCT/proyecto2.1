
function validateForm() {
  let x = ''
  if(document.getElementById("usuario").value === ''){
    x = 'u'
  }
  if(document.getElementById("Nombre").value === ''){
    x = 'n'
  }
  if(document.getElementById("password").value === ''){
    x = 'p'
  }
  if(document.getElementById("password2").value === ''){
    x = 'p2'
  }
  if(document.getElementById("email").value === ''){
    x = 'e'
  }
  if(document.getElementById("terminos").value === ''){
    x = 't'
  }

  switch (x) {
    case 'u':
      alert("usuario must be filled out");
      return false;
    case 'n':
      alert("nombre  must be filled out");
      return false;
      case 'p':
        alert("password must be filled out");
        return false;
      case 'p2':
        alert("password2 no es igual a password");
        return false;
        case 'e':
            alert("falta el email");
            return false;
          case 't':
            alert("no acepto los terminos y condiciones");
            return false;
  }
  return true;

}




