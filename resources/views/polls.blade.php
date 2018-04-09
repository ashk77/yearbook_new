<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>YB|Polls</title>

	<!-- Bootstrap core CSS -->

	<link rel="stylesheet" type="text/css" href="http://www.sac.iitkgp.ac.in/yearbook_files/css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="http://www.sac.iitkgp.ac.in/yearbook_files/css/business-casual.min.css" rel="stylesheet">


	<link rel="stylesheet" type="text/css" href="http://www.sac.iitkgp.ac.in/yearbook_files/css/autocomplete.css">
	<script src="http://www.sac.iitkgp.ac.in/yearbook_files/js/autocomplete.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">


	<style type="text/css">

	.dropdown-menu{
		top: 60px;
		right: 0px;
		left: unset;
		width: 460px;
		box-shadow: 0px 5px 7px -1px #c1c1c1;
		padding-bottom: 0px;
		padding: 0px;
	}
	.dropdown-menu:before{
		content: "";
		position: absolute;
		top: -20px;
		right: 12px;
		border:10px solid #343A40;
		border-color: transparent transparent #343A40 transparent;
	}
	.head{
		padding:5px 15px;
		border-radius: 3px 3px 0px 0px;
	}
	.notification-box{
		padding: 10px 0px; 
	}
	.bg-gray{
		background-color: #eee;
	}
	@media (max-width: 640px) {
		.dropdown-menu{
			top: 50px;
			left: -16px;  
			width: 290px;
		} 
		.nav{
			display: block;
		}
		.nav .nav-item,.nav .nav-item a{
			padding-left: 0px;
		}
		.message{
			font-size: 13px;
		}
	}
</style>


<style type="text/css">
@font-face {
	font-family: 'Century gothic';
	src: url('font.ttf');
}
#modal1{
	overflow: hidden;
}

table{
	table-layout: fixed;
}
.btn{
	width: 180px;
}
body{

	font-family: Century gothic;
}
.caption{
	margin-top: -40px;
	background-color: #26a69a;
}
</style>



</head>

<body>
	<!-- Navigation--> 
	<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="background-color: rgba(67,100,107,0.55);">
		<a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a>
		<div class="container">
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="http://www.sac.iitkgp.ac.in">Yearbook</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item px-lg-6">

						<form action="/yearbook/search/" method="POST" class="form-inline">
							{{ csrf_field() }}
							<div class="form-group" >
								<input type="text" name="search" required="required" id="search" class="form-control" placeholder="Search your friend here">
							</div>
							<div class="form-group" style="margin-left: 8px;">
								<button type="submit" class="btn btn-default" style="margin-top: 0px;">Search</button>
							</div>
						</form>
					</li>
					<li class="nav-item px-lg-3">
						<a class="nav-link text-uppercase text-expanded" href="/yearbook/home">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item px-lg-3">
						<a class="nav-link text-uppercase text-expanded" href="/yearbook/trending">Trending</a>
					</li>
					<li class="nav-item  px-lg-3">
						<a class="nav-link text-uppercase text-expanded" href="/yearbook/profile_index">{{Auth::user()->name}}</a>
					</li>
					<li class="nav-item active px-lg-3 dropdown"  data-step="9" data-intro=" Itch List ">
						<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-opencart"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-right" >
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/bucket">Fill the itch list</a>
							</li>
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/viewbucket">View itch list</a>
							</li>


						</ul>
					</li>
					<li class="nav-item px-lg-3 dropdown">
						<a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-cog"><span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right" >
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/details">Edit Details</a>
							</li>
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/changepassword">Change Password </a>
							</li>
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/classmap">Class Map<span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></a>
							</li>
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/polls">Polls<span class="badge badge-danger" style="bottom: 8px;position: relative;right: -7px;">new</span></a>
							</li>
							<li class="head text-dark bg-light">
								<a class="nav-link text-dark" href="/yearbook/logout">Logout </a>
							</li>

						</ul>
					</li>
					<li class="nav-item px-lg-3 dropdown">
						<a class="nav-link text-light" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" >

							@if(count($notifications))
							<i class="fa fa-bell" style="color: blue;">
								<span lass="badge" style="position: relative; top: 6px; left: -6px;color: white; font-size: 19px;">{{count($notifications)}}</span>
							</i>
							@else
							<i class="fa fa-bell"></i>
							@endif

						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li class="head text-light bg-dark">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-12">
										<span>Notifications ({{count($notifications)}})</span>

									</div>
								</li>
								@foreach($notifications as $notification)
								<a href="/yearbook/read/{{$notification['id']}}">
									<li class="notification-box">
										<div class="row">
											@php
											$pic = App\User::where('name',$notification['user'])->pluck('pro_pic');
											@endphp  
											<div class="col-lg-3 col-sm-3 col-3 text-center">
												<img src="../{{$pic[0]}}" class="w-50 rounded-circle">
											</div> 
											<div class="col-lg-8 col-sm-8 col-8">
												<strong class="text-info">{{$notification['user']}}</strong>
												<div>
													{{$notification['views']}}
												</div>
												<small class="text-warning">{{$notification['created_at']}}</small>
											</div>    
										</div>
									</li>
								</a>
								@endforeach           
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>




		<section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="cta-inner text-center rounded">
							<h2 class="section-heading mb-4">
								<span class="section-heading-upper"></span>
								<span class="section-heading-lower">POLLS</span>
							</h2>
							<p class="mb-0">Who is the Maggu of your batch?<br>

								Who is the Singer of your batch? <br>
							Vote for them and you'll be felicitated on Alvida!</p>
							<br>

							<!-- that’s all folks! -->
						</div>
					</div>
				</div>

			</div>


		</section>
		@if(!empty($polls))
		<section class="page-section cta" style="background-color: #e1e4e4;">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="text-center rounded">
							<h2 class="section-heading mb-4">
								<span class="section-heading-upper"></span>
								<span class="section-heading-lower"></span>
							</h2>
							<ul>
								<li style="list-style: none;">
									<form action="/yearbook/polls/1" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">1. Arnold Schwarzenegger of the batch</label>
											<input type="text" name="polls1" required="required" id="polls1" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/2" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">2. Friendzoned of the batch</label>
											<input type="text" name="polls2" required="required" id="polls2" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/3" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">3. Tom Cruise of the Batch</label>
											<input type="text" name="polls3" required="required" id="polls3" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/4" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">4. Maggu of the Batch</label>
											<input type="text" name="polls4" required="required" id="polls4" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/5" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">5. Charlie Chaplin of the batch 
											</label>
											<input type="text" name="polls5" required="required" id="polls5" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/6" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">6. Zero attendance wala of the batch
											</label>
											<input type="text" name="polls6" required="required" id="polls6" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/7" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">7. Bandi Stud </label>
											<input type="text" name="polls7" required="required" id="polls7" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/8" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">8. Tempo Of The Batch</label>
											<input type="text" name="polls8" required="required" id="polls8" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/9" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">9. Mr. Spring Fest
											</label>
											<input type="text" name="polls9" required="required" id="polls9" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/10" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">10. Ms. Spring Fest
											</label>
											<input type="text" name="polls10" required="required" id="polls10" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/11" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">11. Voice Of the Batch
											</label>
											<input type="text" name="polls11" required="required" id="polls11" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/12" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">12. Khadoos of the batch
											</label>
											<input type="text" name="polls12" required="required" id="polls12" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/13" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">13. Tharki of the batch
											</label>
											<input type="text" name="polls13" required="required" id="polls13" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/14" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">14. Neta of the Batch 
											</label>
											<input type="text" name="polls14" required="required" id="polls14" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/15" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">15. Prodigy of the batch
											</label>
											<input type="text" name="polls15" required="required" id="polls15" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/16" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">16. Tindernath of the Batch
											</label>
											<input type="text" name="polls16" required="required" id="polls16" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/17" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">17. Michael Jackson of the Batch
											</label>
											<input type="text" name="polls17" required="required" id="polls17" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/18" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">18. 
												Wikipedia of the batch
											</label>
											<input type="text" name="polls18" required="required" id="polls18" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/19" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">19. Marilyn Monroe of the Batch 
											</label>
											<input type="text" name="polls19" required="required" id="polls19" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/20" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">20. Chandler of the batch
											</label>
											<input type="text" name="polls20" required="required" id="polls20" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section>
		@else
					<section class="page-section cta" style="background-color: #e1e4e4;">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="text-center rounded">
							<h2 class="section-heading mb-4">
								<span class="section-heading-upper"></span>
								<span class="section-heading-lower"></span>
							</h2>
							<ul>
								<li style="list-style: none;">
									<form action="/yearbook/polls/1" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">1. Arnold Schwarzenegger of the batch</label>
											<input type="text" name="polls1" required="required" id="polls1" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/2" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">2. Friendzoned of the batch</label>
											<input type="text" name="polls2" required="required" id="polls2" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/3" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">3. Tom Cruise of the Batch</label>
											<input type="text" name="polls3" required="required" id="polls3" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/4" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">4. Maggu of the Batch</label>
											<input type="text" name="polls4" required="required" id="polls4" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/5" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">5. Charlie Chaplin of the batch 
											</label>
											<input type="text" name="polls5" required="required" id="polls5" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/6" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">6. Zero attendance wala of the batch
											</label>
											<input type="text" name="polls6" required="required" id="polls6" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/7" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">7. Bandi Stud </label>
											<input type="text" name="polls7" required="required" id="polls7" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/8" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">8. Tempo Of The Batch</label>
											<input type="text" name="polls8" required="required" id="polls8" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/9" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">9. Mr. Spring Fest
											</label>
											<input type="text" name="polls9" required="required" id="polls9" class="form-control" placeholder="Search your friend here" >
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/10" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">10. Ms. Spring Fest
											</label>
											<input type="text" name="polls10" required="required" id="polls10" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/11" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">11. Voice Of the Batch
											</label>
											<input type="text" name="polls11" required="required" id="polls11" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/12" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">12. Khadoos of the batch
											</label>
											<input type="text" name="polls12" required="required" id="polls12" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/13" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">13. Tharki of the batch
											</label>
											<input type="text" name="polls13" required="required" id="polls13" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/14" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">14. Neta of the Batch 
											</label>
											<input type="text" name="polls14" required="required" id="polls14" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/15" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">15. Prodigy of the batch
											</label>
											<input type="text" name="polls15" required="required" id="polls15" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/16" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">16. Tindernath of the Batch
											</label>
											<input type="text" name="polls16" required="required" id="polls16" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/17" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">17. Michael Jackson of the Batch
											</label>
											<input type="text" name="polls17" required="required" id="polls17" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/18" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">18. 
												Wikipedia of the batch
											</label>
											<input type="text" name="polls18" required="required" id="polls18" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/19" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">19. Marilyn Monroe of the Batch 
											</label>
											<input type="text" name="polls19" required="required" id="polls19" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
								<hr>
								<li style="list-style: none;">
									<form action="/yearbook/polls/20" method="POST" class="form-horizontal">
										{{ csrf_field() }}
										<div class="form-group" >
											<label class="control-label col-sm-2" for="polls">20. Chandler of the batch
											</label>
											<input type="text" name="polls20" required="required" id="polls20" class="form-control" placeholder="Search your friend here" ">
										</div>
										<div class="form-group" style="margin-left: 8px;">
											<button type="submit" class="btn btn-default" style="margin-top: 0px;">Submit</button>
										</div>
									</form>


								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</section>
		@endif

		<footer class="footer text-faded text-center py-5">
			<div class="container">
				<p class="m-0 small">Copyright &copy; Yearbook 2018</p>
				<p class="m-0 small"><a target="_blank" href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a></p>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	</body>

	</html>
	<script type="text/javascript">

		function call($id)
		{
			alert($id);
		}
		$('.approve').click('.approve', function(){


			var rollno = $(this).attr('id');
			var no = $(this).attr('data-no');
			var id = $(this).attr('data-id');
			var query= id;

			window.location="/approve/"+id;

		}); 
		$('.disapprove').click('.disapprove',function(){

			var rollno = $(this).attr('id');
			var no = $(this).attr('data-no');
			var id = $(this).attr('data-id');

			var query= '1';

			window.location="/disapprove/"+id;

		}); 


	</script>
	<script type="text/javascript">
		var user = <?php echo $user;?>;
    //console.log(user[0].name);
    var names = [];
    for (var i = 0; i < user.length; i++) {
    	names[i] = user[i].name;
    }
    //console.log('names',names);
    
    $(function() {
    	$("#search").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls1").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls2").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls3").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls4").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls5").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls6").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls7").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls8").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls9").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls10").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls11").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls12").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls13").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls14").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls15").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls16").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls17").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls18").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls19").autocomplete({
    		source:[names]
    	}); 
    });
    $(function() {
    	$("#polls20").autocomplete({
    		source:[names]
    	}); 
    });


</script>






