<template>
    <Head title="Create Target" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Targets</a></li>
                <li class="breadcrumb-item active">New</li>
            </ol>
        </nav>
        <h2 class="my-4">Create Target Wizard</h2>

        <div class="alert alert-success" v-if="form.errors.success">{{ form.errors.success }}</div>
        <div class="alert alert-danger" v-if="form.errors.error">{{ form.errors.error }}</div>

        <div class="card theme-wizard mb-3">
            <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" :class="{ active: currentStep === 1, 'text-success': currentStep > 1 }" @click.prevent="currentStep = 1" href="#">
                            <div class="text-center d-inline-block" >
                                <span class="nav-item-circle-parent">
                                    <span class="nav-item-circle" :class="{'text-success': currentStep > 1 }">
                                        <span class="fas fa-lock"></span>
                                    </span>
                                </span>
                                <span class="d-none d-md-block mt-1 fs-9">Step 1</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="{ active: currentStep === 2, 'text-success': currentStep > 2 }" @click.prevent="currentStep = 2" href="#">
                            <div class="text-center d-inline-block">
                                <span class="nav-item-circle-parent">
                                    <span class="nav-item-circle" :class="{'text-success': currentStep > 2 }">
                                        <span class="fas fa-user"></span>
                                    </span>
                                </span>
                                <span class="d-none d-md-block mt-1 fs-9">Step 2</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="{ active: currentStep === 3, 'text-success': currentStep > 3 }" @click.prevent="currentStep = 3" href="#">
                            <div class="text-center d-inline-block">
                                <span class="nav-item-circle-parent">
                                    <span class="nav-item-circle" :class="{'text-success': currentStep > 3 }">
                                        <span class="fas fa-file-alt"></span>
                                    </span>
                                </span>
                                <span class="d-none d-md-block mt-1 fs-9">Step 3</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" :class="{ active: currentStep === 4, 'text-success': currentStep > 4 }" @click.prevent="currentStep = 4" href="#">
                            <div class="text-center d-inline-block">
                                <span class="nav-item-circle-parent">
                                    <span class="nav-item-circle" :class="{'text-success': currentStep > 4 }">
                                        <span class="fas fa-check-circle"></span>
                                    </span>
                                </span>
                                <span class="d-none d-md-block mt-1 fs-9">Review</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <form @submit.prevent="submitTarget" class="row g-3 mb-6">
                    <div v-if="currentStep === 1" class="step">
                        <!-- Step 1: Basic Information -->
                        <h4 class="mb-3" style="color: grey;">Basic Information</h4>
                        <div class="row mb-4">
                            <div class="col-12">
                                <label class="form-label" for="name">Target title <code>*</code></label>
                                <input v-model="form.name" :class="{'is-invalid': form.errors.name}" class="form-control" type="text" placeholder="Target title" />
                                <div class="invalid-feedback" v-if="form.errors.name">
                                    {{ form.errors.name }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="form-label" for="description">Target description <code>*</code></label>
                                <textarea v-model="form.description" :class="{'is-invalid': form.errors.description}" class="form-control" id="description" placeholder="Describe the nature of your target" style="height: 80px"></textarea>
                                <div class="invalid-feedback" v-if="form.errors.description">
                                    {{ form.errors.description }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentStep === 2" class="step">
                        <!-- Step 2: Date Information -->
                        <h4 class="mb-3" style="color: grey;">Date Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="start_date">Start date <code>*</code></label>
                                <input v-model="form.start_date" :class="{'is-invalid': form.errors.start_date}" class="form-control" type="date" />
                                <div class="invalid-feedback" v-if="form.errors.start_date">
                                        {{ form.errors.start_date }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="end_date">End Date <code>*</code></label>
                                <input v-model="form.end_date" :class="{'is-invalid': form.errors.end_date}" class="form-control" type="date" />
                                <div class="invalid-feedback" v-if="form.errors.end_date">
                                    {{ form.errors.end_date }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentStep === 3" class="step">
                        <!-- Step 3: Overlapping Information -->
                        <h4 class="mb-3" style="color: grey;">Quarter Information</h4>
                        <div class="col-12">
                            <div class="flatpickr-input-container">
                                <input v-model="form.overlapping" class="form-check-input" type="checkbox" id="overlapping">
                                <label class="form-check-label text-body" for="overlapping">
                                    Target overlapping quarters?
                                </label>
                            </div>
                        </div>
                        <div v-if="form.overlapping" class="col-12">
                            <div class="form-floating">
                                <input v-model="form.overlapping_details" class="form-control" type="text" placeholder="Overlapping details">
                                <label for="overlapping_details">Provide details for overlapping quarters</label>
                            </div>
                        </div>
                    </div>

                    <div v-if="currentStep === 4" class="step">
                        <!-- Step 4: Confirmation -->
                        <div class="col-12">
                            <h4 class="mb-4" style="color: grey;">Confirm Your Details</h4>
                            <div class="row mb-2">
                                <div class="col-md-6"><strong>Title:</strong> {{ form.name }}</div>
                                <div class="col-md-6"><strong>Description:</strong> {{ form.description }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-6"><strong>Start Date:</strong> {{ form.start_date }}</div>
                                <div class="col-md-6"><strong>End Date:</strong> {{ form.end_date }}</div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12"><strong>Overlapping:</strong> {{ form.overlapping ? 'Yes' : 'No' }}</div>
                            </div>
                            <div v-if="form.overlapping" class="row mb-2">
                                <div class="col-12"><strong>Overlapping Details:</strong> {{ form.overlapping_details }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 gy-6">
                        <div class="row g-3 justify-content-between">
                            <div class="col-auto">
                                <button type="button" class="btn btn-secondary px-5" @click="previousStep" :disabled="currentStep === 1">
                                    Previous
                                </button>
                            </div>
                            <div class="col-auto">
                                <button v-if="currentStep < totalSteps" type="button" class="btn btn-primary px-5 px-sm-15" @click="nextStep">
                                    Next
                                </button>
                                <button v-else :disabled="loading" type="submit" class="btn btn-primary px-5 px-sm-15">
                                    <span v-if="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span v-if="!loading">Create Target</span>
                                    <span v-if="loading">Creating...</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import Layout from "../../../Shared/Layout.vue";
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';

export default {
    layout: Layout,
    setup() {
        const form = useForm({
            name: '',
            description: '',
            start_date: '',
            end_date: '',
            overlapping: false,
            overlapping_details: ''
        });

        const loading = ref(false);
        const currentStep = ref(1);
        const totalSteps = 4; // Updated to include the confirmation step

        const nextStep = () => {
            if (currentStep.value < totalSteps) {
                currentStep.value++;
            }
        };

        const previousStep = () => {
            if (currentStep.value > 1) {
                currentStep.value--;
            }
        };

        const submitTarget = () => {
            loading.value = true;
            form.post('/targets', {
                onFinish: () => loading.value = false
            });
        };

        return {
            form,
            loading,
            currentStep,
            nextStep,
            previousStep,
            totalSteps,
            submitTarget
        };
    }
};
</script>

