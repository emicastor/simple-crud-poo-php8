<?php 
include 'crud/create.php'; 
include 'fragment/header.php'; 
?>
<body class="bg-light">
    <main class="container">
        <h1 class="text-center mt-5 display-6 fw-semibold font-monospace">Simple CRUD con POO en PHP</h1>
        <div class="row mt-5">
            <div class="col-md-2">
                <a class="btn btn-outline-secondary fw-semibold d-flex align-items-center justify-content-center gap-2" href="index.php" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Volver
                </a>
            </div>
        </div>
        <h2 class="text-center mt-5 display-6 fw-semibold">Crear</h2>
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="text" class="form-control shadow-sm" name="correo" id="correo" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control shadow-sm" name="nombre" id="nombre" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="number" class="form-control shadow-sm" name="edad" id="edad" aria-describedby="helpId" placeholder="" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary fw-semibold">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'fragment/footer.php'; ?>

</body>

</html>