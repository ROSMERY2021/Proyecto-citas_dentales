<table class="table align-items-center table-flush">
    <thead class="thead-light">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">DUI</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($doctor as $doc)
             <tr>
        <th scope="row">
          {{ $doc->name }}
        </th>
        <td>
         {{ $doc->email }}
        </td>

         <td>
          {{ $doc->dni }}
        </td>
      </tr> 
      @endforeach              
    </tbody>
  </table>
