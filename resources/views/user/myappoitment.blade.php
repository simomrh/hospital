<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="icon" href="http://www.yourwebsite.com/favicon.png">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">


  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="margin-right: 3%">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#"  >
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.."  aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport" style="margin-left: 10%">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>


            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="btn btn" style="background-color:#06d6a0; margin-left: 20px; color:aliceblue "  href="/home">Make Appointment</a>
              </li>
               <x-app-layout>

               </x-app-layout>

              @else

                <li class="nav-item" >
                    <a  class= "btn btn-primary ml-lg-3" href="{{ route('login') }}">Login </a>
                </li>
                  <li class="nav-item">
                      <a  class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register </a>
                 </li>


            @endauth
            @endif
        </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>



    <div class="container" style="margin-top:6%">
        <table class="table table-green"  border-radius: 10px;>
            <thead style="background-color: #06d6a0 ; color:aliceblue ; ">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Patient</th>
                <th scope="col">Doctor</th>
                <th scope="col">Date</th>
                <th scope="col">description</th>
                <th scope="col">Status</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($appointment  as $key => $value)
                <tr>
                    <th scope="row">{{$value->user_id}}</th>
                    <th scope="row">{{$value->full_name}}</th>
                    <td>{{$value->doctor}}</td>
                    <td>{{$value->date}}</td>
                    <td width = 35%>{{$value->description}}</td>
                    <td>{{$value->stauts}} In Progress</td>
                    <td>
                        <a class="btn btn-danger" href="{{route('appointment.delete',['id'=> $value->id])}}"> Cancel  </a>
                      </td>
                  </tr>

                @endforeach


            </tbody>
          </table>
    </div>

    <div class="m-4">
        <!-- Success Alert -->
        @if (Session::has('message'))


        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Danger!</strong> {{Session::get('message')}}
        </div>
        @endif
</div>





  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

  </body>
  </html>
