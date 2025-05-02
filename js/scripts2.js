// ---------- CHARTS ----------

// BAR CHART
const barChartOptions = {
    series: [
        {
            data: top_product_values,
        },
    ],
    chart: {
        type: 'bar',
        height: 350,
        toolbar: {
            show: false,
        },
    },
    colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
    plotOptions: {
        bar: {
            distributed: true,
            borderRadius: 4,
            horizontal: false,
            columnWidth: '40%',
        },
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    xaxis: {
        categories: top_product_labels,
    },
    yaxis: {
        title: {
            text: 'Quantity',
        },
    },
};

const barChart = new ApexCharts(
        document.querySelector('#bar-chart'),
        barChartOptions
        );
barChart.render();