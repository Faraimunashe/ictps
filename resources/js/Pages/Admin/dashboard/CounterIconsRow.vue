<template>
        <div class="row mb-3 gy-6">
            <div class="col-12 col-xxl-2">
                <div class="row align-items-center g-3 g-xxl-0 h-100 align-content-between">
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 lh-1 uil uil-users-alt text-success-dark"></span>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">{{ icon_data.mdas_count }}</h2>
                                    <span class="fs-7 fw-semibold text-body">MDAs</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Available for quarter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 lh-1 uil uil-books text-primary-dark"></span>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">{{ icon_data.quarter_targets_count }}</h2>
                                    <span class="fs-7 fw-semibold text-body">Targets</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Registered for quarter</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 lh-1 uil uil-invoice text-warning-dark"></span>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">{{ icon_data.pending_targets_count }}</h2>
                                    <span class="fs-7 fw-semibold text-body">Pending</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Work in progress</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 col-lg-6 col-xl-3 col-xxl-12">
                        <div class="d-flex align-items-center">
                            <span class="fs-4 lh-1 uil uil-check-circle text-danger-dark"></span>
                            <div class="ms-2">
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 me-2">{{ icon_data.completed_targets_count }}</h2>
                                    <span class="fs-7 fw-semibold text-body">Completed</span>
                                </div>
                                <p class="text-body-secondary fs-9 mb-0">Done for this quarter</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props: {
            icon_data: Object
        }
    }
</script>
