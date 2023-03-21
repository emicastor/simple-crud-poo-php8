<?php
include 'crud/delete.php';
include 'crud/all.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple CRUD con POO en PHP</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container">
        <h1 class="text-center mt-5 display-6 fw-semibold font-monospace">Simple CRUD con POO en PHP</h1>
        <div class="row mt-5">
            <div class="col-md-2">
                <a class="btn btn-primary fw-semibold d-flex align-items-center justify-content-center gap-2" href="form-create.php" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                    </svg>
                    Crear
                </a>
            </div>
        </div>
        <section class="mt-5">
            <div class="table-responsive">
                <table class="table table-hover table-bordered border-primary text-center shadow ">
                    <thead>
                        <tr>
                            <th scope="col" class="bg-primary text-white">Correo</th>
                            <th scope="col" class="bg-primary text-white">Nombre</th>
                            <th scope="col" class="bg-primary text-white">Edad</th>
                            <th scope="col" class="bg-primary text-white">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cliente) { ?>
                            <tr>
                                <td>
                                    <?= $cliente->correo; ?>
                                </td>
                                <td>
                                    <?= $cliente->nombre; ?>
                                </td>
                                <td>
                                    <?= $cliente->edad; ?>
                                </td>
                                <td class="d-flex justify-content-center">
                                    <div class="d-flex gap-2">
                                        <a class="btn btn-primary btn-sm fw-semibold px-3" href="form-update.php?correo=<?= $cliente->correo; ?>" role="button" title="Editar el registro">
                                            Editar
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm fw-semibold" href="index.php?correo=<?= $cliente->correo; ?>" role="button" title="Eliminar el registro">
                                            Eliminar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </section>
    </main>
    <?php include 'fragment/footer.php'; ?>
</body>

</html>