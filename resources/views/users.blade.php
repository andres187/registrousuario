@extends('layouts.app')

@section('content')
<div class="container">
    <center>
      <h3>Inscripción de nuevos usuarios</h3>
      <p><a href="{{ URL('users/create') }}" class="btn btn-primary btn-xs">Inscribir nuevo</a></p>
    </center>
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead>
                <tr>
                  <th width="5">#</th>
                  <th>Id</th>
                  <th>Tipo</th>
                  <th>Nombre</th>
                  <th>Ocupación</th>
                  <th>Email</th>
                  <th>Acción</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
                  <tr>
                    <td>{{ ($key+1) }}</td>
                    <td>{{  $user->identificacion }}</td>
                    <td>
                      @if ($user->tipo == "1")
                        CC
                      @elseif ($user->tipo == "2")
                        Pasaporte
                      @elseif ($user->tipo == "3")
                        CC Extranjera
                      @endif
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>
                      @if ($user->ocupacion == "1")
                        Trabajador
                      @elseif ($user->ocupacion == "2")
                        Estudiante
                      @elseif ($user->ocupacion == "3")
                        Independiente
                      @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>
                      <center>
                        <a href="{{ URL('users/' . $user->id . '/edit') }}" class="btn btn-xs btn-info">Modificar</a>
                        <form class="" action="{{ URL('users/' . $user->id) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-xs btn-danger">Eliminar</button>
                        </form>
                      </center>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>

</div>
@endsection
