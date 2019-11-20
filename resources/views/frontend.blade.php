@extends('base')

@section('title', 'Willkommen')

@section('top-links')
    @auth
    <a href="/backend">Backend</a>
    @endauth
@endsection

@section('main')
{{--    Willkommen bei AIOT.--}}

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/adult-alternative-medicine-care-comfort-356053.jpg" width="800" height="400">
        </div>
        <div class="carousel-item">
            <img src="images/adult-ball-close-up-view-daylight-339619.jpg" width="800" height="400">
        </div>
        <div class="carousel-item">
            <img src="images/blue-and-silver-stetoscope-40568.jpg" width="800" height="400">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

</div>
<br>

<!-- accordion -->
<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Preise und Verrechnung
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <p>Physiotherapie 45 min 75 €</p>
                <p>Osteopathie 45 min  90 €</p>
                <p>Kinesiotape Stk. 15-25 €</p>
                <p>Sollten Sie Ihren vereinbarten Termin nicht 24 Stunden vorher absagen (Telefon, Email), wird Ihnen dieser in Rechnung gestellt.</p>
                <p>Wir sind umsatzsteuerbefreit gem. § 19 UStg.</p>
                <p>Kostenrückerstattung</p>
                <p>Für eine Rückerstattung der Therapiekosten bei Ihrer Krankenkasse benötigen Sie eine Verordnung für Physiotherapie von Ihrem Haus- oder Facharzt. Diese muss chefärztlich von Ihrer Krankenkasse bewilligt werden (übernehmen wir auch gerne für Sie).</p>
                <p>Nach Therapieabschluss erhalten Sie eine Rechnung, die Sie gemeinsam mit der bewilligten Verordnung bei Ihrer Krankenkasse einreichen.</p>
                <p>Sie bekommen einen Teil Ihrer Kosten (unterschiedlicher Teil je nach Kasse) von Ihrer Krankenkasse rückerstattet. Verbleibende Restkosten können von Ihrer Zusatzversicherung übernommen werden.</p>

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Leistungen
                </button>
            </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
                <P>Physiotherapie</P>
                <P>Sport-Physiotherapie</P>
                <P>Fußreflexzonenmassage</P>
                <P>Lymphdrainage</P>
                <P>Kinesio-Taping</P>
                <P>Osteopathie</P>
                <P>Fasziendistorsionsmodell (FDM)</P>
                <P>Craniosacral-Therapie</P>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingThree">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Termine
                </button>
            </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
                <p>Mitzubringen</p>

                <P>Bequeme Kleidung</p>
                <P>Bewilligte Verordnung</p>
                <P>Befunde (Röntgen, MRT, Arztbrief) falls vorhanden
                Handtuch</p>
                <P>Sie können bei unserer Assistentin Clara während der Sekretariatsöffnungszeiten einen Termin vereinbaren.</p>
                <P>Unsere Sekretariatsöffnungszeiten sind:</p>
                <P>Montag - Freitag 8:00 - 11:00</p>
                <P>+43 / 123 123 123 123</p>
                <P>office@example.com</p>
                <P>Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen Sie verlässlich so bald wie möglich zurück.</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="collapseFour">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Über uns
                </button>
            </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
                <p>Anna Fink</p>
                <p>Als Physiotherapeutin ist mir die ganzheitliche Arbeit mit dem Patienten wichtig. Die Osteopathie biete ich ebenfalls an - sie ergänzt die Behandlung optimal. Barbara und ich arbeiten schon lange zusammen und wir freuen uns, auch Sie in unserer Praxis begrüßen zu dürfen.</p>
                <p>Ausbildungen:</p>
                <p>2016: FDM Modul 1 + 2</p>
                <p>Seit 2012: Osteopathie an der Wiener Schule für Osteopathie</p>
                <p>2010-2012: Sportphysiotherapie</p>
                <p>2007-2010: Akademie für Physiotherapie am Wilhelminenspital</p>
                <p>Berufliche Aktivitäten:</p>
                <p>Seit 2019: Praxisgemeinschaft mit Barbara</p>
                <p>Seit 2011: SPORTO-Praxisgemeinschaft</p>
                <p>2010-2011: Elements of Performance-Sportphysiotherapie Hagenstadt</p>
                <p>2008-2009: Orthopädisches Zentrum Otto Meier Krankenhaus</p>
                <p>Sportphysiotherapeutische Aktivitäten:</p>
                <p>2011: Austria Wien Junioren U13 und U14</p>
                <p>2010: Fussball Damen U18, Herren FCZ Bern, Balletttänzerinnen Opernhaus Bern, BZ Adelbrie Europacup Niederlande</p>
                <p>2009: AON-N-Volleys</p>
                <p>Therapeutische Erfahrung mit Sportarten:</p>
                <p>Laufen, Fussball, Volleyball, Ballett, Ausdruckstanz, Boden- und Geräteturnen</p>
                <p>Hobbies:</p>
                <p>Reisen, Bodenturnen, Tanzen, Laufen, Freunde, Musik, Schlagzeug spielen</p>
                <p>Barbara Berg</p>
                <p>Ich kenne Anna schon seit der Schulzeit und wir haben Teile unserer Ausbildungen gemeinsam gemacht. Gemeinsam möchten wir unseren Patientinnen und Patienten stets das Allerbeste bieten und das gelingt uns jeden tag aufs Neue.</p>
                <p>Zur Person</p>
                <p>Ausbildungen:</p>
                <p>2012 –  2014: Yoga Ausbildung in Tirol</p>
                <p>2012: Budo-Teacher-Training in Graz</p>
                <p>2011: Yoga Master-Training in Nepal</p>
                <p>2010: Yoga & Spiralakrobatik Foundation Level</p>
                <p>2002 – 2008: Wiener Schule für Osteopathie</p>
                <p>1997 – 2000: Akademie für Physiotherapie SFB</p>
                <p>Berufliche Aktivitäten:</p>
                <p>Seit 2019: Praxisgemeinschaft mit Anna</p>
                <p>2010 – 2018: Sport-ORTOPABST-Praxisgemeinschaft</p>
                <p>2006 – 2010: GOLDO Praxisgemeinschaft</p>
                <p>2005 – 2006: Health & More We do it for you Consult AG</p>
                <p>2004 – 2005: Sanatorium Helga</p>
                <p>2000 – 2004: Physikalisches Institut Voltenberg</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Kontakt
                </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
                <p>Sie erreichen uns unter:</p>
                <p>+43 / 123 123 123 123</p>
                <p>office@example.com</p>
                <p>Wenn Sie uns nicht sofort erreichen, hinterlassen Sie bitte Name und Telefonnummer, wir rufen Sie verlässlich so bald wie möglich zurück.</p>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
