<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home/styles/des.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/pikaday.min.js"></script>

    <title>Hotel Reservation</title>
</head>


<body>
    <div class="reservation-form" id="reservation">
        <h2> Reservation Form</h2>
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

        <form action="{{ route('sult') }}" method="POST" enctype="multipart/form-data">
          @csrf 
            <div class="form-group">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full_name"  required>
            </div>

            <div class="form-group">
                <label for="phone-number">Phone Number:</label>
                <input type="tel" id="phone-number" name="phone_number" required>
            </div>

            <div class="form-group">
                <label for="country">Country of Residence:</label>
                <input type="text" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label for="rooms">Number of Rooms:</label>
                <input type="number" id="rooms" name="rooms" min="1" required>
            </div>
            
            <!-- ... Autres champs du formulaire ... -->
            <div class="form-group">
                     <label for="check-in">Check-in:</label>
                <div class="date-input-container">
                    <input type="text" id="check-in" name="check_in" class="date-picker" required>
                     <i class="fas fa-calendar-alt" id="check-in-icon"></i>
                </div>
            </div>

            <div class="form-group">
                         <label for="check-out">Check-out:</label>
               <div class="date-input-container">
                       <input type="text" id="check-out" name="check_out" class="date-picker" required>
                    <i class="fas fa-calendar-alt" id="check-out-icon"></i>
               </div>
            </div>

            <div class="form-group">
                <label for="adults">Adults:</label>
                <input type="number" id="adults" name="adults" min="1" required>
            </div>


            <div class="form-group">
                <label for="children">Children:</label>
                <input type="number" id="children" name="children" min="0" required>
            </div>

        <div class="form-group">
          <button type="submit" id="submit-btn">Validate</button>
          <button type="reset" id="cancel-btn" >Cancel</button>
        </div>
     </form>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialisez Pikaday pour chaque champ de date
        var checkInPicker = new Pikaday({
            field: document.getElementById('check-in'),
            format: 'YYYY-MM-DD', // Format de la date
            minDate: new Date(), // La date minimale ne peut pas être antérieure à aujourd'hui
            onSelect: function () {
                // Permet de mettre à jour la date minimale du champ Check-out
                checkOutPicker.setMinDate(checkInPicker.getDate());
            }
        });

        var checkOutPicker = new Pikaday({
            field: document.getElementById('check-out'),
            format: 'YYYY-MM-DD',
            minDate: new Date(),
        });

        // Ajoutez des styles personnalisés à Pikaday
        document.getElementById('check-in').classList.add('custom-input-style');
        document.getElementById('check-out').classList.add('custom-input-style');
    });

    function cancelReservation() {
        // Réinitialiser le formulaire
        document.getElementById('reservation').reset();
    }
</script>
    
   
</body>

</html>
