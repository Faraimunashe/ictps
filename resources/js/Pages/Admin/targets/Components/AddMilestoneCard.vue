<template>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Create a new milestone</h4>
                    <div class="row g-3">
                        <div class="col-12 alert alert-subtle-success" v-if="form.errors.success">
                            {{ form.errors.success }}
                        </div>
                        <div class="col-12 alert alert-subtle-danger" v-if="form.errors.error">
                            {{ form.errors.error }}
                        </div>
                        <form @submit.prevent="submitMilestone" class="col-12">
                            <div class="mb-2">
                                <label class="form-label">Milestone Title <code>*</code></label>
                                <input v-model="form.name" :class="{'is-invalid':form.errors.name}" class="form-control form-control-sm mb-2" type="text" placeholder="Milestone Title" required>
                                <div class="invalid-feedback" v-if="form.errors.name">
                                    {{ form.errors.name }}
                                </div>
                                <div class="invalid-feedback" v-if="form.errors.target_id">
                                    {{ form.errors.target_id }}
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Milestone Description <code>*</code></label>
                                <textarea v-model="form.description" :class="{'is-invalid':form.errors.description}" class="form-control form-control-sm" rows="1" required></textarea>
                                <div class="invalid-feedback" v-if="form.errors.description">
                                    {{ form.errors.description }}
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label class="form-label">Start Date <code>*</code></label>
                                    <input v-model="form.start_date" :class="{'is-invalid':form.errors.start_date}" class="form-control form-control-sm mb-2" type="date" placeholder="Milestone Title" required>
                                    <div class="invalid-feedback" v-if="form.errors.start_date">
                                        {{ form.errors.start_date }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">End Date <code>*</code></label>
                                    <input v-model="form.end_date" :class="{'is-invalid':form.errors.end_date}" class="form-control form-control-sm mb-2" type="date" placeholder="Milestone Title" required>
                                    <div class="invalid-feedback" v-if="form.errors.end_date">
                                        {{ form.errors.end_date }}
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-phoenix-primary btn-sm me-1 mb-1" type="submit">Add Milestone</button>
                            <button class="btn btn-phoenix-secondary btn-sm me-1 mb-1" type="reset">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
    target_id: {
        type: String,
        required: true
    }
});

let form = useForm({
    target_id: props.target_id,
    name: '',
    description: '',
    start_date: '',
    end_date: ''
});

let submitMilestone = async () => {
    await form.post('/milestones', {
        onSuccess: () => form.reset()
    });
}

</script>
