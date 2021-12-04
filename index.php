<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Add page icon -->
    <link rel="icon" href="assets/icon/sb.png" type="image/png" sizes="16x16" /> 
    <title>Transaction</title>
</head>
<style>
    .grid {
        display: grid;
        grid-template-columns: 200px auto;
        grid-template-rows: 70px minmax(160px, auto) auto;
        grid-template-areas: 
            'header header'
            'leftbar main'
            'footer footer';
        column-gap: 20px;
        row-gap: 20px;
    }

    .page-header {
        grid-area: header;
    }

    .page-leftbar {
    grid-area: leftbar;
    }

    .page-main {
    grid-area: main;
    }

    .page-footer {
    grid-area: footer;
    }

    .content {
    color: #242424;
    background-color: #f25fff;
    font-weight: 600;
    text-align: center;
    box-sizing: border-box;
    height: 100%;
    padding: 10px;
    }
    table.blueTable {
    border: 1px solid #1C6EA4;
    background-color: #EEEEEE;
    width: 100%;
    text-align: left;
    border-collapse: collapse;
    }
    table.blueTable td, table.blueTable th {
    border: 1px solid #AAAAAA;
    padding: 3px 2px;
    }
    table.blueTable tbody td {
    font-size: 13px;
    }
    table.blueTable tr:nth-child(even) {
    background: #D0E4F5;
    }
    table.blueTable thead {
    background: #1C6EA4;
    background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
    border-bottom: 2px solid #444444;
    }
    table.blueTable thead th {
    font-size: 15px;
    font-weight: bold;
    color: #FFFFFF;
    border-left: 2px solid #D0E4F5;
    }
    table.blueTable thead th:first-child {
    border-left: none;
    }

    table.blueTable tfoot {
    font-size: 14px;
    font-weight: bold;
    color: #FFFFFF;
    background: #D0E4F5;
    background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
    border-top: 2px solid #444444;
    }
    table.blueTable tfoot td {
    font-size: 14px;
    }
    table.blueTable tfoot .links {
    text-align: right;
    }
    table.blueTable tfoot .links a{
    display: inline-block;
    background: #1C6EA4;
    color: #FFFFFF;
    padding: 2px 8px;
    border-radius: 5px;
    }
</style>
<body>
   
    <form id="trxForm" name="trxForm" method="post" action="trx.php">
        <div>
            <label for="trx">Amount </label>
            <input type="number" id="trx" name="amount">
        </div>
        <div>
            <label for="type">Type </label>
            <select id="type" name="type">
                <option value="C">Credit</option>
                <option value="D">Debit</option>
            </select>
        </div>
        <button type="button" id="submit" onClick="subFunction()" name="submit"><b>Submit</b></button>
    </form>
    <?php 
        require_once "db.php";

        global $connect;
        $quer = $connect->query("select * from transaction order by create_date desc");
        $debit = 0;
        $credit = 0;
        while($row=mysqli_fetch_object($quer))
        {
            if($row->type=='D'){
                $debit += $row->amount;
            }else{
                $credit += $row->amount;
            }
        }
        $total = $debit-$credit;
    ?>

    <div class="col-md-4">
        <div class="row">
            <table class="blueTable" width="100%">
                <thead>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Time</th>
                </thead>
                <tbody>
                    <?php 
                        require_once "db.php";
                        $no = 1;
                        global $connect;
                        $quer = $connect->query("select * from transaction order by create_date desc");
                        while($row=mysqli_fetch_object($quer))
                        {
                            $type = $row->type == 'D' ? 'Debit':'Credit';
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".number_format($row->amount, 2, ',', '.')."</td>";
                            echo "<td>".$type."</td>";
                            echo "<td>".date("Y/m/d",strtotime($row->create_date))."</td>";
                            echo "<td>".date("H:i:s",strtotime($row->create_date))."</td>";
                            echo "</tr>";
                            $no++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <h3>Balance: <?= number_format($total, 2, ',', '.') ?></h3>
    <script type="text/javascript">
        function subFunction(){
            let data = {amount: document.getElementById("trx").value,  type: document.getElementById("type").value};
            fetch("trx.php", {
                method: "POST",
                body: JSON. stringify(data)
                }). then(res => {
                alert('Success!');
                window.location.reload()
            });
        }

        function getTrx(){

        }
    </script>
</body>
</html>