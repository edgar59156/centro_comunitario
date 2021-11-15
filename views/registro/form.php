<form method="POST" action="registro.php?accion=register">
    <!-- <div class="container register-form">
        <div class="form">
            <div>
                <h1>Registrar cuenta</h1>
            </div>

            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido 1" name="apaterno" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido 2" name="amaterno" />
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="correo" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" name="contrasena" />
                        </div>
                    </div>
                </div>
                <input type="submit" name="Guardar" value="Guardar" />
            </div>
        </div>
    </div> -->

    <section class="mb-5" style="padding: 1%;">
          <h1 class="mb-5 text-center"><strong>Registrarse</strong></h1>

          <div class="row d-flex justify-content-center">
            <div class="col-md-6">
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form">
                      <input type="text" id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Nombre(s)</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form">
                      <input type="text" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Apellido paterno </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form">
                      <input type="text" id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Apellido materno</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Correo</label>
                </div>

                <!-- Password input -->
                <div class="form mb-4">
                  <input type="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Crontraseña</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3"
                    checked
                  />
                  <label class="form-check-label" for="form2Example3">
                    Subscribe to our newsletter
                  </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>

                <!-- Register buttons -->
                
              </form>
            </div>
          </div>
        </section>
</form>