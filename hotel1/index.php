<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Hotelera</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">   
        <div class="login-box">
            <h1>Sistema de Gestión Hotelera</h1>
            <form class="login-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" required>
                </div>
                <div class="form-group">
                    <label for="role">Rol</label>
                    <select id="role">
                        <option value="admin">Administrador</option>
                        <option value="user">Usuario</option>
                    </select>
                </div>
                <button type="submit">Iniciar Sesión</button>
            </form>
        </div>
    </div>
    <script>
        function handleLogin(event) {
            event.preventDefault(); // Evita el envío del formulario

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const role = document.getElementById('role').value;

            // Simulación de autenticación básica (solo para pruebas)
            if (username && password) { // Verifica que los campos no estén vacíos
                if (role === 'admin') {
                    window.location.href = 'admin/dashboard.html';
                } else if (role === 'user') {
                    window.location.href = 'user/dashboard.html';
                } else {
                    alert("Rol no válido.");
                }
            } else {
                alert("Por favor, ingresa tu usuario y contraseña.");
            }
        }
    </script>
</body>
</html>
