<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
   <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#"><?= $data['company'] ?></a>
   <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
   <div class="navbar-nav">
      <div class="nav-item text-nowrap">
         <a class="nav-link px-3" href="#">Sign out</a>
      </div>
   </div>
</header>

<div class="container-fluid">
   <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse pb-4">
         <div class="position-sticky pt-3 sidebar-sticky">
            <ul class="nav flex-column">
               <li class="nav-item">
                  <a class="nav-link text-light active" aria-current="page" href="<?= BASE_URL ?>/home/">
                     <span data-feather="home" class="align-text-bottom"></span>
                     Dashboard
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link text-light" href="<?= BASE_URL ?>/home/users">
                     <span data-feather="users" class="align-text-bottom"></span>
                     Customers
                  </a>
               </li>
            </ul>
         </div>
      </nav>