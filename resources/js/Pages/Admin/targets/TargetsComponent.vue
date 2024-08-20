<template>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3 mb-5">
        <div v-for="target in targets.data" :key="target.id" class="col">
            <div class="card h-100 hover-actions-trigger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h4 class="mb-2 line-clamp-1 lh-sm flex-1">{{ target.name }}</h4>
                        <div class="hover-actions top-0 end-0 mt-4 me-4">
                            <Link :href="'/active-quarter-targets/' + target.id" class="btn btn-primary btn-icon flex-shrink-0" >
                                <span class="fa-solid fa-chevron-right"></span>
                            </Link>
                        </div>
                    </div>
                    <p><small>{{ target.description.substring(0, 70)+"..." }}</small></p>
                    <div class="d-flex align-items-center mb-2 border-bottom border-translucent">
                        <UserIcon class="me-2 text-body-tertiary" style="width:16px; height:14px" />
                        <p class="fw-semibold fs-9 mb-0 text-body-tertiary">{{ target.mda.title }} {{ target.mda.firstnames }} {{ target.mda.surname }}</p>
                    </div>
                    <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                        <p class="mb-2"> {{ target.status }}</p>
                        <p class="mb-2 text-body-emphasis">{{ target.progress.progress }}%</p>
                    </div>
                    <TargetProgressIndicator :percentage="target.progress.progress" />
                    <div class="d-flex align-items-center mt-4">
                        <p class="mb-0 fw-bold fs-9">Started :
                            <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1">
                                {{ target.start_date }}
                            </span>
                        </p>
                    </div>
                    <div class="d-flex align-items-center mt-2">
                        <p class="mb-0 fw-bold fs-9">Deadline :
                            <span class="fw-semibold text-body-tertiary text-opactity-85 ms-1">
                                {{ target.due_date }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import TargetProgressIndicator from "./Components/TargetProgressIndicator.vue";
import { UserIcon } from '@heroicons/vue/24/solid';
export default {
    props: {
        targets: Object
    },
    components: {
        TargetProgressIndicator, UserIcon
    }
}
</script>
