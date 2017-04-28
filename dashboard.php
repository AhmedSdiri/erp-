<?php
include('header_dash.php');
//retrieve and calculate data
$mysqli = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME);
$gen_qr = "SELECT * FROM `invoices`;";
$devis_qr = "SELECT * FROM `invoices` WHERE `status` = 'Commande/Devis';";
$fact_qr = "SELECT * FROM `invoices` WHERE `status` = 'Paye';";
$cl_qr = "SELECT * FROM `store_customers`;";
$csf = "SELECT SUM(`total`) as 'total' FROM invoices WHERE `status`='Paye';";
	
$dmdevis = $mysqli->query($gen_qr);
$cmdval = $mysqli->query($fact_qr);
$clnt = $mysqli->query($cl_qr);
$cmdNval = $mysqli->query($devis_qr);
$csff = $mysqli->query($csf);

$ds = $dmdevis->num_rows;
$cval = $cmdval->num_rows;
$clt = $clnt->num_rows;
$cnval = $cmdNval->num_rows;

$prc_cnv1 = ($cval * 100)/$ds;
$prc_ncnv1 = ($cnval * 100)/$ds;
$prc_cnv = number_format($prc_cnv1, 2, ',', '');
$prc_ncnv = number_format($prc_ncnv1, 2, ',', '');
$cash = $csff->fetch_assoc();

//charts and other indicators 
$json_account  = array();
$json_progress = array();

$user_qr = "SELECT `username` FROM `users`;";



?>
<div class="row">
<hr>
	<div class="col-md-3"><h4>Demandes de devis   <span class="label label-success"><?php echo $ds; ?></span></h4></div>
	<div class="col-md-3"><h4>Commandes Validées  <span class="label label-info"><?php echo $cval; ?></span></h4></div>
	<div class="col-md-3"><h4>Clients   <span class="label label-warning"><?php echo $clt; ?></span></h4></div>
	<div class="col-md-3"><h4>Commandes en cours   <span class="label label-danger"><?php echo $cnval; ?></span></h4></div>
<hr>
</div>
<h2 class="text-left">Statistiques, <?php echo COMPANY_NAME ;?></h2>
<br>
<div class="row">

	<div class="col-md-6" id="chartstat">
		<div class="panel panel-default" style="background: #2a2a2a">
			<div class="panel-heading"><h6>commandes/factures validées par compte</h6></div>
  			<div class="panel-body" id="line-holder">
    			<canvas id="line-area"  style="height:40%" />
  			</div>
		</div>
	</div>
	<div class="col-md-6" id="perform">
		<div class="panel panel-default" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Nombres de devis/factures par compte</h6></div>
  			<div class="panel-body" id="canvas-holder">
    			<canvas id="chart-area"  style="height:40%" />
  			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-info" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Total Revenue en (€)</h6></div>
			<div class="panel-body">
    			<h1 class="text-center"><?php echo number_format($cash['total'], 2, ',', '')." (€)";?></h1>
  			</div>
		</div>
	</div>
	<div class="col-md-3">
			<div class="panel panel-info" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Croissance (%)</h6></div>
			<div class="panel-body">
				<h1 class="text-center" style="color: green;">24.97% <span class="glyphicon glyphicon-arrow-up text-center"></span></h1>
  			</div>
		</div>
	</div>	
	<div class="col-md-3">
			<div class="panel panel-info" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Perte (%)</h6></div>
			<div class="panel-body">
    			<h1 class="text-center" style="color: red;">0.81% <span class="glyphicon glyphicon-arrow-down text-center"></span></h1>
  			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-4" >
		<div class="panel panel-success" style="background: #2a2a2a">
			<div class="panel-heading"><h6>% de converstion</h6></div>
  			<div class="panel-body">
    			<h1 class="text-center "style="font-size: 75px;"><?php echo $prc_cnv."%"; ?></h1>
  			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-info" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Temps moyen de convertion</h6></div>
  			<div class="panel-body">
    			<h1 class="text-center "style="font-size: 75px;">15j</h1>
  			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-danger" style="background: #2a2a2a">
			<div class="panel-heading"><h6>Taux d'abstention</h6></div>
  			<div class="panel-body">
				<h1 class="text-center "style=" font-size: 75px;"><?php echo $prc_ncnv."%"; ?></h1>
  			</div>
		</div>
	</div>
</div>
<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "SMP_ADMIN",
                "LTC_ADMIN",
                "AUTRE"
            ]
        },
        options: {
            responsive: true
        }
    };
	
var MONTHS = ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre"];
        var configln = {
            type: 'line',
            data: {
                labels: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet"],
                datasets: [{
                    label: "Converstion",
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor()
                    ],
                    fill: false,
                }, {
                    label: "Clients",
                    fill: false,
                    backgroundColor: window.chartColors.blue,
                    borderColor: window.chartColors.blue,
                    data: [
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor(), 
                        randomScalingFactor()
                    ],
                }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    text:'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
		
		var ctl = document.getElementById("line-area").getContext("2d");
            window.myLine = new Chart(ctl, configln);
    };

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        for (var index = 0; index < config.data.labels.length; ++index) {
            newDataset.data.push(randomScalingFactor());

            var colorName = colorNames[index % colorNames.length];;
            var newColor = window.chartColors[colorName];
            newDataset.backgroundColor.push(newColor);
        }

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    </script>
<?php
include('footer.php');
?>