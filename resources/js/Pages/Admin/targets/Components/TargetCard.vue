<template>
    <div class="col-xl-5 col-xxl-4">
        <div class="sticky-leads-sidebar">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center g-3">
                      <div class="col-12 col-sm-auto flex-1">
                        <h4 class="fw-bolder mb-2 line-clamp-1">Target Details</h4>
                        <div class="d-flex align-items-center mb-4">
                          <small class="mb-0 me-4">{{ target.description }}</small>
                        </div>
                        <div class="d-md-flex d-xl-block align-items-center justify-content-between mb-3">
                            <div>
                                Status:
                                <span class="badge badge-phoenix badge-phoenix-success me-2">
                                    {{ target.status }}
                                </span>
                            </div>
                        </div>
                        <TargetProgressIndicator :percentage="target.progress.progress" />
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0">Scheduled: </p>
                            <div>
                                <CalendarDaysIcon class="d-inline-block lh-sm me-1" style="height:16px;width:16px;" />
                                <span class="d-inline-block lh-sm">{{ target.start_date }}</span>
                                <MinusIcon class="d-inline-block mx-2" style="height:16px;width:16px;" />
                                <CalendarDaysIcon class="d-inline-block lh-sm me-1" style="height:16px;width:16px;" />
                                <span class="d-inline-block lh-sm"> {{ target.due_date }}</span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <AddMilestoneCard :target_id="target.id" /> -->
            </div>
        </div>
</template>
<script>
import AddMilestoneCard from "./AddMilestoneCard.vue";
import { CalendarDaysIcon, MinusIcon } from '@heroicons/vue/24/solid'
import TargetProgressIndicator from "./TargetProgressIndicator.vue";
export default {
    components: {
        AddMilestoneCard, CalendarDaysIcon, MinusIcon, TargetProgressIndicator
    },
    props: {
        target: Object
    }
}
</script>
