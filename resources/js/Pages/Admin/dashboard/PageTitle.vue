<template>
    <div class="row gy-3 mb-6 justify-content-between">
        <div class="col-md-9 col-auto">
            <h2 class="mb-2 text-body-emphasis">Targets Dashboard - {{ current_quarter.name }}<i>(Active)</i></h2>
            <h5 class="text-body-tertiary fw-semibold">Here’s what has been going on at your business from {{ formatDate(current_quarter.start_date) }} until {{ formatDate(current_quarter.end_date) }}</h5>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            current_quarter: Object
        },
        methods: {
            formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleDateString('en-US', {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
            }
        }
    }
</script>
