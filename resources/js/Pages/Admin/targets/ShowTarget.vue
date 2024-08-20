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
        <div class="pb-9" id="print-section">
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-12 col-md-auto">
                    <h2 class="mb-0">{{ target.name }}</h2>
                </div>
                <div class="col-12 col-md-auto d-flex">
                    <button @click="printPDF" class="btn btn-phoenix-secondary px-3 px-sm-5 me-2">
                        <DocumentIcon class="me-sm-2" style="height:16px;width:16px;" />
                        <span class="d-none d-sm-inline">Export PDF</span>
                    </button>
                    <button class="btn btn-phoenix-success me-2">
                        <TableCellsIcon class="me-2" style="height:16px;width:16px;"/>
                        <span>Export Excel</span>
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
    import { PencilSquareIcon, TableCellsIcon, ArrowPathIcon, DocumentIcon } from '@heroicons/vue/24/solid';
    import html2pdf from 'html2pdf.js';

    export default {
        layout: Layout,
        components: {
            TargetCard, OverviewPanel, PencilSquareIcon, TableCellsIcon, DocumentIcon
        },
        props: {
            target: Object
        },
        methods: {
            printPDF() {
                const element = document.getElementById('print-section');
                const opt = {
                    margin:       1,
                    filename:     'exported.pdf',
                    image:        { type: 'jpeg', quality: 0.98 },
                    html2canvas:  { scale: 2 },
                    jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
                };

                html2pdf().from(element).set(opt).save();
            }
        }
    }
</script>

