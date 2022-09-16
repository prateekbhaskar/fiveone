function hidemessage() {
    var x = document.getElementsByClassName('message')[0];
    if (x != null) {
        x.style.display = 'none';
    }
}
setTimeout(hidemessage, 1000);




const labels =['Jan','Feb','Mar','Apr','May','Jun','July'];
const data = {
  labels: labels,
  datasets: [{
    label: 'Sample Data for Charts',
    data: [65, 59, 80, 81, 56, 55, 40],
    backgroundColor: [
      'rgba(255, 99, 132, 0.2)',
      'rgba(255, 159, 64, 0.2)',
      'rgba(255, 205, 86, 0.2)',
      'rgba(75, 192, 192, 0.2)',
      'rgba(54, 162, 235, 0.2)',
      'rgba(153, 102, 255, 0.2)',
      'rgba(201, 203, 207, 0.2)'
    ],
    borderColor: [
      'rgb(255, 99, 132)',
      'rgb(255, 159, 64)',
      'rgb(255, 205, 86)',
      'rgb(75, 192, 192)',
      'rgb(54, 162, 235)',
      'rgb(153, 102, 255)',
      'rgb(201, 203, 207)'
    ],
    borderWidth: 1
  }]
};
const configforBar = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };
const configforPie = {
    type: 'pie',
    data: data,
    options: {}
};
const myBarChart = new Chart(
    document.getElementById('BarChart'),
    configforBar
);

const myPieChart = new Chart(
    document.getElementById('PieChart'),
    configforPie
);
