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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="{{ asset('img/icono.svg') }}" type="image/x-icon">
    
</head>

<body>
    <!-- Código Login -->
    <section class="vh-100" style="background-color: white;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <!-- imagen de registro -->
                    <img src="img/sim.jpg"
                        class="img-fluid" alt="Phone image">
                </div>

                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                    <form class="border rounded p-4 shadow" style="transform;" action="{{ route('register') }}"
                        method="post">
                        @csrf
                        
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Registrarse</p>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="text" name="name" id="form3Example1c" class="form-control w-100" 
                                    required
                                    pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+"
                                    placeholder="Ingresa tu Nombre" />
                                <label for="form3Example1c"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Nombre</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="email" name="email" id="form3Example3c" class="form-control w-100" required
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
                                    title="La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un dígito, y tener al menos 8 caracteres."
                                />
                                <label for="form3Example4c"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Contraseña</label>
                            </div>
                        </div>
                        
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                            <div style="position: relative;" class="w-100">
                                <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control w-100" required
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                    title="La contraseña debe contener al menos una letra mayúscula, una letra minúscula y un dígito, y tener al menos 8 caracteres."
                                />
                                <label for="form3Example4cd"
                                    style="position: absolute; top: -13px; left: 14px; background-color: white; padding: 0 5px; opacity: 0.75; user-select: none;">Confirmar
                                    contraseña</label>
                            </div>
                        </div>
                        

                        <!-- <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                            <label class="form-check-label" for="form2Example3">
                                Acepto todos los términos en <a href="#!">Términos de servicio</a>
                            </label>
                        </div>
                        -->

                        

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button class="btn btn-primary btn-lg" type="submit">Registrarse</button>
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <p style="opacity: 0.7; user-select: none;">¿Ya tienes cuenta? <a href="{{route('login')}}">Inicia Sesion</a></p>
                        </div>

                    </form>
                </
