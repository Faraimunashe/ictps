<template>
    <div class="progress mb-2" style="height: 5px;">
        <div
            class="progress-bar"
            :class="progressClass"
            data-bs-theme="light"
            role="progressbar"
            :style="{ width: percentage + '%' }"
            :aria-valuenow="percentage"
            aria-valuemin="0"
            aria-valuemax="100"
        >
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            percentage: {
                type: Number,
                required: true
            }
        },
        computed: {
            progressClass() {
                if (this.percentage <= 25) {
                    return 'bg-danger';
                } else if (this.percentage <= 50) {
                    return 'bg-warning';
                } else if (this.percentage <= 75) {
                    return 'bg-info';
                } else {
                    return 'bg-success';
                }
            }
        }
    };
</script>
