<?php include 'includes/db.php' ?>
<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include 'includes/header.php'; ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8" id="detail_form">
                    <form action="includes/dashboard_backend.php" method="post">
                        <div class="form-group">
                            <p>From</p>
                            <input type="text" class="form-control" placeholder="Start" name="from"><br><br>
                            <p>To</p>
                            <input type="text" class="form-control" placeholder="Destination" name="to"><br><br>
                            <p>Route Number</p>
                            <input type="text" class="form-control" placeholder="Route Number" name="route"><br><br>
                            <p>Direction</p>
                            <input type="text" class="form-control" placeholder="Direction" name="direction"><br><br>
                            <input type="submit" value="Submit" name="submit" class="form-control btn btn-default"><br>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row" id="detail_table">
                <div class="col-md-12">
                    <?php
                    $sql = "SELECT * FROM main_details";
                    $sql_set = mysqli_query($conn, $sql);
                    ?>
                    <div class="row" id="requests">
                        <table class="table table-responsive table-bordered">
                            <tr>
                                <th>Start Place</th>
                                <th>Destination</th>
                                <th>Route Number</th>
                                <th>Direction</th>
                                <th></th>
                            </tr>
                            <?php while ($given = mysqli_fetch_assoc($sql_set)) { ?>
                                <tr>
                                    <td><?php echo $given["start"]; ?></td>
                                    <td><?php echo $given["end"]; ?></td>
                                    <td><?php echo $given["route_no"]; ?></td>
                                    <td><?php echo $given["direction"]; ?></td>
                                    <td><a href="includes/delete.php?id=<?php echo $given["id"]; ?>">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>