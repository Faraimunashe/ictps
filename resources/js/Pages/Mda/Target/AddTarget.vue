<template>
    <Head title="Create Target" />
<div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Home</a></li>
            <li class="breadcrumb-item"><a href="#!">Targets</a></li>
            <li class="breadcrumb-item active">New</li>
          </ol>
        </nav>
        <h2 class="mb-4">Create a target</h2>
        <div class="alert alert-success" v-if="form.errors.success">{{ form.errors.success }}</div>
        <div class="alert alert-danger" v-if="form.errors.error">{{ form.errors.error }}</div>
        <div class="row">
          <div class="col-xl-12">
            <form @submit.prevent="submitTarget" class="row g-3 mb-6">
              <div class="col-md-12">
                <div class="form-floating">
                  <input v-model="form.name" :class="{'is-invalid':form.errors.name}" class="form-control" type="text" placeholder="Project title" />
                  <label for="floatingInputGrid">Target title <code>*</code></label>
                  <div class="invalid-feedback" v-if="form.errors.name">
                    {{ form.errors.name }}
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea v-model="form.description" :class="{'is-invalid':form.errors.description}" class="form-control" id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px"></textarea>
                  <label for="floatingProjectOverview">target description <code>*</code></label>
                  <div class="invalid-feedback" v-if="form.errors.description">
                    {{ form.errors.description }}
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="flatpickr-input-container">
                  <div class="form-floating">
                    <input v-model="form.start_date" :class="{'is-invalid':form.errors.start_date}" class="form-control" type="date" placeholder="end date" />
                    <label for="floatingInputStartDate">Start date <code>*</code></label>
                    <div class="invalid-feedback" v-if="form.errors.start_date">
                     {{ form.errors.start_date }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="flatpickr-input-container">
                  <div class="form-floating">
                    <input v-model="form.end_date" :class="{'is-invalid':form.errors.end_date}" class="form-control" type="date" placeholder="end date" />
                    <label for="floatingInputStartDate">Deadline <code>*</code></label>
                    <div class="invalid-feedback" v-if="form.errors.end_date">
                     {{ form.errors.end_date }}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                  <div class="col-auto">
                    <button type="reset" class="btn btn-phoenix-primary px-5">Cancel</button>
                  </div>
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary px-5 px-sm-15">Create Target</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</template>


<script>
import Layout from "../../../Shared/Layout.vue";
export default {
    layout: Layout,
}
</script>

<script setup>
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    name: '',
    description: '',
    start_date: '',
    end_date: ''
});

let submitTarget = () => {
    form.post('/targets')
}

</script>
