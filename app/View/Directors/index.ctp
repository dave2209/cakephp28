<h2>Equipo de Gerencia</h2>
<table>
    <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Rol</td>
        <td>email</td>
        <td>Acciones</td>
    </tr>
    
    <?php foreach ($directors as $director): ?>
        <tr>
            <td> <?php echo $director['Director']['nombre']; ?> </td>
            <td> <?php echo $director['Director']['apellido']; ?> </td>
            <td> <?php echo $director['Director']['rol']; ?> </td>
            <td> <?php echo $director['Director']['email']; ?> </td>
            <td> <?php echo $this->Html->link('Detalle', array ('controller' => 'directors', 'action' => 'ver', $director['Director']['id'])); ?> </td>
        </tr>
    <?php endforeach; ?>
</table>