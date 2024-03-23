@extends("adminsites.layouts.template");

@section("contenu")

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des categories</h3>
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
              <th>Nom</th>
              <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td> {{ $category->name }} </td>
                    <td>
                        <a href="{{ route('categories.edit',$category->id)}}"><button class="btn btn-secondary"> Modifier</button></a>
                    {{--  Retour dans la view categorie.destroy et avec le param id --}}
                        {{-- d-inline(display inline) bloque le retour a la ligne --}}
                    <form class="d-inline" action="{{route('categories.destroy',$category->id)}}" method="POST">
                            @csrf
                            @method("DELETE")

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer?')"> Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="2"> No data found</td></tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
              <th>Nom</th>
              <th>Action</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
