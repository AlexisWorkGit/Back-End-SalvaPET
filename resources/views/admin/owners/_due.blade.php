@if($owner['due']>0)
    <span class="text-danger text-bold">
        {{formated_price($owner['due'])}}
    </span>
@else 
    <span class="text-success">
        {{formated_price($owner['due'])}}
    </span>
@endif