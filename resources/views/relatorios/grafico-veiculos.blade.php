<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico de Veículos por Proprietário</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Gráfico de Veículos por Proprietário</h1>

    <div style="width: 75%; margin: 0 auto;">
        <canvas id="veiculosChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('veiculosChart').getContext('2d');
        var veiculosChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($proprietarios) !!},
                datasets: [{
                    label: 'Número de Veículos',
                    data: {!! json_encode(array_values($veiculosPorProprietario)) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

