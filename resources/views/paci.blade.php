<div class="table-responsive listaregistros">
    <!-- Projects table -->
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">DNI</th>
          <th scope="col">PHONE</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($paciente as $pac)
     <tr>
          <th scope="row">
            {{ $pac->name }}
          </th>
          <td>
           {{ $pac->email }}
          </td>

           <td>
            {{ $pac->dni }}
          </td>
          <td>
            {{ $pac->phone }}
          </td>
         
        </tr> 
        @endforeach              
      </tbody>
    </table>

</div>


