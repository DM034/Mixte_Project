<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo base_url("assets/js/chart.umd.js"); ?>"></script>
    <title>Document</title>
</head>

<body>

    <style>
        #chart1 {
            width: 350px;
            height: 350px;
        }

        #chart2 {
            margin-top: 30px;
            width: 350px;
            height: 350px;
        }
    </style>

    <h3>Tableau de bord</h3>
    <div id="chart1">
        <canvas id="myChart"></canvas>
    </div>
    <div id="chart2">
        <canvas id="myChart2"></canvas>
    </div>
    <script>
       
        var ctx2 = document.getElementById('myChart2');

        const data2 = {
            labels: [<?php echo $date; ?>],
            datasets: [{
                label: 'My First Dataset',
                data: [<?php echo $montant; ?>],
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

        var options2 = {
            title: {
                display: true,
                text: 'test'
            }
        };


        var myChart2 = new Chart(ctx2, {
            type: 'line',
            data: data2,
            options: options2
        });
    </script>
</body>

</html>