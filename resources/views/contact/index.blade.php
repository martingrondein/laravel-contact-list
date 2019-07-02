@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br />
  @endif
  <a href="{{ route('contact.create')}}" class="btn btn-primary">+ Add Contact</a>
  <br/><br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>User ID</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Email Address</td>
          <td>Cellphone Number</td>
          <td>City</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contact as $contact1)
        <tr>

            <td>{{$contact1->id}}</td>
            <td>{{$contact1->first_name}}</td>
            <td>{{$contact1->last_name}}</td>
            <td>{{$contact1->email}}</td>
            <td>{{$contact1->cell_phone}}</td>
            <td>{{$city->find($contact1->city)->title }}</td>
            <td><a href="{{ route('contact.edit',$contact1->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('contact.destroy', $contact1->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection