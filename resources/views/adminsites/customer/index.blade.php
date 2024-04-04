@extends("adminsites.layouts.template");

@section("contenu")

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des clients</h3>
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
              <th>fistname</th>
              <th>lastname</th>
              <th>tel</th>
              <th>email</th>
              <th>password</th>
              <th>adresse</th>
              <th>action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> Ndome</td>
                    <td> Ousmane</td>
                    <td> +33689909856</td>
                    <td> ousmane@gmail.com</td>
                    <td> 123456</td>
                    <td> Paris</td>
                    <td>

                    <form class="d-inline" action="" method="POST">
                            @csrf
                            @method("DELETE")

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer?')"> Supprimer</button>
                        </form>
                    </td>
                </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>fistname</th>
              <th>lastname</th>
              <th>tel</th>
              <th>email</th>
              <th>password</th>
              <th>adresse</th>
              <th>action</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
