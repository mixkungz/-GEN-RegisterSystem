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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-promise/4.1.0/es6-promise.auto.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.css">
    <style media="screen">
      html, body {
        min-height: 100%;
      }
      body {
        background-image: -webkit-linear-gradient(330deg, #abecd6 0%, #fbed96 100%);
        background-image: -o-linear-gradient(330deg, #abecd6 0%, #fbed96 100%);
        background-image: linear-gradient(60deg, #abecd6 0%, #fbed96 100%);
      }
      form{
        border: 1px solid white;
        border-radius: 5px;
        padding: 2.5em;
        background-color: rgba(255,255,255,1);
      }
      h1{
        margin-top: 2em;
        margin-bottom: 1em;
      }
    </style>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1>ลงทะเบียนโครงการกรอกแล้วมีกิน</h1>
        </div>
      </div>
      <form action="/" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-xs-12">
            <div class="">
              <label for="first_name">ชื่อ</label>
              <div class="form-group input-required">
                <input id="first_name" type="text" class="form-control" name="firstName" >
              </div>
            </div>
          </div>
          <div class="col-xs-12">
              <label for="last_name">นามสกุล</label>
              <input id="last_name" type="text" class="form-control input-required" name="lastName" >
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
              <label for="student_no">รหัสนักศึกษา</label>
              <input id="student_no" type="text" class="form-control input-required" name="stdId" >
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
              <label for="icon_telephone">เบอร์โทรศัพท์</label>
              <input id="telephone" type="tel" class="form-control input-required" name="tel" >
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <label>คณะ</label>
            <select class="form-control" name="faculty" >
              <option value="" disabled selected>Choose your faculty</option>
              <option value="engineer">คณะวิศวกรรมศาสตร์</option>
              <option value="science">คณะวิทยาศาสตร์</option>
              <option value="sit">คณะเทคโนโลยีสารสนเทศ</option>
              <option value="fiet">คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</option>
              <option value="fibo">สถาบันวิทยาการหุ่นยนต์ภาคสนาม</option>
              <option value="media">โครงการร่วมบริหารหลักสูตรมีเดียอาตส์และเทคโนโลยีมีเดีย</option>
              <option value="architect">คณะสถาปัตยกรรมศาสตร์และการออกแบบ</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <br>
            <button class="btn btn-success" type="submit" name="action" style="margin-right:1.5em" onclick="popup()">Submit
            </button>
            <button class="btn btn-danger" type="reset" name="action">Reset
            </button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src={{ url("/drunken/js/checkbox.js") }}></script>
    <script type="text/javascript" src={{ url("/drunken/js/radio.js") }}></script>
    <script type="text/javascript" src={{ url("/drunken/js/toolbar.js") }}></script>
    <script type="text/javascript">
      import { default as swal } from 'sweetalert2'
      const swal = require('sweetalert2')
      let popup = () =>{
        if(document.getElementbyId('first_name').value == null || document.getElementbyId('last_name').value == null || document.getElementbyId('student_no').value == null || document.getElementbyId('telephone').value == null){
          swal(
            'Error..',
            'กรุณากรอกฟอร์มให้ครบด้วยน้า',
            'error'
          )
        }
        else{
          swal(
            'Good job!',
            'ส่งฟอร์มแล้วจ้า',
            'success'
          )
        }
      }
    </script>
   </body>
</html>
