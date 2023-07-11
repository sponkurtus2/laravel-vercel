@props(['disabled' => false])

<div>
    <x-input-label :for="$attributes->get('id')" :value="$attributes->get('label')" />
    <textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>{{ $slot }}</textarea>
    <x-input-error class="mt-2" :messages="$errors->get($attributes->get('name'))" />
</div>