<div class="main-section">
    <div class="register-container">
        <h3 class="h5">Panel de Administrador</h3>
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success"><?= esc(session('success')) ?></div>
        <?php endif; ?>
        <p>Bienvenido al panel de administración. Selecciona una opción:</p>
        <div class="button-group">
            <a href="<?= base_url('administrar_usuarios') ?>" class="btn btn-primary">Administrar Usuarios</a>
            <a href="<?= base_url('facturas_cliente') ?>" class="btn btn-primary">Ver Facturas</a>
            <a href="<?= base_url('administrar_juegos') ?>" class="btn btn-primary">Administrar Juegos</a>
        </div>
    </div>
</div>

<style>
.button-group {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-top: 20px;
}
.btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
}
.btn-primary:hover {
    background-color: #0056b3;
}
</style>