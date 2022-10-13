const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;




function setError(index){
  campos[index].style.border = '2px solid rgb(204, 14, 14)';
  spans[index].style.display = 'block';
}

function removeError(index){
  campos[index].style.border = '';
  spans[index].style.display = 'none';
}

function nameValidate(){
  if(campos[0].value.length < 3)
  {
    setError(0);

  }
  else{
    removeError(0);
  }
}


function emailValidate(){
  if(!emailRegex.test(campos[1].value))
  {
    setError(1);
  }
  else
  {
    removeError(1);
  }
}


function telValidate(){
  if(campos[2].value.length < 11)
  {
    setError(2);
  }
  else{
    removeError(2);
  }
}

function mainPasswordValidate(){
  if(campos[3].value.length < 8)
  {
    setError(3);
  }
  else{
    removeError(3);
    comparePassword();
  }
}

function comparePassword(){
  if(campos[3].value == campos[4].value && campos[4].value.length >= 8)
  {
    removeError(4);
  }
  else
  {
    setError(4);
  }
}
  

//DARK MODE
const chk = document.getElementById('chk')

chk.addEventListener('change', () => {
  document.body.classList.toggle('dark')

});



