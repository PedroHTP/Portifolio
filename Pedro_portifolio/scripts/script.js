function Logar() {
    document.location.href = './login.php';
}

document.addEventListener('DOMContentLoaded', () => {
    let divLogin = document.querySelector('div.login');
    let divPerfil = document.querySelector('div.perfil');

    divLogin.hidden = false;
    
        if (logado == true) {
            divLogin.hidden = true;
            divPerfil.hidden = false;
        }
});
