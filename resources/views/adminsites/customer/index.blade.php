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
              <th>name</th>
              <th>email</th>
              <th>action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td> {{ $customer->name }} </td>
                    <td> {{ $customer->email }} </td>
                    <td>
                    {{-- <form class="d-inline" action="" method="POST">
                        @csrf
                        @method("DELETE") --}}

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer?')"> Supprimer</button>
                        {{-- </form> --}}
                    </td>
                </tr>
            @empty
                <tr><td colspan="6"> No data found</td></tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
              <th>name</th>
              <th>email</th>
              <th>action</th>
            </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
