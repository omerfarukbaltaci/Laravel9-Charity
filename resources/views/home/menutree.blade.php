@foreach($children as $submenu)

    @if(count($submenu->children))
        <li>
            <ul class="submenu dropdown-menu">
                <li><a class="dropdown-item" href=""> {{$submenu->title}}</a></li>
            </ul>
        </li>

        @include('home.menutree',['children'=> $submenu->children])
    @else
        <li><a class="dropdown-item" href="{{route('menucontents',['id'=>$submenu->id,'slug'=>$submenu->title])}}"> {{$submenu->title}}</a></li>
    @endif

@endforeach

