

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="nav-container">
  	<div class="header-logo"><a href="http://www.verolife.com.br"><img src="../../assets/images/logo.png" width="150" height="60"></a></div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <?php if (site_url() != current_url()) {?>
      	<li id="inicio-btn"><a class="navbar-brand" href="http://www.verolife.com.br/">Voltar ao portal VeroLife</a></li>
        <?php } ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>