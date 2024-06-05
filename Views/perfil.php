<!-- Views/perfil.php -->

<div class="perfil-container">
    <h1>Perfil do Usuário</h1>
    <?php if (isset($_SESSION['mensagem'])): ?>
        <p><?= $_SESSION['mensagem']; unset($_SESSION['mensagem']); ?></p>
    <?php endif; ?>
    <form method="POST" action="/BarberBooker/perfil/atualizar">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($usuario['nome']); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($usuario['email']); ?>" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($usuario['telefone']); ?>" required>
        </div>
        <button type="submit">Atualizar Perfil</button>
    </form>
</div>
