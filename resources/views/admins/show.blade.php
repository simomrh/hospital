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
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">phone</th>
                            <th scope="col">address</th>
                            <th scope="col">speciality</th>
                            <th scope="col">photo</th>
                            <th scope="col" >Operation</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($doctors as $key => $value)

                            <tr style="color: #000000 ; background-color: #ffffff ; ">
                                <th scope="row">{{$value->name}}</th>
                                <th scope="row">{{$value->email}}</th>
                                <td>{{$value->phone}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->speciality}}</td>
                                <td >
                                    <img src="{{URL::asset($value->photo)}}" alt="{{$value->photo}}"
                                      class="img-tumbnail" width="100px" height="100px">
                               </td>

                                <td>
                                    <a class="btn btn-success" href="{{route('doctor.edit',['id'=> $value->id])}}"> Edit   </a>
                                    <a class="btn btn-danger" > cancel  </a>
                                  </td>
                              </tr>




                <div class="m-4">

                @if (Session::has('message'))

                    <div class="alert alert-success alert-dismissible fade show">
                         {{Session::get('message')}}
                    </div>

                @endif


                    @endforeach

                </tbody>
            </table>
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

