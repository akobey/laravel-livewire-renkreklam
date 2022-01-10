<div>
    <x-slot name="title">
        {{ __('Kullanıcılar Paneli') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kullanıcılar') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">

<div class="flex gab-4 mb-4">

    <div class="px-3 py-2 bg-indigo-500 text-white rounded flex-shrink-0">
        <a href="{{ route('users.create') }}" class="">Kullanıcı Ekle</a>
    </div>

    <div class="w-full">
        <x-alerts.message />
    </div>

</div>





                <div class="">

                    <table class="w-full divide-y divide-gray-200">
                        <thead class="font-bold text-gray-500 bg-indigo-200">
                        <tr>
                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                ID
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                KULLANICI ADI
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                KULLANICI TİPİ
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                DURUMU
                            </th>

                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                TARİH
                            </th>
                            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                EYLEM
                            </th>
                        </tr>
                        </thead>
                        <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-2 py-4 whitespace-nowrap">
                                </td>

                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $user->id }}
                                </td>

                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $user->name }}
                                </td>

                                <td class="px-2 py-4 whitespace-nowrap">
                                    <button class="uppercase text-white px-3 py-2 rounded
                                    @if($user->utype === 'admin')
                                        bg-green-500
                                        @elseif($user->utype === 'editor')
                                        bg-indigo-500
                                        @else
                                        bg-yellow-500
                                    @endif ">
                                        {{ $user->utype }}
                                    </button>
                                </td>

                                <td class="px-2 py-4 whitespace-nowrap">
            <livewire:buttons.user-status :user="$user" :name="'status'" :key="'status' . $user->id" />

                                </td>



                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $user->created_at->format('d.m.Y') }}
                                </td>

                                <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    <div class="flex justify-start space-x-1">

                                        <a href="{{ route('users.edit', ['user_id' => $user->id]) }}" class="p-1 border-2 border-yellow-500 rounded-md text-yellow-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>

                                        <a href="{{ route('users.password.edit', ['user_id' => $user->id]) }}" class="p-1 border-2 border-blue-500 rounded-md text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                            </a>
                                        <livewire:buttons.user-delete :user="$user" :key="$user->id" />
                                    </div>
                                </td>




                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

                </div>
            </div>
        </div>
    </div>
</div>
