
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Settings</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/framework.css" />
    <link rel="stylesheet" href="css/master.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&#038;display=swap" rel="stylesheet" />
    <?php include 'inc/header.php'; ?>

  </head>
  
  <header>
  <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
      <div class="phpcoding">
	
			<li><a href="?action=logout">Logout</a></li>

            <?php  ?>
        
    </nav>
  </header>
  <body>
    <div class="page d-flex">
      <div class="sidebar bg-white p-20 p-relative">
        <h3 class="p-relative txt-c mt-0">Dr.Ahmed</h3>
        <ul>
          <li>
            <a class="active d-flex align-center fs-14 c-black rad-6 p-10" href="DrProfile.html">
              <i class="fa-solid fa-gear fa-fw"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="student-info.html">
              <i class="fa-regular fa-user fa-fw"></i>
              <span>Students Info</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="exams.html">
              <i class="fa-solid fa-graduation-cap fa-fw"></i>
              <span>Exams</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="view-student.html">
              <i class="fa-regular fa-circle-user fa-fw"></i>
              <span>View Students</span>
            </a>
          </li>
          <li>
            <a class="d-flex align-center fs-14 c-black rad-6 p-10" href="scheduale.html">
              <i class="fa-regular fa-credit-card fa-fw"></i>
              <span>Scheduale Exam</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <!-- <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div> -->
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
                <a href="#"><img src="imgs/Bell (2).jpg" alt=""/></a>
              </span>
              <!-- <a href="#"><img src="imgs/avatar.png" alt=""/> </a> -->
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Wellcome</h1>
        <div class="settings-page m-20 d-grid gap-20">
          <!-- Start Settings Box -->
          <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">General Info</h2>
            <p class="mt-0 mb-20 c-grey fs-15">General Information About Your Account</p>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-10" for="first">First Name</label>
              <input
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                type="text"
                id="first"
                placeholder="First Name"
              />
            </div>
            <div class="mb-15">
              <label class="fs-14 c-grey d-block mb-5" for="last">Last Name</label>
              <input
                class="b-none border-ccc p-10 rad-6 d-block w-full"
                id="last"
                type="text"
                placeholder="Last Name"
              />
            </div>
            <div>
              <label class="fs-14 c-grey d-block mb-5" for="email">Email</label>
              <input
                class="email b-none border-ccc p-10 rad-6 w-full mr-10"
                id="email"
                type="email"
                value="o@nn.sa"
              />
              <a class="c-blue" href="#">Change</a>
            </div>
          </div>
          <!-- End Settings Box -->
          <!-- Start Settings Box -->
          <div class="p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Security Info</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Security Information About Your Account</p>
            <div class="sec-box mb-15 between-flex">
              <div>
                <span>Password</span>
                <p class="c-grey mt-5 mb-0 fs-13">Last Change On 25/10/2021</p>
              </div>
              <a class="button bg-blue c-white btn-shape" href="#">Change</a>
            </div>
          </div>
          <!-- End Settings Box -->
          <!-- Start Settings Box -->
          <div class="social-boxes p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Social Info</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Social Media Information</p>
            <div class="d-flex align-center mb-15">
              <i class="fa-brands fa-twitter center-flex c-grey"></i>
              <input class="w-full" type="text" placeholder="Twitter Username" />
            </div>
            <div class="d-flex align-center mb-15">
              <i class="fa-brands fa-facebook-f center-flex c-grey"></i>
              <input class="w-full" type="text" placeholder="Facebook Username" />
            </div>
            <div class="d-flex align-center mb-15">
              <i class="fa-brands fa-linkedin center-flex c-grey"></i>
              <input class="w-full" type="text" placeholder="Linkedin Username" />
            </div>
            <div class="d-flex align-center">
              <i class="fa-brands fa-youtube center-flex c-grey"></i>
              <input class="w-full" type="text" placeholder="Youtube Username" />
            </div>
          </div>
          <!-- End Settings Box -->
          <!-- Start Settings Box -->
          <div class="widgets-control p-20 bg-white rad-10">
            <h2 class="mt-0 mb-10">Tasks</h2>
            <p class="mt-0 mb-20 c-grey fs-15">Show/Hide</p>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="one" checked />
              <label for="one">Quieze st-T</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="two" checked />
              <label for="two">MidTerm st-T</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="three" checked />
              <label for="three">Final st-T</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="four" checked />
              <label for="four">Quieze sec-T</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="five" />
              <label for="five">MidTerm sec-T</label>
            </div>
            <div class="control d-flex align-center mb-15">
              <input type="checkbox" id="six" checked />
              <label for="six">Final sec-T</label>
            </div>
          </div>
          <!-- End Settings Box -->
        </div>
      </div>
    </div>
  </body>
</html>