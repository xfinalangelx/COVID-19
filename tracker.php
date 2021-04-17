
<?php 
    include "tracker-logic.php";
?>
<?php include 'components/head.inc.php'; ?>
<?php include 'components/navbar.inc.php'; ?>




    <!-- BootStrap Container for Header-->
    <div class="text-center">
        <h1>RONATRACK</h1>
        <h5>A COVID-19 cases tracker which is up to date</h5>
    </div>

    <!-- BootStrap Container for Total Stats-->
    <div class="container my-12">
    <div class = "row text-center">
        <div class = "col text-danger">
            <h3>Confirmed</h3>
            <?php echo $total_confirmed; ?>
        </div>

        <div class = "col text-success">
            <h3>Recovered</h3>
            <?php echo $total_recovered; ?>
        </div>

        <div class = "col text-dark">
            <h3>Deaths</h3>
            <?php echo $total_deaths; ?>
        </div>
    </div>
    </div>

    <!-- BootStrap Container for table-->
    <div class="container-fluid">
    <table class = "table">
        <thead class = "thead-dark my-3">
            <tr>
                <th>Countries</th>
                <th>Confirmed</th>
                <th>Recovered</th>
                <th>Deaths</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                foreach($data as $key => $value){
                    $increase_confirmed = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
                    $recovered_confirmed = $value[$days_count]['recovered'] - $value[$days_count_prev]['recovered'];
                    $deaths_confirmed = $value[$days_count]['deaths'] - $value[$days_count_prev]['deaths'];
                    ?>
                        <tr>
                            <th>
                                <?php echo $key;?>
                            </th>
                            <td>
                                <?php echo $value[$days_count]['confirmed'];?>
                                <?php if($increase_confirmed != 0){?>
                                <small class = "text-danger pl-3"><i class="fas fa-angle-double-up"></i><?php echo $increase_confirmed;?></small>
                               <?php }?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered'];?>
                                <?php if($recovered_confirmed != 0){?>
                                <small class = "text-success pl-3"><i class="fas fa-angle-double-up"></i><?php echo $recovered_confirmed;?></small>
                               <?php }?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths'];?>
                                <?php if($deaths_confirmed != 0){?>
                                <small class = "text-danger pl-3"><i class="fas fa-angle-double-up"></i><?php echo $deaths_confirmed;?></small>
                               <?php }?>
                            </td>
                        </tr>

                    <?php
                }?>
        </tbody>
    </table>
    </div>



<?php include('components/footer.inc.php'); ?>