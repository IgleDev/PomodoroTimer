let min = document.getElementById('min').textContent;
let sec = document.getElementById('sec').textContent;
let btnStudy = document.getElementById('btn-study');
let btnBreak = document.getElementById('btn-break');
let btnLongBreak = document.getElementById('btn-longbreak');
let btnStart = document.getElementById('btnTimer');
let btnUser = document.getElementById('btn-User');
let state = document.getElementById('state').textContent;
let inteval;
let count = 0;

function resetTimer() {
    clearInterval(inteval);
    sec = 0;
    document.getElementById('sec').textContent = sec;
    document.getElementById('min').textContent = min;
}

function changeState(){
    btnStudy.addEventListener('click', () =>{
        min = 25;
        resetTimer();
        btnStart.style.opacity = '1';
        btnBreak.style.opacity = '1';
        btnLongBreak.style.opacity = '1';
        btnStart.style.background = '#FF6F6F';
        document.title = 'Pomodoro - Study!';
        document.getElementById('min').textContent = min;
        document.getElementById('state').textContent = 'Study!';
        document.getElementsByTagName('li')[0].style.background = '#FF6F6F';
        document.getElementsByClassName('container')[0].style.background = '#FF3333';
        document.getElementsByClassName('container-color')[0].style.background = '#FF0800';
        document.getElementsByClassName('fas fa-user-circle')[0].style.background = '#FF6F6F';
    });

    btnBreak.addEventListener('click', () =>{
        min = 5;
        resetTimer();
        btnStart.style.opacity = '1';
        btnBreak.style.opacity = '1';
        btnLongBreak.style.opacity = '1';
        btnStart.style.background = '#6666FF';
        document.title = 'Pomodoro - Take a Break!'
        document.getElementById('min').textContent = min;
        document.getElementById('state').textContent = 'Take a Break!';
        document.getElementsByTagName('li')[0].style.background = '#73A9AC';
        document.getElementsByClassName('container')[0].style.background = '#38858A';
        document.getElementsByClassName('container-color')[0].style.background = '#99CCFF';
        document.getElementsByClassName('fas fa-user-circle')[0].style.background = '#73A9AC';
    });

    btnLongBreak.addEventListener('click', () =>{
        min = 15;
        resetTimer();
        btnStart.style.opacity = '1';
        btnBreak.style.opacity = '1';
        btnLongBreak.style.opacity = '1';
        btnStart.style.background = '#CC5EFF';
        document.title = 'Pomodoro - Take a Long Break!'
        document.getElementById('min').textContent = min;
        document.getElementById('state').textContent = 'Take a Long Break!';
        document.getElementsByTagName('li')[0].style.background = '#C64BFF';
        document.getElementsByClassName('container')[0].style.background = '#AE00FF';
        document.getElementsByClassName('container-color')[0].style.background = '#C300FF';
        document.getElementsByClassName('fas fa-user-circle')[0].style.background = '#C64BFF';
    });
}

function pomodoro(){
    btnStart.addEventListener('click', () => {
        inteval = setInterval(function(){
            if(min == 0 && sec == 0){
                clearInterval(inteval);
            }else{
                sec--;
                document.getElementById('sec').textContent = sec;
                if(sec <= 0){
                    sec = 60;
                    min--;
                    document.getElementById('min').textContent = min;
                }
            }
        },1000);
    });
}

btnStart.addEventListener('click', pomodoro());
btnStudy.addEventListener('click', changeState());
btnUser.addEventListener('click', () => {window.location.href = 'user.php';});