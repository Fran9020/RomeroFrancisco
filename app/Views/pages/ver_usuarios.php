<div class="main-section">
    <div class="register-container">
        <h3 class="h5">Lista de Usuarios</h3>
        <table class="users-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th>Correo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DNI</th>
                    <th>Teléfono</th>
                    <th>Primer Login</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?= esc($usuario['id_usuario']) ?></td>
                        <td><?= esc($usuario['id_rol'] == 1 ? 'Administrador' : 'Cliente') ?></td>
                        <td><?= esc($usuario['email']) ?></td>
                        <td><?= esc($usuario['nombre'] ?? '-') ?></td>
                        <td><?= esc($usuario['apellido'] ?? '-') ?></td>
                        <td><?= esc($usuario['dni'] ?? '-') ?></td>
                        <td><?= esc($usuario['telefono'] ?? '-') ?></td>
                        <td><?= esc($usuario['primer_login'] ? 'Sí' : 'No') ?></td>
                        <td><?= esc($usuario['activo'] ? 'Sí' : 'No') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>