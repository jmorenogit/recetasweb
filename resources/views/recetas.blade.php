@extends ("layouts.plantilla")

@section("cabecera")
<p>Aquí se pueden ver todas las recetas</p>
@endsection

@section("cuerpo")
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Ingredientes</th>
      <th scope="col">Elaboración</th>
    </tr>
  </thead>
  <tbody>

<?php

use App\Models\Receta;

foreach (Receta::all() as $receta) {
  
    echo '<tr>';
            echo '<td>'. $receta->nombrereceta .'</td>';
            echo '<td>'. $receta->ingredientes .'</td>';
            echo '<td>'. $receta->elaboracion .'</td>';
    echo '</tr>';
   
    //echo "<p>Nombre: " . $receta->nombrereceta ."<br>Ingredientes: " . $receta->ingredientes .  "<br>Elaboración: " . $receta->elaboracion . "</p>";
}
    
?>

</tbody>
</table>
@endsection
