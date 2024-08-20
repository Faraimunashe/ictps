<template>
    <div class="tab-pane fade active show" id="tab-attachment" role="tabpanel" aria-labelledby="attachments-tab">
        <div v-for="attachment in target.attachments" :key="attachment.id" class="border-top border-dashed py-4">
            <div class="d-flex flex-between-center">
                <div>
                    <div class="d-flex align-items-center mb-1"><span class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                        <p class="text-body-highlight mb-0 lh-1">#progress {{ attachment.progress }}%</p>
                    </div>
                    <p class="fs-9 text-body-tertiary mb-0">
                        <CombinedAttachmentSize :attachment="attachment" />
                        <span class="text-body-quaternary mx-1">|</span>
                        <a href="#!">me </a>
                        <span class="text-body-quaternary mx-1">| </span>
                        <span class="text-nowrap">{{ formatRelativeTime(attachment.created_at) }}</span>
                    </p>
                </div>
                <div class="btn-reveal-trigger">
                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                        <span class="fas fa-ellipsis-h"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end py-2">
                        <a class="dropdown-item" href="#!">Edit</a>
                        <a class="dropdown-item text-danger" href="#!">Delete</a>
                        <a class="dropdown-item" href="#!">Download</a>
                        <a class="dropdown-item" href="#!">Report abuse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import { formatDistanceToNow } from 'date-fns';
    import CombinedAttachmentSize from "./CombinedAttachmentSize.vue";

    export default {
        components: {
            CombinedAttachmentSize
        },
        props: {
            target: Object
        },
        methods: {
            formatRelativeTime(dateString) {
                const date = new Date(dateString)
                return formatDistanceToNow(date, { addSuffix: true })
            }
        }
    }
</script>
