<template>
    <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
        <div class="collapse navbar-collapse justify-content-between">
          <div class="navbar-logo">

            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <Link class="navbar-brand me-1 me-sm-3" href="/dashboard">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../../images/logo.png" alt="phoenix" width="27" />
                  <p class="logo-text ms-2 d-none d-sm-block">Midlands Province Performance Monitoring</p>
                </div>
              </div>
            </Link>
          </div>
          <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item dropdown">
              <a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-l ">
                  <img class="rounded-circle " src="../../images/farie.jpg" alt="Profile Image" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                <div class="card position-relative border-0">
                  <div class="card-body p-0">
                    <div class="text-center pt-4 pb-3">
                      <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="../../images/farie.jpg" alt="Profile Image" />
                      </div>
                      <h6 class="mt-2 text-body-emphasis">{{ username }}</h6>
                    </div>
                  </div>
                  <div class="overflow-auto scrollbar" style="height: 10rem;">
                    <ul class="nav d-flex flex-column mb-2 pb-1">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user"></span><span>Profile</span></a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="lock"></span>Posts &amp; Activity</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="settings"></span>Settings &amp; Privacy </a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="help-circle"></span>Help Center</a></li>
                    </ul>
                  </div>
                  <div class="card-footer p-0 border-top border-translucent">
                    <ul class="nav d-flex flex-column my-3">
                      <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-body" data-feather="user-plus"></span>Add another account</a></li>
                    </ul>
                    <hr />
                    <div class="px-3">
                      <Link class="btn btn-phoenix-secondary d-flex flex-center w-100" href="/logout" method="post">
                        <span class="me-2" data-feather="log-out"></span>
                        Sign out
                      </Link>
                    </div>
                    <div class="my-2 text-center fw-bold fs-10 text-body-quaternary">
                      <a class="text-body-quaternary me-1" href="#!">
                        Privacy policy
                      </a>
                      &bull;
                      <a class="text-body-quaternary mx-1" href="#!">
                        Terms
                      </a>
                      &bull;
                      <a class="text-body-quaternary ms-1" href="#!">
                        Cookies
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
    </nav>
</template>
<script>
    export default {
        props: {
            username: String
        }
    }
</script>
