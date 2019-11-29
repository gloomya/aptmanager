<div class="content">
    <div class="container-fluid">
        <?php if(isset($_SESSION["orderDone"])) : ?>
            <div class="alert alert-success" role="alert" id="regerror">
            <?php echo $_SESSION["orderDone"]; ?>
            </div>
        <?php endif; ?> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header card-header-tabs card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">List of Your:</span>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#workorders" data-toggle="tab">
                                        <i class="material-icons">insert_comment</i> Work orders
                                        <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#parking" data-toggle="tab">
                                        <i class="material-icons">local_parking</i> Guest parking
                                        <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="workorders">
                                <table class="table">
                                    <tbody>         
                                    <?php 

                                    $sqlOrdersData = "SELECT * FROM work_orders WHERE tenant = {$_SESSION["user_id"]}";                     
                                    if ($resultOrdersData = $conn->query($sqlOrdersData)) {

                                        while ($row = $resultOrdersData->fetch_assoc()) {
                                            
                                            echo "<tr><td>".$row['order_no']."</td>";
                                            echo "<td>".$row['date']."</td>";
                                            echo "<td>".substr($row['repair_requested'], 0, 100)."</td>";
                                            echo '<td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                            <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                            </button>
                                        </td></tr>';
                                        }
                                    }  
                                    ?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="parking">
                                <table class="table">
                                    <tbody>         
                                        <?php 

                                        $sqlParkData = "SELECT * FROM parking_spots WHERE unit = {$_SESSION["unit"]}";                     
                                        if ($resultParkData = $conn->query($sqlParkData)) {

                                            while ($row = $resultParkData->fetch_assoc()) {
                                                
                                                echo "<tr><td>".$row['spot']."</td>";
                                                echo "<td>".$row['dstart']."</td>";
                                                echo "<td>".$row['tstart']."</td>";
                                                echo "<td>".$row['tend']."</td>";
                                                echo "<td>".$row['model']."</td>";
                                                echo "<td>".$row['plate']."</td>";
                                                echo '<td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                <i class="material-icons">close</i>
                                                </button>
                                            </td></tr>';
                                            }
                                        } else {echo "fail!";} 
                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>