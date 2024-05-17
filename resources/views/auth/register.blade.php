<!doctype html>
<html lang="en">

<head>
    <title>Registro de Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('img/icono.svg') }}" type="image/x-icon">
</head>

<body>
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="images/Logo.png" class="img-fluid" alt="Image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form id="registerForm" class="border rounded p-4 shadow" action="{{ route('register') }}" method="post">
                        @csrf
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrarse</p>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="text" name="name" id="form3Example1c" class="form-control w-100" required
                                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" placeholder="Ingresa tu Nombre" />
                                <label for="form3Example1c"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Nombre</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="email" name="email" id="email" class="form-control w-100" required
                                    placeholder="Ingresa tu Correo Electrónico" />
                                <label for="form3Example3c"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Correo Electrónico</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="password" name="password" id="form3Example4c" class="form-control w-100" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un dígito, y tener al menos 8 caracteres." />
                                <label for="form3Example4c"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Contraseña</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control w-100" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un dígito, y tener al menos 8 caracteres." />
                                <label for="form3Example4cd"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Confirmar
                                    contraseña</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button class="btn btn-primary btn-lg" type="submit">Registrarse</button>
                        </div>

                        <div class="text-center">
                            <p style="opacity: 0.7; user-select: none;">¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia Sesión</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS y otros scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-RL4J+0pM41s1Jvr0T8+qF8FZMH7f4Bnpoqw1w7YqGF6qZv7ho1PQSt6BwU0votgE" crossorigin="anonymous"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            var emailInput = document.getElementById('email').value;
            var emailDomain = emailInput.split('@')[1];

            if (emailDomain !== 'miumg.edu.gt') {
                alert('Por favor, introduce un correo electrónico válido de la institución (@miumg.edu.gt).');
                event.preventDefault();
            }
        });
    </script>
</body>

</html>
