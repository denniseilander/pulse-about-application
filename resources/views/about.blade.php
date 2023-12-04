<x-pulse::card :cols="$cols" :rows="$rows" :class="$class">
    <x-pulse::card-header
        name="Application information"
        title="About the application"
        details="Information about the application."
    >
        <x-slot:icon>
            <x-pulse-about-application::icons.laravel />
        </x-slot:icon>
    </x-pulse::card-header>

    <x-pulse::scroll :expand="$expand" wire:poll.5s="">
        <div class="min-h-full flex flex-col bg-red-500">
            @foreach ($information as $category => $items)
                <x-pulse::table class="h-6 mt-2">
                    <colgroup>
                        <col width="80%" />
                        <col width="20%" />
                    </colgroup>
                    <x-pulse::thead>
                        <tr>
                            <x-pulse::th>{{ ucfirst($category) }}</x-pulse::th>
                            <x-pulse::th class="text-right"></x-pulse::th>
                        </tr>
                    </x-pulse::thead>
                    <tbody>
                        @foreach ($items as $key => $value)
                            <tr class="h-2 first:h-0"></tr>
                            <tr wire:key="log-file-{{ $key }}">
                                <x-pulse::td>
                                    <div class="flex items-center" title="{{ $key }}">{{ str($key)->headline() }}</div>
                                </x-pulse::td>
                                <x-pulse::td numeric class="text-gray-700 dark:text-gray-300 font-bold">
                                    {{ is_array($value) ? implode(', ', $value) : $value }}
                                </x-pulse::td>
                            </tr>
                        @endforeach
                    </tbody>
                </x-pulse::table>
            @endforeach
        </div>
    </x-pulse::scroll>
</x-pulse::card>