<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEN111 Register System</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.4/sweetalert2.min.js" charset="utf-8"></script>
    <style media="screen">
      body{
        width: 100%;
        height: 100%;
        background: #C9CCD3;
        background-image: linear-gradient(-180deg, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%);
        background-blend-mode: lighten;
      }
    </style>

  </head>
  <body>
    <div class="container">
      <form action="/" method="post">
        {{ csrf_field() }}
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="first_name" type="text" class="validate" name="firstName">
            <label for="first_name">ชื่อ</label>
          </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="last_name" type="text" class="validate" name="lastName">
            <label for="last_name">นามสกุล</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">person_outline</i>
            <input id="student_no" type="text" class="validate" name="stdId">
            <label for="student_no">รหัสนักศึกษา</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">phone_iphone</i>
            <input id="telephone" type="tel" class="validate" name="tel">
            <label for="icon_telephone">เบอร์โทรศัพท์</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select name="faculty" required="">
              <option value="" disabled selected>Choose your faculty</option>
              <option value="engineer">คณะวิศวกรรมศาสตร์</option>
              <option value="science">คณะวิทยาศาสตร์</option>
              <option value="sit">คณะเทคโนโลยีสารสนเทศ</option>
              <option value="fiet">คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</option>
              <option value="fibo">สถาบันวิทยาการหุ่นยนต์ภาคสนาม</option>
              <option value="media">โครงการร่วมบริหารหลักสูตรมีเดียอาตส์และเทคโนโลยีมีเดีย</option>
              <option value="architect">คณะสถาปัตยกรรมศาสตร์และการออกแบบ</option>
            </select>
            <label>คณะ</label>
          </div>
        </div>
        <div class="row">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
          </button>
          <button class="btn waves-effect waves-light red darken-2" type="reset" name="action">Reset
          </button>
        </div>
      </form>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
       $('select').material_select();
      });
    </script>
    <script type="text/javascript">
      const swal = require('sweetalert2')
      let onSend = () =>{
        swal(
        'Success!',
        'ส่งข้อมูลเรียบร้อยแล้ว!',
        'success'
        )
      }
    </script>
   </body>
</html>
