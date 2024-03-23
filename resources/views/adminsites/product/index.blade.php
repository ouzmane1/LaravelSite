@extends("adminsites.layouts.template");

@section("contenu")

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des produits</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if(Session::has('message'))
            <div class="alert alert-success">
               <p> {{Session::get('message')}}</p>
            </div>

        @endif
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
              <th>Photo1</th>
              <th>Photo2</th>
              <th>Name</th>
              {{-- <th>Description</th> --}}
              <th>Price</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td> <img width="70" src="{{asset('images/products/'. $product->photo1)}}"></td>
                    <td> <img width="70" src="{{asset('images/products/'. $product->photo2)}}"></td>
                    <td> {{ $product->name }} </td>
                    {{-- <td> {{ $product->description }} </td> --}}
                    <td> {{ $product->price }} </td>
                    <td> {{ $product->category->name }} </td> {{--category c'est la methode (de relation) dans le model produit: donne acces au attribut de category --}}
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}"><button class="btn btn-secondary"> Modifier</button></a>
                    {{--  Retour dans la view categorie.destroy et avec le param id --}}
                        {{-- d-inline(display inline) bloque le retour a la ligne --}}
                    <form class="d-inline" action="{{route('products.destroy',$product->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer?')"> Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6"> No data found</td></tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>Photo1</th>
                <th>Photo2</th>
                <th>Name</th>
                {{-- <th>Description</th> --}}
                <th>Price</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
