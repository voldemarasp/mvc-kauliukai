
var ctx = document.getElementById("myChart").getContext('2d');
var mixedChart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

    // Configuration options go here
    options: {}
});

//gauname duomenis chartui
$.getJSON("http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/Dice/visi", function(result) {

    $.each(result, function(i, field) {
    
    var aidy = field.id;
    var rezas = field.sukimas;
    
    addData(mixedChart, aidy, rezas);

    });
});

var ctx = document.getElementById("myChart2").getContext('2d');
var mixedChart2 = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: "",
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [],
        }]
    },

    // Configuration options go here
    options: {}
});

//gauname duomenis chartui
$.getJSON("http://localhost/Projektas/Objektinis%20MVC/MVC-Game-master/Dice/visi", function(result) {

    $.each(result, function(i, field) {
    
    var aidy = field.id;
    var rezas = field.rezultatas;
    
    addData(mixedChart2, aidy, rezas);

    });
});

function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}