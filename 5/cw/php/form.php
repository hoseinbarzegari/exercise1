<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            padding: 3em;
        }
    </style>
</head>
<body class="pl-3">
    <div class="mt-3 pl-3">
        <form action="output.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">file upload</label>
                <input name="file" class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">name:</span>
                <input name="name" type="text" aria-label="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description:</label>
                <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12">
                <button name="submit" class="btn btn-primary" type="submit">Submit form</button>
            </div>
            <!-- abc -->
    </div>
    </form>
</body>

</html>