const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

const expresiones = {
    Usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    Nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
}
const validarFormulario = (e) => {
    switch (e.target.name) {
        case "Usuario":
            if(expresiones.Usuario.test(e.target.value)){
                document.getElementById('grupo__usuario').claseList.remove('.formulario__grupo-incorrecto');
                document.getElementById('grupo__usuario').claseList.add('.formulario__grupo-correcto');
                document.querySelectorAll('#grupo__usuario i').classList.remove('fa-solid fa-circle-xmark');
                document.querySelectorAll('#grupo__usuario i').classList.add('fa-solid fa-circle-xmark');

            } else{
                document.getElementById('grupo__usuario').claseList.add('formulario__grupo-incorrecto')
            }

            break;

        case "Nombre":

            break;

        case "password":

            break;

        case "password2":

            break;

            case "email":

                break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});


formulario.addEventListener('submit', (e) => {
    e.preventDefault();
});
