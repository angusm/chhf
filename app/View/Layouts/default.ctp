<?php

//<cakePHP>

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('reset');
		echo $this->Html->css('ie-default');
		echo '<![if !IE]>';
		echo $this->Html->css('default');
		echo '<![endif]>';

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->script('JQuery');
		echo $this->Html->script('Core');
	?>
</head>
<body>
<?php // </cakePHP> ?>
    <?php
	echo '<div id="header">';
		echo '<div id="headerImageLeftPadding"></div>';
		echo '<div id="headerImage"></div>';
		//echo $this->Html->image( 'header.png', array( 'id' => 'headerImage' ) );
    echo '<div id="rightHeaderPad"></div></div>';
    echo '<div id="menuContainer">';
        echo '<div id="menu">';
            echo '<div class="menuSpacer"></div>';
			echo $this->Html->tag(
								'a',
								$this->Html->image( 'menu/whatWeDo.png', array( 'class' => 'menuImage whatWeDo' ) ),
								array(
									'class' => 'menuItem whatWeDo',
									'href'	=> $this->Html->url(array(
																"controller" => "WhatWeDo",
																"action" => ""
															))
								));
            echo '<div class="menuSpacer"></div>';
			echo $this->Html->tag(
								'a',
								$this->Html->image( 'menu/whyWeDoIt.png', array( 'class' => '' ) ),
								array(
									'class' => 'menuItem whyWeDoIt',
									'href'	=> $this->Html->url(array(
																"controller" => "WhyWeDoIt",
																"action" => ""
															))
								));
            echo '<div class="menuSpacer"></div>';
			echo $this->Html->tag(
								'a',
								$this->Html->image( 'menu/howWeDoIt.png', array( 'class' => 'menuImage howWeDoIt' ) ),
								array(
									'class' => 'menuItem howWeDoIt',
									'href'	=> $this->Html->url(array(
																"controller" => "HowWeDoIt",
																"action" => ""
															))
								));
            echo '<div class="menuSpacer"></div>';
			echo $this->Html->tag(
								'a',
								$this->Html->image( 'menu/howYouCanHelp.png', array( 'class' => 'menuImage howYouCanHelp' ) ),
								array(
									'class' => 'menuItem howYouCanHelp',
									'href'	=> $this->Html->url(array(
																"controller" => "HowYouCanHelp",
																"action" => ""
															))
								));
            echo '<div class="lastMenuSpacer"></div>';
        echo '</div>';
    echo '</div>';
    echo '<div id="outerContentBorder">';
        echo '<div id="content">';
            echo '<div id="innerContentBorder">';
                echo '<div id="innerContent">';
                    echo '<div id="innerContentPadding">';
                        echo $this->fetch('content'); 
                    echo '</div>';
                echo '</div>';
         	echo '</div>';
		echo '</div>';
    echo '</div>';
		echo $this->element('script_dump'); 
		echo '<script>' .
			'var getJSURL = "'. $this->Html->url(array("controller" => "js", "action" => "")) .'/";' .
			'var homeURL = "'. $this->webroot .'";' .
		'</script>';
	//Toss up the extra libraries
	echo $this->Html->tag(
					'script',
					'window.pageLibraries = new Array(
											new Array( "CHHF", "default" )
										);'
					);
	?>
  
<?php // <cakePHP> ?>          
<?php //echo $this->element('sql_dump'); ?>
<?php
	echo $this->Html->image( 'menu/highlighted/whatWeDo.png', array( 'class' => 'hidden' ) );
	echo $this->Html->image( 'menu/highlighted/whyWeDoIt.png', array( 'class' => 'hidden' ) );
	echo $this->Html->image( 'menu/highlighted/howWeDoIt.png', array( 'class' => 'hidden' ) );
	echo $this->Html->image( 'menu/highlighted/howYouCanHelp.png', array( 'class' => 'hidden' ) );
?>
</body>
</html>
<?php // </cakePHP>  ?>
