<template>
    <Head title="Show Target" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Target</a></li>
                <li class="breadcrumb-item active">Show</li>
            </ol>
        </nav>
        <div class="pb-9">
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-12 col-md-auto">
                    <h2 class="mb-0">{{ target.name }}</h2>
                </div>
                <div class="col-12 col-md-auto d-flex">
                    <Link :href="`/target/progress/${target.id}`" class="btn btn-phoenix-secondary px-3 px-sm-5 me-2">
                        <ArrowPathIcon class="me-sm-2" style="height:16px;width:16px;" />
                        <span class="d-none d-sm-inline">Update Progress</span>
                    </Link>
                    <button class="btn btn-phoenix-secondary px-3 px-sm-5 me-2">
                        <PencilSquareIcon class="me-sm-2" style="height:16px;width:16px;" />
                        <span class="d-none d-sm-inline">Edit</span>
                    </button>
                    <button class="btn btn-phoenix-danger me-2">
                        <TrashIcon class="me-2" style="height:16px;width:16px;"/>
                        <span>Delete Target</span>
                    </button>
                </div>
            </div>
          <div class="row g-4 g-xl-6">
            <TargetCard :target="target" />
            <OverviewPanel :milestones="target.milestones" :target="target" />
          </div>
        </div>
    </div>
</template>


<script>
    import Layout from "../../../Shared/Layout.vue";
    import TargetCard from "./Components/TargetCard.vue";
    import OverviewPanel from "./Components/OverviewPanel.vue";
    import { PencilSquareIcon, TrashIcon, ArrowPathIcon } from '@heroicons/vue/24/solid';

    export default {
        layout: Layout,
        components: {
            TargetCard, OverviewPanel, PencilSquareIcon, TrashIcon, ArrowPathIcon
        },
        props: {
            target: Object
        }
    }
</script>

