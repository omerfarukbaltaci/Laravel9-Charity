<div>
    <input wire:model="search" name="search" type="text" class="input-search" list="mylist" placeholder="Search content..."/>
      @if(!empty($query))
          <datalist id="mylist">
              @foreach($datalist as $rs)
                  <option value="{{$rs->title}}">{{$rs->menu->title}}</option>
              @endforeach
          </datalist>
    @endif
</div>
