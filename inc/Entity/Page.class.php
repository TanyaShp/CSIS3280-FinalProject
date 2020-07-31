<?php

class Page  {

    public static $title = "Student Student Management System - Student Management";

    static function header() { ?>

        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            <!-- Bootstrap CSS -->
            <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous"
            />
            <link rel="stylesheet" href="html/courseDetail_style.css" />
            <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css"
            />
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

            <title><?php echo self::$title; ?></title>
            <!-- <meta http-equiv="refresh" content="3"> -->

        </head>
        <body>
        <div class="container">
            <h1><?php echo self::$title; ?></h1>

           
    <?php }

    static function footer()    { ?>
        </div>
            <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
            </html>
    <?php }

    static function displayStudentDetails(Student $student) { ?>
    <div>
      <div class="container">
        <div class="row profile">
          <div class="col-md-2">
            <div class="profile-sidebar">
              <!-- SIDEBAR USERPIC -->
              <div class="profile-userpic">
                <img
                  src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg"
                  class="img-responsive"
                  alt=""
                />
              </div>
              <!-- END SIDEBAR USERPIC -->
              <!-- SIDEBAR USER TITLE -->
              <div class="profile-usertitle">
              <!-- AVATOR IMAGE GOES HERE -->
                <div class="profile-usertitle-avatar">
                  <a href="img"></a>
                </div>
                <div class="profile-usertitle-name">
                  Marcus Doe
                </div>
                <div class="profile-usertitle-job">
                  CSIS
                </div>
              </div>
              <!-- END SIDEBAR USER TITLE -->
              <!-- SIDEBAR BUTTONS -->
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" METHOD="POST">
              <div class="profile-userbuttons">
                <button type="submit" name="action" value="edit" class="btn btn-success btn-sm">
                  Edit Profile
                </button>
                <button type="submit" name="action" value="signout" class="btn btn-danger btn-sm">
                  Sign Out
                </button>
              </div>
            </form>
              <!-- END SIDEBAR BUTTONS -->
              <!-- SIDEBAR MENU -->
              <!-- <div class="profile-usermenu">
                <ul class="nav">
                  <li class="active">
                    <a href="#">
                      <i class="glyphicon glyphicon-home"></i>
                      Overview
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="glyphicon glyphicon-user"></i>
                      Account Settings
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank">
                      <i class="glyphicon glyphicon-ok"></i>
                      Tasks
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="glyphicon glyphicon-flag"></i>
                      Help
                    </a>
                  </li>
                </ul>
              </div> -->
              <!-- GENERAL COURSES -->
              <div>
                  <ul class="nav" style="margin-top: 15px;">
                    <li>Course 1<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                    <li>Course 2<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                    <li>Course 3<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                    <li>Course 4<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                    <li>Course 5<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                    <li>Course 6<button type="button" class="btn btn-danger btn-sm">Delete</button></li>
                  </ul>
              </div>
              <!-- END MENU -->
              <!-- COURSES Grads-->
            </div>
          </div>
          <div class="col-md-10">
            <div class="profile-content">
              Courses sechedual related content goes here...
            </div>
            <div class="calendar-container">
              <div class="calendar-header">
                <h1>
                  November
                </h1>
                <p>2020</p>
              </div>
              <div class="calendar">
                <span class="day-name">Mon</span><span class="day-name">Tue</span
                ><span class="day-name">Wed</span><span class="day-name">Thu</span
                ><span class="day-name">Fri</span><span class="day-name">Sat</span
                ><span class="day-name">Sun</span>
                <div class="day day--disabled">30</div>
                <div class="day day--disabled">31</div>
                <div class="day">1</div>
                <div class="day">2</div>
                <div class="day">3</div>
                <div class="day">4</div>
                <div class="day">5</div>
                <div class="day">6</div>
                <div class="day">7</div>
                <div class="day">8</div>
                <div class="day">9</div>
                <div class="day">10</div>
                <div class="day">11</div>
                <div class="day">12</div>
                <div class="day">13</div>
                <div class="day">14</div>
                <div class="day">15</div>
                <div class="day">16</div>
                <div class="day">17</div>
                <div class="day">18</div>
                <div class="day">19</div>
                <div class="day">20</div>
                <div class="day">21</div>
                <div class="day">22</div>
                <div class="day">23</div>
                <div class="day">24</div>
                <div class="day">25</div>
                <div class="day">26</div>
                <div class="day">27</div>
                <div class="day">28</div>
                <div class="day">29</div>
                <div class="day">30</div>
                <div class="day">31</div>
                <div class="day day--disabled">1</div>
                <div class="day day--disabled">2</div>
                <section class="task task--warning">COURSE SAMPLE</section>
                <section class="task task--danger">CSIS 3380 002</section>
                <section class="task task--primary">
                  CSIS 2175 005
                  <div class="task__detail">
                    <h2>CSIS 2715 ASN1</h2>
                    <p>15-17th November</p>
                  </div>
                </section>
                <section class="task task--info">CSIS 2300 005</section>
              </div>
            </div>
          </div>
        </div>
      </div>
      <center>
        <strong
          >Powered by
          Group 7</strong
        >
      </center>
      <br />
      <br />
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

<?php }

    static function displayLogin() { ?>
        <h2 class="form-signin-heading">Please sign in</h2><br>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" METHOD="POST" class="form-signin">
        <input type="username" name="username" id="username" placeholder="Username" class="form-control" required autofocus><br>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required><br>

        <button class="btn btn-lg btn-primary btn-block" type="submit" value= "Log in">Log in</button>
    </form>
        Do not have any account? <a href="<?php echo 'register.php'?>">Click here</a> to register.

    <?php }

    static function displayRegistrationForm() { ?>
    
        Have an account?<a href="<?php echo "login.php"?>"> Please login</a>.
        <h2 class="form-signin-heading">Please Fill the Form</h2><br>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" METHOD="POST" class="form-signin">
    <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus><br>
    <input type="email" name="email" id="email" placeholder="Email Address for login" class="form-control" required><br>
        <input type="password" name="password" id="password" placeholder="password" class="form-control" required><br>
        <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="password confirm" class="form-control" required><br>
        <input type="text" name="fullname" id="fullname" placeholder="Full Name" class="form-control" required><br>
        <input type="number" name="studentid" id="studentid" placeholder="Student ID" class="form-control" required><br>
        <!-- 
            For the eye color select, the first option text should be "Choose Eye Color"
            with empty value. You should also set it to be readonly, disabled and selected
            You can then add other eye color for your avatar
        -->
        <input type="text" name="major" id="major" placeholder="Major" class="form-control" required><br>
        <!-- 
            For the allignment select, the first option text should be "Good, Neutral or Chaos?"
            with empty value. You should also set it to be readonly, disabled and selected
            The other options should be Good, Neutral and Chaos.
        -->
        <input type="text" name="photo" id="photo" placeholder="Photo URL" class="form-control"><br>

        <button class="btn btn-lg btn-primary btn-block" type="submit" value= "Register">Register</button>
        <br>
        <br>
    </form>
        <?php }


static function displayEditForm(Student $student) { ?>
    
    <h2 class="form-signin-heading">Edit the Profile</h2><br>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" METHOD="POST" class="form-signin">
    <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $student->getUserName(); ?>" class="form-control" required autofocus><br>
    <input type="email" name="email" id="email" value="<?php echo $student->getEmail(); ?>" placeholder="Email Address for login" class="form-control" required><br>
    <input type="password" name="password" id="password" value="<?php echo $student->getPassword(); ?>" placeholder="password" class="form-control" required><br>
    <input type="password" name="passwordConfirm" id="passwordConfirm" value="<?php echo $student->getPassword(); ?>" placeholder="password confirm" class="form-control" required><br>
    <input type="text" name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $student->getFullName(); ?>" class="form-control" required><br>
    <input type="number" name="studentid" id="studentid" placeholder="Student ID" value="<?php echo $student->getStudentID(); ?>" class="form-control" required><br>
    <!-- 
        For the eye color select, the first option text should be "Choose Eye Color"
        with empty value. You should also set it to be readonly, disabled and selected
        You can then add other eye color for your avatar
    -->
    <input type="text" name="major" id="major" placeholder="Major" value="<?php echo $student->getMajor(); ?>" class="form-control" required><br>
   
    <!-- 
        For the allignment select, the first option text should be "Good, Neutral or Chaos?"
        with empty value. You should also set it to be readonly, disabled and selected
        The other options should be Good, Neutral and Chaos.
    -->
    <input type="text" name="photo" id="photo" placeholder="Photo URL" value="<?php echo $student->getPhoto(); ?>" class="form-control"><br>

    <button class="btn btn-lg btn-primary btn-block" type="submit" value= "Register">Edit</button>
</form>
    <?php }

static function thankYou(){?>
    <label for="thankyou">Thank You for your visit!</label><br><br><br>
    <label for="thankyou">Please wait, you are being redirtected to the login page...</label>
<?php
}

    static function displayErrors($errors)  { ?>
        <div class="highlight">        
        <UL>
            <?php
                echo "Please fix the following errors:";
                echo "<br></br>";
                foreach ($errors as $error) {
                    echo "<LI>".$error."</LI>";
                }
            ?>
        </UL>
    </div>
    <br></br>
    <?php
    }

}