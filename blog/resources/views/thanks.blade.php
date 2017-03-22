<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEN111 Register System</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href={{URL::asset("/drunken/bootstrap/css/prettify.css")}}>
    <link rel="stylesheet" href={{URL::asset("/drunken/css/drunken-parrot.css")}}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.js" charset="utf-8"></script>
    <style media="screen">
      html, body {
        min-height: 100%;
      }
      body {
        background-image: -webkit-linear-gradient(330deg, #abecd6 0%, #fbed96 100%);
        background-image: -o-linear-gradient(330deg, #abecd6 0%, #fbed96 100%);
        background-image: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
      }
      h1{
        margin-top: 30%;
      }

    </style>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 class="alert alert-success" style="color:white">คุณได้กรอกแบบฟอร์มเรียบร้อยแล้ว<br></h1>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{ url("/drunken/js/checkbox.js") }}></script>
    <script type="text/javascript" src={{ url("/drunken/js/radio.js") }}></script>
    <script type="text/javascript" src={{ url("/drunken/js/toolbar.js") }}></script>

    </script>
   </body>
</html>
