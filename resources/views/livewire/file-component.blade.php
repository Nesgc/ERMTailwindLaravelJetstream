<div>
    <div class="container">
        <div class="d-flex align-items-center mb-3">
            <input type="text" wire:model="searchengine" class="form-control" placeholder="Search...">
            <div class="ms-2">
                <button type="button" data-toggle="modal" data-target="#FormaModal" class=" btn btn-primary btn-lg">New</button>
                  @livewire('create-unit')
            </div>
        </div>
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Age</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($files as $file)
    <tr>
      <th scope="row" class="text-center">{{ $file->id }}</th>
      <td>{{ $file->names }} </td>
      <td>{{ $file->address }}</td>
      <td>{{ $file->age }}</td>
       <td class="text-center">
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" data-toggle="modal" data-target="#Files" class="btn btn-primary rounded mx-3"   wire:click="view({{$file}})">View</button>
  <button type="button" class="btn btn-secondary rounded ">Edit</button>
  <button type="button" class="btn btn-danger rounded mx-3">Delete</button>
</div>
</td>
    </tr>

    @endforeach
   

  </tbody>
</table>
    </div>

        {{-- MOSTRAR VISTA --}}
          @include('components.dialog-modalboot')

</div>
