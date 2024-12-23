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
        <h1>even odd 1-100</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>number</th>
                    <th>result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=1; $i<=100; $i++){
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
                ?>
            </tbody>
    </div>
</body>
</html>