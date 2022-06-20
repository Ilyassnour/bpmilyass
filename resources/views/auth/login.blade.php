@extends('layouts.master2')

@section('title')
login/signup
@stop


@section('css')
<!-- Sidemenu-respoansive-tabs css -->
<link href="{{URL::asset('assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
<br><br>
		<div class="container-fluid">
	
				<!-- The image half -->
				<!-- The content half -->
				<div >
					<div class="login d-flex align-items-center py-2">
						<!-- Demo content-->
						<div class="container p-0">
						  <h2> Bien venue a BPM</h2>
								<div class="col-md-20 col-lg-20 col-xl-19 mx-auto">
									<div class="card-sigin">
										<div class="card-sigin">
											<div class="container-fluid">
                                               <div class="card">
                                                <form method="POST" action="{{ route('login') }}">
                                                 @csrf
													<div class="form-group">
													<label>Email</label>
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                     @error('email')
                                                     <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
													</div>

												 <div class="form-group">
											 	 <label>mot de passe</label> 
                                                
                                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                  @error('password')
                                                  <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                  </span>
												  @enderror
                                                  <div class="form-group row">
                                                      <div class="col-md-6 offset-md-4">
                                                           <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <label class="form-check-label" for="remember">
                                                                       {{ __('Remember me ') }}
                                                                </label>
                                                           </div>
                                                       </div>
                                                   </div>
												  </div>
                                                    <button type="submit" class="btn btn-main-primary btn-block">
                                                    {{ __('Se connecter') }}
                                                    </button>
												</form>
                             <br>
												
													 <a href="/signup" class="btn btn-main-primary btn-block"
           style="color:black"><i class=""></i> &nbsp;signup</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div><!-- End -->
					</div>
				</div><!-- End -->

              

			</div>
		</div>
@endsection
@section('js')
@endsection
