<div>
    @foreach ($data->data as $item)
        <livewire:single-material :item="$item" :key="$item->id">
    @endforeach
</div>
