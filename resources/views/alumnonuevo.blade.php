<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
  

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


    </style>
    <br><br><br><br><br><br><br><br>
 <form method="POST" id="alumno-form">
  {!! csrf_field() !!}
 <meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container">
     <table class="table table-condensed table-striped table-bordered tabla">
           <thead>
               <tr id="miTablaPersonalizada" >
                 <th >Nuevo Alumno</th> <th >Información</th>
               </tr>
           </thead>
               <tr>
                  <td><label for="nombre">Nombre (s):</label></td>
                  <td><input type="text" name="nombre" placeholder="Introduce tu Nombre(s)" id="nombres"></td>
                </tr>
               <tr>
                   <td><label for="apellido">Apellido (s):</label></td>
                   <td><input type="text" name="apellidos" placeholder="Introduce tu Apellido(s)" id="apellidos" ></td>
                </tr>
                <tr>
                   <td><label for="grado">Grado</label></td>
                   <td><input type="text" name="grado" placeholder="Introduce Grado a Ingresar" id="grado"></td>
                </tr>
                <tr>
                  
                                   
       </table> 
       <button id="3" type="button">Crear Usuario</button>        
    </div>
  </div>
   
 </form>
 <br><br><br> 
 <div class="container">
  <table>
    <thead>
               <tr id="miTablaPersonalizada" >
                 <th ><button><a href="{{url('alumnos') }}" class="btn">Listado de Alumnos</a></button></th>
    </thead>
                </tr>
                </table>
  </div>
  </p>
    </body>

</html>
