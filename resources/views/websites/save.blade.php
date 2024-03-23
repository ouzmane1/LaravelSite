{{--  pour afficher une variable dans un fichier blade=> {{ $nom_var }} --}}
@extends('layouts.template')
@section('titre')
Page accueil
@endsection

@section('contenue')
Votre nom est : {{ $request->nom }}
<br>
Votre prenom est : {{ $request->prenom }}
<br>
votre email est : {{ $request->email }}
<br>
votre message est :  {{ $request->message }}
@endsection


