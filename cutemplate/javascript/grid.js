/*------------------------------------------------------------

/*
* Skeleton V1.2
* Copyright 2011, Dave Gamache
* www.getskeleton.com
* Free to use under the MIT license.
* http://www.opensource.org/licenses/mit-license.php
* 
*/



/* Resets
-------------------------------------------------------------- */
@-o-viewport {
  width: device-width;
}
@-ms-viewport {
  width: device-width;
}
@viewport {
  width: device-width;
}

html {
  overflow-y: auto;
}

img,
audio,
video,
canvas {
  max-width: 100%;
}

* { -webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box; }

/* Grid
-------------------------------------------------------------- */

.container {
	max-width: 990px;
	width:92%;
	margin:0px auto;
	position: relative;
	zoom:1;
}

.container:before, .container:after { content:""; display: table; }
.container:after { clear:both; }


@media screen and (min-width: 480px) {
  .container {
    width: 98%;
  }

  .grid-1,
  .grid-2,
  .grid-3,
  .grid-4,
  .grid-5,
  .grid-6,
  .grid-half,
  .grid-full {
    float: left;
    width: 96.969696969697%;
    margin: 0 1.515151515152%;
  }

  .grid-half {
    width: 46.969696969697%;
    margin: 0 1.515151515152%;
  }

}

@media screen and (min-width: 640px) {

  .grid-1     { width: 13.636363636364%; }
  .grid-2     { width: 30.30303030303%; }
  .grid-3,
  .grid-half  { width: 46.969696969697%; }
  .grid-4     { width: 63.636363636364%; }
  .grid-5     { width: 80.30303030303%; }
  .grid-6,
  .grid-full  { width: 96.969696969697%; }

}




/* Clearfix
-------------------------------------------------------------- */
.clearfix:before, .clearfix:after { content:""; display: table; }
.clearfix:after { clear:both; }
.clearfix { zoom:1; }