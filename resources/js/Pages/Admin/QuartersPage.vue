<template>
    <Head title="Quarters" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Quarters</li>
            </ol>
        </nav>
        <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <h2 class="mb-0">
                Quarters
            </h2>
          </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#addQuarterModal">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add new quarter
                </button>
            </div>
        </div>
        <div class="row justify-content-between align-items-end mb-4 g-3">
          <div class="col-12 col-sm-auto">
          </div>
          <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
              <div class="search-box me-3">
                <form class="position-relative">
                  <input v-model="search" class="form-control search-input search" type="search" placeholder="Search quarters" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
        <QuartersComponent :quarters="quarters.data" />
        <Pagination :links="quarters.links" />
    </div>
    <AddQuarter />
</template>
<script>
    import Layout from "../../Shared/Layout.vue";
    import QuartersComponent from "./quarters/QuartersComponent.vue";
    import AddQuarter from "./quarters/AddQuarter.vue";
    import Pagination from "./../../Shared/Components/Pagination.vue";
    import { ref, watch } from 'vue';
    import { router } from '@inertiajs/vue3';

    export default {
        layout: Layout,
        components: {
            QuartersComponent, Pagination, AddQuarter
        },
        props: {
            quarters: Object
        },
        setup() {
            const search = ref('');

            watch(search, (value) => {
                router.get(
                    '/quarters',
                    {search: value},
                    {
                        preserveState: true,
                        preserveScroll: true,
                        replace: true
                    }
                )

            });

            return {
                search,
            };
        },
    }
</script>
