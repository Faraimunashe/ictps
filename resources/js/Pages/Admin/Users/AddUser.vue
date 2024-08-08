<template>
    <div
      class="modal fade"
      id="addDealModal"
      tabindex="-1"
      aria-labelledby="addDealModalLabel"
      aria-hidden="true"
    >
    <div class="modal-dialog modal-xl">
        <form @submit.prevent="submitUser" class="modal-content bg-body-highlight p-6">
          <div class="modal-header border-0 p-0 mb-2">
            <h3 class="mb-0">Create New User</h3>
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
                <div class="col-lg-6">
                    <div class="mb-4">
                        <label class="text-body-highlight fw-bold mb-2">Username</label>
                        <input v-model="form.username" :class="{'is-invalid':form.errors.username}" class="form-control" type="text" placeholder="Enter username" required>
                        <div class="invalid-feedback" v-if="form.errors.username">
                            {{ form.errors.username }}
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-body-highlight fw-bold mb-2">Email Address</label>
                        <input v-model="form.email" :class="{'is-invalid':form.errors.email}" class="form-control" type="email" placeholder="Enter email address" required>
                        <div class="invalid-feedback" v-if="form.errors.email">
                            {{ form.errors.email }}
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-body-highlight fw-bold mb-2">Role</label>
                        <select class="form-select" v-model="form.role">
                            <option selected disabled>Select user role</option>
                            <option v-for="role in roles" :key="role.id" :value="role.id">{{ role.display_name }}</option>
                        </select>
                        <div class="invalid-feedback" v-if="form.errors.role">
                            {{ form.errors.role }}
                        </div>
                    </div>
                </div>
                <div v-if="form.role === 3" class="col-lg-6">
                    <div class="mb-4">
                        <label class="text-body-highlight fw-bold mb-2">Department</label>
                        <select class="form-select" v-model="form.department_id">
                            <option selected disabled>Select MDA Department</option>
                            <option v-for="department in departments" :key="department.id" :value="department.id">{{ department.name }}</option>
                        </select>
                        <div class="invalid-feedback" v-if="form.errors.department_id">
                            {{ form.errors.department_id }}
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-3">
                            <label class="text-body-highlight fw-bold mb-2">Title</label>
                            <select v-model="form.title" :class="{'is-invalid':form.errors.title}" class="form-select" required>
                                <option selected disabled>Select Title</option>
                                <option value="Mr">Mr</option>
                                <option value="Miss">Miss</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Prof">Prof</option>
                                <option value="Dr">Dr</option>
                            </select>
                            <div class="invalid-feedback" v-if="form.errors.title">
                                {{ form.errors.title }}
                            </div>
                        </div>
                        <div class="col-9">
                            <label class="text-body-highlight fw-bold mb-2">Firstnames</label>
                            <input v-model="form.firstnames" :class="{'is-invalid':form.errors.firstnames}" class="form-control" type="text" placeholder="Enter firstnames" required>
                            <div class="invalid-feedback" v-if="form.errors.firstnames">
                                {{ form.errors.firstnames }}
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-body-highlight fw-bold mb-2">Surname</label>
                        <input v-model="form.surname" :class="{'is-invalid':form.errors.surname}" class="form-control" type="text" placeholder="Enter surname">
                        <div class="invalid-feedback" v-if="form.errors.surname">
                            {{ form.errors.surname }}
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer border-0 pt-6 px-0 pb-0">
            <button type="reset" class="btn btn-link text-danger px-3 my-0">Cancel</button>
            <button type="submit" class="btn btn-primary my-0">Create User</button>
          </div>
        </form>
      </div>
    </div>
</template>

<script setup>
import { EnvelopeIcon, KeyIcon } from '@heroicons/vue/24/solid';
import { useForm } from '@inertiajs/vue3';

const props = defineProps({
    roles: {
        type: Object,
        required: true
    },
    departments: {
        type: Object,
        required: true
    }
});

let form = useForm({
    username: '',
    email: '',
    password: '',
    title: '',
    firstnames: '',
    surname: '',
    department_id: '',
    role: ''
});

let submitUser = async () => {
    await form.post('/users', {
        onSuccess: () => form.reset
    });
}

</script>
