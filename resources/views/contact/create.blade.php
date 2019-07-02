@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
    <h1>Add Contact</h1>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item" aria-current="page">Contacts</li>
          <li class="breadcrumb-item" aria-current="page">List</li>
          <li class="breadcrumb-item active" aria-current="page">Add</li>
        </ol>
    </nav>

<div class="card">
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
              <label for="name">First Names: <span class="required">*</span></label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Last Name: <span class="required">*</span></label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Email: <span class="required">*</span></label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Cellphone: <span class="required">*</span></label>
              <input type="text" class="form-control" name="cell_phone"  placeholder="3126662489"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">City: <span class="required">*</span></label>
              <!-- This should be a drop down listing the cities -->
              <select name="city" class="form-control">
                  {{-- Loop through the cities list model  --}}
                  @foreach($city as $cities)
                    {{-- Render the list, selecting the user's selected city --}}
                    <option value="{{ $cities->id}}">{{ $cities->title }}</option>
                    @endforeach
                  </select>
          </div>

          <button type="submit" class="btn btn-primary">Save & Close</button>
          <a href="/contact" class="btn btn-secondary">Cancel</a>
      </form>
  </div>
</div>
</div>
@endsection