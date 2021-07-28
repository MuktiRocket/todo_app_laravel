@extends('layout.app')
@section('body')
<div id="create">
    <a href="todo/create" class="btn btn-primary">Create</a>
    <h1><hr> Todo List <hr>
        </h1>
</div>
<center> 
    <div class="col-lg-4 col-lg-offset-4">  
     
     <ul class="list-group">
          @foreach ($todos as $todo)
          <li class="list-group-item"> 
            <b>{{$todo -> body}}</b>
            <br>
              <span class="pull-right">{{$todo -> created_at -> diffForHumans()}}</span>
          </li>
          @endforeach
      </ul>
      <br><br>
    </div>
</center>
@endsection