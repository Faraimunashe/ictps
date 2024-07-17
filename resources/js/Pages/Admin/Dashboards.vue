<template>
    <Head title="Dashboard" />
    <div class="content">
        <div class="row gy-3 mb-6 justify-content-between">
            <div class="col-md-9 col-auto">
                <h2 class="mb-2 text-body-emphasis">Targets Dashboard</h2>
                <h5 class="text-body-tertiary fw-semibold">Here’s what’s going on at your business right now</h5>
            </div>
        </div>
        <div class="row mb-3 gy-6">
            <div class="col-12 col-xxl-2">
                <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">32</h2><span class="fs-7 fw-semibold text-body">Targets</span>
                            </div>
                            <p class="text-body-secondary fs-9 mb-0">In progress</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-users-alt text-success-dark"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">94</h2><span class="fs-7 fw-semibold text-body">MDAs</span>
                            </div>
                            <p class="text-body-secondary fs-9 mb-0">Working hard</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">23</h2><span class="fs-7 fw-semibold text-body">Milestones</span>
                            </div>
                            <p class="text-body-secondary fs-9 mb-0">set stages</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center"><span class="fs-4 lh-1 uil uil-refresh text-danger-dark"></span>
                        <div class="ms-2">
                            <div class="d-flex align-items-end">
                            <h2 class="mb-0 me-2">3</h2><span class="fs-7 fw-semibold text-body">Activities</span>
                            </div>
                            <p class="text-body-secondary fs-9 mb-0">work in progress</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
          <div class="row">
            <div class="col-md-6">
              <div class="row g-3 mb-3">
                <div class="col-12">
                  <h3 class="text-body-emphasis text-nowrap">Targets By MDA</h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-bold">MDA</p>
                    <p class="mb-0 fs-9">Total count <span class="fw-bold">257</span></p>
                  </div>
                  <hr class="bg-body-secondary mb-2 mt-2">
                  <div class="d-flex align-items-center mb-1">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">MDA #1</p>
                    <h5 class="mb-0 text-body">78</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">MDA #2</p>
                    <h5 class="mb-0 text-body">63</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">MDA #3</p>
                    <h5 class="mb-0 text-body">56</h5>
                  </div>
                  <div class="d-flex align-items-center mb-1">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">MDA #4</p>
                    <h5 class="mb-0 text-body">36</h5>
                  </div>
                  <div class="d-flex align-items-center">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">MDA #5</p>
                    <h5 class="mb-0 text-body">24</h5>
                  </div>
                  <button class="btn btn-outline-primary mt-5">See Details<svg class="svg-inline--fa fa-angle-right ms-2 fs-10 text-center" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path></svg><!-- <span class="fas fa-angle-right ms-2 fs-10 text-center"></span> Font Awesome fontawesome.com --></button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <PieChart />
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import BarChart from "./Charts/BarChart.vue";
import PieChart from "./Charts/PieChart.vue";

export default {
    layout: Layout,
    components: {
        BarChart,
        PieChart
    }
}
</script>
