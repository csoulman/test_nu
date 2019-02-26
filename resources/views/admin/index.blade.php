@extends('layouts.admin')

@section('content')

    <h1>Today's Meals</h1>

    <br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Meal</th>
            <th>Description</th>
            <th>Total Calories</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Hot Dog</td>
            <td>American Hot Dog with Ketchup</td>
            <td>200</td>
        </tr>
        <tr>
            <td>Pancakes</td>
            <td>Simple pancakes with fruits</td>
            <td>360</td>
        </tr>
        <tr>
            <td>Pepperoni Pizza</td>
            <td>Four pepperoni and cheese pizza</td>
            <td>900</td>
        </tr>
        </tbody>
    </table>

<br>
    <h1>This Week's Progression</h1>

    <canvas id="myChart" width="400" height="400"></canvas>
    <div id="chartjs-radar">
        <canvas id="canvas"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Calories", "Carbs", "Protein", "Sugar", "Fat", "Vitamins"],
                datasets: [{
                    label: 'Progression (%)',
                    data: [2, 5, 2, 3, 1, 4],
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
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });

    </script>




    @stop