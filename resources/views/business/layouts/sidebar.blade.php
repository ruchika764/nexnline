<div class="col-lg-4 col-xl-3 col-xxl-3 col-md-4  mb-mob-15">
							<nav class="dashboard-nav my-10 mb-md-0">
								<div class="top-main-bf">
									<div class="userinfo">
										<div class="img-edt">
											<i class="fa fa-user usericon"></i>
										</div>
										<h4> {{Auth::User()->name}} {{Auth::User()->lname}} </h4>
									</div>
								</div>
								<ul>
								    <li class="sideitem ">
										<a href="dashboard.html">
										<i class="fa fa-tachometer"></i><span>Dashboard</span>            
										</a>
									</li>
									<li class="sideitem {{ (\Request::route()->getName() =='business.waitlist') ?  'active' : '' }}">
										<a href="{{route('business.waitlist')}}">
										<i class="fa fa-clock-o"></i><span>Waitlist</span>            
										</a>
									</li>
									<li class="sideitem ">
										<a href="serving.html">
										<i class="fa fa-check-square-o"></i><span>Serving</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="bookings.html">
										<i class="fa fa-calendar-o"></i><span>Bookings</span>            
										</a>
									</li>
									<li class="sideitem ">
										<a href="messages.html">
										<i class="fa fa-comment-o"></i><span>Messages</span>            
										</a>
									</li>
									<li class="sideitem {{ (\Request::route()->getName() =='business.customers') ?  'active' : '' }}">
										<a href="{{route('business.customers')}}">
										<i class="fa fa-user-o"></i><span>Customers</span>            
										</a>
									</li>
									<li class="sideitem {{ (\Request::route()->getName() =='business.services') ?  'active' : '' }}">
										<a href="{{route('business.services')}}">
											<i class="fa fa-file-o"></i><span>Services</span>              
										</a>
									</li>
									<li class="sideitem {{ (\Request::route()->getName() =='business.resources') ?  'active' : '' }}">
										<a href="{{route('business.resources')}}">
										<i class="fa fa-cogs"></i><span>Resources</span>            
										</a>
									</li>
									<li class="sideitem">
										<a href="settings.html">
										<i class="fa fa-cog"></i><span>Settings</span>            
										</a>
									</li>
									<li class="sideitem {{ (\Request::route()->getName() =='business.profile') ?  'active' : '' }}">
										<a href="{{route('business.profile')}}">
										<i class="fa fa-user-o"></i><span>Profile</span>            
										</a>
									</li>
									<li class="sideitem ">
										<a href="{{route('business.logout')}}">
										<i class="fa fa-sign-out"></i><span>Logout</span>            
										</a>
									</li>
								</ul>
							</nav>
						</div>