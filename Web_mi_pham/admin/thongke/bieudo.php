<div class="row boxphai margin-b">
    <div id="piechart"></div>

    <script src="https://www.gstatic.com/charts/loader.js"></script>
<body>
<div id="myChart" style="width:100%; max-width:600px; height:500px;"></div>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php
            $tongdm = count($bieudo);
            $i = 1;
            foreach ($bieudo as $tk) {
                extract($tk);
                if ($i==$tongdm)
                    $dauphay = "";
                else
                    $dauphay = ",";
                echo "['".$tk['tendm']."', ".$tk['countsp']. "]" .$dauphay;
                $i+= 1;
            }
            ?>
        ]);

// Set Options
const options = {
  title: 'Thống kê sản phẩm theo danh mục',
  hAxis: {title: 'Square Meters'},
  vAxis: {title: 'Price in Millions'},
  legend: 'none'
};

// Draw
const chart = new google.visualization.LineChart(document.getElementById('myChart'));
chart.draw(data, options);

}
</script>

</div>