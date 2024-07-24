<template>
    <div class="tab-pane fade active show" id="tab-milestone" role="tabpanel" aria-labelledby="task-tab">
        <div class="row align-items-center g-0 justify-content-start mb-3">
            <div class="col-12 col-sm-auto">
                <div class="search-box w-100 mb-2 mb-sm-0" style="max-width:30rem;">
                    <form class="position-relative">
                        <input class="form-control search-input search" type="search" placeholder="Search milestone" aria-label="Search" />
                        <MagnifyingGlassIcon class="search-box-icon" style="width:16px; height:16px"/>
                    </form>
                </div>
            </div>
        </div>
        <div v-for="milestone in milestones" :key="milestone.id" class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-translucent py-3 gx-0 border-top">
            <div class="col-12 col-lg-auto flex-1">
                <div>
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <CursorArrowRaysIcon class="flex-shrink-0 mt-0 me-2" style="width:13px; height:13px" />
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0">{{ milestone.name }}</label>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-auto">
                <div class="d-flex ms-4 lh-1 align-items-center">
                    <p class="text-body-tertiary fs-10 mb-md-0 me-2 me-lg-3 mb-0">Ending</p>
                    <div class="d-none d-lg-block end-0 position-absolute" style="top: 23%;">
                        <div class="hover-actions end-0">
                            <button class="btn btn-phoenix-secondary btn-icon me-1 fs-10 text-body px-0 me-1">
                                <EyeIcon style="width:11px; height:11px"/>
                            </button>
                            <button class="btn btn-phoenix-secondary btn-icon fs-10 text-danger px-0">
                                <TrashIcon style="width:11px; height:11px"/>
                            </button>
                        </div>
                    </div>
                    <div class="hover-lg-hide">
                        <p class="text-body-tertiary fs-10 ps-lg-3 border-start-lg fw-bold mb-md-0 mb-0">{{ milestone.due_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { CursorArrowRaysIcon, EyeIcon, MagnifyingGlassIcon, PencilSquareIcon, TrashIcon } from '@heroicons/vue/24/solid';
export default {
    components: {
        MagnifyingGlassIcon, TrashIcon, PencilSquareIcon, CursorArrowRaysIcon, EyeIcon
    },
    props: {
        milestones: Object
    }
}
</script>
