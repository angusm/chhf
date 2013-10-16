// JavaScript Document
var CHHF_default = new chhf();
CHHF_default.handleEverything();

//Handle everything for this site
function chhf(){
	
	//FUNCTION: handleEverything
	//Pepper Potts
	this.handleEverything = function(){
		
		CHHF_default.handleMenuMouseOver();
		
	}
	
	//FUNCTION: handleMenuMouseOver
	//Handle the mouse over on the menu items
	this.handleMenuMouseOver = function(){
	
		//Handle the mouseover 
		jQuery('.whatWeDo').hover( function(element){
			jQuery( this ).attr( 'src', '/fordad/img/menu/highlighted/whatWeDo.png' );
		});
		
	}
	
}