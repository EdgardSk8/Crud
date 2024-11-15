<!doctype html>
<html lang="es">

<head>

    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @vite(['resources/css/app.css'])

</head>

<body>

    <div class="login-box">

        <h2>Login</h2>

        <form id="login-form">
            <div class="user-box">
                <input type="text" name="nombre" id="nombre" required>
                <label>Usuario</label>
            </div>
            
            <div class="user-box">
                <input type="password" name="contrasena" id="contrasena" required>
                <label>Contraseña</label>
            </div>

            <button type="submit">
                Iniciar sesión
            </button>
            <p class="error" id="error-message" style="display:none; color:white">Credenciales incorrectas. Por favor, intenta de nuevo.</p>
        </form>

    </div>

</html>

<script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        const nombre = document.getElementById('nombre').value;
        const contrasena = document.getElementById('contrasena').value;
        if (nombre === 'admin' && contrasena === '1234') {
            window.location.href = '/productos';
        } else {
            document.getElementById('error-message').style.display = 'block';
        }
    });
</script>