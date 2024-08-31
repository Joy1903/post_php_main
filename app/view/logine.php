<?php 
require_once "./app/view/loyauts/header.php";
?>
<div class="log container mt-5 p-5 text-center">
  <main class="form-signin d-flex justify-content-center align-items-center">
  <form class="form culm g-3" id="fromSingIn1" method="POST" action="/check_user">
  <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
  <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

  <div class="form__field d-flex mt-3 mb-3">
      <span class="input-group-text" id="inputGroupPrepend123" title="">@</span>
      <div class="input_container">
        <input type="text" class="check-username-input" id="validationCustomUsername1" name="logine" data-check-login="0" placeholder="Usename" required />
        <span class="form__error">This field must be filled</span>
      </div>
  </div>
  <div class="form__field mt-3 mb-3">
    <input type="password" class="myinput" name="password" placeholder="password" required />
    <span class="form__error">This field must be filled</span>
  </div>
  <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">© 2017-2021</p>
</form>
  </main>
</div>

<?php 
require_once "./app/view/loyauts/footer.php";
?>