@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
@endsection
@section('content')
<section id="admission1" class="row flexbox-container" style="display:none;">
  <div class="col-xl-8 col-10 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                  <img src="{{ asset('images/pages/register.jpg') }}" alt="branding logo">
              </div>
              <div class="col-lg-6 col-12 p-0" id="cont_card">

              <section id="step2" style="display:none;">
              <div class="card rounded-0 mb-0 p-2">
                     
                      <p class="px-2">Fill In Your Programme Information.</p>
                      <div class="card-content">
                          <div class="card-body pt-0">
                          <form onsubmit="return false;">
                          {{ csrf_field() }}
                                  
                                      <div class="form-label-group">
                                      <select  id="choice1" class="select2 form-control">
                                        <option value="">-- First Choice --</option>
                                        <option value="accounting">Accounting &amp; Information Systems (BSc)</option>
                                        <option value="bba">Bachelor of Business Admin (eCommerce option) (BSc)</option>
                                        <option value="banking">Banking &amp; Finance</option>
                                        <option value="beng">Applied Electronics &amp; Systems Eng. (BEng)</option>
                                        <option value="computer_science">Computer Science (BSc)</option>
                                        <option value="economics">Economics with Computing (BSc)</option>
                                        <option value="psychology">Human Development and Psychology (BSc)</option>
                                        <option value="information_systems">Information Systems Sciences (BSc)</option>
                                        <option value="instructional">Instructional Technology (BSc)</option>
                                        <option value="management">Management with Computing (BSc)</option>
                                        <option value="theology">Theology with Management (BSc)</option>
                                    </select>

                                        
                                      </div>
                                  
                            
                                  
                                      <div class="form-label-group">
                                      <select id="choice2" class="select2 form-control">
                                        <option value="">-- Second Choice --</option>
                                        <option value="accounting">Accounting &amp; Information Systems (BSc)</option>
                                        <option value="bba">Bachelor of Business Admin (eCommerce option) (BSc)</option>
                                        <option value="banking">Banking &amp; Finance</option>
                                        <option value="beng">Applied Electronics &amp; Systems Eng. (BEng)</option>
                                        <option value="computer_science">Computer Science (BSc)</option>
                                        <option value="economics">Economics with Computing (BSc)</option>
                                        <option value="psychology">Human Development and Psychology (BSc)</option>
                                        <option value="information_systems">Information Systems Sciences (BSc)</option>
                                        <option value="instructional">Instructional Technology (BSc)</option>
                                        <option value="management">Management with Computing (BSc)</option>
                                        <option value="theology">Theology with Management (BSc)</option>
                                    </select>
                                          
                                      </div>


                                      <div class="form-label-group">
                                      <select id="choice3" class="select2 form-control">
                                        <option value="">-- Third Choice --</option>
                                        <option value="accounting">Accounting &amp; Information Systems (BSc)</option>
                                        <option value="bba">Bachelor of Business Admin (eCommerce option) (BSc)</option>
                                        <option value="banking">Banking &amp; Finance (BSc)</option>
                                        <option value="beng">Applied Electronics &amp; Systems Eng. (BEng)</option>
                                        <option value="computer_science">Computer Science (BSc)</option>
                                        <option value="economics">Economics with Computing (BSc)</option>
                                        <option value="psychology">Human Development and Psychology (BSc)</option>
                                        <option value="information_systems">Information Systems Sciences (BSc)</option>
                                        <option value="instructional">Instructional Technology (BSc)</option>
                                        <option value="management">Management with Computing (BSc)</option>
                                        <option value="theology">Theology with Management (BSc)</option>
                                    </select>
                                          
                                    </div>
                                
                                      <div class="form-label-group">
                                      
                                      <ul class="list-unstyled mb-0">
                                      <p class="px-2">What session do you prefer</p>
              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Morning</span>
                  </div>
                  
                </fieldset>
              </li>

              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Afternoon</span>
                  </div>
                  
                </fieldset>
              </li>

              <li class="d-inline-block mr-2">
                <fieldset>
                 <div class="vs-radio-con">
                    <input type="radio" name="radiocolor" checked value="false">
                    <span class="vs-radio">
                      <span class="vs-radio--border"></span>
                      <span class="vs-radio--circle"></span>
                    </span>
                    <span class="">Evening</span>
                  </div>
                  
                </fieldset>
              </li>
             
            </ul>
            </div>


                                  
           
                                 
                                  <button id="btn_continue" type="submit" class="btn btn-primary float-right btn-inline mb-50">Continue</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </section>


                <section id="step1">
                  <div class="card rounded-0 mb-0 p-2">
                      <div class="card-header pt-50 pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Create Account</h4>
                          </div>
                      </div>
                      <p class="px-2">Fill the below form to create a new account.</p>
                      <div class="card-content">
                          <div class="card-body pt-0">
                              <form onsubmit="return false;">
                              {{ csrf_field() }}
                              <div class="row">
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="first_name" class="form-control" placeholder="First Name" name="fname-column">
                                          <label for="first-name-column">First Name</label>
                                      </div>
                                  </div>
                            
                                  <div class="col-md-6 col-12">
                                      <div class="form-label-group">
                                          <input type="text" id="last_name" class="form-control" placeholder="Last Name" name="lname-column">
                                          <label for="last-name-column">Last Name</label>
                                      </div>
                                </div>
                                </div>

                            
                                  <div class="form-label-group">
                                      <input type="text" id="email" class="form-control" placeholder="Email">
                                      <label for="inputEmail">Email</label>
                                  </div>
                                  <div class="form-label-group">
                                      <input type="password" id="password" class="form-control" placeholder="Password">
                                      <label for="inputPassword">Password</label>
                                  </div>
                                  <div class="form-label-group">
                                      <input type="password" id="cpassword" class="form-control" placeholder="Confirm Password">
                                      <label for="inputConfPassword">Confirm Password</label>
                                  </div>
                                  <div class="form-group row">
                                      <div class="col-12">
                                          <fieldset class="checkbox">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                              <input type="checkbox" checked>
                                              <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                  <i class="vs-icon feather icon-check"></i>
                                                </span>
                                              </span>
                                              <span style="display:none;" class=""> I accept the terms & conditions.</span>
                                            </div>
                                          </fieldset>
                                      </div>
                                  </div>
                                  <a style="display:none;"  href="auth-login" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                  <button id="btn_admission" type="submit" class="btn btn-primary float-right btn-inline mb-50">Continue</button>
                              </form>
                          </div>
                      </div>
                  </div>
                  </section>
              </div>
          </div>
      </div>
  </div>
  </section>

  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true" data-keyboard="false" data-backdrop="static">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  
               	 <div class="card card-primary card-success card-outline" style="padding: 15px;">
                    <div class="card-header">
                        <h3 class="card-title">Hello <strong>Username</strong>! <small>All fields marked <label><span
                                        class="required">*</span></label> are required</small></h3>
                    </div>

                    <div class="mailbox-read-message">


                        <p> Your application is in progress. </p>
                        <p>Before you begin completing your online application the Regent University College of Science and Technology,
                            <strong>it is important that you review the following application requirements:</strong>
                            <p>The application requirements are as follows – each applicant must provide the relevant and correct information in</p>
                            <ul>
                                <li>SSSCE/WASSCE/O’LEVEL applicants must produce WAEC/certified certificate or results.</li>
                                <li>Applicants with other qualifications e.g. diploma/HND must endeavour to add their SSCE/O’level results/certificate to their diploma qualification.</li>
                                <li>Two recommendation forms, filled by the appropriate people.</li>
                                <li>Three passport photographs, taken within the past three months, without any head covering.
                                </li>
                                <li>A copy of the receipt of payment of this application.</li>
                                <li>A signed Honour pledge.</li>
                            </ul>
                            <p>Please not that until we have received all the requirements your application shall not be processed. </p>
                            <p>
                            </p>
                            <h3>Regent-Ghana Societies</h3>
                            The University Community is divided into five groups (in the future, they will be Residential halls) called Societies: Anim Society, McKweon Society, Nkrumah Society, Ubuntu Society &amp; John Stott Society. You will be assigned a Society to belong to
                            and participate in its various activities.
                            <p>
                            </p>
                            <h3>Referee Instructions</h3>
                            Attached to this application form are two reference forms to be filled by your referees. One of these referees must endorse a photograph. Regent-Ghana does not accept recommendations from family members or relatives.
                            <br> We accept three types of Referees:
                            <p></p>
                            <ul>
                                <li>A Clergy Recommendation (someone who understands your spiritual goals and objectives such as a pastor, priest, or religious/moral leader),</li>
                                <li>A Faculty Recommendation (someone who is in the Academic field, preferably someone who taught you), </li>
                                <li>Employer/Professional Recommendation (someone who has currently or formerly employed you or someone in any Professional field).</li>
                            </ul>
                            <p>Please give the recommendation forms to either of the above-mentioned people. Their signatures should be across the envelope flap and should be submitted with the completed application form. It is our normal practice to contact
                                referees on receipt of your application.</p>

                            <p>&nbsp;</p>
                            <div class="card-footer">

                                <div class="float-right ">
								<button id="startApplication" type="button" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Start Application</button>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
			</div>

						</div>

					</div>


				
                  </div>
                  
                </div>
              </div>
            </div>

@endsection
