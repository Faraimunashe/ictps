<template>
    <Head title="Login" />
    <div class="container">
        <div class="row flex-center min-vh-100 py-5">
          <form @submit.prevent="submit" class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-3">
            <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html">
              <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../images/logo.png" alt="phoenix" width="58" />
              </div>
            </a>
            <div class="text-center mb-7">
              <h3 class="text-body-highlight">Midlands Province Perfomance Monitoring</h3>
              <p class="text-body-tertiary">Get access to your account</p>
            </div>
            <div class="mb-3 text-start">
              <label class="form-label" for="email">Email address</label>
              <div class="form-icon-container">
                <input v-model="form.email" :class="{'is-invalid':form.errors.email}" class="form-control form-icon-input" type="email" placeholder="name@example.com" />
                <span class="fas fa-user text-body fs-9 form-icon"></span>
                <div class="invalid-feedback" v-if="form.errors.email">
                  {{ form.errors.email }}
                </div>
              </div>
            </div>
            <div class="mb-3 text-start">
              <label class="form-label" for="password">Password</label>
              <div class="form-icon-container">
                <input v-model="form.password" :class="{'is-invalid':form.errors.password}" class="form-control form-icon-input" id="password" type="password" placeholder="Password" />
                <span class="fas fa-key text-body fs-9 form-icon"></span>
                <div class="invalid-feedback" v-if="form.errors.password">
                  {{ form.errors.password }}
                </div>
              </div>
            </div>
            <div class="row flex-between-center mb-7">
              <div class="col-auto">
                <div class="form-check mb-0">
                  <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                  <label class="form-check-label mb-0" for="basic-checkbox">Remember me</label>
                </div>
              </div>
                <div class="col-auto">
                    <a class="fs-9 fw-semibold" href="">
                        Forgot Password?
                    </a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
          </form>
        </div>
      </div>
</template>

<script setup>
import { EnvelopeIcon, KeyIcon } from '@heroicons/vue/24/solid';
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    email: '',
    password: ''
});

let submit = () => {
    form.post('/login')
}

</script>
