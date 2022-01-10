<div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
    <input wire:model="status"
           name="toggle"
           id="{{ $name.$user->id }}"
           type="checkbox"
           class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
    <label for="{{ $name.$user->id }}" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
