@props([
    'title',
    'id'
])

<div class="modal-header">
    <h1 class="modal-title fs-5" {{ $id }}>{{ $title }}</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
</div>
