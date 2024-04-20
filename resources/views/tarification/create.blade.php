@extends('layouts.master')

@section('content')
<br>
<!-- Modal -->
  <div class="modal fade" id="inscriptionModal" tabindex="-1" role="dialog" aria-labelledby="inscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="inscriptionModalLabel">Inscription</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>L'inscription est réservée aux entreprises désireuses de publier des biens immobiliers tels que des voitures, des appartements, des bureaux. Si vous êtes un client utilisateur, vous pouvez parcourir notre <a href="{{ route('home') }}"> page d'accueil</a>  pour choisir un bien immobilier et entrer en contact directement avec le propriétaire.</p>
        </div>
        <div class="modal-footer">
            <a href="{{ route('user.registerEntreprise') }}" type="button" class="btn btn-primary" id="continuerInscription">Continuer</a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
        </div>
      </div>
    </div>
  </div>
  


  <div class="container">
    
    <h2 class="text-center">Nos Tarifs</h2>
    <p>Découvrez nos tarifs compétitifs pour la publication de vos biens immobiliers et véhicules sur notre plateforme. Nos offres flexibles s'adaptent à vos besoins, que vous soyez propriétaire d'appartements, de bureaux ou de véhicules. Profitez d'une visibilité accrue et d'une gestion facile de vos annonces pour attirer rapidement des clients potentiels.</p>
      
    <br>
    <div class="row">
      <div class="col-md-4">
        <div class="pricing-table">
          <div class="pricing-header">
            <h3>Appartements</h3>
          </div>
          <div class="pricing-plan">
            <h4>1 mois de publication</h4>
            <h2>10.000 FCFA</h2>
            <p>Tarif mensuel par appartement</p>
            <ul>
              <li>Publication d'un appartement pendant 1 mois sur la plateforme</li>
              <li>Exposition auprès de notre large base d'utilisateurs et de clients potentiels</li>
              <li>Possibilité de modifier les détails de l'annonce à tout moment</li>
            </ul>
            @guest
            <button class="btn btn-sm btn-primary inscriptionBtn">S'inscrire</button>
            @endguest
            @auth
                <a href="{{ route('appartement') }}" type="button" class="btn btn-sm btn-primary ">Publier un appartement</a>
            @endauth 
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-table">
          <div class="pricing-header">
            <h3>Bureaux</h3>
          </div>
          <div class="pricing-plan">
            <h4>1 mois de publication</h4>
            <h2>7.000 FCFA</h2>
            <p>Tarif mensuel par bureau</p>
            <ul>
              <li>Publication d'un bureau pendant 1 mois sur la plateforme</li>
              <li>Visibilité auprès d'une audience professionnelle ciblée</li>
              <li>Possibilité de mettre à jour les informations sur le bureau à tout moment</li>
            </ul>
            @guest
            <button class="btn btn-sm btn-primary inscriptionBtn">S'inscrire</button>
            @endguest
            @auth
                <a href="{{ route('bureaux') }}" type="button" class="btn btn-sm btn-primary ">Publier un bureau</a>
            @endauth          
        </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="pricing-table">
          <div class="pricing-header">
            <h3>Véhicules</h3>
          </div>
          <div class="pricing-plan">
            <h4>1 mois de publication</h4>
            <h2>7.000 FCFA</h2>
            <p>Tarif mensuel par véhicule</p>
            <ul>
              <li>Publication d'un véhicule pendant 1 mois sur la plateforme</li>
              <li>Exposition à un large public de clients potentiels à la recherche de véhicules</li>
              <li>Possibilité de gérer et de mettre à jour les détails du véhicule facilement</li>
            </ul>
            @guest
                <button class="btn btn-sm btn-primary inscriptionBtn">S'inscrire</button>
            @endguest
            @auth
                <a href="{{ route('vehicule') }}" type="button" class="btn btn-sm btn-primary ">Publier un véhicule</a>
            @endauth

          </div>
        </div>
      </div>
    </div>
  </div>
  
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
  }
  
  .pricing-table {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    padding: 30px;
    margin-bottom: 50px;
  }
  .pricing-header {
    background-color: #FFA600CC;
    color: #fff;
    border-radius: 10px 10px 0 0;
    padding: 1px;
    text-align: center;
    margin-bottom: 20px;
  }
  .pricing-plan {
    text-align: center;
    margin-bottom: 30px;
  }
  .pricing-plan h4 {
    font-size: 24px;
    margin-bottom: 20px;
  }
  .pricing-plan h2 {
    font-size: 36px;
    color: #FFA600;
    margin-bottom: 20px;
  }
  .pricing-plan p {
    font-size: 18px;
    color: #666;
    margin-bottom: 30px;
  }
  .pricing-plan ul {
    text-align: left;
    padding-left: 20px;
    margin-bottom: 30px;
  }
  .pricing-plan ul li {
    position: relative;
    list-style: none;
    padding-left: 25px;
    margin-bottom: 10px;
    font-size: 16px;
    color: #333;
  }
  .pricing-plan ul li:before {
    content: "\2022";
    position: absolute;
    left: 0;
    color: #FFA600;
  }
  
  .btn-register:hover {
    background-color: #FFA600;
  }
</style>

<script>
    // Récupérer tous les boutons "S'inscrire"
    var inscriptionButtons = document.querySelectorAll('.inscriptionBtn');
  
    // Ajouter un écouteur d'événements à chaque bouton
    inscriptionButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        // Afficher le modal lors du clic sur le bouton
        $('#inscriptionModal').modal('show');
      });
    });
</script>

@endsection