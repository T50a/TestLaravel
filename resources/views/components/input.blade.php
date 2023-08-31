@props(['name'])

<div>
    {{ ucfirst($name) }}: <input name={{ $name }} value="{{ old($name) }}">
    @error($name)
    <div style='color:red'>{{ $message }}</div>
    @enderror
</div>
