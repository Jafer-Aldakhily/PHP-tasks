<?php
$todos = array("title" => array(),"description" => array());
if($_SERVER["REQUEST_METHOD"] === "POST")
{
    if(isset($_POST["publish"]))
    { 
        array_push($todos["title"],$_POST["title"]);
        array_push($todos["description"],$_POST["description"]);
    }
    print_r($todos);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<center>
<div>
    <h1>Adding your todo</h1>
<form action="#" method="post">
    <div class="input-group w-25 mb-2">
        <input type="hidden" value="1" name="id">
        <input type="text" name="title" placeholder="Title" class="form-control">
    </div>
    <div class="input-group w-25 mb-2">
        <textarea name="description" cols="30" 
        rows="10" class="form-control" placeholder="Description"></textarea>
    </div>
    <div class="input-group w-25">
        <input type="submit" name="publish" value="Submit" class="btn btn-danger">
    </div>
</form>
</div>
</center>

<center class="mt-5">
    <table class="table w-50">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
        for($i = 0; $i < count($todos) - 1 ;$i++)
        {
            echo "
            <tr>
            <th scope='row'>1</th>
              <td>".$todos["title"][$i]."</td>
              <td>".$todos["description"][$i]."</td>
            </tr>
            ";

        }
    
    
    ?>
  </tbody>
</table>
</center>



    
</body>
</html>


