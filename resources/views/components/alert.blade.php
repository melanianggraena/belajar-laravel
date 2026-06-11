{{-- File: resources/views/components/alert.blade.php --}}

{{-- $type: success | danger | warning | info --}}
{{-- $message: pesan yang akan ditampilkan --}}

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    @if ($type === 'success') ✅
    @elseif ($type === 'danger') ❌
    @elseif ($type === 'warning') ⚠️
    @else 💡
    @endif
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

