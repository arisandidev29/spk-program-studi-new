import { Chart } from "chart.js/auto";

const PresentaseNilaiVekor = document.querySelector("#nilaiVektor");
const ChartData = JSON.parse(PresentaseNilaiVekor.dataset.chartData);

const labels = ChartData.map((data) => data.alternative);
const datas = ChartData.map((data) => data.vektor_v);

new Chart(PresentaseNilaiVekor, {
    type: "bar",
    data: {
        labels: labels,
            datasets: [
                {
                    label: "nilai vektor", 
                    data: datas,
                    backgroundColor: [
                        "#40A578",
                        "#FCDC2A",
                        "#3271a8",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(201, 203, 207, 0.2)",
                    ],
                },
            ],
    },
});
