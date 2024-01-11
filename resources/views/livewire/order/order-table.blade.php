<div class="container-md">
    <x-gt-input wire:model.live.debounce.500="search" for="search" Placeholder="Search by email or order #...">
        <x-slot name="leadingAddon">
            <x-gt-icon-search />
        </x-slot>
    </x-gt-input>
    <table>
        <thead>
            <tr>
                <x-gt-table.th> Order # </x-gt-table.th>
                <x-gt-table.th> Status </x-gt-table.th>
                <x-gt-table.th> Customer </x-gt-table.th>
                <x-gt-table.th> Date </x-gt-table.th>
                <x-gt-table.th class="tar"> Amount </x-gt-table.th>
            </tr>
        </thead>
        <tbody wire:loading.class="opacity-05" class="divide-y">
            @forelse($orders as $order)
                <tr wire:key="{{ $order->id }}">
                    <td> {{ $order->number }} </td>
                    <td>
                        <div class="inline-flex rounded-full txt-xs py-0125 px-05 opacity-08 {{ $order->status->color() }}">{{ $order->status->label() }}</div>
                    </td>
                    <td> {{ $order->email }} </td>
                    <td> {{ $order->ordered_at }} </td>
                    <td class="tar"> ${{ $order->amount }} </td>
                </tr>
            @empty
                <tr>
                    <td class="pxy fw7">No records found...</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $orders->links('gotime::pagination.livewire') }}

</div>
