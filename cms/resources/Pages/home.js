import Chart from "chart.js/auto";
// pages home.php
(function () {
    const ctx = document.getElementById("myChart");
    new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                "月曜日",
                "火曜日",
                "水曜日",
                "木曜日",
                "金曜日",
                "土曜日",
                "日曜日",
            ],
            datasets: [
                {
                    label: "運動時間",
                    data: [1, 1, 1, 1, 1, 2, 2],
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
})();
