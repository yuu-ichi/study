import Chart from "chart.js/auto";
import { addMonths, getMonth } from "date-fns";

// pages home.php
const pieData = {
    labels: ["プログラミング", "ライフスタイル", "雑談", "運動"],
    datasets: [
        {
            label: "項目別投稿数",
            data: [1, 1, 1, 1],
            backgroundColor: [
                "rgb(255, 99, 132)",
                "rgb(54, 162, 235)",
                "rgb(255, 205, 86)",
                "rgb(86, 255, 97)",
            ],
            hoverOffset: 4,
        },
    ],
};

function cartPie() {
    const ctx = document.getElementById("chart-pie");
    new Chart(ctx, {
        type: "doughnut",
        data: pieData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                title: {
                    display: true,
                    text: "投稿した数",
                },
            },
        },
    });
}

function cartLineGraph() {
    let lineGraphDataLabels = [];
    const baseDate = new Date(2024, 7, 1, 0, 0, 0);

    for (let i = 0; i < 12; i++) {
        const date = addMonths(baseDate, i);
        const month = getMonth(date) + 1;
        lineGraphDataLabels.push(month + "月");
    }

    const lineGraphData = {
        labels: lineGraphDataLabels,
        datasets: [
            {
                label: "my posts",
                data: {
                    "8月": 0,
                    "9月": 0,
                    "10月": 0,
                    "11月": 0,
                    "12月": 0,
                    "1月": 0,
                    "2月": 0,
                    "3月": 0,
                    "4月": 0,
                    "5月": 0,
                    "6月": 0,
                    "7月": 0,
                },
                borderColor: "rgba(202, 184, 217, 1.0)",
                fill: false,
            },
        ],
    };

    const ctx = document.getElementById("chart-line-graph");
    new Chart(ctx, {
        type: "line",
        data: lineGraphData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "center",
                },
                title: {
                    display: true,
                    text: "投稿の推移",
                },
            },
        },
        scales: {
            y: {
                max: 15,
                min: 0,
                ticks: {
                    stepSize: 1,
                },
            },
        },
    });
}

(function () {
    cartPie();
    cartLineGraph();
})();
