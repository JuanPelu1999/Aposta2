document.getElementById('login-btn').addEventListener('click', function() {
    // Funcionalidad del botón de Login
    console.log('Botón Login presionado');
});

document.getElementById('register-btn').addEventListener('click', function() {
    // Funcionalidad del botón de Registrarse
    console.log('Botón Registrarse presionado');
});

document.getElementById('login-submit').addEventListener('click', function() {
    // Funcionalidad del botón Iniciar Sesión
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    console.log('Iniciar Sesión con:');
    console.log('Usuario:', username);
    console.log('Contraseña:', password);
});

document.getElementById('forgot-password').addEventListener('click', function(event) {
    // Funcionalidad del enlace "Olvidé mi contraseña"
    event.preventDefault();
    console.log('Olvidé mi contraseña');
});

