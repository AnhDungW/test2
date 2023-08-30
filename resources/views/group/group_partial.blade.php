@foreach ($group as $item)

<h1>{{ $item->name }}</h1>
@if ($item->children->count() > 0)
    
    <ul>       
        @include('group.group_partial', ['group' => $item->children])
    </ul>
@endif

@endforeach