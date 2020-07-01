<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <script src="js/slider1.js" type="text/javascript"></script>
<title>slider1</title>
<style>
#slider1 {
    width:100%;
    max-width:900px;
    padding: 30px 0;
    margin:0 auto;
    overflow:hidden;
    box-sizing:border-box;
}
#slider1 .slider1-ineer {
    margin:0 auto;
    font-size:0px;
    position:relative;
}

#slider1 ul {

    position:relative;
    list-style:none;
    padding:0;
}

#slider1 li {    
    width:100%;
    height:100%;
    top:0;
    left:0;
    position: absolute;
    font-size:12px;
    list-style:none;
    margin:0;
    padding:0;
    opacity:0;
    overflow:hidden;
    transform-style: preserve-3d; 
}

#slider1 li.ns-show {
    opacity:1;
}
#slider1 div.content {
    font-family: 'Roboto', sans-serif;
    text-transform: uppercase;
    padding:0 14%;
    text-align:center;
    color:#FFF;
    font-size:1.2em;
    line-height:1.2;
    position: relative;
    top: 10%;
    box-sizing:border-box;
}

#slider1 div.content h3 {
    color:#FFFF00;
    margin-top:0;
    margin-bottom:30px;
    font-size:3.3em;
    font-family: 'Roboto', sans-serif;
    font-weight:900;
}
#slider1 div.content p {
    color:#FFFFFF;
	}
   
#slider1 div.content img {
    float:right;
    width:40%;
    margin:0 0 20px 20px;
}

#slider1-pause-play { display:none;}    

#slider1-prev, #slider1-next
{
    position: absolute;
    display:inline-block;
    width:42px;
    height:56px;
    line-height:56px;
    top: 50%;
    margin-top:-51px;
    background-color:rgba(0,0,0,0.4);
    background-color:#ccc\9;
    backface-visibility:hidden;
    color:white;
    overflow:hidden;
    white-space:nowrap;
    -webkit-user-select: none;
    user-select:none;
    border-radius:2px;
    z-index:10;
    opacity:0.3; 
    font-family:sans-serif;   
    font-size:13px;
    cursor:pointer;
    -webkit-transition:all 0.7s;
    transition:all 0.4s;
}

.slider1-ineer:hover #slider1-prev, .slider1-ineer:hover #slider1-next {
    opacity:1;
}


#slider1-prev {
    left: 0px;
}
#slider1-next {
    right: 0px;
}


#slider1-prev::before, #slider1-next::before {
    position: absolute;
    top: 17px;
    content: "";
    display: inline-block;
    width: 20px;
    height: 20px;
    border-left: 5px solid white;
    border-top: 5px solid white;
    backface-visibility:hidden;
}

#slider1-prev::before {
    -ms-transform:rotate(-45deg);
    -webkit-transform:rotate(-45deg);
    transform: rotate(-45deg);
    left:14px;
}

#slider1-next::before {
    -ms-transform:rotate(135deg);/*IE 9*/
    -webkit-transform:rotate(135deg);
    transform: rotate(135deg);
    right:14px;
}

#slider1-prev:hover, #slider1-next:hover {width:80px;background-color:rgba(0,0,0,0.8);}
#slider1-prev div {margin-right:8px;white-space:nowrap;opacity:0;float:right;}
#slider1-next div {margin-left:8px;white-space:nowrap;opacity:0;float:left;}
#slider1-prev:hover div, #slider1-next:hover div {opacity:1;}



#slider1-pager { display:none;}
.clear{
    clear: both;
	}

@media only screen and (max-width:700px){

    #slider1 div.content {
        font-size:1em;
    }
    
    #slider1 div.content h3 {
        font-size:2em;
    }

    #slider1 div.content img {
        display:none;
    }
    #slider1-prev, #slider1-next {
        display:none;
    }
}
</style>

</head>

<body>
<div id="slider1">
        <div class="slider1-ineer">
            <ul>
                <li>
                    <div class="content">
                        <img src="3/hand.png" />
                        <h3>Always Be Alert!!</h3>
                        
                    </div>
                </li>
                <li>
                    <div class="content">
                         <img src="3/hand.png" />
                        <h3>Stop the crime</h3>
                        <p>
                            Connect with us                      </p>
                    </div>
                </li>
                <li>
                    <div class="content">
                        <img src="3/hand.png" />
                        <h3>Crime</h3>
                        <p>It could happen to you...</p>
                    </div>
                </li>
                <li>
                    <div class="content">
                         <img src="3/hand.png" />
                        <h3>Online Crime Reporting</h3>
                       
                    </div>
                </li>
				 <li>
                    <div class="content">
                         <img src="3/hand.png" />
                        <h3>Criminal Justice Program</h3>
                       
                    </div>
                </li>
            </ul>
            <div class="fs-icon" title="Expand/Close"></div>
        </div>
    </div>
	<div class="clear"> </div> 

</body>
</html>
