<template>
    <Head title="Update Target Progress" />
    <div class="content">
        <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Home</a></li>
                <li class="breadcrumb-item"><a href="#!">Target</a></li>
                <li class="breadcrumb-item active">Update Progress</li>
            </ol>
        </nav>
        <div class="pb-9">
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-12 col-md-auto">
                    <h2 class="mb-0">{{ target.name }}</h2>
                </div>
            </div>
          <div class="row g-4 g-xl-6">
            <TargetCard :target="target" />
            <UpdateProgress :target_id="target.id" :progress_min="target.progress.progress" />
          </div>
        </div>
    </div>
</template>


<script>
    import Layout from "../../../Shared/Layout.vue";
    import TargetCard from "./Components/TargetCard.vue";
    import OverviewPanel from "./Components/OverviewPanel.vue";
    import UpdateProgress from "./Components/UpdateProgress.vue";
    import { PencilSquareIcon, TrashIcon, ArrowPathIcon } from '@heroicons/vue/24/solid';

    export default {
        layout: Layout,
        components: {
            TargetCard, OverviewPanel, PencilSquareIcon, TrashIcon, ArrowPathIcon, UpdateProgress
        },
        props: {
            target: Object
        }
    }
</script>


