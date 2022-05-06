
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size:40px">Make an Appointment <br> <i class="fa-solid fa-calendar-check" style="color:#06d6a0; font-size:50px; margin-top:3%"></i></h1>

      <form class="main-form" action="/store" method="post" enctype="multipart/form-data">

        @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="full_name" class="form-control" placeholder="Full name" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

                <option value="">--select--</option>

                @foreach ($doctor as $key => $value)

                <option value="{{$value->name}}"> {{$value->name}} => <strong style="color:grey">speciality</strong> :
                 {{$value->speciality}} </option>
                @endforeach


            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="form-control" placeholder="Number.." >
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="description" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>

          <button class="btn btn-success" style="background-color:#06d6a0; margin-left:3%" type="submit">Make</button>


        </div>
      </form>
    </div>
  </div> <!-- .page-section -->
