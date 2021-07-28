@extends('layout.app')
@section('body')
    <center><div id="createhead" class="col-lg-4 col-lg-offset-4"><hr><h1>Create New Todo</h1><hr>
        <form action="/todo" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label"><b>Enter A Todo</b></label>
              <textarea  class="form-control" id="entertodo" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          @if (count($errors)>0)
          <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              {{$error}}
          @endforeach
        </div>
          @endif
    </div>
    <a href="/todo" class="btn btn-danger">Back</a>
    </center>
@endsection