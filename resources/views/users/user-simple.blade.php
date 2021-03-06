<div class="user">
    <div class="avatar"><img src="{{route('users.cover', [$user, 'small'])}}" class="rounded-full"/></div>
    <div class="content w-100">
        <a up-follow href="{{ route('users.show', [$user]) }}">
            <div class="d-flex justify-content-between align-items-center">
                <span class="name">
                    {{ $user->name }}
                </span>

            </div>
            <span class="summary">{{summary($user->body) }}</span>
        </a>
        <br/>

        <div class="d-flex justify-content-between">
            <small>{{ trans('messages.last_activity') }} : {{ $user->updated_at->diffForHumans() }}</small>
        </div>
    </div>
</div>
