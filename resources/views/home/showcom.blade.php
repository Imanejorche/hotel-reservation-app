
@foreach($Comments as $comment)
    <div>
        <p>{{ $comment->comment }}</p>
        <button onclick="deleteComment({{ $comment->id }})">Supprimer</button>
    </div>
@endforeach
