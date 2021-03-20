

*, *:before, *:after {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

.chat-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  margin-bottom: 15px;
}

.chat-img {
  width: 42px;
  height: 42px;
  border-radius: 50%;
  box-shadow: 5px 5px 5px black;
}

.chat-item--me .message {
  margin-left: 15px;
  background: #c8c8c8;
  opacity:0.9;
}
.chat-item--me .message::before {
  right: 100%;
  border: solid transparent;
  border-right-color: #c8c8c8;
  content: '';
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-width: 10px;
  top: 10px;
}

.chat-item--other .message {
  margin-right: 15px;
  background: #c8c8c8;
}
.chat-item--other .message::after {
  left: 100%;
  border: solid transparent;
  border-left-color: #c8c8c8;
  content: '';
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-width: 10px;
  top: 10px;
}

.message {
  padding: 10px;
  border-radius: 5px;
  position: relative;
  box-shadow: 5px 5px 5px black;
}

.message__user-name {
  font-size: 16px;
  font-weight: bold;
  color: #000;
  text-shadow: 0px 1px 0px #e2e2e2;
}

.message__time {
  font-size: 10px;
  color: #f7f7f7;
  text-shadow: 1px 1px 1px #a0a0a0;
}

.message__date {
  font-size: 10px;
  color: #7a8288;
  text-shadow: 1px 1px 1px #dadada;
}

.message__text {
  font-size: 16px;
  color: #272b30;

}

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
[data-hover].tt-default:after {
  background: #212121;
}

[data-hover].tt-caution:after {
  background: #F9A825;
}

[data-hover].tt-info:after {
  background: #1565C0;
}

[data-hover].tt-danger:after {
  background: #C62828;
}

[data-hover].hover-tt-right:after {
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

[data-hover].hover-tt-right:hover:after {
  left: calc(100% + 10px);
  transform: translate(0%, -50%);
}
[data-hover].hover-tt-bottom:after {
  top: 50%;
  right: 50%;
  transform: translate(50%, 0%);
}

[data-hover].hover-tt-bottom:hover:after {
  top: calc(100% + 10px);
}
.mainContainer-scroll {
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 40px;
  padding-left: 15px;
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
