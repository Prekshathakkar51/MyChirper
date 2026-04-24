@props(['chirp'])
<div>
    <div>
        <span>{{ $chirp->user ? $chirp->user->name : 'Anonymous' }}</span>
        <span>·</span>
        <span>{{ $chirp->created_at->diffForHumans() }}</span>
    </div>

    <p>
        {{ $chirp->message }}
    </p>
</div>