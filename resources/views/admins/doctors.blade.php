<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admins.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admins.sidebar')
      <!-- partial -->
        @include('admins.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" style="margin-top:3% ; margin-left: 20%">

                <div class="m-4">
                    <!-- Success Alert -->
                    @if (Session::has('message'))


                    <div class="alert alert-sucess alert-dismissible fade show">
                        <strong>Success!</strong> {{Session::get('message')}}
                    </div>
                    @endif
            </div>



                <form action="/upload_doctor" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >
                      <label for="exampleFormControlInput1">Doctor Name</label>
                      <input type="text" class="form-control"  name="name" style=" color:black ; background-color:white ; width:70% ; border-radius: 1.5%" id="exampleFormControlInput1" placeholder="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" style=" color:black ; background-color:white ; width:70% ; border-radius: 1.5% " id="exampleFormControlInput1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" style=" color:black ; background-color:white ; width:70% ; border-radius: 1.5%" id="exampleFormControlInput1" placeholder="Phone">
                      </div>

                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">address</label> <small style="margin-left:1% ; margin-bottom:1% ; color:rgb(235, 46, 46)">optional!</small>
                      <textarea class="form-control" name="address" style=" color:black ; background-color:white ; width:70% ; border-radius: 1.5%" id="exampleFormControlTextarea1"  placeholder="address" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Room N°</label>
                        <input  class="form-control" name="room" style=" color:black ; background-color:white ; width:70% ; border-radius: 1.5%" id="exampleFormControlTextarea1"  placeholder="room" rows="3">
                      </div>

                    <div class="form-group">
                    <label for="speciality"> Speciality </label>
                    <select name="speciality" style=" width:70%" class="form-select" aria-label="Default select example">
                        <option value="">select</option>
                        <option value="cardiology">cardiology</option>
                        <option value="dentist">dentist</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Neurology">Neurology</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Psychiatry">Psychiatry</option>
                      </select>
                    </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Photo  </label>
                        <input type="file"  name="photo" class="form-control"  style="background-color: #fff ; width:70% ; border-radius: 1.5%" >
                      </div>

                      <div class="form-group">
                         <button type="submit" style="background-color:rgb(62, 201, 62) ; width:20% ; height:100% " class="btn btn-success">Add</button>
                      </div>
                  </form>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admins.js')
    <!-- End custom js for this page -->
  </body>
</html>
