let form = document.getElementById('form');
let inputUser = document.getElementById('user');
let inputPass = document.getElementById('pass');
let inputGmail = document.getElementById('gmail');
let btnLoginPomodoro = document.getElementById('btnCreateUser'); 

function validateFormCreateUser(){
    if(inputUser.value == '' || inputPass.value == '' || inputGmail.value == ''){
        alert('Incorrect');
        return false;
    }else{
        form.submit();
    }
};

btnLoginPomodoro.addEventListener('click', validateFormCreateUser);