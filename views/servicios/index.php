<h1 class="nombre-pagina">Servicios</h1>

<p class="descripcion-pagina">Administración de Servicios</p>

<?php
include_once __DIR__ . '/../templates/barra.php';
?>

<ul class="servicios">
    <?php foreach ($servicios as $servicio) { ?>
        <li>
            <p>Nombre: <span><?php echo $servicio->nombre; ?></span> </p>
            <p>Precio: <span>$<?php echo $servicio->precio; ?></span> </p>

            <div class="acciones">
                <a class="boton" href="/servicios/actualizar?id=<?php echo $servicio->id; ?>">Actualizar</a>
                <a class="boton-eliminar" href="/servicios/eliminar?id=<?php echo $servicio->id; ?>">Eliminar</a>           
            </div>
        </li>
    <?php }
    ?>
</ul>