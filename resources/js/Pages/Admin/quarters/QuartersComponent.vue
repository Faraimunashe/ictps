<template>
    <div class="table-responsive scrollbar mb-3">
        <table class="table fs-9 mb-0 border-top border-translucent">
            <thead>
                <tr>
                    <th class="sort white-space-nowrap align-middle ps-0">NAME</th>
                    <th class="sort align-middle ps-3" scope="col" >STARTING</th>
                    <th class="sort align-middle ps-3" scope="col" >ENDING</th>
                    <th class="sort align-middle" scope="col" >ACTION</th>
                </tr>
            </thead>
            <tbody class="list" id="project-list-table-body">
                    <tr v-for="quarter in quarters" class="position-static">
                        <td class="align-middle time white-space-nowrap ps-0 projectName py-4">
                            <h4 class="fw-bold fs-8">{{ quarter.name }}</h4>
                        </td>
                        <td class="align-middle white-space-nowrap start ps-3 py-4">
                            <p class="mb-0 fs-9 text-body">{{ quarter.start_date }}</p>
                        </td>
                        <td class="align-middle white-space-nowrap task ps-3 py-4">
                            <p class="fw-bo text-body fs-9 mb-0">{{ quarter.end_date }}</p>
                        </td>
                        <td class="align-middle text-end white-space-nowrap pe-0 action">
                            <div class="row btn-reveal-trigger static">
                                <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0">
                                    <span class="fas fa-edit"></span>
                                </button>
                                <button class="btn btn-phoenix-danger btn-icon me-1 fs-10 text-body px-0">
                                    <span class="fas fa-trash text-danger"></span>
                                </button>
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
        quarters: Array
    }
}
</script>
