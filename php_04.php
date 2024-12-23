<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="php_04.php" method="post">
            <div class="mb-3">
                <label for="start" class="form-label">เริ่มต้น</label>
                <input type="number" class="form-control" id="start" name="start">
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">สิ้นสุด</label>
                <input type="number" class="form-control" id="end" name="end">
            </div>
            <button type="submit" class="btn btn-primary">แสดง</button>
        </form>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>number</th>
                    <th>result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_POST['start']) && isset($_POST['end'])){
                        $start = $_POST['start'];
                        $end = $_POST['end'];
                        for($i=$start; $i<=$end; $i++){
                            if($i%2==0){
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>even</td>";
                                echo "</tr>";
                            }else{
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>odd</td>";
                                echo "</tr>";
                            }
                        }
                    }
                ?>
            </tbody>
    </div>
</body>
</html>