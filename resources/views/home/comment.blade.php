<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/styles/com.css">
    <title>Comment Form</title>
</head>
<body>

<div class="container">
    <div class="comment-form">
        <h2>Comment Form</h2>
        @if(Session::has('success'))
            <div class="alert alert-success" style="background-color: #b2d8ff; padding: 15px; border-radius: 8px; width: calc(100% - 40px);" >
                {{ Session::get('success') }}
            </div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    
        <form id="commentForm" action="{{ route('comm') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Publish</button>
                <button type="submit">Publish</button>
                
            </div>
        </form>
    </div>
   
</form>
    </div>
</div>
<script>
    

</script>

</body>
</html>
