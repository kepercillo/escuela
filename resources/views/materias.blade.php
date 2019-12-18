<h1>fuck</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
      <div class="row">       
         <table class="table table-condensed table-striped table-bordered">
           <thead>
               <tr>
                 <th>ID</th>
                 <th>Nombre</th>
                 <th>Borrar</th>
                 <th>Editar</th>
                 </tr>
           </thead>
           <tbody>
               @foreach($materias as $materia)
               <tr>
                   <td>{{ $materia->id }}</td>
                   <td>{{ $materia->nombre }}</td>
                   <td><a href="{{ route('materia/delete', [$materia->id]) }}" class="btn btn-danger btn-xs">Delete</a></td>
                   <td><a href="{{ route('materia/editar', [$materia->id]) }}" class="btn btn-warning btn-xs">Editar
                  </a></td>
                </tr>
               @endforeach

           </tbody>
          </table>
      </div>
 </div>