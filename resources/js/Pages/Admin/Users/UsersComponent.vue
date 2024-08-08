<template>
    <div class="table-responsive scrollbar mb-3">
        <table class="table fs-9 mb-0 border-top border-translucent">
            <thead>
                <tr>
                    <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="username" style="width:30%;">USERNAME</th>
                    <th class="sort align-middle ps-3" scope="col" >EMAIL</th>
                    <th class="sort align-middle ps-3" scope="col" >ROLE</th>
                    <th class="sort align-middle ps-3" scope="col" >CREATED AT</th>
                    <th class="sort align-middle text-end" scope="col" >ACTION</th>
                </tr>
            </thead>
            <tbody class="list" id="project-list-table-body">
                    <tr v-for="user in users" class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 projectName py-4">
                            <a class="fw-bold fs-8" href="#">{{ user.name }}</a>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3 py-4">
                            <p class="mb-0 fs-9 text-body">{{ user.email }}</p>
                        </td>
                        <td class="align-middle white-space-nowrap deadline ps-3 py-4">
                            <p class="mb-0 fs-9 text-body" v-for="role in user.roles">{{ role.display_name }}</p>
                        </td>
                        <td class="align-middle white-space-nowrap task ps-3 py-4">
                            <p class="fw-bo text-body fs-9 mb-0">{{ formatDate(user.created_at) }}</p>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="btn-reveal-trigger position-static">
                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                    <span class="fas fa-ellipsis-h fs-10"></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#!">Edit</a>
                                    <a class="dropdown-item" href="#!">Activity</a>
                                    <div class="dropdown-divider"></div>
                                    <Link class="dropdown-item text-danger" :href="`/users/`+user.id">
                                        Delete
                                    </Link>
                                </div>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        users: Array
    },
    methods: {
        formatDate(dateString) {
            const date = new Date(dateString);
            return date.toLocaleString();
        }
    }
}
</script>
