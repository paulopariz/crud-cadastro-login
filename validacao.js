const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

document.getElementById("submit").disabled = true;





function setError(index){
  campos[index].style.border = '2px solid rgb(204, 14, 14)';
  spans[index].style.display = 'block';
}

function removeError(index){
  campos[index].style.border = '';
  spans[index].style.display = 'none';
}

function validarName(){
  if(campos[0].value.length < 3)
  {
    setError(0);
    document.getElementById("submit").disabled = true;


  }
  else{
    removeError(0);

  }
}


function validarEmail(){
  if(!emailRegex.test(campos[1].value))
  {
    setError(1);
    document.getElementById("submit").disabled = true;

  }
  else
  {
    removeError(1);
  }
}


function validarTel(){
  if(campos[2].value.length < 11)
  {
    setError(2);
    document.getElementById("submit").disabled = true;

  }
  else{
    removeError(2);
  }
}

function validarSenha(){
  if(campos[3].value.length < 8)
  {
    setError(3);
    document.getElementById("submit").disabled = true;
  }
  else{
    removeError(3);
    comparePassword();
  }
}

function compararSenha(){
  if(campos[3].value == campos[4].value && campos[4].value.length >= 8)
  {
    removeError(4);
    document.getElementById("submit").disabled = false;
    document.getElementById("submit").style.backgroundColor = '#42ee69';


  }
  else
  {
    setError(4);
    document.getElementById("submit").disabled = true;
    document.getElementById("submit").style.backgroundColor = '#4461F2';


  }
}
  

//DARK MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')

});





document.getElementById("submit").addEventListener("click", exibealert);
function exibealert (){
  swal({
    title: "Welcome!",
    text: "Thanks for registering.",
    icon: "success",
  });
};


