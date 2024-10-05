<body>
    <div class="container mt-5">
        <h1>Editar Catastro</h1>
        <a href="gestionar_catastros.php" class="btn btn-secondary mb-3">Volver</a>

        <form action="editar_catastro.php" method="POST">
            <div class="mb-3">
                <label for="id_catastro" class="form-label">ID Catastro</label>
                <input type="number" class="form-control" id="id_catastro" name="id_catastro" value="<?php echo $catastro['id_catastro']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" id="zona" name="zona" value="<?php echo $catastro['zona']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="X_inicial" class="form-label">X Inicial</label>
                <input type="text" class="form-control" id="X_inicial" name="X_inicial" value="<?php echo $catastro['X_inicial']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Y_inicial" class="form-label">Y Inicial</label>
                <input type="text" class="form-control" id="Y_inicial" name="Y_inicial" value="<?php echo $catastro['Y_inicial']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="X_final" class="form-label">X Final</label>
                <input type="text" class="form-control" id="X_final" name="X_final" value="<?php echo $catastro['X_final']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="Y_final" class="form-label">Y Final</label>
                <input type="text" class="form-control" id="Y_final" name="Y_final" value="<?php echo $catastro['Y_final']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="text" class="form-control" id="superficie" name="superficie" value="<?php echo $catastro['superficie']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" class="form-control" id="distrito" name="distrito" value="<?php echo $catastro['distrito']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
