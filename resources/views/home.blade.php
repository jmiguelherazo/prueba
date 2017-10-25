@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Post</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                     <form action="{{url('/post')}}" method="POST">
               {{csrf_field()}}
       
               <div class="form-group">
              <label for="comment">Escribe tu Post</label>
                 <input class="form-control" name="comment" placeholder="Escribe tu Post" type="text">
               </div>
                      
               <input class="btn btn-primary" type="submit" value="Done">
               
           </form>
            <br>
            <h5>List de Post</h5>
            <hr>
                    <ol>
                        @forelse($posts as $post)
                        
                            <li class="lead">{{$post->post}}</li>
                        
                        @empty
                            <h4>No Hay Post</h4>
                        @endforelse
                    </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
