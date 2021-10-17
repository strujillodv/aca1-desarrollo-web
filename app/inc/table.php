<?PHP
$query = "SELECT * FROM persona";
$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) == 0) {
  
  include './inc/no-content.php';
} 
else {?>
  <table class="table table-borderless">
    <thead class="border-bottom border-primary">
      <tr>
        <th scope="col">Cedula</th>
        <th scope="col"><h6> Nombre</h6></th>
        <th class="d-none d-md-table-cell" scope="col"><h6>Apellidos</h6></th>
        <th class="d-none d-md-table-cell" scope="col"><h6>Correo</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Dirección</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Telefono</h6></th>
        <th class="d-none d-lg-table-cell" scope="col"><h6>Fecha de Nacimiento</h6></th>
      </tr>
    </thead>
    <tbody class="container-contacts">
      <?PHP while($data = mysqli_fetch_array($result)) {?>
        <tr>
          <td class="align-middle text-secondary" ><?PHP echo $data['cedula'] ?></td>
          <td class="align-middle text-secondary" ><?PHP echo $data['nombre'] ?></td>
          <td class="d-none d-md-table-cell align-middle text-secondary" ><?PHP echo $data['apellidos'] ?></td>
          <td class="d-none d-md-table-cell align-middle text-secondary" ><?PHP echo $data['correo'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['direccion'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['telefono'] ?></td>
          <td class="d-none d-lg-table-cell align-middle text-secondary" ><?PHP echo $data['fechaNacimiento'] ?></td>
        </tr>
      <?PHP } ?>        
    </tbody>
    
  </table>    
<?PHP } ?>
