<template>
    <Head title="Dashboard" />
    <div class="content">
        <div class="row gy-3 mb-6 justify-content-between">
          <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-body-emphasis">Projects Dashboard</h2>
            <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
          </div>
          <div class="col-md-3 col-auto">
            <div class="flatpickr-input-container">
              <input class="form-control ps-6 datetimepicker" id="datepicker" type="text" data-options='{"dateFormat":"M j, Y","disableMobile":true,"defaultDate":"Mar 1, 2022"}' />
              <span class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout,
}
</script>
