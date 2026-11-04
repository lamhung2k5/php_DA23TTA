<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        display: grid;
        grid-template-columns: 1fr 3fr;
        grid-template-rows: 1fr 1fr 2fr 1fr;
        grid-template-areas: 
        "lbl-a input-a"
        "lbl-b input-b"
        "operation operation"
        "lbl-result result";
    }
</style>
<body>
    <div class="container">

    </div>
</body>
</html>