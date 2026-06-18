<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });

    google.charts.setOnLoadCallback(loadAndDrawChart);

    function loadAndDrawChart() {
        fetch('includes/gemTemp.json')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(jsonData => {

                var data = new google.visualization.DataTable();

                data.addColumn('string', 'Maand');
                data.addColumn('number', 'Binnen temperatuur (°C)');
                data.addColumn('number', 'Buiten temperatuur (°C)');

                jsonData.forEach(item => {
                    data.addRow([
                        item.maand,
                        item.binnen,
                        item.buiten
                    ]);

                    console.log(`Toegevoegd: ${item.maand} - binnen: ${item.binnen}, buiten: ${item.buiten}`);
                });

                var options = {
                    title: 'Gemiddelde binnen en buiten temperatuur per jaar',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div4'));
                chart.draw(data, options);
            })
            .catch(error => console.error('Fout bij laden data:', error));
    }
</script>

<div id="chart_div4"></div>