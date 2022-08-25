<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Report !</title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body style="max-width: max-content; margin: auto;">
    <h2 style="text-align: center;">Report</h2>
    <?php
    include "config.php";
    $query = mysqli_query($db, 'SELECT * FROM log');
    $datalog = mysqli_num_rows($query);
    ?>
    <p style="text-align: right;">Total Data :<b><?php echo $datalog; ?> </b></p>
    
    <table>
        <thead>
            <tr style="text-align: center;">
                <td>NO</td>
                <td>REFERRER URL</td>
                <td>IP</td>
                <td>USER AGENT</td>
                <td>CREATED</td>                
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['referrer_url'] ?></td>
                <td><?php echo $data['user_ip_address'] ?></td>
                <td><?php echo $data['user_agent'] ?></td>
                <td><?php echo $data['created'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>