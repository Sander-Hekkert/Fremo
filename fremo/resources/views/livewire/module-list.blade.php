<!-- resources/views/livewire/module-list.blade.php -->

<div>
    <h2>Select Modules</h2>

    <ul>
        @foreach ($modules as $module)
            <li>
                <input type="checkbox" wire:model="selectedModules" value="{{ $module->id }}" id="module_{{ $module->id }}">
                <label for="module_{{ $module->id }}">{{ $module->naam }}</label>
            </li>
        @endforeach
    </ul>

    <button wire:click="addModule($selectedModules)">Add Selected Modules</button>