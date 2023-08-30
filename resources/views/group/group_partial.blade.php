@foreach ($group as $item)

<h1>{{ $item->name }}</h1>
@if ($item->children->count() > 0)
    
    <li>       
        @include('group.group_partial', ['group' => $item->children])
    </li>
@endif

@endforeach