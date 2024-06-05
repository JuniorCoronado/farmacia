<?php

require_once('libreria/conexion.libreria.php');

$database = new Conexion();
$cnx = $database->getConexion();

if(!is_null($cnx)){
    $sql = "SELECT * FROM productos";   
    $st = $cnx->prepare($sql);
    $st->execute();
}
?>
<table>
    <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre Comercial</th>
        <th>Nombre Generico</th>
        <th>Marca</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    </thead>
    <tbody>
<?php
        
    if(!is_null($st)){

        foreach ($st->fetchAll() as $row) {
            ?>
            <tr>
                <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['nombre_comercial']; ?></td>
                <td><?php echo $row['nombre_generico']; ?></td>
                <td><?php echo $row['marca']; ?></td>
                <td>S/. <?php echo number_format($row['precio'], 2); ?></td>
                <td><?php echo $row['stock']; ?></td>
            </tr>
            <?php
        }
    }
?>
    </tbody>
</table>


