let btnX = document.getElementById('btn-goBack');
let btnLogOut = document.getElementById('btnLogOut');

btnX.addEventListener('click', () => {window.location.href = 'pomodoro.php';});
btnLogOut.addEventListener('click', () => {window.location.href = './controllers/logOut.php';});