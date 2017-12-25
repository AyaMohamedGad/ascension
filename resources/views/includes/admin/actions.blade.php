<div class="action-buttons">
    @foreach ($actions as $action)
        <a title="{{$action->tooltip}}"
           @if($action->color->type == 'class')
            {{$class = $action->color->value}}
           @elseif($action->color->type == 'hex')
           style="background-color: {{'#'.$action->color->value}}"
           @endif
           class="{{$class}}"
           data-link="{{sprintf($action->link, $row->id)}}"
           href="{{sprintf($action->link, $row->id)}}">
            @if($action->icon->type == 'class')
                <i class="{{$action->icon->value}}" data-link="{{sprintf($action->link, $row->id)}}"></i>
            @endif
            {{$action->name}}
        </a>
    @endforeach
</div>