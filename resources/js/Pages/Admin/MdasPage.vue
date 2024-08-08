<template>
    <Head title="Mdas" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">MDAs</li>
            </ol>
        </nav>
        <div class="row gx-6 gy-3 mb-4 align-items-center">
            <div class="col-auto">
                <h2 class="mb-0">
                    Active MDAs
                    <span class="fw-normal text-body-tertiary ms-3">
                        ({{ this.$page.props.mdas_count }})
                    </span>
                </h2>
            </div>
        </div>
        <div class="row justify-content-between align-items-end mb-4 g-3">
          <div class="col-12 col-sm-auto">
          </div>
          <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
              <div class="search-box me-3">
                <form class="position-relative">
                  <input v-model="search" class="form-control search-input search" type="search" placeholder="Search MDAs" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
        <MdasComponent :mdas="mdas.data" />
        <Pagination :links="mdas.links" />
    </div>
    <!-- <AddUser :roles="this.$page.props.roles" :departments="this.$page.props.departments" /> -->
</template>
<script>
    import Layout from "../../Shared/Layout.vue";
    import MdasComponent from "./mdas/MdasComponent.vue";
    import Pagination from "./../../Shared/Components/Pagination.vue";
    import { ref, watch } from 'vue';
    import { router } from '@inertiajs/vue3';

    export default {
        layout: Layout,
        components: {
            MdasComponent, Pagination
        },
        props: {
            mdas: Object
        },
        setup() {
            const search = ref('');

            watch(search, (value) => {
                router.get(
                    '/mdas',
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
