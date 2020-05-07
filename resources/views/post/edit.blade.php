@extends('prop.papa')



@section('contenu')


<form method="POST"  action="{{route('post.changer',[$e->id])}}">
    <input type="hidden"  name="_method" value="PUT">

    {{@csrf_field()}}
    <div  class="form-group">
        <label for="">Numéro_Poste</label>
        <input  class="form-control"type="text" name="num"  value="{{$e->Numero_Post}}">
    
    </div>
    <div class="form-group">
        <label for="">Date_Changement  </label>

        <input class="form-control" type="text" name="date" value=""  placeholder="année-mois-jour">
    </div>
    <div class="form-group">
        <label for=""> Motif  </label>

        <input  class="form-control"type="text" name="motif" value="" > 
    </div>
    
<button type="submit" class="btn btn-danger">Modifier</button>
</form>
@stop