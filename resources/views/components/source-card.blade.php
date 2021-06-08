<div {{$attributes}}>
        <div class="card-body">
          <img src="/img/user.png" class="source-image">
          <h4 class="source-name">{{$source->name}}</h4>
          <div class="source-widgets">
            <span class="source-title"><i class="fa fa-briefcase"></i> {{$source->title}}</span>
            <span class="source-company"><i class="fa fa-building"></i> {{$source->company}}</span>
          </div>
          <p class="source-bio">{{$source->bio}}</p>
          @if(Auth::user()->is_admin ==1)
          <form action="/source/{{$source->id}}" method="POST">
         @csrf
         <div class="btn-group" style="display: table; margin:auto;">
         <a href="/source/{{$source->id}}/edit" class="btn btn-sm btn-info">Edit</a>
         <input type="hidden" name="_method" value="DELETE">
         <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </div>
         </form>
         @endif
        </div>
      </div>