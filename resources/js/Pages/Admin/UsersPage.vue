<template>
    <Head title="Users" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </nav>
        <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <h2 class="mb-0">
                System Users
                <span class="fw-normal text-body-tertiary ms-3">
                    ({{ this.$page.props.users_count }})
                </span>
            </h2>
          </div>
            <div class="col-auto">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#addDealModal">
                    <i class="fa-solid fa-plus me-2"></i>
                    Add new users
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
                  <input v-model="search" class="form-control search-input search" type="search" placeholder="Search users" aria-label="Search" />
                  <span class="fas fa-search search-box-icon"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
        <UsersComponent :users="users.data" />
        <Pagination :links="users.links" />
    </div>
    <AddUser :roles="this.$page.props.roles" :departments="this.$page.props.departments" />
</template>
<script>
    import Layout from "../../Shared/Layout.vue";
    import UsersComponent from "./Users/UsersComponent.vue";
    import AddUser from "./Users/AddUser.vue";
    import Pagination from "./../../Shared/Components/Pagination.vue";
    import { ref, watch } from 'vue';
    import { router } from '@inertiajs/vue3';

    export default {
        layout: Layout,
        components: {
            UsersComponent, Pagination, AddUser
        },
        props: {
            users: Object
        },
        setup() {
            const search = ref('');

            watch(search, (value) => {
                router.get(
                    '/users',
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
