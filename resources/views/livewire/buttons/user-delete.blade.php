<div class="p-2 rounded-md border-2 border-red-500">
    <a class="cursor-pointer"
       wire:click="confirmDeletion"
       wire:loading.attr="disabled">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
             class="w-6 h-6 text-red-500">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
        </svg>
    </a>
    <x-jet-dialog-modal wire:model="confirmingDeletion">
        <x-slot name="title">
            {{ __('Kullanıcı Sil') }}
        </x-slot>
        <x-slot name="content">
            {{ __('Silmek istediğinize eminmisiniz!') }}
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button
                wire:click="$toggle('confirmingDeletion')"
                wire:loading.attr="disabled">
                {{ __('Vazgeç!') }}
            </x-jet-secondary-button>
            <x-jet-danger-button
                wire:click="delete"
                wire:loading.attr="disabled">
                {{ __('SİL') }}
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
