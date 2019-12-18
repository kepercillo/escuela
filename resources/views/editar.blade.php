
 <style>
        table{
  table-layout: fixed;
}

#miTablaPersonalizada th{
  width: 200px;
  overflow: auto;
  border: 1px solid;
}

.tabla{
  width: 50%;
}

.tabla2{
  width: 30%;
}

    </style>
 <form action="{{url ('/materias/guardar/') }}/{{ $materias->id }}" method="POST">
  {!! csrf_field() !!}


<div class="form-group">
     <table class="table table-condensed table-striped table-bordered tabla">
          <thead>
            <tr id="miTablaPersonalizada" >
              <th >Editar materia</th>
            </tr>
          </thead>   
            <tr>
              <td><label for="nombre">Nombre (s):</label></td>
              <td><input type="text" name="nombre" class="form-control" value="{{ $materias->nombre }} "></td>
            </tr>
          </tr>
     
      <table> 

    <table class=tabla2>
       <tr>
          <td>   </td>
          <td><button class="btn-md"><a href="{{url('materias') }}" >Volver</a></button></td>
          <td><button  class="btn-md" type="submit">Guardar</button> </th>        
    </table>

    </div>
  </div>
   
</form>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
