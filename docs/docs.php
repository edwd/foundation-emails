<style type="text/css">

  /* iframe sizes */

    #if-basicGrid {height: 120px;}
    #if-evenColumns {height: 260px;}
    #if-centerClass {height: 220px;}

  @media only screen and (max-width: 632px), only screen and (min-width: 768px) and (max-width: 843px) {
    #if-basicGrid {height: 150px;}
    #if-evenColumns {height: 570px;}
    #if-centerClass {height: 270px;}   
  } 

</style>
<div class="row docs">
  <div class="large-3 columns">
    <ul class="doc-nav hide-for-small">
      <li><a href="#start">Getting Started</a></li>
      <li><a href="#grid">Grid</a></li>
      <li><a href="#sub-grid">Sub-Grid</a></li>
      <li><a href="#visibility-classes">Visibility Classes</a></li>
      <li><a href="#panels">Panels</a></li>
      <li><a href="#buttons">Buttons</a></li>
      <li><a href="#compatibility">Compatibility</a></li>
    </ul>
  </div>
  <div class="large-9 columns">
    
    <?php require 'components/getting-started.php' ?>
    
    <hr class="section">

    <?php require 'components/grid.php' ?>
    
    <hr class="section">

    <?php require 'components/sub-grid.php' ?>
    
    <hr class="section">

    <?php require 'components/visibility-classes.php' ?>
    
    <hr class="section">

    <?php require 'components/panels.php' ?>
    
    <hr class="section">

    <?php require 'components/buttons.php' ?>
    
    <!-- <hr class="section">

    <h1 id="compatibility" class="light">Compatibility</h1>
    <p class="lead">Here's a breakdown of the email clients that we&rsquo;ve optimized Ink for.</p>
    <hr />
    <table>
      <thead>
        <tr>
          <th width="40%">Client</th>
          <th width="20%"><span>The Grid</span></th>
          <th width="20%"><span>UI Elements</span></th>
          <th width="20%"><span>Visibility Classes</span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Gmail (Desktop)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Gmail (Mobile)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Gmail (iOS)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Gmail (Android)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Yahoo! Mail (Desktop)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Yahoo! Mail (Mobile)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Mail (iOS)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Mail (OSX)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Mail (Android)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Outlook Express</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Outlook 2003</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Outlook 2007, 2010, 2013</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Outlook 2011 for Mac</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Hotmail (Desktop)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Hotmail (Mobile)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Thunderbird</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Sparrow (iOS)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Sparrow (Desktop)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Entourage (2004)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Entourage (2008)</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Windows Mail</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
        <tr>
          <td>Live Mail</td>
          <td><span class="check">&#10004;</span></td>
          <td><span class="x">&#10008;</span></td>
          <td><span class="check">&#10004;</span></td>
        </tr>
      </tbody>
    </table>
    
    <br>
    <br>
    <br> -->
  </div>
</div>