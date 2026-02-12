<?php include("header.php"); ?>

<div class="container mt-5">
    <h2 class="mb-4">Contáctanos</h2>

    <form>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="email" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Mensaje</label>
            <textarea class="form-control" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include("footer.php"); ?>
