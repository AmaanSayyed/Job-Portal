<div>
    @if ($allOption)
        <label for="{{$name}}" class="mb-1 flex items-center">
            <input type="radio" name="{{$name}}" id="" value="" 
            @checked(!request($name))>
            <span class="ml-2">All</span>
        </label>
    @endif
    @foreach ($optionsWithLabels as $label => $option)
    <label for="{{$name}}" class="mb-1 flex items-center">
        <input type="radio" name="{{$name}}" id="" value={{$option}}
        @checked($option=== ($value ?? request($name)))>
        <span class="ml-2">{{$label}}</span>
    </label>
    @endforeach

    @error($name)
        <p class="mt-1 text-red-500 text-sm">{{$message}}</p>
    @enderror
   
</div>