<template>
    <Head title="My Targets" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item active">Targets</li>
            </ol>
        </nav>
        <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <h2 class="mb-0">My Targets<span class="fw-normal text-body-tertiary ms-3">({{ this.$page.props.targets_count }})</span></h2>
          </div>
            <div class="col-auto">
                <Link class="btn btn-primary px-5" href="/targets/create">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add new target
                </Link>
            </div>
        </div>
        <div class="row justify-content-between align-items-end mb-4 g-3">
          <div class="col-12 col-sm-auto">
            <!-- <ul class="nav nav-links mx-n2">
              <li class="nav-item"><a class="nav-link px-2 py-1 active" aria-current="page" href="#"><span>All</span><span class="text-body-tertiary fw-semibold">(32)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Ongoing</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Cancelled</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Finished</span><span class="text-body-tertiary fw-semibold">(14)</span></a></li>
              <li class="nav-item"><a class="nav-link px-2 py-1" href="#"><span>Postponed</span><span class="text-body-tertiary fw-semibold">(2)</span></a></li>
            </ul> -->
          </div>
          <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
              <div class="search-box me-3">
                <form class="position-relative">
                  <input v-model="search" class="form-control search-input search" type="search" placeholder="Search targets" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div v-if="this.$page.props.targets_count === 0" class="row row-cols-1 row-cols-sm-12 g-3 mb-5">
            <div class="border-top border-bottom border-translucent" id="leadDetailsTable" data-list='{"valueNames":["name","description","create_date","create_by","last_activity"],"page":5,"pagination":true}'>
                <p class="text-sm my-2 text-danger text-center">No targets found!</p>
            </div>
        </div>
        <TargetsComponent v-if="this.$page.props.targets_count !== 0" :targets="targets" />
        <Pagination v-if="this.$page.props.targets_count !== 0" :links="targets.links" />
    </div>
</template>
<script>
import Layout from "../../Shared/Layout.vue";
import TargetsComponent from "./Target/TargetsComponent.vue";
import Pagination from "../../Shared/Components/Pagination.vue";
import { ref, watch } from 'vue';
import { router } from '@inertiajs/vue3'

export default {
    layout: Layout,
    components: {
        TargetsComponent, Pagination
    },
    props: {
        targets: Object
    },
    setup() {
        const search = ref('');

        watch(search, (value) => {
            router.get(
                '/targets',
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

