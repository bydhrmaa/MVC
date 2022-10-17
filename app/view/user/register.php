<main class="form-signin m-auto text-center col-4 px-md-4 my-5  mx-auto shadow">
   <form method="POST" action="<?= BASE_URL ?>/register/insert" class="w-100 p-4">
      <img class="mb-4" src="<?= BASE_URL ?>/assets/image/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please Sign Up</h1>
      <div class="form-floating">
         <input type="text" name="username" class="form-control" id="floatingInputUsername" placeholder="username">
         <label for="floatingInputUsername">Username</label>
      </div>
      <div class="form-floating">
         <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="email address">
         <label for="floatingInputEmail">Email address</label>
      </div>
      <div class="form-floating">
         <input type="text" name="firstName" class="form-control" id="floatingInputFirstname" placeholder="first name">
         <label for="floatingInputFirstname">First Name</label>
      </div>
      <div class="form-floating">
         <input type="text" name="lastName" class="form-control" id="floatingInputLastname" placeholder="last name">
         <label for="floatingInputLastname">Last Name</label>
      </div>
      <div class="form-floating">
         <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="password">
         <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating mb-3">
         <input type="password" name="ulangi_password" class="form-control" id="floatingPassword" placeholder="password">
         <label for="floatingPassword">Ulangi Password</label>
      </div>
      <!-- <div class="form-floating mb-3">
         <input type="password" name="" class="form-control" id="floatingPasswordVerify" placeholder="password verify">
         <label for="floatingPasswordVerify">Password Verify</label>
      </div> -->
      <button type="submit" name="submit" class="w-100 btn btn-lg btn-primary">Submit</button>
      <p class="mt-3 text-muted">&copy; 2022</p>
   </form>
</main>