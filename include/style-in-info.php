
.mainContainer-scroll {
  padding-top: 5px;
  padding-right: 35px;
  padding-bottom: 40px;
  padding-left: 35px;
}
@-moz-document url-prefix() {
  fieldset { display: table-cell; }
}
input[type="text"],input[type="name"], textarea {color: #bfbfbf; background-color: #464b52;}
textarea[type="text"] {color: #bfbfbf; background-color: #464b52;}


[data-hover] {
  position: relative;
}

[data-hover]:after {
  box-sizing: border-box;
  position: absolute;
  color: white;
  max-width: 150px;
  min-width: 100px;
  padding: 5px 10px;
  font-size: 12px;
  content: attr(data-hover);
  transition: 0.3s ease-out;
  opacity: 0;
  text-align: center;
  border-radius: 3px;
  z-index: 9999;
  pointer-events: none;
}

[data-hover]:hover:after {
  opacity: 1;
}

/* 
   Color styles for tooltips 
   CHANGE HOWEVER YOU WANT
*/

[data-hover].tt-default:after {
  background: #212121;
}

[data-hover].tt-caution:after {
  background: #F9A825;
  text-shadow:1px 2px 3px #A55800;
}

[data-hover].tt-info:after {
  background: #1565C0;
}

[data-hover].tt-danger:after {
  background: #C62828;
}

/* Style for tooltop that will slide to bottom */

[data-hover].hover-tt-bottom:after {
  top: 50%;
  right: 50%;
  transform: translate(50%, 0%);
}

[data-hover].hover-tt-bottom:hover:after {
  top: calc(100% + 10px);
}

/* Style for tooltop that will slide to right */

[data-hover].hover-tt-right:after {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

[data-hover].hover-tt-right:hover:after {
  left: calc(100% + 10px);
  transform: translate(0%, -50%);
}

/* Style for tooltop that will slide to left */

[data-hover].hover-tt-left:after {
  top: 50%;
  right: 50%;
  transform: translate(0%, -50%);
}

[data-hover].hover-tt-left:hover:after {
  right: calc(100% + 10px);
  transform: translate(0%, -50%);
}

/* Style for tooltop that will slide to top */

[data-hover].hover-tt-top:after {
  bottom: 50%;
  right: 50%;
  transform: translate(50%, 0%);
}

[data-hover].hover-tt-top:hover:after {
  bottom: calc(100% + 10px);
}
select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.iNgreen {color: #1E824C;}
.iNred {color: #C0392B;}
.iNorange {color: #F89406;}
.iNblue {color: #3A539B;}
.iNpurple {color: #8E44AD;}
.iNyellow {color: #FFFF33;}
.iNgray {color: #666666;}
.iNpink{color: #DB0A5B;}

.cb-border{border:1px solid #fff!important}
.cb-border-grey,.cb-hover-border-grey:hover,.cb-border-gray,.cb-hover-border-gray:hover{border-color:#bbb!important}
.lines {margin-bottom: 10px;}
