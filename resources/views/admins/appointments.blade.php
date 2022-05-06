
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include('admins.css')
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
                <div class="container" style="margin-top:6%">
                    <table class="table table-green">
                        <thead >

                          <tr style="text-color: #ffffff ; background-color:#0aff99" >
                            <th scope="col">Patient</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Date</th>
                            <th scope="col">phone</th>
                            <th scope="col">description</th>
                            <th scope="col">Status</th>
                            <th scope="col" >Operation</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($appointments as $key => $value)

                            <tr style="color: #000000 ; background-color: #ffffff ; ">
                                <th scope="row">{{$value->full_name}}</th>
                                <th scope="row">{{$value->doctor}}</th>
                                <td>{{$value->date}}</td>
                                <td>{{$value->phone}}</td>
                                <td >{{$value->description}}</td>
                                <td>{{$value->status}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{route('appointment.approve',['id'=> $value->id])}}"> approve   </a>
                                    <a class="btn btn-danger" href="{{route('appointment.delete',['id'=> $value->id])}}"> cancel  </a>
                                  </td>
                              </tr>

                        </tbody>
                      </table>


                <div class="m-4">

                @if (Session::has('message'))

                    <div class="alert alert-success alert-dismissible fade show">
                         {{Session::get('message')}}
                    </div>

                @endif


                    @endforeach
            </div>
        </div>
    </div>
  </div>




        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admins.js')
        <!-- End custom js for this page -->
      </body>
    </html>

