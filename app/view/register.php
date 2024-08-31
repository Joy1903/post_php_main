<?php 
require_once "./app/view/loyauts/header.php";
?>


<div class="log container mt-5 p-5 text-center">
  <main class="form-signin d-flex justify-content-center align-items-center">
  <form class="form culm g-3" id="fromSingIn1" method="POST" action="/register-form">
  <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

  <div class="form__field mt-3 mb-3">
    <input type="email" class="myinput" name="email" placeholder="name@example.com" required />
    <span class="form__error">This was to be done via email in the format name@example.com</span>
  </div>
  <div class="form__field d-flex mt-3 mb-3">
      <span class="input-group-text" id="inputGroupPrepend123" title="">@</span>
      <div class="input_container">
        <input type="text" class="check-username-input" id="validationCustomUsername1" onkeyup="check_Logine(this.value)" name="logine" data-check-login="0" placeholder="Usename" required />
        <span class="form__error">This field must be filled</span>
      </div>
  </div>
  <div class="form__field mt-3 mb-3">
    <input type="password" class="myinputpasswoprd" id="password_input_value" name="password" placeholder="password" required />
    <span class="form__error">This field must be filled</span>
  </div>
  <div class="form__field mt-3 mb-3">
    <input type="text" class="myinputpasswoprd" id="password_input_value_check" placeholder="Check password" required />
    <span class="form__error">The value of this field must match the password field</span>
  </div>
  <div class="form-check form__field">
    <div>
      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required />
      <span class="form__error">You have to agree to terms and conditions</span>
    </div>
    <label class="form-check-label" for="flexCheckDefault">
    <a style="text-decoration:none;" href="#">Agree to terms and conditions</a>
    </label>
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2017-2021</p>
</form>
  </main>
</div>
<?php 
require_once "./app/view/loyauts/footer.php";
?>