<div class="card shadow-sm mb-4 border-0">
    <div class="card-header bg-primary text-white fw-bold">
        {{ $header ?? 'Informasi' }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div>