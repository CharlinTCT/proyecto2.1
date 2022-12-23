const select = document.querySelector('#mancadeshit');
const input = document.querySelector('#form_extras')

select.addEventListener('change', function(){
  const selectedvalue = this.value;
  input.value = selectedvalue;
});