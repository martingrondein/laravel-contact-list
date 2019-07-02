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
  <a href="{{ route('city.create')}}" class="btn btn-primary">+ Add City</a>
  <br/><br/>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>City ID</td>
          <td>Title</td>
          <td>Created</td>
          <td>Updated</td>
          <td colspan="2">Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($city as $city1)
        <tr>

            <td>{{$city1->id}}</td>
            <td>{{$city1->title}}</td>
            <td>{{$city1->created_at}}</td>
            <td>{{$city1->updated_at }}</td>
            <td><a href="{{ route('city.edit',$city1->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('city.destroy', $city1->id)}}" method="post">
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