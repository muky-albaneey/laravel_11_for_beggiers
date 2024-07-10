@props(['name'])
@error($name)
<p class="text-large font-bold text-red-500 ml-1 ">{{ $message }}</p>
@enderror
