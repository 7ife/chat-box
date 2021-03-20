
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

[data-hover].tt-info:after {
  background: #1565C0;
}

[data-hover].hover-tt-top:after {
  bottom: 50%;
  right: 50%;
  transform: translate(50%, 0%);
}

[data-hover].hover-tt-top:hover:after {
  bottom: calc(100% + 10px);
}
.mainContainer-scroll {
  padding-top: 5px;
  padding-right: 35px;
  padding-bottom: 40px;
  padding-left: 35px;
}
