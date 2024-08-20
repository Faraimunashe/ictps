<template>
    <div
      class="modal fade"
      id="addQuarterModal"
      tabindex="-1"
      aria-labelledby="addQuarterModalLabel"
      aria-hidden="true"
    >
        <div class="modal-dialog modal-lg">
            <form @submit.prevent="submitQuarter" class="modal-content bg-body-highlight p-6">
                <div class="modal-header border-0 p-0 mb-2">
                    <h3 class="mb-0">Create New Quarter</h3>
                    <button class="btn btn-sm btn-phoenix-secondary" data-bs-dismiss="modal" aria-label="Close">
                        <span class="fas fa-times text-danger"></span>
                    </button>
                </div>
                <div class="modal-body px-0">
                    <div class="row g-4">
                        <div v-if="form.errors.success" class="col-12 alert alert-subtle-success" role="role">
                            {{ form.errors.success }}
                        </div>
                        <div v-if="form.errors.error" class="col-12 alert alert-subtle-danger" role="role">
                            {{ form.errors.error }}
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label class="text-body-highlight fw-bold mb-2">Name <code>*</code></label>
                                <input v-model="form.name" :class="{'is-invalid': form.errors.name}" class="form-control" type="text" placeholder="Enter username" required>
                                <div class="invalid-feedback" v-if="form.errors.name">
                                    {{ form.errors.username }}
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="text-body-highlight fw-bold mb-2">Start Date <code>*</code></label>
                                <input v-model="form.start_date" :class="{'is-invalid': form.errors.start_date}" class="form-control" type="date" required>
                                <div class="invalid-feedback" v-if="form.errors.start_date">
                                    {{ form.errors.start_date }}
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="text-body-highlight fw-bold mb-2">End Date <code>*</code></label>
                                <input v-model="form.end_date" :class="{'is-invalid': form.errors.end_date}" class="form-control" type="date" required>
                                <div class="invalid-feedback" v-if="form.errors.end_date">
                                    {{ form.errors.end_date }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-6 px-0 pb-0">
                    <button type="reset" class="btn btn-link text-danger px-3 my-0">Cancel</button>
                    <button :disabled="loading" type="submit" class="btn btn-primary my-0">
                        <span v-if="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <span v-if="!loading">Create Quarter</span>
                        <span v-if="loading"> Creating...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

let form = useForm({
    name: '',
    start_date: '',
    end_date: '',
});

let loading = ref(false);

let submitQuarter = async () => {
    loading.value = true;
    await form.post('/quarters', {
        onSuccess: () => {
            form.reset();
            loading.value = false;
        },
        onError: () => {
            loading.value = false;
        }
    });
};
</script>
