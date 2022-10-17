<main class="col-4 px-md-4 mt-5 mx-auto text-center shadow">
   <form method="POST" action="<?= BASE_URL ?>/login/checkLogin" class="w-100 p-4">
      <img class="mb-4" src="<?= BASE_URL ?>/assets/image/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
         <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
         <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
         <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
         <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mt-2 mb-3 text-start">
         <label>
            <input type="checkbox" value="remember-me"> Remember me
         </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
   </form>
</main>