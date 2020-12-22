<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Mobile Verification</title>
    <style type="text/css">
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
           -webkit-appearance: none;
             margin: 0;
          }

              /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
    </style>
  </head>
  <body>
        <div style="margin: 100px;">
           <center><h1>Mobile Verification</h1></center>
           <form action="process.php" method="POST">
             <label for="inputPassword5" class="form-label">Enter Number</label>
              <input type="number" name="phone" class="form-control" style="margin: 5px;width: 45%">
              <div id="passwordHelpBlock" class="form-text">
                <button class="btn btn-success">Send OTP</button>
              </div>
           </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>