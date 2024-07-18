<x-app-layout>


    <div class="row m-5 p-5 justify-content-center align-middle">
        <div class="col-md-8 col-12">
            <div class="card bg-dark text-center fw-bold text-danger fs-2">
                <div class="card-header">
                    <h2 class="card-title">Printer statisztika</h2>
                </div>
                <div class="card-body text-secondary d-flex align-items-center justify-content-center">
                    <canvas class="align-middle" id="printerChart" style="height: 200px"></canvas>
                </div>
            </div>
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('printerChart').getContext('2d');

            var temp = <?php echo json_encode($compressed_data); ?>;



            var combinedLabels = temp.months.map((month, index) => `In ${month}  (${temp.brands[index]})`);

            var data = {
                labels: combinedLabels,
                datasets: [{
                        label: 'Toner Type',
                        data: temp.toners,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Drum Unit Type',
                        data: temp.drumUnits,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }
                ]
            };

            var config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true, // Ensures the chart responds to window resizing
                    maintainAspectRatio: false, // Allows the chart to resize freely
                    plugins: {
                        legend: {
                            position: 'top'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };
            var chart = new Chart(ctx, config);
        });
    </script>



</x-app-layout>
