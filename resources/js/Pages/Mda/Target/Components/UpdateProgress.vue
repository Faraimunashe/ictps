<template>
    <div class="col-xl-7 col-xxl-8">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3">Update Target Progress</h4>
                <div class="row g-3">
                    <div class="col-12 alert alert-subtle-success" v-if="form.errors.success">
                        {{ form.errors.success }}
                    </div>
                    <div class="col-12 alert alert-subtle-danger" v-if="form.errors.error">
                        {{ form.errors.error }}
                    </div>
                    <form @submit.prevent="submitTargetProgress" class="col-12">
                        <div class="mb-3">
                            <label class="form-label">Target Progress ({{ form.progress }}%) <code>*</code></label>
                            <input v-model="form.progress" :class="{'is-invalid': form.errors.progress}" class="form-range form-control-sm mb-2" type="range" :min="progress_min" max="100" step="1" required>
                            <div class="invalid-feedback" v-if="form.errors.progress">
                                {{ form.errors.progress }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Attach Proof <code>*</code></label>
                            <input @change="handleFileChange" :class="{'is-invalid': fileHasError}" class="form-control form-control-sm mb-2" type="file" placeholder="Attach proof" multiple required>
                            <div class="invalid-feedback" v-if="fileHasError">
                                <div v-for="(error, index) in fileErrors" :key="index">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <button :disabled="loading" class="btn btn-primary btn-sm me-1 mb-1" type="submit">
                            <span v-if="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span v-if="!loading">Update Progress</span>
                            <span v-if="loading"> Updating...</span>
                        </button>
                        <button class="btn btn-phoenix-secondary btn-sm me-1 mb-1" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref, computed } from 'vue';

const props = defineProps({
    target_id: {
        type: String,
        required: true
    },
    progress_min: {
        type: String,
        required: true
    }
});

let form = useForm({
    progress: 0,
    files: []
});

let loading = ref(false);

let handleFileChange = (event) => {
    form.files = Array.from(event.target.files);
}

let fileErrors = computed(() => {
    return Object.keys(form.errors).filter(key => key.startsWith('files.')).map(key => form.errors[key]);
});

let fileHasError = computed(() => {
    return fileErrors.value.length > 0;
});

let submitTargetProgress = async () => {
    loading.value = true;
    let formData = new FormData();
    formData.append('progress', form.progress);

    form.files.forEach((file, index) => {
        formData.append(`files[${index}]`, file);
    });

    await form.post(`/target/progress/${props.target_id}`, {
        data: formData,
        onSuccess: () => form.reset(),
        onFinish: () => loading.value = false
    });
}
</script>
