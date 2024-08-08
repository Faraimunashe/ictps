<template>
    <div class="col-md-6">
        <div class="row g-3 mb-3">
            <div class="col-12">
                <h3 class="text-body-emphasis text-nowrap">Targets By Department</h3>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="mb-0 fw-bold">Department</p>
                    <p class="mb-0 fs-9">
                        Total count
                        <span class="fw-bold">{{total_department_targets}}</span>
                    </p>
                </div>
                <hr class="bg-body-secondary mb-2 mt-2">
                <div v-for="department in departments" class="d-flex align-items-center mb-1">
                    <p class="mb-0 fw-semibold text-body lh-sm flex-1">
                        {{department.department.name}}
                        <small class="ml-4"> ({{ department.title }} {{ department.firstnames }} {{ department.surname }})</small>
                    </p>
                    <h5 class="mb-0 text-body">{{ department.targets_count }}</h5>
                </div>
                <button class="btn btn-outline-primary mt-5">
                    See Details
                    <span class="fas fa-angle-right ms-2 fs-10 text-center"></span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            departments: Array,
            total_department_targets: String
        }
    }
</script>
