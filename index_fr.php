
Skip to content
This repository

    Pull requests
    Issues
    Gist

    @timoDAO

3
0

    2

expanse-org/expanse.tech
Code
Issues 0
Pull requests 0
Wiki
Pulse
Graphs
expanse.tech/index.php
1d68c20 24 days ago
@dev-dan dev-dan Fixed Typo
323 lines (304 sloc) 15.6 KB
<?php include('./header_fr.php'); ?>
<div id="home" class="home">
  <div class="text-vcenter"> <img src="images/Expanse-white.png" width="316" height="181" alt="" />
    <h2 class="textshadow">Plateforme Décentralisée Open Source et Open Distribution</h2>
    <div> <a href="#downloads" class="btn btn-default btn-lg btn-top5">Téléchargements</a> <a href="#contracts" class="btn btn-default btn-lg btn-top5">DAPPs / Contrats</a> <a href="#documentation" class="btn btn-default btn-lg btn-top5">Documentation</a> </div>
  </div>
</div><!-- /home -->

<div id="about" class="section pad-section">
  <div class="bar-orange"></div>
  <div class="bar-greyblue"></div>
  <div class="container">
    <h2 class="text-center">Qu'est ce que Expanse?</h2>
    <hr />
    <div class="row text-center">
   <p> Expanse est une plateforme cryptographique d'informations, d'applications, et de contrats. Elle est l'une des premières du genre à être équitablement distribuée, démocratiquement contrôlée, et gérée par la communauté. Via l'utilisation de contrats intelligents et d'une technologie de blockchain décentralisée, elle n'est pas régit par n'importe quel individu ou groupe, mais par les utilisateurs d'Expanse eux mêmes. Le projet est organisé, géré, et exploité via une structure décentralisée démultipliant le rayonnement direct de la plateforme et de son avenir auprès de ceux qui comptent le plus : sa communauté. Les nouvelles fonctionnalités, l'intégration, et les modifications profondes de la plateforme et de la structure d'Expanse peuvent être nominées, votées, et implémentées selon l'opinion commune.</p>
    </div>
    <br />
    <div class="row text-center">
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-list-alt"> </i>
        <h4>Contrats Intelligents &amp; DApps</h4>
        <p>Des applications diversifiées, dynamiques, et décentralisées, opérant sur le Blockchain Expanse, allant des marchés décentralisés, registres globaux, accords imposés par calcul, jusqu'à toute structure opérant exclusivement sur le blockchain.</p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-cloud"> </i>
        <h4>Le TOUT décentralisé.</h4>
        <p>Stockage Décentralisé de Données, Tenue de Registres, Traitement de l'Information, Actifs Intelligents, et plus encore. Expanse permet un monde innovant bâti sur sa technologie distribuée.</p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-flash"> </i>
        <h4>Rapide. Intuitif. Puissant.</h4>
        <p>La technologie blockchain répond aux Contrats Intelligents Complexes pour vous apporter des résultats sans précédents. Vitesse exponentiellement améliorée, fiabilité, et performance permettent des réductions de coût drastiques en comparaison des solutions traditionnelles. </p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-user"> </i>
        <h4>Communauté</h4>
        <p>Le Projet Expanse est géré par une structure décentralisée opérant sur le Blockchain Expanse. Cette entité est responsable des décisions significatives :  décider sur quelles nouveautés ou mises-à-jour doivent se concentrer les développeurs, gérer les fonds de réserve ou actifs de fonctionnement du projet, et bien plus.</p>
      </div>
    </div>
  </div>
</div><!-- /about -->

<div id="downloads" class="section pad-section">
  <div class="container">
    <div class="row pad-section" >
      <div class="text-center"> <img src="images/Expanse-white-sm.png" width="140" height="80" style="width:140px;height:80px;" alt=""/>
        <h2>Téléchargements : GEXP, EXPwallet, et plus!</h2>
        <p class="lead">Expanse offre un panel de logiciels et d'outils. N'hésitez pas à jeter un œil à certains des logiciels Expanse les plus populaires:</p>
        <div class="row text-center ">
          <div style="margin:0 auto;  width:930px;">
            <div class="panel panel-default panel-md cursor-pointer h450" >
              <div class="panel-heading">
                <h2 class="panel-title"><strong>gexp</strong> - core reference implemented</h2>
              </div>
              <div class="panel-body">
                <img src="images/console2.png" width="190" height="137" alt="" style="width:142px;height:102px;float:left;"/>
                <p>L'implémentation primaire d'Expanse. Développée sous GO, c'est le moyen idéal pour exploiter un nœud Expanse ou comme backend d'Applications Expanse Distribuées.         </p>
                <br />
                <table width="400" border="1" class="centertable" align="center">
                  <tbody>
                  <tr> <td colspan="4">Current Version: v1.3.2</td></tr>
                    <tr>
                      <td><img src="images/winicon2.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                      Windows</td>
                      <td><img src="images/macicon.png" width="120" height="152" alt="" style="width:49px;height:64px;"/><br>
                      Mac</td>
                      <td><img src="images/icon_linux.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                      Linux</td>
                      <td><img src="images/icon_git.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                      Source</td>
                    
                    </tr>
                    <tr>
                      <td> <a href="./downloads/gexp-windows-x86.zip">gexp-windows-x86.zip</a><br>
                      <a href="./downloads/gexp-windows-x64.zip">gexp-windows-x64.zip</a></td>
                      <td><a href="./downloads/gexp-darwin-x86.tar.gz">gexp-darwin-x86.tar.gz</a><br>
                       <a href="./downloads/gexp-darwin-x64.tar.gz">gexp-darwin-x64.tar.gz</a>
                      </td>
                      <td><a href="./downloads/gexp-linux-x86.tar.gz">gexp-linux-x86.tar.gz</a><br>
                      <a href="./downloads/gexp-linux-x64.tar.gz">gexp-linux-x64.tar.gz</a><br>
                     <a href="./downloads/gexp-linux-arm.tar.gz"> gexp-linux-arm.tar.gz</a></td>
                      <td><a href="//www.github.com">Github</a></td>
                     
                    </tr><tr><td colspan="4">Android Version: <a href="./downloads/gexp-android-arm-21.tar.gz">gexp-android-arm-21.tar.gz</a></td></tr>
                  </tbody>
                </table>
        
              </div>
            </div>
            <div class="panel panel-default panel-md cursor-pointer h450">
              <div class="panel-heading">
                <h2 class="panel-title"><strong>expwallet</strong> - rich graphic wallet client</h2>
              </div>
              <div class="panel-body">
                <img src="images/wallet1.jpg" width="190" height="137" alt="" style="width:142px;height:102px;float:left;"/> 
                <p>Un client d'affichage intuitif et pratique des comptes et transactions, permettant l'accès direct aux fonctionnalités Expanse les plus utilisées.</p>
                <br />
                <table width="400" border="1" class="centertable" align="center">
                  <tbody> <tr> <td colspan="4">Current Version: v0.0.3</td></tr>
                    <tr>
                      <td><img src="images/winicon2.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                        Windows</td>
                      <td><img src="images/macicon.png" width="120" height="152" alt="" style="width:49px;height:64px;"/><br>
                        Mac</td>
                      <td><img src="images/icon_linux.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                        Linux</td>
                      <td><img src="images/icon_git.png" width="64" height="64" alt="" style="width:64px;height:64px;"/><br>
                        Source</td>
                    </tr>
                    <tr>
                      <td><a href="./downloads/expwallet-win.zip">expwallet-win.zip</a></td>
                      <td><a href="./downloads/expwallet-mac.zip">expwallet-mac.zip</a></td>
                      <td>Coming Soon</td>
                      <td>Coming Soon</td>
                    </tr>
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>
        </div>
        <div style="margin:0 auto; width:770px; display:none;">
          <div class="panel panel-default ">
            <div class="panel-heading">
              <h2 class="panel-title">More Options</h2>
            </div>
            <div class="panel-body ">ExpanseJS</div>
          </div>
        </div>
        <h5>Veuillez garder à l'esprit que ces versions sont très récentes. Il n'y a pas de garantie qu'elles fonctionneront comme prévu.<br>
          Pour plus d'information, merci de se référer au Guide Utilisateur.</h5>
      </div>
    </div>
  </div>
</div><!-- /downloads -->


<div class="bars">
  <div class="bar-orange"></div>
  <div class="bar-greyblue"></div>
</div>
<div class="bars">
  <div class="bar-orange"></div>
  <div class="bar-greyblue"></div>
</div>


<div id="community" class="section pad-section">
  
  <div class="container">
    <h2>Communauté</h2>
    <h4>Fêtons ça!</h4>
    <br>
    <div class="row">
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Forum de la communauté </h2>
          </div>
          <div class="panel-body">
        
               <p class="text-justify">
              Le  <a href="//forum.expanse.tech">Forum Expanse</a>  est le meilleur endroit pour discuter de Expanse dans les détails et pour prendre connaissance des conversations historiques concernant le projet.<br>
            </p>
            Les Sous-Forums majeurs :<br>
            <a href="//forum.expanse.tech/category/1/announcements">News &amp; Annonces</a><br>
            <a href="//forum.expanse.tech/category/6/development-technical-discussion">Développement et Technique : Discussions</a><br>
            <a href="//forum.expanse.tech/category/8/contracts-dapps">Contrats &amp; Applications Décentralisées </a>
            
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Interagir en direct</h2>
          </div>
          <div class="panel-body" style="text-align:">
            <p class="text-justify">La communauté est très active sur Slack. Si vous désirez participer ou discuter de Expanse avec la communauté et les développeurs :<br>
              <a href="http://slack.expanse.tech"><img src="images/slack.png" width="139" height="40" alt="Slack" id="button_slack" /></a></p>
            <p class="text-center"> Rejoignez nous sur le chatIRC!<br>
              #expanse on freenode!<br>
              <a href="irc://irc.freenode.net/expanse">irc://freenode.net/expanse</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Contributeurs</h2>
          </div>
          <div class="panel-body"> Contribuez au projet!<br>
            <br>
            Restez à l'écoute, nous préparons actuellement des lignes directrices pour la contribution au projet. <br>
            <br>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Social</h2>
          </div>
          <div class="panel-body text-center"> <a href="http://www.reddit.com/r/expanseofficial"><img src="images/social_exicon_reddit.png" width="79" height="100" style="width:79px; height:100px;" alt=""/><br>
            /r/expanseofficial</a><br>
            <br>
            <a href="http://www.twitter.com/expanseofficial"><img src="images/icon_twitter.png" width="70" height="100" alt="" style="width:70px; height:100px;"/><br>
            twitter.com/expanseofficial</a><br>
            <br>
            <a href="http://www.facebook.com/groups/expanseofficial"><img src="images/logo_facebook.png" width="70" height="100" alt=""  style="width:70px; height:100px;"/><br>
            facebook.com/groups/expanseofficial</a><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /community --> 

<div id="contracts" class="section pad-section" style="display:none;">
  <div style="">
    <div class="bar-greyblue"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h2>Contracts &amp; Decentralized Applications</h2>
        <h4>Flexible, Self Assuring Technolgy to Accomplish Anything!</h4>
        <h4>&nbsp;</h4>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default ">
          <div class="panel-heading">
            <h2 class="panel-title">Contract Collection</h2>
          </div>
          <div class="panel-body"> Browse the Expanse Contract Collection!<br>
            <br>
            <br>
            A collection of example contracts demonstrating whats possible with Expanse!<br>
            Get started now with some of our Featured DAPPS. </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Build a Contact or DApp</h2>
          </div>
          <div class="panel-body text-center">Learn about Contracts, Dapps, And how to build them in our Educational Library.<br>
            <br>
            OR <br>
            <a href="#contracts" class="btn btn-default btn-top5">Try our Contract Builder Tool</a><br >
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /contracts -->


<div id="documentation" class="section pad-section"> 
  <div class="container">
    <h1>Documentation</h1>
    <h4>En apprendre plus sur le projet Expanse et sa technologie. Du guide de démarrage pour les nouveaux utilisateurs aux spécifications techniques détaillées, un panel de documents est disponible pour vous aider à utiliser et comprendre Expanse. </h4>
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Getting Started</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="./docs/guide#install">Installation</a></li>
              <li><a href="./docs/guide#basics">Concepts de base</a></li>
              <li><a href="./docs/guide#backup">Sauvegarder &amp; Restaurer</a></li>
              <li><a href="./docs/guide#mining">Démarrage rapide du minage</a></li>
              <li><a href="./docs/guide#accounts">Gérer les comptes</a></li>
              <li><a href="./docs/guide#transactions">Envoyer des transactions</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Useful Links</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="//blog.expanse.tech">Blog Expanse</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Documentation techniques</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="/docs/guideFR">Guide Utilisateur</a></li>
              <li><a href="/docs/whitepaper-draft_FR.pdf">White Paper</a></li>
              <li><a href="/docs/roadmapFR.pdf">Plan de Route</a></li>
              <li></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- /documentation -->


<div class="bar-darkblue"></div>
<div class="bar-orange"></div>
<div class="bar-darkblue" style="height:7px;"></div>

<div class="bar-darkblue h7"></div>
<div class="bar-orange"></div>
<div class="bar-darkblue"></div>
<?php include('./footer_fr.php'); ?>

    Status API Training Shop Blog About Pricing 

    © 2016 GitHub, Inc. Terms Privacy Security Contact Help 

