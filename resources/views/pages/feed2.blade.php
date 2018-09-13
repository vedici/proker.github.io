@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row shadow-sm" style="background-color:#eceff1; height: 100px;">
            <div class="container">
                <div class="row text-center" style="margin-top:25px;">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <h1><a href="#" style="text-decoration:none;">CATEGORY</a></h1>
                    </div>
                    <div class="col-md-1">

                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                  <div class="col-md-3">
                    <div class="card rounded-0">
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item"><span class="font-weight-bold">Followed Seller</span></li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                          <li class="list-group-item">Cras justo odio</li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                    <!-- Card Posting -->
                    <div class="col-md-6">
                      <!-- List Posting -->
                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>

                      <div class="card rounded-0" style="margin-bottom:15px;">
                        <div class="card-body">
                          <div class="row" style="border-bottom:solid 1px #d4d7db; padding:5px;">
                            <div class="col-md-2">
                              <img src="{{ URL::asset('/img/sample.jpg') }}" class="img-responsive" style="width:50px;height:50px;"/>
                            </div>
                            <div class="col-md-10">
                              <span class="">Denning & Fourcade</span>
                            </div>
                          </div>
                          <div class="row" style="margin-top:10px; padding:5px;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                          </div>
                        </div>
                      </div>
                      <!---->
                    </div>
                    <!---->
                    <div class="col-md-3">
                      <div class="card rounded-0">
                        <div class="card-body">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><span class="font-weight-bold">Active Seller</span></li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
