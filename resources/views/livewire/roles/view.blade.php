@section('title', __('Roles'))
	<div class="row justify-content-center">
		<div class="col-md-12">
            @if (session()->has('message'))
             <div class="demo-spacing-0">
                <div wire:poll.4s  class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                    <div class="alert-body">
                        {{ session('message') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
            @endif
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col-sm-12">
							<div class="btn-group mb-2 float-end">
								<div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createDataModal">
									<i class="fa fa-plus"></i>  Add Roles 
								</div>
							</div>
						</div>
					</div>

                    
                        <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar role">
                
				

				</div>

				<div class="card-body">
						@include('livewire.roles.create')
						@include('livewire.roles.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm table-hover">
						<thead class="thead">
							<tr class="text-center"> 
								<td>#</td> 
								<th>Name</th>
								
								<th>OPCIONES</th>
							</tr>
						</thead>
						<tbody>
							@foreach($roles as $row)
							<tr class="text-center">
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->name }}</td>
								
								<td width="200">
								<div class="btn-group">
									
								
									<a data-bs-toggle="modal" data-bs-target="#updateModal" class="btn btn-primary text-white" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="btn btn-danger text-white" onclick="confirm('Confirm Delete Role id {{$row->id}}? \nDeleted Roles cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $roles->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
