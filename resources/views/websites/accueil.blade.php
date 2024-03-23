@extends('layouts.template')
@section('titre')
Page accueil
@endsection

@section('contenue')
<!-- debut slider -->
@include('layouts.slider')
<!-- fin slider -->
<!-- debut de banner :les trois img  -->
@include('layouts.banner')
<!-- fin de banner :les trois img  -->
<!-- debut product area -->

<!-- debut suppoer area -->
@include('layouts.suppoer')
<!-- fin suppoer area -->

{{-- @include('layouts.product') --}}
<!-- fin product area -->

<!-- debut banner area: les deux img -->
@include('layouts.banner1')
<!-- fin banner area: les deux img -->

<!-- debut blog area : Latest news -->
{{-- @include('layouts.blog') --}}
<!-- fin blog area : Latest news -->
@endsection
