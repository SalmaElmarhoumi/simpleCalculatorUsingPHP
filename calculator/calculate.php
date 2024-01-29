<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3 text-center">Calculator</h5>
                        <form method="GET" action="handle-calculate.php">
                            <div class="mb-3">
                                <label class="form-label">X</label>
                                <input type="number" class="form-control" name="x">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Y</label>
                                <input type="number" class="form-control" name="y">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Operation</label>
                                <select class="form-select" name="operation">
                                    <option value="add" selected>+</option>
                                    <option value="subtract">-</option>
                                    <option value="multiply">*</option>
                                    <option value="divide">/</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Calculate" class="btn btn-primary mb-3" style="margin-bottom: 10px;">
                            </div>
                        </form>
                        <?php if (isset ($_GET['result'])) { ?>
                        <div class="alert alert-success">
                            <p class="mb-0">Result =<?php echo $_GET['result']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='js/bootstrap.min.js'></script>
</body>
</html>