@extends ('layouts.app')
@section ('content')

<!DOCTYPE html>

      <div class="row">
        <div class="col-md-12">
          <h2>{{$post ->tittle}}</h2>
          <p>{{$post ->description}}</p>
          <p>Posteado {{ $post ->created_at->diffforhumans() }}</p>

        </div>
      </div>
@endsection
