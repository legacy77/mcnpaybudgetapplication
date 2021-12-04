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
    html, #page { padding:0; margin:0;}
        body { margin:0; padding:0; width:100%; color:#959595; font:normal 12px/2.0em Sans-Serif;} 
        h1, h2, h3, h4, h5, h6 {color:darkblue;}
        #page { background:#fff;}
        #header, #footer, #top-nav, #content, #content #contentbar, #content #sidebar { margin:0; padding:0;}
                    
        /* Logo */
        #logo { padding:0; width:auto; float:left;}
        #logo h1 a, h1 a:hover { color:darkblue; text-decoration:none;}
        #logo h1 span { color:#d3d3f9;}

        /* Header */
        #header { background:#fff; }
        #header-inner { margin:0 auto; padding:0; width:970px;}
        
        /* Feature */
        .feature { background:blue;padding:18px;}
        .feature-inner { margin:auto;width:970px; }
        .feature-inner h1 {color:#d3d3f9;font-size:32px;}
        
        /* Menu */
        #top-nav { margin:0 auto; padding:0px 0 0; height:37px; float:right;}
        #top-nav ul { list-style:none; padding:0; height:37px; float:left;}
        #top-nav ul li { margin:0; padding:0 0 0 8px; float:left;}
        #top-nav ul li a { display:block; margin:0; padding:8px 20px; color:blue; text-decoration:none;}
        #top-nav ul li.active a, #top-nav ul li a:hover { color:#d3d3f9;}
        
        /* Content */
        #content-inner { margin:0 auto; padding:10px 0; width:970px;background:#fff;}
        #content #contentbar { margin:0; padding:0; float:right; width:760px;}
        #content #contentbar .article { margin:0 0 24px; padding:0 20px 0 15px; }
        #content #sidebar { padding:0; float:left; width:200px;}
        #content #sidebar .widget { margin:0 0 12px; padding:8px 8px 8px 13px;line-height:1.4em;}
        #content #sidebar .widget h3 a { text-decoration:none;}
        #content #sidebar .widget ul { margin:0; padding:0; list-style:none; color:#959595;}
        #content #sidebar .widget ul li { margin:0;}
        #content #sidebar .widget ul li { padding:4px 0; width:185px;}
        #content #sidebar .widget ul li a { color:blue; text-decoration:none; margin-left:-16px; padding:4px 8px 4px 16px;}
        #content #sidebar .widget ul li a:hover { color:#d3d3f9; font-weight:bold; text-decoration:none;}
        
        /* Footerblurb */
        #footerblurb { background:#d3d3f9;color:blue;}
        #footerblurb-inner { margin:0 auto; width:922px; padding:24px;}
        #footerblurb .column { margin:0; text-align:justify; float:left;width:250px;padding:0 24px;}
        
        /* Footer */
        #footer { background:#fff;}
        #footer-inner { margin:auto; text-align:center; padding:12px; width:922px;}
        #footer a {color:blue;text-decoration:none;}
        
        /* Clear both sides to assist with div alignment  */
        .clr { clear:both; padding:0; margin:0; width:100%; font-size:0px; line-height:0px;}
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
    .demoparagraph {
    -webkit-column-count: 1;
    -moz-column-count: 1;
    column-count: 1;
    -webkit-column-gap: 18px;
    -moz-column-gap: 18px;
    column-gap: 18px;
    -webkit-column-rule: 1px solid rgba(28,110,164,0.37);
    -moz-column-rule: 1px solid rgba(28,110,164,0.37);
    column-rule: 1px solid rgba(28,110,164,0.37);
    }
</style>
<body>
   <div class="demoparagraph">
       <div class="row">
            <form id="trxForm" name="trxForm" method="post" action="trx.php">
                <div>
                    <label for="trx">Amount </label>
                    <input type="currency" id="trx" name="amount">
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
       </div>
   </div>
    
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
            <h3>Balance: <?= number_format($total, 2, ',', '.') ?></h3>
            <table id="tblData" class="blueTable" width="100%">
                <thead>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Date</th>
                </thead>
                <tbody>
                   
                </tbody>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        getTrx();
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
            var html = '';
            fetch("http://localhost/mcnplay/api.php?function=get_trx",{
                method: "GET",
            }).then(response => response.json())
            .then(function(data){
                var raw = data;
                var no = 1;
                var tipe = '';
                raw.forEach(function(e){
                    console.log(e);
                    if(e.type == "D")
                    {
                        tipe = "Income";
                    }else{
                        tipe = "Expenses";
                    }
                    html += "<tr>";
                    html += "<td>"+no+"</td>";
                    html += "<td>"+parseInt(e.amount).toLocaleString("id-ID")+"</td>";
                    html += "<td>"+tipe+"</td>";
                    html += "<td>"+e.create_date+"</td>";
                    html += "</tr>";
                    no++;
                })
                document.querySelector('#tblData > tbody').innerHTML = html;

            });
        }
        
        
    </script>
</body>
</html>