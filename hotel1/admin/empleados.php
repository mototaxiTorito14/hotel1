<?php
include "../admin/includes/header.php";
?>

    <div class="main-content">
        <h1>Empleados</h1>

        <table id="tablaCheckInOut" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Fecha Ingreso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Datos de ejemplo -->
                <tr>
                    <td>1</td>
                    <td>Carlos Sánchez</td>
                    <td>Recepcionista</td>
                    <td>2024-10-01</td>
                    <td>
                        <button class="btnEditar" onclick="editarEmpleado(1)">Editar</button>
                        <button class="btnEliminar" onclick="eliminarEmpleado(1)">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria López</td>
                    <td>Camarera</td>
                    <td>2024-09-15</td>
                    <td>
                        <button class="btnEditar" onclick="editarEmpleado(2)">Editar</button>
                        <button class="btnEliminar" onclick="eliminarEmpleado(2)">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button id="btnNuevoEmpleado">Nuevo Empleado</button>

        <!-- Modal para agregar nuevo empleado -->
        <div id="modalEmpleado" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Agregar Empleado</h2>
                <form id="formNuevoEmpleado">
                    <label for="nombreEmpleado">Nombre:</label>
                    <input type="text" id="nombreEmpleado" required />
                    <label for="rolEmpleado">Rol:</label>
                    <input type="text" id="rolEmpleado" required />
                    <label for="fechaIngresoEmpleado">Fecha de Ingreso:</label>
                    <input type="date" id="fechaIngresoEmpleado" required />
                    <button type="submit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    </body>

<?php include "../admin/includes/footer.php" ?>



</html>