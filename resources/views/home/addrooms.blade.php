<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADD ROOM FORM</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: url('images/blog_1.jpg') center/cover no-repeat;
      height: 120vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .btn-primary {
    background-color: #ffa37b;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    
}

/* Nouveaux styles pour positionner le bouton en haut à droite avec une marge */
.logout-btn-container {
    display: flex;
    justify-content: end;
    margin: 10px; /* Ajustez la marge selon vos besoins */
}

    #reservation-form {
      background-color: #fff;
      padding: 30px; /* Ajustez la marge intérieure pour rendre le formulaire plus grand */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 70%; /* Ajustez la largeur du formulaire */
      max-width: 500px; /* Définissez une largeur maximale pour le formulaire */
      margin: 20px; /* Ajoutez une marge pour l'esthétique */
    }

    #reservation-form label {
      display: block;
      margin: 10px 0 5px;
    }

    #reservation-form input,
    #reservation-form select {
      width: calc(100% - 22px); /* Ajustez la largeur des champs de saisie */
      padding: 10px;
      margin: 5px 0 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    #reservation-form input[type="file"] {
      cursor: pointer;
    }

    #reservation-form button {
      background-color: #ffa37b;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    #reservation-form button:hover {
      background-color: #ff704d;
    }

    /* Highlight input field on click */
    #reservation-form input:focus,
    #reservation-form select:focus {
      outline: 2px solid #ffa37b;
    }
  
  </style>
</head>
<body>

<div class="logout-btn-container">
    <button class="btn btn-primary">Logout</button>
</div>

  <div id="reservation-form">
  
    <h2 style="text-align: center; color: #ffa37b;">Add Room Form</h2>
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
    <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
      @csrf 
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>

      <label for="room-type">Room Type:</label>
      <select id="room-type" name="roomtype" required>
        <option value="Single Room">Single Room</option>
        <option value="Family Room">Family Room</option>
      </select>

      <label for="price">Price Per Night </label>
      <input type="text" id="price" name="price_per_night" required>
      <label for="currency">currency</label>
      <select id="currency" name="currency" required>
        <option value="DH">MAD</option>
        <option value="$">USD</option>
        <option value="€">EUR</option>       
      </select>

      <label for="hotel-name">Hotel Name:</label>
      <input type="text" id="hotel-name" name="hotelname" required>

      <label for="image">Upload Image:</label>
    <input type="file" id="image" name="image_url" required>

      <button class="btn btn-primary">Add up</button>
    </form>
  </div>
</body>
</html>

