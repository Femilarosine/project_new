 
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reqister form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
        <style>
          .container{
            padding-top:30px;
            padding-bottom:30px;
            margin-top:100px;
          }
          </style>
          </head>
          <body>
 <section class="site-section form-holder-2" id="section-about">
          <div class="container"  style="background-color:lightblue;border-radius:50px;">

            <div class="row justify-content-center">

              <div class="col-md-6">

                <!-- <h2 class="heading">About</h2> -->
                 <form action="add.php" method="POST">
                      <div class="inner">
                        <div class="wizard-header">
                  <h3 class="heading text-center">Register</h3>
 
                </div>
                
                <div class="form-row">
                  <div class="form-holder form-holder-2 ">
                    <fieldset>
                      <legend>Hostel Name</legend>
                      <input type="text" class="form-control" id="first-name" name="name" required>
                    </fieldset>
                  </div>
                  
                </div>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Your Email</legend>
                      <input type="text" name="email" id="your_email" class="form-control" placeholder="example@email.com" required>
                    </fieldset>
                  </div>
                </div>
                                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Incharge</legend>
                      <input type="text" class="form-control" id="in" name="incharge" required>
                    </fieldset>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                    <fieldset>
                      <legend>Phone Number</legend>
                      <input type="text" class="form-control" id="phone" name="contact" placeholder="8889997777" required>
                    </fieldset>
                  </div>
                </div>
              <br>
                <div class="form-row">
                  <div class="form-holder form-holder-2">
                  <input type="submit" value="submit" name="submit" class="btn btn-primary btn-md">&nbsp&nbsp<input type="button"  class="btn btn--radius-2 btn-dark" value="Back!" onclick="history.go(-1)">
                  </div>
                </div>
              </div>
          </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        </body>
        </html>