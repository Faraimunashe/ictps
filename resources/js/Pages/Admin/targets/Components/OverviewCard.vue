<template>
<div class="card mb-5">
                <div class="card-body">
                  <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                    <div class="col-sm-auto">
                      <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                        <div class="d-flex bg-success-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <CurrencyDollarIcon class="text-success-dark" data-feather="dollar-sign" style="width:24px; height:24px" />
                        </div>
                        <div>
                          <p class="fw-bold mb-1">Budget</p>
                          <h4 class="fw-bolder text-nowrap">$0</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto">
                      <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <BookmarkSquareIcon class="text-info-dark" style="width:24px; height:24px" />
                        </div>
                        <div>
                          <p class="fw-bold mb-1">Progress</p>
                          <h4 class="fw-bolder text-nowrap">{{ target.progress.progress }}%</h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-auto">
                      <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                        <div class="d-flex bg-primary-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px">
                            <PaperClipIcon class="text-primary-dark" style="width:24px; height:24px" />
                        </div>
                        <div>
                          <p class="fw-bold mb-1">Attachments</p>
                          <h4 class="fw-bolder text-nowrap">{{ target.attachments_count }}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</template>

<script>
import { BookmarkSquareIcon, CheckCircleIcon, CurrencyDollarIcon, PaperClipIcon } from '@heroicons/vue/24/solid';

export default {
    components: {
        CurrencyDollarIcon, BookmarkSquareIcon, CheckCircleIcon, PaperClipIcon
    },
    props: {
        target: Object,
    }
}
</script>
