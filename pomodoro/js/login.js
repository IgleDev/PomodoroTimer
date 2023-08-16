let form = document.getElementById('form');
let inputUser = document.getElementById('user');
let inputPass = document.getElementById('pass');
let btnLoginPomodoro = document.getElementById('btnLog'); 

function validateFormLogin(){
    if(inputUser.value == '' || inputPass.value == ''){
        alert('Incorrect');
        return false;
    }else{
        form.submit();
    }
};

btnLoginPomodoro.addEventListener('click', validateFormLogin);