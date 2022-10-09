<div>
    @foreach ($posts as $post)
        @switch($post->name)
            @case('created_email')
                @include('layouts.cards.msg_components.emailNotification',$post)
                <hr/>
                @break

            @case(2)
                Second case...
                @break
        
            @default
                Default case...
        @endswitch
    @endforeach
</div>
