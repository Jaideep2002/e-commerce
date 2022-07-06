<?php
$servername = "127.0.0.1";
$database = "admin";
$username = "root";
$password = '';
$con = new mysqli($servername, $username, $password, $database);

// foreach ($query as $key => $data) {
// $category[]=$data['Categories'];
// $quantity[]=$data['Quantities'];
// }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>Getting Started with Chart JS with www.chartjs3.com</title> --}}
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(255, 26, 104, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(255, 26, 104, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 1100px;
        height: 580px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(255, 26, 104, 1);
        background: white;
      }
    </style>
  </head>
  <body>
    {{-- <div class="chartMenu">
      {{-- <p>WWW.CHARTJS3.COM (Chart JS 3.8.0)</p>
    </div> --}}
    <div >
        
      <div class="chartBox">
          <input type="date" onchange="startDateFilter(this)"  >
          <input type="date" onchange="endDateFilter(this)" >
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <?php
    $query= $con -> query("
    SELECT Order_Date as date, count(sales) as sale from sales
    group by date ");
    
    foreach ($query as $key => $data){
            $dateArray[]=$data['date'];
            $salesArray[]=$data['sale'];
        }
        unset($result);
    ?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

    <script>
        const dateArrayJs=<?php echo json_encode($dateArray);?>;
        // console.log(dateArrayJs)
        const dateChartJs=dateArrayJs.map((day,index)=>{
            let dayjs=new Date(day);
            // console.log(dayjs)
            return dayjs.setHours(0,0,0,0);
        })
        // console.log(dateChartJs)
    // setup 
    const data = {
      labels: dateChartJs,
      datasets: [{
        label: 'Number Of Orders',
        data: <?php echo json_encode($salesArray)?>,
        backgroundColor: [
          'rgba(255, 0,0)',
        ],
        borderColor: [
          'rgba(255, 0,0)',
        ],
        borderWidth: 1
      }]
    };

    // config 
    const config = {
      type: 'bar',
      data,
      options: {
          autoSkip:false,
        scales: {
            x:{
              // min:'2018-01-01',
              // max:"2022-12-31",
                type: 'time',
                time: {
                    unit: 'day'
                }
            },
          // y: {
          //   beginAtZero: true
          // }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    function startDateFilter(date){
      const startDate=new Date(date.value);
      // console.log(startDate.setHours(0,0,0,0));
      myChart.config.options.scales.x.min=startDate.setHours(0,0,0,0);
      // console.log((startDate.getMonth())+1);
      var startmonth=(startDate.getMonth())+1;
      // console.log(startmonth);
      myChart.update();
      return startmonth;
    }
    function endDateFilter(date){
      const endDate=new Date(date.value);
      // console.log(endDate.setHours(0,0,0,0));
      myChart.config.options.scales.x.max=endDate.setHours(0,0,0,0);
      // console.log((endDate.getMonth())+1);
      var endmonth=(endDate.getMonth())+1;
      console.log(endmonth);
      myChart.update();
      return endmonth;
    }
    </script>

  </body>
</html>