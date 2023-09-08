<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
.show-comment{
    margin: 10px;

    box-shadow: 10px 10px 10px 0 rgba(0,0,0,0.2);

}

input,textarea{
    border-radius:3%;;
    border-color:rgb(0, 95, 29);

}
input:focus{
border-color:black;
}

.profile{
    width:100px;
}
</style>
<body>
    <form action="{{route('comments.store')}}" method="post" >
        @csrf
        <div class="comment ms-3">
            <input type="hidden" name="blog_id" value="{{$contents->id}}">
    <h1>Comment</h1>
    <label for="name">Your name</label>
    <input type="text" name="name"><br><br>
    <label for="comment">Your comment</label><br>
    <textarea name="comment"  cols="40" rows="4" placeholder="Enter your comment"></textarea><br>
    <button class="btn btn-success">Submit</button>
    </div>
    </form>

    <div class="show-comment">
    @foreach($comments as $comment)
    <hr>
    <img src="/images/profile.png" class="profile">
    <b>Name: {{$comment->name}}</b>
    <p><b> Comment:</b> {{$comment->comment}}</p><hr>
    @endforeach
    </div>

</body>
</html>
