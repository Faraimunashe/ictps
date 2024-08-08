<template>
    <span> {{ totalSizeInMB }} mB</span>
</template>

<script>
export default {
    props: {
        attachment: Object
    },
    methods: {
        castStringToArray() {
            this.fileSizes = JSON.parse(this.attachment.size);
        }
    },
    computed: {
        totalSizeInMB() {
            const totalSizeInBytes = this.fileSizes.reduce((acc, size) => acc + size, 0);

            const totalSizeInMB = totalSizeInBytes / (1024 * 1024);
            return totalSizeInMB.toFixed(2);
        }
    },
    created() {
        this.castStringToArray();
    }
}
</script>
