@props(['field'])

@error($field)
    <div class="text-xs mt-1 text-red-400 font-bold">{{ $message }}</div>
@enderror
