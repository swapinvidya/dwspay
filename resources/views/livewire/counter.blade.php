<div>
    @foreach ($posts as $post)
        @switch($post->name)
            @case('created_email')
                @include('layouts.cards.msg_components.emailNotification',$post)
                <hr/>
                @break

            @case('updated_user')
                @include('layouts.cards.msg_components.userUpdate',$post)
                @break
            @case('updated_userdetail')
                @include('layouts.cards.msg_components.userDetail',$post)
                @break
            @default
                Default case...
        @endswitch
    @endforeach
</div>
