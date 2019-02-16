@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Contact
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contact.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>          

          <div class="form-group">
              @csrf
              <label for="name">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Cellphone:</label>
              <input type="text" class="form-control" name="cell_phone"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">City:</label>
              <!-- This should be a drop down listing the cities -->
              <input type="text" class="form-control" name="city"/>              
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection