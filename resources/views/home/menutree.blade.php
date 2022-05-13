@foreach($children as $submenu)

    <div class="dropdown-menu">
        <a href="{{route('menucontents',['id'=>$submenu->id,'slug'=>$submenu->title])}}"
           class="dropdown-item">{{$submenu->title}}</a>
    </div>
@endforeach
