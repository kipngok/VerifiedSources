<div {{$attributes}}>
        <div class="card-body">
          <img src="/img/user.png" class="source-image">
          <h4 class="source-name">{{$source->name}}</h4>
          <div class="source-widgets">
            <span class="source-title"><i class="fa fa-briefcase"></i> {{$source->title}}</span>
            <span class="source-company"><i class="fa fa-building"></i> {{$source->company}}</span>
          </div>
        </div>
        <div class="card-footer">
        	<a class="btn btn-sm btn-warning btn-block" href="/source/{{$source->id}}">View contacts <i class="fa fa-chevron-right"></i></a>
        </div>
      </div>