<template>
    <div class="col-xl-7 col-xxl-8">
        <OverviewCard :target="target" />
        <TabLinks />
        <div class="tab-content" id="myTabContent">
            <!-- <MilestoneTab :milestones="milestones" /> -->
            <FinancialTab />
            <AttachmentTab :target="target" />
        </div>
    </div>
</template>

<script>
    import OverviewCard from "./OverviewCard.vue";
    import MilestoneTab from "./MilestoneTab.vue";
    import FinancialTab from "./FinancialTab.vue";
    import AttachmentTab from "./AttachmentTab.vue";
    import TabLinks from "./TabLinks.vue";
    export default {
        components: {
            OverviewCard, MilestoneTab, FinancialTab, AttachmentTab, TabLinks
        },
        props: {
            milestones: Object,
            target: Object
        }
    }
</script>
