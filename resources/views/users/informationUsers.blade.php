@extends('layouts.scrtrDoctorApp')
@section('content')
<div class="page-wrapper">
	<div class="content">
			<div class="row">
					<div class="col-sm-12">
							<h4 class="page-title">Plus Informations</h4>
					</div>
			</div>
			{{  csrf_field() }}
			@foreach($user as $p)
				@foreach($users as $u)
			  	@if($typeUser == 'patient')
					<div class="card-box">
						<h3 class="card-title">Basic Informations</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="profile-basic">
									<div class="row">
										<div class="col-md-3">
											<label class="focus-label">First Name</label>
											<input type="text" class="form-control floating"  value="{{$p->nom}}"disabled>
										</div>
										<div class="col-md-3">
											<label class="focus-label">Last Name</label>
											<input type="text" class="form-control floating"  value="{{$p->prenom}}"disabled>
										</div>
										<div class="col-md-3">
											<label class="focus-label">Gender</label>
											<input type="text" class="form-control floating " value="{{$p->gender}}"disabled>
										</div>
									</div>
									<div style="padding:20px;"></div>
									<div class="row">
										<div class="col-md-3">
											<label class="focus-label">Ville</label>
											<input type="text" class="form-control floating"  value="{{$p->ville}}"disabled>
										</div>
										<div class="col-md-3">
											<label class="focus-label">Num_Secrurite_Social</label>
											<input type="text" class="form-control floating " value="{{$p->Num_Secrurite_Social}}" disabled>
										</div>
										<div class="col-md-3">
											<label class="focus-label">date_naiss</label>
											<input type="text" class="form-control floating " value="{{$p->date_naiss}}" disabled>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-box">
						<h3 class="card-title">Contact Informations</h3>
						<div class="row">
							<div class="col-md-6">
								<label class="focus-label">Email</label>
								<input type="text" class="form-control floating"  value="{{$u->email}}" disabled>
							</div>
							<div class="col-md-6">
								<label class="focus-label">Phone</label>
								<input type="text" class="form-control floating"  value="{{$u->phone}}" disabled>
							</div>
						</div>
					</div>
					<div class="card-box">
						<h3 class="card-title"> Allergie & Maladie Chronique</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped custom-table">
										<tbody>
											<tr>
												<th>Maladie Chronique:</th>
												<td>{{$p->maladie_chronique}}</td>
											</tr>
										</tbody>
										<tbody>
											<tr>
												<th>Allergie:</th>
												<td>{{$p->allergie}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			        	</div>
			        </div>
					<div class="card-box">
						<h3 class="card-title"> Antecedent Informations</h3>
						<div class="row">
							<div class="col-md-3">
								<b>{{$p->antecedent}}</b>
							</div>
						</div>
					</div>
					<div class="card-box">
						<h3 class="card-title"> Commantaire: </h3>
						<div class="row">
							<div class="col-md-3">
								<b>{{$p->commentaire}}</b>
							</div>
						</div>
					</div>
					<div class="card-box">
						<h3 class="card-title"> RDV: </h3>
						<div class="row">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-striped custom-table">
										<thead>
											<tr>
												<th>Patient Name</th>
												<th>Doctor Name</th>
												<th>Date</th>
												<th>Time</th>
												<th>Status</th>
												<td>Motif</td>
											</tr>
										</thead>
										@foreach($rdvs as $r)
											@foreach($medecins as $m)
												@if($r->medecin_id == $m->id || $r->medecin_id == NULL)
													<tr>
														<td>{{strtoupper ($p->nom ) }} {{strtoupper ($p->prenom) }}</td>
														@if($r->medecin_id == NULL)
														<td>{{strtoupper ($r->nom_medecin ) }} {{strtoupper ($r->prenom_medecin) }}</td>
															@elseif($r->medecin_id != NULL)
															<td>{{strtoupper ($m->nom ) }} {{strtoupper ($m->prenom) }}</td>
															@endif
														<td>{{$r->date}}</td>
														<td>{{$r->heure_debut}} - {{$r->heure_fin}} </td>
														@if($today->diffInDays($r->date,false) > 0)
														<td><span class="custom-badge status-red">Inactive</span></td>
														@elseif($today->diffInDays($r->date,false) <= 0)
														<td><span class="custom-badge status-green">Active</span></td>
														@endif
														<td>{{$r->motif}}</td>
													</tr>
												@endif
											@endforeach
										@endforeach
									</table>
								</div>
							</div>
			        	</div>
					</div>
					<div class="card-box">
						<h3 class="card-title"> Lettre: </h3>
						<div class="row">
							<div class="col-md-3">
								<b>{{$p->commentaire}}</b>
							</div>
						</div>
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-sm-4 col-3">
									<h4 class="card-title">Ordonnance:</h4>
							</div>
							<div class="col-sm-8 col-9 text-right m-b-20">
								<a href="{{ url('Ordonnance/'.$p->id)}}" class="btn btn btn-primary btn-rounded float-right">
									<i class="fa fa-plus"></i> Add Ordonnance
								</a>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<b>{{$p->commentaire}}</b>
							</div>
						</div>
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-sm-4 col-3">
								<h4 class="card-title">Immagerie:</h4>
							</div>
							<div class="col-sm-8 col-9 text-right m-b-20">
								<a href="" class="btn btn btn-primary btn-rounded float-right">
									<i class="fa fa-plus"></i> Add Immagerie
								</a>
							</div>
						</div>
						<div class="content">
							<div id="lightgallery" class="row">
								@foreach($images as $img)
									<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
										<a href="{{asset('storage/'.$img->image)}}">
											<img class="img-thumbnail" src="{{asset('storage/'.$img->image)}}" alt="" id="c">
										</a>
									</div>
								@endforeach
							</div>
						</div>
						<div class="sidebar-overlay" data-reff=""></div>
					</div>
					@endif
					@if($typeUser == 'doctor')
					  <div class="card-box">
					    <h3 class="card-title">Basic Informations</h3>
					    <div class="row">
					        <div class="col-md-12">
					            <div class="profile-img-wrap">
					                <img class="inline-block" src="{{asset('storage/'.$p->avatar)}}" alt="user" >
					            </div>
					            <div class="profile-basic">
					              <div class="row">
					                  <div class="col-md-4">
					                        <label class="focus-label">First Name</label>
					                        <input type="text" class="form-control floating"  value="{{$p->nom}}"disabled>
					                  </div>
					                  <div class="col-md-4">
					                        <label class="focus-label">Last Name</label>
					                        <input type="text" class="form-control floating"  value="{{$p->prenom}}"disabled>
					                  </div>
					              </div>
					              <div style="padding:20px;"></div>
					                  <div class="row">
					                        <div class="col-md-4">
					                          <label class="focus-label">Gender</label>
					                          <input type="text" class="form-control floating " value="{{$p->gender}}"disabled>
					                        </div>
					                        <div class="col-md-4">
					                          <label class="focus-label">Specialite</label>
					                          <input type="text" class="form-control floating " value="{{$p->specialite}}" disabled>
					                        </div>
					                  </div>
					              </div>
					        </div>
					    </div>
					  </div>
					  <div class="card-box">
					 		<h3 class="card-title">Contact Informations</h3>
					 		<div class="row">
					 			<div class="col-md-6">
					 				<label class="focus-label">Email</label>
					 				<input type="text" class="form-control floating"  value="{{$u->email}}" disabled>
					 			</div>
					 			<div class="col-md-6">
					 				<label class="focus-label">Phone</label>
					 				<input type="text" class="form-control floating"  value="{{$u->phone}}" disabled>
					 			</div>
					 		</div>
					  </div>
					  <div class="card-box">
					 		<h3 class="card-title">Appointment</h3>
					 		<div class="row">
					 			<div class="row">
				                    <div class="col-lg-12">
				                        <div class="card-box mb-0">
				                            <div class="row">
				                                <div class="col-md-12">
				                                    <div id="calendar"></div>
				                                </div>
				                            </div>
				                        </div>
				                        <div class="modal fade none-border" id="event-modal">
				                            <div class="modal-dialog">
				                                <div class="modal-content modal-md">
				                                    <div class="modal-header">
				                                        <h4 class="modal-title">Add Event</h4>
														<button type="button" class="close" data-dismiss="modal">&times;</button>
				                                    </div>
				                                    <div class="modal-body"></div>
				                                    <div class="modal-footer text-center">
				                                        <button type="button" class="btn btn-primary submit-btn save-event">Create event</button>
				                                        <button type="button" class="btn btn-danger btn-lg delete-event" data-dismiss="modal">Delete</button>
				                                    </div>
				                                </div>
				                            </div>
				                        </div>
				                    </div>
				                </div>
					 		</div>
					  </div>
					@endif
					@if($typeUser == 'secretarie')
							<div class="card-box">
								<h3 class="card-title">Basic Informations</h3>
								<div class="row">
									<div class="col-md-12">
										<div class="profile-img-wrap">
											<img class="inline-block" src="{{asset('storage/'.$p->avatar)}}" alt="user" >
										</div>
										<div class="profile-basic">
											<div class="row">
												<div class="col-md-4">
													<label class="focus-label">First Name</label>
													<input type="text" class="form-control floating"  value="{{$p->nom}}"disabled>
												</div>
												<div class="col-md-4">
													<label class="focus-label">Last Name</label>
													<input type="text" class="form-control floating"  value="{{$p->prenom}}"disabled>
												</div>
											</div>
											<div style="padding:20px;"></div>
											<div class="row">
												<div class="col-md-4">
													<label class="focus-label">Gender</label>
													<input type="text" class="form-control floating " value="{{$p->gender}}"disabled>
												</div>
											</div>
										</div>
									</div>
								</div>
							 </div>
							 <div class="card-box">
								<h3 class="card-title">Contact Informations</h3>
								<div class="row">
									<div class="col-md-6">
										<label class="focus-label">Email</label>
										<input type="text" class="form-control floating"  value="{{$u->email}}" disabled>
									</div>
									<div class="col-md-6">
										<label class="focus-label">Phone</label>
										<input type="text" class="form-control floating"  value="{{$u->phone}}" disabled>
									</div>
								</div>
							</div>
							@endif
					@endforeach
			  @endforeach
  		</div>
	</div>
@endsection
