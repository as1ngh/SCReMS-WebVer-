<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+2:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/github.min.css">

</head>

<body>

    <div id="heading" class="row row-no-gutters">
        <div class="col-md-2">
            <img src="images/iitr_logo.jpg" height="150" width="150" class="img-circle">
        </div>
        <div class="col-md-8">
            <div>
                <h1>Student's Club Resource Management System</h1>
            </div>
            <div>
                <h1>(SCReMS)</h1>
            </div>
        </div>
        <div class="col-md-2">
            <div>
                <?php
                    echo "<h3>".$_SESSION['userEnroll']."</h3>";
                ?>
            </div>
            <div>
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" class="btn btn-primary">Log Out</button>
            </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="content-items" class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/poolimg .jpg">
                    <div class="row">
                        <div class="col-md-5">
                            <span>Entry</span>
                        </div>
                        <div class="col-md-5">
                            <span>Exit</span>
                        </div>
                    </div>
                    <form action="additem/pool.adt.php" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group clockpicker">
                                <input type="text" name="startTime" class="form-control" value="09:30">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                                $('.clockpicker').clockpicker();
                            </script>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group clockpicker">
                                <input type="text" name="endTime" class="form-control" value="09:30">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                                $('.clockpicker').clockpicker();
                            </script>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="poolBtn" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="images/consoleimg.jpg">
                    <form action="additem/console.adt.php" method="post">
                    <div class="row asker">
                        <div class="col-md-8 form-group">
                            <input type="text" name="askEnroll" class="form-control" id="exampleInputName2" placeholder="Enroll. No">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="consoleBtn" class="btn btn-primary">Ask</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="images/snookerimg.jpg">
                    <div class="row">
                        <div class="col-md-5">
                            <span>Entry</span>
                        </div>
                        <div class="col-md-5">
                            <span>Exit</span>
                        </div>
                    </div>
                    <form action="additem/snooker.adt.php" method="post">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="input-group clockpicker">
                                <input type="text" name="startTime" class="form-control" value="09:30">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                                $('.clockpicker').clockpicker();
                            </script>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group clockpicker">
                                <input type="text" name="endTime" class="form-control" value="09:30">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                            <script type="text/javascript">
                                $('.clockpicker').clockpicker();
                            </script>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="snookerBtn" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img src="images/chessimg.jpg">
                    <form action="additem/chess.adt.php" method="post">
                    <div class="row asker">
                        <div class="col-md-8 form-group">
                            <input type="text" name="askEnroll" class="form-control" id="exampleInputName2" placeholder="Enroll. No">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="chessBtn" class="btn btn-primary">Ask</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="images/carromimg.jpg">
                    <form action="additem/carrom.adt.php" method="post">
                    <div class="row asker">
                        <div class="col-md-8 form-group">
                            <input type="text" name="askEnroll" class="form-control" id="exampleInputName2" placeholder="Enroll. No">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="carromBtn" class="btn btn-primary">Ask</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <img src="images/tabbletennisimg.jpg">
                    <form action="additem/tabbletennis.adt.php" method="post">
                    <div class="row asker">
                        <div class="col-md-8 form-group">
                            <input type="text" name="askEnroll" class="form-control" id="exampleInputName2" placeholder="Enroll. No">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" name="tabbletennisBtn" class="btn btn-primary">Ask</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <h2>Recent Activity</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require 'additem/dbh.adt.php';
                        $sql="SELECT * FROM items WHERE userEnroll ='".$_SESSION['userEnroll']."'";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while ($row = mysqli_fetch_array($result, true)) {
                                echo "<tr>";
                                    echo "<td>".$row['userItem']."</td>";
                                    echo "<td>".$row['userStart']."</td>";
                                    echo "<td>".$row['userEnd']."</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>





    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker()
            .find('input').change(function () {
                console.log(this.value);
            });
        var input = $('#single-input').clockpicker({
            placement: 'bottom',
            align: 'left',
            autoclose: true,
            'default': 'now'
        });

        $('.clockpicker-with-callbacks').clockpicker({
            donetext: 'Done',
            init: function () {
                console.log("colorpicker initiated");
            },
            beforeShow: function () {
                console.log("before show");
            },
            afterShow: function () {
                console.log("after show");
            },
            beforeHide: function () {
                console.log("before hide");
            },
            afterHide: function () {
                console.log("after hide");
            },
            beforeHourSelect: function () {
                console.log("before hour selected");
            },
            afterHourSelect: function () {
                console.log("after hour selected");
            },
            beforeDone: function () {
                console.log("before done");
            },
            afterDone: function () {
                console.log("after done");
            }
        })
            .find('input').change(function () {
                console.log(this.value);
            });

        // Manually toggle to the minutes view
        $('#check-minutes').click(function (e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
    </script>
    <script type="text/javascript" src="assets/js/highlight.min.js"></script>
    <script type="text/javascript">
        hljs.configure({ tabReplace: '    ' });
        hljs.initHighlightingOnLoad();
    </script>
</body>

</html>