<div class="container">
<form>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" class="form-control" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- 2 column grid layout -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="rememberme" checked />
        <label class="form-check-label" for="rememberme"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- link -->
      <a href="#">Forgot password?</a>
    </div>
  </div>

  <!-- submit button -->
  <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- register button -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
  </div>
</form>
</div>