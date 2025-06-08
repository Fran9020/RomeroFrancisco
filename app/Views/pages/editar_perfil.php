<div class="main-section">
    <div class="register-container">
        <h3 class="h5">Editar Perfil</h3>
        <form id="edit-profile-form" method="post" action="#">
            <!-- Columna 1: Datos personales -->
            <div class="column">
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?= esc($usuario['nombre'] ?? '') ?>" required>
                </div>
                <div>
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="<?= esc($usuario['apellido'] ?? '') ?>" required>
                </div>
                <div>
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" id="dni" value="<?= esc($usuario['dni'] ?? '') ?>" pattern="\d{8}" title="El DNI debe tener 8 dígitos numéricos">
                </div>
                <div>
                    <label for="email">Correo Electrónico</label>
                    <input type="email" name="email" id="email" value="<?= esc($usuario['email'] ?? '') ?>" required>
                </div>
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" value="<?= esc($usuario['telefono'] ?? '') ?>">
                </div>
                <!-- Campos de Domicilio sin subtítulo -->
                <div>
                    <label for="calle">Calle</label>
                    <input type="text" name="calle" id="calle" value="">
                </div>
                <div>
                    <label for="numero">Número</label>
                    <input type="number" name="numero" id="numero" value="">
                </div>
                <div>
                    <label for="codigo_postal">Código Postal</label>
                    <input type="text" name="codigo_postal" id="codigo_postal" value="">
                </div>
                <div>
                    <label for="localidad">Localidad</label>
                    <input type="text" name="localidad" id="localidad" value="">
                </div>
                <div>
                    <label for="provincia">Provincia</label>
                    <input type="text" name="provincia" id="provincia" value="">
                </div>
                <div>
                    <label for="pais">País</label>
                    <input type="text" name="pais" id="pais" value="">
                </div>
            </div>
            <button type="submit">Guardar Cambios</button>
        </form>
    </div>
</div>