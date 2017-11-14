
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
$.getJSON("pigu.lt", function(result) {

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
$.getJSON("pigu.lt", function(result) {

    $.each(result, function(i, field) {
    
    var aidy = field.id;
    var rezas = field.rezultatas;
    
    addData(mixedChart2, aidy, rezas);

    });
});