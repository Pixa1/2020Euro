<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="index.php">
					<img src="/src/images/logo-cropped.png" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
				@guest
                            
					<a class="nav-link pt-3" href="{{ route('login') }}">{{ __('Prijava') }}</a>
							
				@else
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name">{{Auth::user()->name}}</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="/profile"><i class="fa fa-user-md" aria-hidden="true"></i> Profil</a>
						<!-- <a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a> -->
						<a class="dropdown-item" href="/faq"><i class="fa fa-question" aria-hidden="true"></i> Pomoć</a>
						<a class="dropdown-item" href="{{ route('logout') }}" 
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
						<i class="fa fa-sign-out" aria-hidden="true"></i> Odjava</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
						</form>
					</div>
				@endguest
				</div>
			</div>	
		</div>
	</div>		
	<div class="left-side-bar">
		<div class="brand-logo">
			<img src="/src/images/logo.png" alt="">
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="/matches" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Utakmice</span>
						</a>
					</li>
					<li>
						<a href="/mybets" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Moja predviđanja</span>
						</a>
                    </li>
                    <li>
						<a href="/standings" class="dropdown-toggle no-arrow">
                            <span class="fa fa-bar-chart"></span><span class="mtext">Poredak</span>
                            <!-- <i class="icon-copy fa fa-bar-chart" aria-hidden="true"></i> -->
						</a>
					</li>
					<li>
						<a href="/faq" class="dropdown-toggle no-arrow">
							<i class="icon-copy fa fa-question-circle-o" aria-hidden="true"></i>
                            <span class="mtext">Pravila</span>
						</a>
					</li>
					@admin
					<div class="accordion" id="accordionExample">
						
							<div class="" id="headingOne">
							<h5 class="mb-0">
								
								<a class="dropdown-toggle" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<i class="icon-copy fa fa-sliders" aria-hidden="true"></i>Administracija
								</a>
							</h5>
							</div>

							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							
							<ul class="">
								<li>
									<a href="/admin" class="dropdown-toggle no-arrow">Rezultati</a>
								</li>
								<li><a href="/users" class="dropdown-toggle no-arrow">Korisnici</a></li>
							</ul>

							</div>
						
					
					</div>
<!-- 					
					<li>
						<a href="/admin" class="dropdown-toggle no-arrow">
							<i class="icon-copy fa fa-sliders" aria-hidden="true"></i>
                            <span class="mtext">Administracija</span>
						</a>
					</li> -->
					@endadmin
				</ul>
			</div>
		</div>
	</div>	
	