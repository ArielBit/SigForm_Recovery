@extends('layout.app')
@section('title', 'accueil')
@section('content')
    <main> 
        <article>
            <p>Nous offrons des formations sur différents domaines des Nouvelles Technologies de l'Information et de la Communication</p>
            <p>N'hésitez pas à vous faire former!</p>

            <img src="#" alt="ArielBit">
        </article>

        <article>
            <h4>Formations</h4>
            <h3>Découvrez nos formations</h3>

            <section class="form_bureau">
                <h3>Formation en bureautique</h3>
                <p>Venez apprendre toutes le ficelles de la bureautique</p>
                <a href="">Voir les sessions</a>
            </section>

            <section class="form_res">
                <p>Formation en réseaux</p>
                <p>C'est le meilleur moyen d'avoir des connaissances pratiques en réseau</p>
                <a href="">Voir les sessions</a>
            </section>

            <section class="form_dev">
                <p>Formation en Développement d'application</p>
                <p>C'est le meilleur moyen d'avoir des connaissances pratiques en développement d'application</p>
                <a href="">Voir les sessions</a>
            </section>
        </article>

        <article>
            <h4>Qui sommes nous ?</h4>
            <p>CPNTIC (Centre de Promotion des Nouvelles Technologies de l'Information et de la Communication)</p>
            <p>Le CPNTIC est un centre ivoirien dédié à la formation, la vulgarisation et la promotion des TIC au service du développement.</p>
            <a href="">En savoir plus</a>
        </article>

        <article>
            <h4>F.A.Q</h4>
            <h3>Questions fréquemment posées</h3>
            <!--First question-->
            <section>
                <h2>Comment s'inscrire à une formation ? </h2>
                <p>Vous avez juste à cliquer sur une formation et vous serez redirigé sur les différentes sessiosn données pour cette formation, là vous allez cliquer sur "S'Inscrire à la formation" pour aller sur la page des inscriptions mais il faudra au préalable etre connecté à la plateforme.</p>
            </section>
            <!--Second question-->
            <section>
                <h2>Où et Comment se déroulent les formations ? </h2>
                <p>Les formations se déroulent en présentiel directement dans les locaux du Cpntic.</p>
            </section>

            <!--third question-->
            <section>
                <h2>Comment se connecter à la plateforme ? </h2>
                <p>Il vous suffit de cliquer sur "Se connecter" au haut de la page puis entrer vos informations. Si vous n'avez pas encore de compte, cliquer sur "Sincrire" Puis vous serez redirigé sur la page des connections pour vous connecter.</p>
            </section>

            <!--four question-->
            <section>
                <h2>Pourquoi se former au Cpntic ?</h2>
                <p>Vous faire former chez nous vous garantit une formation complète et validée par l'Etat.</p>
            </section>

        <!--five question-->
            <section>
                <h2>Comment voir les sessions de chacune des formations ?</h2>
                <p>Il suffit de cliquer sur En savoir plus au niveau de cette formation pour etre redirigé vres une page montrant les sessions de cette formation.</p>
            </section>

            <!--six question-->
            <section>
                <h2>Les formations sont elles payantes ?</h2>
                <p>Oui, toutes les formations sont payantes et les paiements se font dans les locaux du Cpntic.</p>
            </section>
        </article>


        <article>
            
            <adress>
                <h4>Adresse</h4>
                <p>Cocody Lycée technique face à l'Agefop Cocody Centre, Abidjan, Cote d'Ivoire</p>

                <h4>Appelez-Nous</h4>
                <p>+225 27 22 55 08 01</p>

                <h4>Notre Mail</h4>
                <p>cpntic@formation.gouv.ci</p>

                <h4>Nos Horaires</h4>
                <p>Lundi - Vendredi :07:30 - 16:30</p>
                <p>Samedi-Dimanche: ❌</p>
            </adress>
        </article>

        <article>
            <form action="" method="post">
                @csrf
                <input type="text" name="nom" placeholder="Entrez votre Nom" requiered >
                <input type="email" name="mail" placeholder="Entrez votre Mail" requiered >
                <input type="text" name="sujet" placeholder="À quel sujet nous contactez-vous ?" requiered >
                <textarea requiered>Entrez votre message</textarea>
                <input type="submit" value="Envoyer">
                
            </form>
        </article>

        <hr>
        <article>
            <form action="" method="post">
            @csrf
         <p>Inscrivez-vous à notre infolettre</p>  
            <p>Inscrivez vous et recevez nos offres directement par mail.</p>
            <input type="text" name="au">
            <input type="submit" value="Souscrire">
            </form>
        </article>
        <hr>
    </main>
@endsection
