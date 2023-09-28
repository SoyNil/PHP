<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">


</head>

<body >
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Registro</h2>
              <p class="text-white-50 mb-5">¡Por favor ingrese los datos de usuario!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Ingrese su correo"/>
                <label class="form-label" for="typeEmailX">Correo electrónico</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" placeholder="Ingrese su contraseña"/>
                <label class="form-label" for="typePasswordX">Contraseña</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeUsu" class="form-control form-control-lg" placeholder="Ingrese su nombre de usuario"/>
                <label class="form-label" for="typeText">Usuario</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeNomb" class="form-control form-control-lg" placeholder="Ingrese su nombre"/>
                <label class="form-label" for="typeText">Nombre del usuario</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeApell" class="form-control form-control-lg" placeholder="Ingrese su apellido"/>
                <label class="form-label" for="typeText">Apellido del usuario</label>
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Registrarse</button>

            </div>

            <div>
              <p class="mb-0">¿Ya tienes una cuenta? <a href="{{route('login')}}" class="text-white-50 fw-bold">Inicie sesión aquí</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>