  @extends ('layouts.app')

    @section('content')
    <div class="container px-4 py-5 my-5 col-4">
    <form class="form-control card text-light" method="post">
      <h1>INICIO DE SESION</h1>
      <div class="mb-3">
        <label for="" class="form-label">USUARIO</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="nameHelpId">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">CONTRASEÑA</label>
        <input type="pass" class="form-control" name="" id="" aria-describedby="emailHelpId">
      </div>
      <button type="submit" class="btn pepe">Continuar</button>
    </form>
  </div>
    @endsection