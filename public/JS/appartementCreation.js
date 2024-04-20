
function submitForm() {
    // Récupérer le jeton CSRF
    var formData = new FormData();
    var images = $('#images')[0].files;

    // Vérifier si les champs obligatoires sont vides
    if ($('#nombreSalon').val() === '' || $('#nombreChambre').val() === '' ||  $('#prix').val() === '' ||  $('#lieux').val() === '' || images.length === 0) {
        $('#error-message0').show(); // Afficher le message d'erreur
    
        // Masquer le message d'erreur après 3 secondes
        setTimeout(function() {
            $('#error-message0').hide();
        }, 5000);
    } else {
        $('#error-message0').hide(); // Masquer le message d'erreur s'il est déjà affiché
        // Votre code pour soumettre le formulaire ici

        for (var i = 0; i < images.length; i++) {
            formData.append('images[]', images[i]);
        }
        formData.append('nombreSalon', $('#nombreSalon').val());
        formData.append('nombreChambre', $('#nombreChambre').val());
        formData.append('climaVenilo', $('#climaVenilo').val());
        formData.append('lieux', $('#lieux').val());
        formData.append('securite', $('#securite').val());
        formData.append('packing', $('#packing').val());
        formData.append('terasse', $('#terasse').val());
        formData.append('canal', $('#canal').val());
        formData.append('prix', $('#prix').val());
        formData.append('description', $('#description').val());
        formData.append('negociable', $('#negociable').val());
        formData.append('wifi', $('#wifi').val());
        formData.append('ptiDejeuner', $('#ptiDejeuner').val());
        formData.append('cuisine', $('#cuisine').val());
        formData.append('entretien', $('#entretien').val());
        formData.append('meuble', $('#meuble').val());

        console.log(formData);

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('#staticBackdrop2').modal('show');
        $('#payer').on('click', function(e) {
            $('#staticBackdrop2').modal('hide');
            addSuccessListener(response => {
                $('#staticBackdrop2').modal('hide');
                const transactionId = response.transactionId;
                formData.transactionId = transactionId; // Mettez à jour la propriété transactionId avec la valeur récupérée

                $.ajax({
                    url: saveRoute,
                    method: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (parseInt(response) == 200 || parseInt(response) == 500) {
                            if (parseInt(response) == 500) {
                                $("#msg501").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Attention !!!</strong> une erreur s'est produite, veuillez réessayer...
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`);
                            } else {
                                $('#msg501').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Félicitations, votre annonce a été déposée avec succès.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`);
                            }
                        }
                        $('#staticBackdrop2').modal('hide');

                        var url = retourRoute ; // Assurez-vous que la route client.store est correctement définie
                        if (response == 200) {
                            setTimeout(function() {
                                window.location = url;
                            }, 5000);
                        } else {
                            $("#msg501").html(response);
                        }
                    }
                });


                addFailedListener(error => {
                    alert("La transaction a échoué, veuillez réessayer.");
                });
            });
        });
    }
};


function validatePrix(input) {
    var errorMessage = document.getElementById("error-message2");
    var prixRegex = /^[0-9]+([.][0-9]+)?$/; // Expression régulière pour les nombres entiers et décimaux
    
    if (!prixRegex.test(input.value)) {
        // Afficher un message d'erreur si le contenu n'est pas un nombre entier ou décimal
        errorMessage.innerHTML = "Veuillez entrer un nombre entier.";
        errorMessage.style.display = "block";
        input.value = ''; // Effacer la saisie incorrecte
    } else {
        // Réinitialiser le message d'erreur
        errorMessage.innerHTML = "";
        errorMessage.style.display = "none";
    }
}
