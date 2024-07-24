<template>
    <ul class="nav nav-underline fs-9 deal-details scrollbar flex-nowrap w-100 pb-1 mb-6" id="myTab" role="tablist" style="overflow-y: hidden;">
        <li class="nav-item text-nowrap me-2" role="presentation">
            <a class="nav-link active" id="task-tab" data-bs-toggle="tab" href="#tab-milestone" role="tab" aria-controls="tab-task" aria-selected="true">
                <BookmarkSquareIcon class="me-2 tab-icon-color" style="width:24px; height:24px" />
                Milestones
            </a>
        </li>
        <li class="nav-item text-nowrap me-2" role="presentation">
            <a class="nav-link" id="call-tab" data-bs-toggle="tab" href="#tab-financial" role="tab" aria-controls="tab-call" aria-selected="true">
                <CurrencyDollarIcon class="me-2 tab-icon-color" style="width:24px; height:24px" />
                Financials
            </a>
        </li>
        <li class="nav-item text-nowrap me-2" role="presentation">
            <a class="nav-link" id="attachments-tab" data-bs-toggle="tab" href="#tab-attachment" role="tab" aria-controls="tab-attachments" aria-selected="true">
                <PaperClipIcon class="me-2 tab-icon-color" style="width:24px; height:24px" />
                Attachments
            </a>
        </li>
    </ul>
</template>

<script>
import { BookmarkSquareIcon, CurrencyDollarIcon, PaperClipIcon } from '@heroicons/vue/24/solid';
export default {
    components: {
        BookmarkSquareIcon, CurrencyDollarIcon, PaperClipIcon
    }
}
</script>
