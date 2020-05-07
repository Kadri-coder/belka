@extends('prop.papa')



@section('contenu')
  
<table class="table table-bordered table-success " >
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date_Naissance</th>
            <th scope="col">Lieu_Naissance</th>
            <th scope="col">Adresse</th>
            <th scope="col">Téléphone</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-success">
                
            <td> {{$co->Nom}}</td>
            <td>{{$co->Prénom}}</td>
            <td>{{$co->Date_Naissance}}</td>
            <td>{{$co->Lieu_Naissance}}</td>
            <td>{{$co->Téléphone}}</td>
            <td>{{$co->Adresse}}</td>
          </tr>
        </tbody>
      </table>
  

    @include('sweetalert::alert')

@endsection