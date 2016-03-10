
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
<?php include('./header.php'); ?>
<div id="home" class="home">
  <div class="text-vcenter"> <img src="images/Expanse-white.png" width="316" height="181" alt="" />
    <h2 class="textshadow">Open Source, Open Distribution Decentralized Platform</h2>
    <div> <a href="#downloads" class="btn btn-default btn-lg btn-top5">Download</a> <a href="#contracts" class="btn btn-default btn-lg btn-top5">DAPPs / Contracts</a> <a href="#documentation" class="btn btn-default btn-lg btn-top5">Documentation</a> </div>
  </div>
</div><!-- /home -->

<div id="about" class="section pad-section">
  <div class="bar-orange"></div>
  <div class="bar-greyblue"></div>
  <div class="container">
    <h2 class="text-center">What is Expanse?</h2>
    <hr />
    <div class="row text-center">
   <p> Expanse is a decentralized cryptographic information, application, and contract platform. It is among the first of such to be fairly distributed, democratically controlled, and community managed. Through the use of smart contracts and decentralized blockchain technology, it is run not by any one individual or group, but by the users of Expanse itself. The project is organized, managed, and operated through a decentralized organization leveraging direct influence over the platform and its future to those that matter most: our community. New features, integration, and core modifications of the expanse platform and organization can be nominated, voted on, and implemented according to the collective opinion.</p>
    </div>
    <br />
    <div class="row text-center">
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-list-alt"> </i>
        <h4>Smart Contracts &amp; DApps</h4>
        <p>Diverse, dynamic, decentralize applications running on the Expanse Blockchain. From decentralized markets, global registries, computationally enforced agreements, to entire organizations operated exclusively on the blockchain.</p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-cloud"> </i>
        <h4>Decentralized EVERYTHING.</h4>
        <p>Decentralized Data Storage, Record Keeping, Information Processing, Smart Assets, and more.  Expanse allows for   a world of innovation built on top of its distributed technology.</p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-flash"> </i>
        <h4>Fast. Intuitive. Poweful.</h4>
        <p>Blockchain technology meets Complex Smart Contracts to bring you unprecedented results. Exponentially improved speed,  reliability, and performance made available for drastically reduced costs when compared to traditional solutions.</p>
      </div>
      <div class="col-sm-3 col-xs-6"> <i class="glyphicon glyphicon-user"> </i>
        <h4>Community</h4>
        <p>EN COURS FR The Expanse Project is managed by a decentralized organization
operating on the Expanse Blockchain. This  entity
is responsible for significant decisions such as deciding what
features or updates to be focused on by developers, managing
the project's operating assets/reserve funds, and more. </p>
      </div>
    </div>
  </div>
</div><!-- /about -->

<div id="downloads" class="section pad-section">
  <div class="container">
    <div class="row pad-section" >
      <div class="text-center"> <img src="images/Expanse-white-sm.png" width="140" height="80" style="width:140px;height:80px;" alt=""/>
        <h2>Downloads: GEXP, EXPWallet, and more!</h2>
        <p class="lead">Expanse has a variety of software and tools. Please have a look at some of the most popular expanse software:</p>
        <div class="row text-center ">
          <div style="margin:0 auto;  width:930px;">
            <div class="panel panel-default panel-md cursor-pointer h450" >
              <div class="panel-heading">
                <h2 class="panel-title"><strong>gexp</strong> - core reference implemented</h2>
              </div>
              <div class="panel-body">
                <img src="images/console2.png" width="190" height="137" alt="" style="width:142px;height:102px;float:left;"/>
                <p>The primary expanse implementation. Developed in GO, It is the ideal way to operate an Expanse node or as a backend for Expanse Distributed Applications.         </p>
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
                <p>An intuitive, easy to use  client <br>
                  featuring 
                display of accounts and transactions, allowing for direct access<br>
                to the most  utilized features in expanse.</p>
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
        <h5>Please keep in mind, these are all super early releases. There is no guarantee they will operate as intended.<br>
          For more information, please visit out users guide.</h5>
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
    <h2>Community</h2>
    <h4>Let's Party!</h4>
    <br>
    <div class="row">
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Community Forum </h2>
          </div>
          <div class="panel-body">
        
               <p class="text-justify">
              The <a href="//forum.expanse.tech">Expanse Forum</a> is the best place for detailed discussion of Expanse  and historic conversations regarding the project. <br>
            </p>
            Featured Sub-Forums:<br>
            <a href="//forum.expanse.tech/category/1/announcements">News &amp; Announcements</a><br>
            <a href="//forum.expanse.tech/category/6/development-technical-discussion">Development and Technical Discussion</a><br>
            <a href="//forum.expanse.tech/category/8/contracts-dapps">Contracts &amp; Decentralized Applications </a>
            
            </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Interact Live</h2>
          </div>
          <div class="panel-body" style="text-align:">
            <p class="text-justify">The community is very active on slack. If you want to participate or discuss expanse with the community and developers.<br>
              <a href="http://slack.expanse.tech"><img src="images/slack.png" width="139" height="40" alt="Slack" id="button_slack" /></a></p>
            <p class="text-center"> Join us to chatIRC!<br>
              #expanse on freenode!<br>
              <a href="irc://irc.freenode.net/expanse">irc://freenode.net/expanse</a></p>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="panel panel-default panel-transparent">
          <div class="panel-heading">
            <h2 class="panel-title">Contributors</h2>
          </div>
          <div class="panel-body"> Contribute to the project!<br>
            <br>
            Please stay tuned, we are currently drafting contribution guide lines!. <br>
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
    <h4>Learn more about the Expanse project and it's technology. From a quick start guide for brand new users to detailed technical specifications, an array of documentation is available to help you use and understand Expanse. </h4>
    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Getting Started</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="./docs/guide#install">Installation</a></li>
              <li><a href="./docs/guide#basics">Basic Concepts</a></li>
              <li><a href="./docs/guide#backup">Backing Up &amp; Restoring</a></li>
              <li><a href="./docs/guide#mining">Mining Quick Start</a></li>
              <li><a href="./docs/guide#accounts">Managing Accounts</a></li>
              <li><a href="./docs/guide#transactions">Sending Transactions</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Useful Links</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="//blog.expanse.tech">Expanse Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">Technical Documentation</h2>
          </div>
          <div class="panel-body">
            <ul>
              <li><a href="/docs/guide">User Guide</a></li>
              <li><a href="/docs/whitepaper-draft.pdf">White Paper</a></li>
              <li><a href="/docs/roadmap.pdf">Roadmap</a></li>
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
<?php include('./footer.php'); ?>

    Status API Training Shop Blog About Pricing 

    © 2016 GitHub, Inc. Terms Privacy Security Contact Help 

