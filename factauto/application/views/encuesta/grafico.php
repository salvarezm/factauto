<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>


<h2>Detalle de respuestas<h2>

<div style="display: block; height: 400px; width: 400px;">
    <canvas id="myChart" width="200" height="200" ></canvas>
</div>

<script>
var ctx = document.getElementById('myChart').getContext('2d');

data = {
    datasets: [{
        data: [10, 20, 30],
        backgroundColor: [
                "#FF6384",
                "#63FF84",
                "#84FF63",
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'SI',
        'NO',
        'Mas o menos'
    ]
};

var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: data
});
</script>

