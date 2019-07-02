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
    <form method="post" action="{{ route('contact.update', $contact->id) }}">
        @method('PATCH')
          <div class="form-group">
              @csrf
              <label for="name">First Name:</label>
              <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }}>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Last Name:</label>
              <input type="text" class="form-control" name="last_name" value={{ $contact->last_name }}>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Email Address:</label>
              <input type="text" class="form-control" name="email" value={{ $contact->email }}>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Cellphone Number:</label>
              <input type="text" class="form-control" name="cell_phone" value={{ $contact->cell_phone }}>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">City:</label>
              <select name="city" class="form-control">
                {{-- Loop through the cities list model  --}}
                @foreach($city as $cities)
                  {{-- Render the list, selecting the user's selected city --}}
                  <option value="{{ $cities->id}}" {{ $contact->city == $cities->id ? 'selected="selected"' : '' }}>{{ $cities->title  }}</option>
                  @endforeach
                </select>
          </div>

          <button type="submit" class="btn btn-primary">Save & Close</button>
          <a href="/contact" class="btn btn-secondary">Cancel</a>
          <button type="reset" class="btn btn-tertiary">Restore Defaults</button>
      </form>
  </div>
</div>
@endsection