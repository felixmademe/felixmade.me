var ctx = document.getElementById("skillsChart").getContext('2d');
var skillsChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["HTML", "CSS", "JavaScript", "Dancing", "PHP", "SQL"],
        datasets: [{
            data: [90, 80, 65, 10, 55, 50],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        tooltips: {
            callbacks: {
                label: function ( tooltipItem, data ) {
                    return tooltipItem.yLabel + '%';
                }
            }
        },
        legend: {
            display: false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 100
                },
                gridLines: {
                    display: false,
                }
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }]
        }
    }
});
