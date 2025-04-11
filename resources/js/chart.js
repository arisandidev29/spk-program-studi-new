import { Chart } from "chart.js/auto";

const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];


const userRegistration = document.getElementById('UserRegistration');
const UserRegistrationData= JSON.parse(userRegistration.dataset.userRegistrationData);

const UserRegistrationChartData = labels.map((item,index) => {
    const data = UserRegistrationData.find((data) => data.bulan === index + 1);
    return data ? data.jumlah : 0;
});


// const userRegistrationData = UserRegistrationData.map(data => )

new Chart(userRegistration, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: "User Registration 2025",
            data: UserRegistrationChartData,
            borderWidth: 1,
            backgroundColor: '#40A578',
        }]
    },
    options: {
        responsive : true,
        maintainAspectRatio: false,
        aspectRatio: 1,
        plugins: {
            tooltip: 'true'
        },
    },

});


const TotalUserChart = document.querySelector('#TotalUserChart');
const distribution = JSON.parse(TotalUserChart.dataset.userDistribution);

const labelUserChart = distribution.map((data) => data.programStudi);
const dataUserChart = distribution.map((data) => data.total);

new Chart(TotalUserChart, {
    type: 'pie',
    data: {
        labels: labelUserChart
        ,
        datasets: [{
            label: 'Jumlah Mahasiswa',
            data: dataUserChart,
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


