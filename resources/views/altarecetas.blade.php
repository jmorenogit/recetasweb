@extends ("layouts.plantilla")

@section("cabecera")
<p>Aquí se pueden crear nuevas recetas</p>
@endsection

@section("cuerpo")
<form method="post" action="/recursos">
@csrf
<div class="mb-3">
  <label for="NombreReceta" class="form-label">Nombre Receta</label>
  <input type="text" class="form-control" id="NombreReceta" name="NombreReceta" placeholder="Escriba el nombre de la receta">
</div> 
<div class="mb-3">
  <label for="IngredientesTextarea" class="form-label">Ingredientes</label>
  <textarea class="form-control" id="IngredientesTextarea" name="IngredientesTextarea" rows="3" placeholder="Escriba los ingredientes"></textarea>
</div>  
<div class="mb-3">
  <label for="ElaboracionTextarea" class="form-label">Elaboración</label>
  <textarea class="form-control" id="ElaboracionTextarea" name="ElaboracionTextarea" rows="3" placeholder="Escriba los pasos de elaboración"></textarea>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
@endsection