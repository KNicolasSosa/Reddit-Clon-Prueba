


@extends ('layouts.app')
@section ('content')


<!DOCTYPE html>

  @foreach ($posts as $post)


      <div class="row">
        <div class="col-md-12">
          <h2><a href="{{ route('post_path', ['post' => $post -> id]) }}"> {{$post -> tittle}}</a></h2>
          <p>Posteado {{$post -> created_at-> diffforhumans() }}</p>
        </div>
      </div>
      <hr>
    @endforeach
@endsection
