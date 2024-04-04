@extends("adminsites.layouts.template");

@section("contenu")

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Liste des commandes</h3>
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
              <th>nomber</th>
              <th>date</th>
              <th>client</th>
              <th>statut</th>
              <th>action</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td> 01</td>
                    <td> 02/03/2024</td>
                    <td> Ousmane Ndome</td>
                    <td> </td>
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
                <th>nomber</th>
              <th>date</th>
              <th>customer_id</th>
              <th>statut</th>
              <th>action</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
