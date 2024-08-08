<template>
    <Head title="Dashboard" />
    <div class="content">
        <PageTitle :current_quarter="current_quarter" />
        <CounterIconsRow :icon_data="icon_data"/>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis pt-7 pb-3 border-y">
          <div class="row">
            <MdaTargetsCount :departments="departments" :total_department_targets="total_department_targets" />
            <div class="col-md-6">
              <PieChart />
            </div>
          </div>
        </div>
    </div>
</template>

<script>
import Layout from "../../Shared/Layout.vue";
import BarChart from "./Charts/BarChart.vue";
import PieChart from "./Charts/PieChart.vue";
import PageTitle from "./dashboard/PageTitle.vue";
import CounterIconsRow from "./dashboard/CounterIconsRow.vue";
import MdaTargetsCount from "./dashboard/MdaTargetsCount.vue";

export default {
    layout: Layout,
    components: {
        BarChart,
        PieChart,
        PageTitle, CounterIconsRow, MdaTargetsCount
    },
    props: {
        current_quarter: Object,
        icon_data: Object,
        departments: Array,
        total_department_targets: String
    }
}
</script>
