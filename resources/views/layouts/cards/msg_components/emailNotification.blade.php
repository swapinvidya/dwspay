@php
    $id = $post->id;
    $subject_id = $post->subject_id;
    //Subject details
    $emailData = $post->getEmail;
    $sender = $emailData->getSender;
@endphp

<div class="sl-item">
    <div class="sl-left">
        <img
            src="./dws/assets/images/users/4.jpg"
            alt="user"
            class="img-circle"
        />
    </div>
    <div class="sl-right">
        <div>
            <a href="#" class="link">{{$sender->name}}</a> To: {{$post->to_name}}
            <span class="sl-date">{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</span>
            <blockquote class="mt-2">
                {{$emailData->body}}
            </blockquote>
            <!--comments-->
            <!--comments end-->
        </div>
    </div>
</div>