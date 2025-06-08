<div class="main-section">
    <div class="login-container">
        <h3 class="h5">Añadir Nuevo Administrador</h3>
        <?php if (session()->has('error')): ?>
            <div class="error-message"><?= esc(session('error')) ?></div>
        <?php endif; ?>
        <?php if (session()->has('success')): ?>
            <div class="success-message"><?= esc(session('success')) ?></div>
        <?php endif; ?>
        <form class="login-form" method="post" action="<?= base_url('/anadir_admin/enviar') ?>">
            <div>
                <label for="correo">Correo Electrónico del Nuevo Administrador</label>
                <input type="email" name="correo" id="correo" required>
            </div>
            <button type="submit">Añadir</button>
        </form>
    </div>
</div>