<script type="text/javascript">
    // Load the Visualization API and the corechart package.
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(loadAndDrawChart);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function loadAndDrawChart() {
        fetch('includes/StroomVerbruik.json')
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(jsonData => {
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Naam');
                data.addColumn('number', 'Waarde');


                jsonData.forEach(item => {
                    data.addRow([item.datum, item.verbruik]);
                    console.log(`Toegevoegd: ${item.datum} - ${item.verbruik}`);
                });

                var options = {
                    'title': 'Stroomverbruik per dag'
                };
                var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            })
            .catch(error => console.error('Fout bij laden data:', error));
    }
</script>

<div id="chart_div"></div>