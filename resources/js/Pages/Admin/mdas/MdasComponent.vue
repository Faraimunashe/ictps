<template>
    <div class="table-responsive scrollbar mb-3">
        <table class="table fs-9 mb-0 border-top border-translucent">
            <thead>
                <tr>
                    <th class="sort white-space-nowrap align-middle ps-0">FULLNAME</th>
                    <th class="sort align-middle ps-3" scope="col" >DEPARTMENT</th>
                    <th class="sort align-middle ps-3" scope="col" >TARGETS</th>
                    <th class="sort align-middle text-end" scope="col" >ACTION</th>
                </tr>
            </thead>
            <tbody class="list" id="project-list-table-body">
                    <tr v-for="mda in mdas" class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0">
                            <a class="fw-bold fs-8" href="#">{{ mda.title }} {{ mda.firstnames }} {{ mda.surname }}</a>
                        </td>
                        <td class="align-middle white-space-nowrap task ps-3 py-4">
                            <p class="fw-bo text-body fs-9 mb-0">{{ mda.department.name }}</p>
                        </td>
                        <td class="align-middle white-space-nowrap task ps-3 py-4">
                            <p class="fw-bo text-body fs-9 mb-0">{{ mda.targets_count }}</p>
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
                                    <Link class="dropdown-item">
                                        Targets
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
        mdas: Array
    }
}
</script>
