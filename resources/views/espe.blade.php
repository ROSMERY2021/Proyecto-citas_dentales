<div class="table-responsive listaregistros">
  <!-- Projects table -->
  <table id="example" class="display">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($especialidades as $esp)
<tr>
        <th scope="row">
          {{ $esp->name }}
        </th>
        <td>
         {{ $esp->description }}
        </td>
      </tr> 
      @endforeach              
    </tbody>
  </table>