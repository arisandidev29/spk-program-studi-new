import { Chart } from "chart.js/auto";

const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];


const userRegistration = document.getElementById('myChart');

new Chart(userRegistration, {
    type: 'bar',
    data: {
        labels: labels,
        // labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: "User Registration 2025",
            data: [12, 19, 3, 5, 2],
            borderWidth: 1,
            backgroundColor: '#40A578',
        }]
    },
    options: {
        plugins: {
            tooltip: 'true'
        }
    },

});


const TotalUserChart = document.querySelector('#TotalUserChart');

new Chart(TotalUserChart, {
    type: 'pie',
    data: {
        labels: [
            'Sistem Informasi',
            'Komputer Akuntansi',
            'Manajement Informatika'
        ],
        datasets: [{
            label: 'Jumlah Mahasiswa',
            data: [300, 50, 100],
            backgroundColor: [
                '#40A578',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
}
);