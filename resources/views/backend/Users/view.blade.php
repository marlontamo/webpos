@extends ('backend/layouts.main')

@section ('content')

<h1></h1>

<section class="panel">
<img src="#">
                                      <div class="bio-graph-heading">
                                                
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>{{ $user->name }} Basic Profile</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>Name </span>: {{ $user->name }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>User Name </span>: {{ $user->name }}</p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Birthday</span>: 27 August 1987</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Country </span>: Philippines</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Occupation </span>: Employee</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>:{{ $user->email }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>: (+6283) 456 789</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Phone </span>:  (+021) 956 789123</p>
                                              </div>
                                          </div>
                                      </div>
                                    </section>
@endsection