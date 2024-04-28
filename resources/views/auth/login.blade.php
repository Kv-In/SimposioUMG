<!doctype html>
<html lang="en">

<head>
  <title>Admin</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link rel="icon" href="{{ asset('img/icono.svg') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('assets/styleslogin.css')}}">  




</head>
  <!-- codigo Login -->
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="img/fondo.jfif"
            class="img-fluid" alt="Phone image">
        </div>

        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

            <form class="border rounded p-4 shadow" style="transform;" action="{{ route('login') }}" method="post">
            @csrf
            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Iniciar sesión</p>
            <br>

            <!-- Email input -->
            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                <div style="position: relative;" class="w-100">
                    <input type="email" name="email" id="form3Example3c" class="form-control w-100" 
                    required
                    placeholder="Ingresa tu Correo"
                />
                    <label for="form3Example3c" style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Correo Electronico</label>
                </div>
            </div>
            
            <br>

            <!-- password input -->
            <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div style="position: relative;" class="w-100"
                    
                >
                    <input type="password" name="password" id="form3Example4c" class="form-control w-100" 
                         required
                        
                    
                    />
                    <label for="form3Example4c" style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Contraseña</label>
                </div>
            </div>

            <br>
            
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Recuérdame </label>

              </div>
              <a href="#!">¿Olvidó su contraseña?</a>
            </div>
  
            <!-- Submit button -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesion</button>
                                
            </div>
            
            <br>

            <!-- Submit button -->
            <div class="text-center">
                <p style="opacity: 0.7; user-select: none;">¿No tienes cuenta? <a href="{{route('register')}}">Registrate</a></p>
            </div>

            
            <!-- salto de linea --> 
            <br>
            

            <!-- Register buttons -->
            <div class="text-center">
                <p>regístrese con:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>




          </form>
        </div>
      </div>
    </div>
  </section>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>