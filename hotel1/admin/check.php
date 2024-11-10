
<?php
include "../admin/includes/header.php";
?>
    <!-- Contenido principal -->
    <div class="main-content">
        <h1>Bienvenido al Dashboard del Hotel</h1>

        <!-- Tabla de Check-In / Check-Out -->
        <table id="tablaCheckInOut" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Check-In</th>
                    <th>Fecha Check-Out</th>
                    <th>Habitación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2024-11-08</td>
                    <td>2024-11-10</td>
                    <td>101</td>
                    <td>Disponible</td>
                    <td>
                        <button class="btnEditar" onclick="editarRegistro(1)">Editar</button>
                        <button class="btnEliminar" onclick="eliminarRegistro(1)">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2024-11-09</td>
                    <td>2024-11-11</td>
                    <td>102</td>
                    <td>Ocupada</td>
                    <td>
                        <button class="btnEditar" onclick="editarRegistro(2)">Editar</button>
                        <button class="btnEliminar" onclick="eliminarRegistro(2)">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Botón para agregar nuevo registro -->
        <button id="btnNuevoCheckInOut">Agregar Nuevo Registro</button>

        <!-- Modal para agregar nuevo registro -->
        <div id="modalCheckInOut" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Agregar Nuevo Registro</h2>
                <form id="formNuevoCheckInOut">
                    <label for="fechaCheckIn">Fecha Check-In:</label>
                    <input type="date" id="fechaCheckIn" required />
                    <label for="fechaCheckOut">Fecha Check-Out:</label>
                    <input type="date" id="fechaCheckOut" required />
                    <label for="habitacionCheckInOut">Habitación:</label>
                    <input type="number" id="habitacionCheckInOut" required />
                    <label for="estadoCheckInOut">Estado:</label>
                    <select id="estadoCheckInOut" required>
                        <option value="disponible">Disponible</option>
                        <option value="ocupada">Ocupada</option>
                        <option value="reservada">Reservada</option>
                        <option value="mantenimiento">Mantenimiento</option>
                        <option value="limpieza">Limpieza</option>
                    </select>
                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include "../admin/includes/footer.php" ?>
</html>
