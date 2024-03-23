@extends("adminsites.layouts.template");

@section("contenu")


        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Modifier Categorie </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="{{route('categories.update',$category->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Nom Categorie</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control @error("name") border-danger @enderror" id="name" placeholder="Enter le nom categorie">

                {{-- en cas d'erreur on affiche la div --}}
                @error("name")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror

              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Modifier</button>
              <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>
          </form>
        </div>
        <!-- /.card -->




@endsection
