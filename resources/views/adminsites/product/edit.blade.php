@extends("adminsites.layouts.template");

@section("contenu")


        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Modifier Produit </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form id="quickForm" action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
              <div class="form-group">
                <label for="name">Nom Produit</label>
                <input type="text" name="name" value="{{$product->name}}" class="form-control @error("name") border-danger @enderror" id="name" placeholder="Entrer le nom produit">

                {{-- en cas d'erreur on affiche la div --}}
                @error("name")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="description">Description du produit</label>
                <textarea name="description" class="form-control @error("description") border-danger @enderror" id="description" placeholder="Saisir la description">{{$product->description}}</textarea>

                {{-- en cas d'erreur on affiche la div --}}
                @error("description")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror
              </div>


              <div class="form-group">
                <label for="price">Prix du produit</label>
                <input type="number" name="price" value="{{$product->price}}" class="form-control @error("price") border-danger @enderror" id="price" placeholder="Enter le prix du produit">

                {{-- en cas d'erreur on affiche la div --}}
                @error("price")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <img width="100" src="{{asset("images/products/".$product->photo1)}}" alt=""><br>
                <label for="name">Photo1 du produit</label>
                <input type="file" name="photo1" class="form-control @error("photo1") border-danger @enderror" id="photo1">

                {{-- en cas d'erreur on affiche la div --}}
                @error("photo1")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <img width="100" src="{{asset("images/products/".$product->photo2)}}" alt=""><br>
                <label for="name">Photo2 du produit</label>
                <input type="file" name="photo2" class="form-control @error("photo2") border-danger @enderror" id="photo2">

                {{-- en cas d'erreur on affiche la div --}}
                @error("photo2")
                <div class="text text-danger"> {{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="category_id">Categorie</label>
                <select name="category_id" id="category_id" class="form-control @error("category_id") border-danger @enderror">
                    <option value="">---Choisir---</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}" @if($product->category_id==$category->id) selected @endif >{{$category->name}}</option>
                    @endforeach
                </select>
                @error("category_id")
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
