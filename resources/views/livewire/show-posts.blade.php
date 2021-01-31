<div>

    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="search" class="form-inline">
        <input class="form-control" wire:model.defer="search_id" type="search" placeholder="Procurar" aria-label="Procurar">
        <button class="btn btn-success" type="submit">Procurar por ID</button>
    </form>

    <h5>RAZÃO:</h3>
    <h3>
        @isset($reason)
            "{{ $reason }}"
        @endisset
    </h4>

</div>
