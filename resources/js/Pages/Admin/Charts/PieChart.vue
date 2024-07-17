<template>
    <Pie
      id="my-chart-id"
      :options="chartOptions"
      :data="chartData"
    />
  </template>

  <script>
  import { Pie } from 'vue-chartjs'
  import { Chart as ChartJS, Title, Tooltip, Legend, ArcElement } from 'chart.js'

  ChartJS.register(Title, Tooltip, Legend, ArcElement)

  export default {
    name: 'PieChart',
    components: { Pie },
    data() {
      return {
        chartData: {
          labels: ['MDA #1', 'MDA #2', 'MDA #3', 'MDA #4', 'MDA #5'],
          datasets: [
            {
              label: 'MDAs',
              backgroundColor: ['#f87979', '#7acbf9', '#f9d879', '#a8e79c', '#b97ec9'],
              data: [78, 63, 56, 36, 24]
            }
          ]
        },
        chartOptions: {
          responsive: true
        }
      }
    }
  }
  </script>
