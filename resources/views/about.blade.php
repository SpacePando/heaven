@extends('layouts.app')

@section('content')
<button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</button>
<div class="container">
    <div class="about-section">
        <h1>About Us</h1>
        <p>where a wonderfull hotel</p>
    </div>
    
    </br>
    <div class="row flex">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="texttitle">
                <h1 >De Heavenly suites op A wondering</h1>
                </br>
                <p>A wondering is een nieuw pretpark aan de Ring van Antwerpen. Dit pretpark zal in 2030 openen, precies 100 jaar na de Antwerpse Expo. Hier zullen de Antwerpse mythes en legendes tot leven worden gebracht in de vorm van attracties, restaurants, ervaringen en hotels. A wondering is er om te vieren wat er allemaal gebeurd is met de Ring en wat er nog gaat gebeuren in de toekomst. Het is gevuld met allemaal wonderbaarlijke attracties. Bij de opening van het pretpark A Wondering opent een nieuw hotel van VH ook zijn deuren.</p>
                                
                <p>De Heavenly Suites is een buitengewoon hotel aan A wondering en is de nieuwkomer in de lang lopende lijn van luxueuze hotels die door VH gemaakt, onderhouden en gemanaged worden. VH is iemand die al jaren bezig is met het maken van zo’n monumentale prestaties. Dit is maar één van de vele hotels die van hem zijn. Het hotel vindt inspiratie in de kathedraal van Antwerpen. Het is bijna een kopie van de originele glasramen, beelden, relieken, praalgraven en zelfs de altaren zijn hetzelfde. Het aanrakingspunt is dat het door miraculeuze manieren in de lucht is gekregen. Nu bevindt het hotel zich hoog in de wolken boven A wondering. Het biedt een gedenkwaardige ervaring van historische luxe aan. Vanuit de kamers is er een prachtig uitzicht op het pretpark en de stad Antwerpen vanuit de wolken. Er zijn meerdere soorten kamers die open staan voor reservatie. </p>
                
                <p> “The sky” is het goedkoopste, €250 per nacht maar bevat nog steeds super luxe. “The Clouds” is €500 per nacht, het bevat alles van “The sky” en heeft ook een inbegrepen tour door A Wondering en een zeppelin tour over A Wondering. De laatste en meeste luxueuze kamers zijn “De suites” en zijn voorzien van een terras met een monumentaal uitzicht vanuit de wolken bovenop alles wat inbegrepen is in de vorige kamers. </p>
                
                <p>Alle kamers zijn een ervaring die nooit zal vergeten worden met hoe makkelijk je ze kan boeken. Met de nieuwe site is het nu ook supersimpel om een kamer te boeken. Het is ook super veilig en met geen risico om gehackt te worden. De website is een visueel wonder waar over elke foto, video en lijn is gedacht. Er is een voorpagina waarin er genavigeerd kan worden naar overal. Het is super simpel om een kamer te boeken gewoon inloggen en dan is het gemakkelijk om een kamer boeken. Er is ook en nieuw logo gemaakt voor het hotel. Het is een kalligrafisch getekende wolk. Het ziet er zo eerder Oost-Aziatisch uit maar het is bedoeld om er elegant uit te zien, ook ziet het er uit alsof het in beweging is. De kleuren imiteren de lucht die van ochtend naar avond gaat omdat het over een hotel gaat. Het is een briljant modern logo.
                </p>

                <p>A wondering opent zijn deuren op 1/01/2030 en dan opent De Heavenly Suites zijn deuren ook. We kijken er naat uit om te zien wat er allemaal zal gebeuren.
                </p>

                <h1 class="flex h1">Some videos</h1>

                <section id="video">
                    <div class="flex ">
                        <video src="vid/teaser.mp4" controls class="video" id="teaser"></video>
                        <video src="vid/ivid.mp4" controls class="video" id="video"></video>
                        <video src="vid/trail.mp4" controls class="video" id="trailer"></video>
                        <video src="vid/trailerdeff.mp4" controls class="video" id="trailer"></video>
                    </div>
                </section>

                <h1 class="flex h1">Our teasers</h1>
    
                <section id="teaser">
                    <div class="flex">
                    <img src="{{ asset('img/teaser_1.png') }}" alt="teaser-img">    
                    <img src="{{ asset('img/teaser_2.png') }}" alt="teaser-img">
                    <img src="{{ asset('img/teaser_3.png') }}" alt="teaser-img">
                    </div>
                </section>    
            </div>            
        </div>
        <h2 style="text-align:center">Our Team</h2>
        </br>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/logoICN.png') }}" alt="mats" style="width:100%">
                    <div class="container">
                        <h2>Sooi van haudt</h2>
                        <p class="title">CEO & Founder</p>
                        <p>i like tutel</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/logoICN.png') }}" alt="Mats" style="width:100%">
                    <div class="container">
                        <h2>Mats Praiss</h2>
                        <p class="title">Residend Dwarf</p>
                        <p>Dwarf</p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="{{ asset('img/logoICN.png') }}" alt="Mats" style="width:100%">
                    <div class="container">
                        <h2>Noah Verstraeten</h2>
                        <p class="title">Computer NERD</p>
                        <p>Computer</p>
                    </div>
                </div>
            </div>  
</div>
</div>
</div>


@endsection
