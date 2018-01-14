@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form class="" action="{{ URL('users') }}{{ isset($user) ? '/' . $user->id : '' }}" method="post">
        <div class="form-group">
          {{ csrf_field() }}
          @if (isset($user))
            {{ method_field('PUT') }}
          @endif
          <input type="text" name='name' placeholder="Nombre" class="form-control" value="{{ isset($user) ? $user->name : '' }}" required>
          <input type="text" name='email' placeholder="Correo" class="form-control" value="{{ isset($user) ? $user->email : '' }}" required>
          <input type="number" name='identificacion' placeholder="Id" class="form-control" value="{{ isset($user) ? $user->identificacion : '' }}" maxlength="10" required>
          <label for="tipo">Tipo id</label>
          <select class="form-control" id="tipo" name="tipo">
            @if (isset($user))
              <option {{old('tipo',$user->tipo)=="1"? 'selected':''}} value="1">CC</option>
              <option {{old('tipo',$user->tipo)=="2"? 'selected':''}} value="2">Pasaporte</option>
              <option {{old('tipo',$user->tipo)=="3"? 'selected':''}} value="3">CC Extranjera</option>
            @else
              <option value="1">CC</option>
              <option value="2">Pasaporte</option>
              <option value="3">CC Extranjera</option>
            @endif
          </select>
          <label for="ocupacion">Ocupación</label>
          <select class="form-control" id="ocupacion" name="ocupacion">
            @if (isset($user))
              <option {{ old('ocupacion',$user->ocupacion)=="1"? 'selected':''}} value="1">Trabajador</option>
              <option {{ old('ocupacion',$user->ocupacion)=="2"? 'selected':''}} value="2">Estudiante</option>
              <option {{ old('ocupacion',$user->ocupacion)=="3"? 'selected':''}} value="3">Independiente</option>
            @else
              <option value="1">Trabajador</option>
              <option value="2">Estudiante</option>
              <option value="3">Independiente</option>
            @endif
          </select>
          <button type="submit" class="btn btn-sm btn-success">Inscribir/Modificar</button>
        </div>
      </form>
      <p><span>Nota: cuando es creado un nuevo usuario por metedo de inscripción, su contraseña es la misma que el usuario.</span></p>
    </div>
  </div>
</div>
@endsection
