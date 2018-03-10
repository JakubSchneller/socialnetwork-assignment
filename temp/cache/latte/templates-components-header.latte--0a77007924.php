<?php
// source: /Applications/MAMP/htdocs/mysocialnetwork/app/presenters/templates/components/header.latte

use Latte\Runtime as LR;

class Template0a77007924 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<nav class="navbar navbar-inverse bs-dark">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Mysocialnetwork</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li ><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">Feed <span class="sr-only"></span></a></li>
			</ul>
			<form class="navbar-form navbar-left form-horizontal" role="search">
				<div class="input-group">
					<input type="text" class="search-box" placeholder="Search">
					<button type="submit" class="btn"><span class=""></span></button>
				</div>
			</form>
			<ul class="nav navbar-nav navbar-right">
<?php
		if ($user->isLoggedIn()) {
?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="<?php
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Profile:profile")) ?>">
							Přihlášen jako: <?php echo LR\Filters::escapeHtmlText($loggedin->user_name) /* line 26 */ ?>

						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Profile:profile", ['userId' => $loggedin->user_id])) ?>">Můj profil</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:out")) ?>"> Odhlášení</a></li>
						</ul>
					</li>

<?php
		}
		else {
			?>					<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:up")) ?>"> Registrace</a></li>
					<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Sign:in")) ?>"> Přihlášení</a></li>
<?php
		}
?>
			</ul>
		</div>
	</nav>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
