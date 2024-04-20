
function submitForm() {

    var images = $('#images')[0].files;
    var marque = $('#marque').val();
    var climatiseur = $('#climatiseur').val();
    var chauffeur = $('#chauffeur').val();
    var caburation = $('#caburation').val();
    var prix = $('#prix').val();

    // Vérifier si un champ est vide
    if (marque == ''   || prix == '' || images.length == 0) {
        $('#error-message').show(); // Afficher le message d'erreur
    
        // Masquer le message d'erreur après 3 secondes
        setTimeout(function() {
            $('#error-message').hide();
        }, 5000);
    } else {
        $('#error-message').hide(); // Masquer le message d'erreur s'il est déjà affiché
        // Votre code pour soumettre le formulaire ici


        // Récupérer le jeton CSRF
        var formData = new FormData();

        for (var i = 0; i < images.length; i++) {
            formData.append('images[]', images[i]);
        }
        formData.append('marque', marque);
        formData.append('climatiseur', climatiseur);
        formData.append('chauffeur', chauffeur);
        formData.append('caburation', caburation);
        formData.append('prix', prix);
        
        console.log(formData);

        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        $('#staticBackdrop3').modal('show');
        $('#payer').on('click', function(e) {
            $('#staticBackdrop3').modal('hide');
            addSuccessListener(response => {
                $('#staticBackdrop3').modal('hide');
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
                                $("#msg50").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Attention !!!</strong> une erreur s'est produite, veuillez réessayer...
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`);
                            } else {
                                $('#msg50').html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
                                        Félicitations, votre Véhicule a été publié avec succès.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>`);
                            }
                        }
                        $('#staticBackdrop3').modal('hide');

                        var url = retourRoute ; // Assurez-vous que la route client.store est correctement définie
                        if (response == 200) {
                            setTimeout(function() {
                                window.location = url;
                            }, 8000);
                        } else {
                            $("#msg50").html(response);
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
    