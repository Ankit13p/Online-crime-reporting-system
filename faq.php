<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en-gb" xmlns="http://www.w3.org/1999/xhtml" lang="en-gb">
<head>
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">
<link rel="stylesheet" href="css/template.css" type="text/css">
<link rel="stylesheet" href="css/constant.css" type="text/css">

<?php
session_start();
//if(isset($_SESSION['username'])){
//	$msg = base64_encode("Registered Successfully"); 
//	header("location:home.php?msg=$msg");
//}
?>

<style type="text/css">
#wrap {
	margin-top: 0px;
	background-color:#EEE;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	padding: 0px;
	
	font:Museo_slab, Helvetica, sans-serif;
}


.clear { clear: both; }

table { width:100%;}
td { }

p{margin: 0 0 10px 0;}
.text-right { text-align:right;}
.text-center { text-align:center;}
h4{margin: 0 0 10px;}

/* Remove focus ring as all screen readers tested on, add their own focus ring */
:focus{
  outline: 0;
}
.faqbody{
width:100%;
padding:50px 50px 50px 20px;
}


.accordion{
	overflow: hidden;
	padding:20px 40px 20px 20px;
	

}

.accordion-panel__heading{
	position: relative;
	padding:5px 5px 5px 0px;
	display: block;
	border-bottom:1px solid #CCCCCC;
		
	text-decoration: none;
	
	letter-spacing: 2px;
	color:#000000;
	background:#FFFFFF;
	font-family:Museo_slab;
	font-size: 16px;
	
	transition: all .2s;
	cursor:pointer;
}
.accordion-panel__heading:before{
	transition: all .2s ease;
	content: "";
	border: 0px #6495ED solid;
	position: absolute;
	top: 0;
	left: 0;
	width: 0;
	height: 100%;
}
.accordion-panel__heading.active:before{
	transition: all .2s .2s;

}
.accordion-panel__heading:HOVER{
	color:#FFFFFF;
	background:#cf0000;
	transition: all .2s;
}
.accordion-panel__heading.active:HOVER,
.accordion-panel__heading.active {
	transition: all .2s;
	color:#cf0000;
	background: #fff;
	border-bottom: 0;
	padding: 20px 20px 20px 40px;
}
.accordion-panel__content{
	transition: all .2s;
	position: relative;
	padding: 0 20px 0 20px;
	background:#FFFFFF;
    max-height: 0;
    overflow: hidden;
}
.accordion-panel__content:before{
	transition: all .2s ease;
	content: "";
	border: 0px #6495ED solid;
	position: absolute;
	top: 0;
	left: 0;
	width: 0;
	height: 100%;
}
.accordion-panel__content.active:before{
	transition: all .2s .2s;

}
.accordion-panel__content.active {
	transition: all .2s;
	border-bottom:1px solid  #CCCCCC;
    max-height: 500px;
    background: #fff;
	font-size:50px;
   padding: 10px 20px 15px 40px;
}

</style>
<script>

var myAPP = myAPP || {};

/*
See the README.md for more info
@Author: Ben Bowes - bb@benbowes.com
*/

myAPP.Accordion = function ( panelSelectorsObj ) { // e.g. function ({ heading: <String>, content: <String>})
    
    this.panels = []; // Master list of collapsable panels. Accessible publically e.g myAPP.accordionContainer.panels[0].select();
    this.panelSelectors = panelSelectorsObj; // an obj containing the panel selectors - { heading: <String>, content: <String>}
    this.accordionPanels = document.querySelectorAll( this.panelSelectors['heading'] ); 

    for (i = 0; i < this.accordionPanels.length; i++) {
        this.makePanel( this.accordionPanels[i], i );
    }
};

myAPP.Accordion.prototype = {

    // resetPanels() - used for unselecting/collapsing AccordionPanels
    resetPanels: function () {
        this.panels.forEach( function ( v ) {
            v.unselect();
        });
    },
    // makePanel( <HTMLElement>, <position index used for naming> ) - Spawns a new AccordionPanel and pushes it into the master list of AccordionPanels controlled by Accordian
    makePanel: function ( panelElement, index ) {
        var panel = new myAPP.AccordionPanel( panelElement, this, index );
        this.panels.push( panel );
    }
};

myAPP.AccordionPanel = function ( headingEl, panelHolder, index ) {
    // The AccordionPanel Class controls each of the collapsable panels spawned from Accordion Class
    var self = this;

    this.panelHolder = panelHolder;
    this.index = index;
    this.headingEl = headingEl; // this is the clickable heading
    this.contentEl = headingEl.nextElementSibling;//headingEl.querySelector( this.panelHolder.panelSelectors['content'] ); 
    this.isSelected = false;

    this.setupAccessibility();

    this.headingEl.addEventListener( "click", function () {
        
        if (self.isSelected){
            self.unselect(); // already open, presume user wants it closed
        }
        else {
            self.panelHolder.resetPanels(); // close all panels
            self.select(); // then open desired panel
        }

    });

    return this;
};

myAPP.AccordionPanel.prototype = {

    setupAccessibility: function(){
        this.headingEl.setAttribute( 'role', 'tab' );
        this.headingEl.setAttribute( 'aria-selected', 'false' );
        this.headingEl.setAttribute( 'id', 'accordionHeading_' + this.index );
        this.headingEl.setAttribute( 'aria-controls', 'accordionContent_' + this.index );
        this.headingEl.setAttribute( 'tabindex', '0' );
        this.headingEl.setAttribute( 'aria-expanded', 'false' ); // dynamic html attribute

        this.contentEl.setAttribute( 'id', 'accordionContent_' + this.index );
        this.contentEl.setAttribute( 'aria-labelledby', 'accordionHeading_' + this.index );
        this.contentEl.setAttribute( 'role', 'tabpanel' );
        this.contentEl.setAttribute( 'tabindex', '0' );
        this.contentEl.setAttribute( 'aria-hidden', 'true' ); // dynamic html attribute
    },
    select: function () {
        var self = this;
        this.isSelected = true;

        this.headingEl.addClass('active');
        this.headingEl.setAttribute( 'aria-expanded', 'true' );
        this.headingEl.setAttribute( 'aria-selected', 'true' );

        this.contentEl.addClass('active');
        this.contentEl.setAttribute( 'aria-hidden', 'false' );
        setTimeout(function(){
            self.contentEl.focus();
        }, 1000); // wait for animation to finish before shifting focus (Don't need to - just looks nicer)
        
    },
    unselect: function () {
        this.isSelected = false;

        this.headingEl.removeClass('active');
        this.headingEl.setAttribute( 'aria-expanded', 'false' );
        this.headingEl.setAttribute( 'aria-selected', 'false' );

        this.contentEl.removeClass('active');    
        this.contentEl.setAttribute( 'aria-hidden', 'true' );
    }
};

myAPP.init = function () {

    // Create Accordian instance and turn all elements with class '.accordion-panel' into AccordianPanel Class intances. 
    this.accordionContainer = new myAPP.Accordion({
        heading:    '.accordion-panel__heading',
        content:    '.accordion-panel__content'
    }); //  store the panel selectors in Accordian Class - Accordion( { heading: <String>, content: <String>} )

    // Select second panel
    this.accordionContainer.panels[1].select(); // or myAPP.accordionContainer.panels[0].select();
};

window.onload = function () {
    myAPP.init();
};

/* ------------------------------------------------

    C o n v e n i e n c e    M e t h o d s

------------------------------------------------ */

HTMLElement.prototype.addClass = function ( className ) {
    // e.g. el.addClass( 'className' ); 
    if (this.classList){
        this.classList.add( className );
    }else{
        this.className += ' ' + className;
    }
}

HTMLElement.prototype.removeClass = function (className) {
    // e.g. el.removeClass( 'className' ); 
    if (this.classList){
      this.classList.remove(className);
    }else{
      this.className = this.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }
}
</script>

  <title>Welcome to the Crime Reporting System</title>
  <?php ?>
  <script type="text/javascript" src="files/mootools.js"></script>
  <script type="text/javascript" src="files/caption.js"></script>
<!--StyleSheet included-->
<link rel="stylesheet" type="text/css" href="css/message.css" media="all">

<link rel="stylesheet" href="files/template.css" type="text/css">
<link rel="stylesheet" href="files/constant.css" type="text/css">


</script>


</head>

<body id="body">
   <div class="main"> 

      <div id="wrap">    
	  <?php
	   include("menu.php");
	   ?>
	 <div class="clear"></div> 
<div class="faqbody">
		 <div class="mhead">Frequently asked questions</div>
		<div class="mheadborder"> </div>
<section class="accordion" role="tablist" aria-multiselectable="false">

    <a class="accordion-panel__heading" style="border-top:1px solid #cccccc;" href="javascript:;"> How can I have a first information report (FIR) registered at a police station ?.....</a>
    <div class="accordion-panel__content">
        <h4 >How can I have a first information report (FIR) registered at a police station ?</h4>
        <p>An FIR is an account of a cognizable (i.e. over which police has jurisdiction) offence that is entered in a particular format in a register at the police station. Every person has a right to report any matter at the concerned police station and have a case registered in the form of an FIR. The matter may be reported orally or in writing to an officer at a police station or on patrol. An officer who receives an oral report shall reduce it to writing and cause it to be recorded in the FIR register. A certified copy of the FIR, signed by an officer bearing the stamp of the police station is to be provided to the person who reports the crime.
No police officer has the authority to refuse registration of a case. In case a crime is reported and a case is not registered, the person who reports the crime must inform the Sub-Divisional Police Officer or the Superintendent of Police or the District Police Officer responsible for the area. For contact details of officers responsible for all jurisdictions in the Punjab click here.</p>
    </div>

    <a class="accordion-panel__heading" href="javascript:;">Where should I report a crime?....</a>
    <div class="accordion-panel__content">
		<h4>Where should I report a crime?....</h4>
        <p>An offence or crime is to be reported at the nearest Police Post,Police Station or to any Police Officer found nearest to the place of occurrence.
If the circumstances are such that delay in reporting the crime would lead to escape of a criminal or any immediate help is required, the matter may be reported on Police Emergency Telephone No. 100.</p>
    </div>

    <a class="accordion-panel__heading" href="javascript:;">What is Act 2012 ?....</a>
    <div class="accordion-panel__content">
		<h4>What is Act 2012 ?....</h4>
        <p>The Sale and Supply of Alcohol Act 2012 covers the safe and responsible sale, supply, and consumption of alcohol and the minimisation of harm caused by its excessive or inappropriate use.</p>
<p>If you are 18 years or older you can enter any licensed premises and buy and drink alcohol, as long as you can provide acceptable proof of age identification such as a driver licence, Hospitality New Zealand (HANZ) 18+ card or passport.</p>
		</div>

    <a class="accordion-panel__heading" href="javascript:;">How can I become Police Officer ?</a>
    <div class="accordion-panel__content">
		<h4>How can I become Police Officer ?</h4>
        <p>Be at least 17 years old.Hold a full driver's licence. </p> 
		<p>Be a New Zealand or Australian citizen or permanent resident</p>
		<p>Pass psychological, maths and problem-solving tests</p>
		<p>pass physical fitness and eyesight tests</p>


    </div>

    <a class="accordion-panel__heading" href="javascript:;">What to do in faulty investigation ?.....</a>
    <div class="accordion-panel__content">
        <h4>What to do in faulty investigation ?.....</h4>
        <p>An employer may need to consider investigating an issue, for example, if there may have been misconduct or serious misconduct, or a complaint of bullying or harassment has been made.</p>
		<p>* Investigations have a number of steps and decisions to be made. Employers will need to balance:</p>
		<p>* Unnecessarily raising something that may not be a real issue, causing stress to the employee. Also there are times when an employer does not know who did the act that has resulted in the concern, for example, who took the missing money.</p>
    </div>
	 <a class="accordion-panel__heading" href="javascript:;">What to do in Police harassment ?....</a>
    <div class="accordion-panel__content">
     	<h4>What to do in Police harassment ?....</h4>
        <p>If you feel harassment than you may want to apply to the District Court for a restraining order to prevent that person from contacting you in future.</p>
    <p> Note that if the person harassing you is someone you are (or have been) in a domestic relationship with, then instead of a restraining order you would apply for a protection order under the Domestic Violence Act.</p>
	</div>
	 

</section>

<div class="clear"></div>
 <?php
	   include("footer1.php");
?>