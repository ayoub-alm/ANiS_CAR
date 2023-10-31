<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de réservation</title>
    <!-- Inclure les fichiers CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card mt-5">
                    <div class="card-header">
                        Confirmation de réservation
                    </div>
                    <div class="card-body">
                        <p>Cher(e) [Nom du client],</p>

                        <p>Nous sommes ravis de vous informer que votre réservation a été acceptée avec succès. Votre réservation a été enregistrée et est confirmée pour la date [Date de réservation] à [Heure de réservation] à [Nom de l'établissement].</p>

                        <p>Voici un récapitulatif de votre réservation :</p>
                        <ul>
                            <li>Date de réservation : {{$reservation->rental_start_date}}</li>
                            <li>Heure de réservation :  {{   Carbon\Carbon::parse($reservation->rental_start_heure)->format('H:i:s')}}</li>
                            <li>Date de retoure : {{$reservation->rental_end_date}}</li>
                            <li>Houre de retoure :   {{   Carbon\Carbon::parse($reservation->rental_end_heure)->format('H:i:s')}}</li>
                            <li>Lieux de Ramassage : {{ $reservation->start_location}}</li>
                            <li>Lieux de Retoure : {{ $reservation->end_location}}</li>
                            <li>Total a payer : {{ $reservation->total_cost}}</li>
                            <li> Methode de payement : {{ $reservation->pyment_method}} </li>
                        </ul>

                        <p>Nous attendons avec impatience de vous accueillir et de vous offrir une expérience exceptionnelle. Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter à [Adresse e-mail de contact] ou [Numéro de téléphone de contact].</p>

                        <p>Encore une fois, merci d'avoir choisi [Nom de l'établissement]. Nous sommes impatients de vous servir et de rendre votre expérience mémorable.</p>

                        <p>Cordialement,<br>[Votre nom]<br>[Votre titre]<br>[Nom de l'établissement]</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
