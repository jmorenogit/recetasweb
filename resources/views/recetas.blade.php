@extends ("layouts.plantilla")

@section("cabecera")
<p>Aquí se pueden ver todas las recetas</p>
@endsection

@section("cuerpo")
<?php

use App\Models\Receta;
 
foreach (Receta::all() as $receta) {
    echo "<p>Nombre: " . $receta->nombrereceta ."<br>Ingredientes: " . $receta->ingredientes .  "<br>Elaboración: " . $receta->elaboracion . "</p>";
}
    
?>
@endsection
