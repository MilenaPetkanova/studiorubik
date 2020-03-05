<div class="loader-container">
  <style>@keyframes slide{0%{transform:translate(0,0)}2%{transform:translate(33px,0)}12.5%{transform:translate(33px,0)}15.5%{transform:translate(66px,0)}25%{transform:translate(66px,0)}27%{transform:translate(66px,33px)}37.5%{transform:translate(66px,33px)}39.5%{transform:translate(33px,33px)}50%{transform:translate(33px,33px)}52%{transform:translate(33px,66px)}62.5%{transform:translate(33px,66px)}64.5%{transform:translate(0,66px)}75%{transform:translate(0,66px)}77%{transform:translate(0,33px)}87.5%{transform:translate(0,33px)}89.5%{transform:translate(0,0)}100%{transform:translate(0,0)}}@keyframes rotate{from{transform:rotate(0)}to{transform:rotate(360deg)}}svg#loading{position:absolute;display:block;margin:auto;width:6rem;height:auto;top:50%;left:50%;transform:translate(-50%,-50%)}svg#loading .rect{animation:slide 15s ease infinite}svg#loading #rect1{animation-delay:0s}svg#loading #rect2{animation-delay:-2.14285714s}svg#loading #rect3{animation-delay:-4.28571429s}svg#loading #rect4{animation-delay:-6.42857143s}svg#loading #rect5{animation-delay:-8.57142857s}svg#loading #rect6{animation-delay:-10.71428571s}svg#loading #rect7{animation-delay:-12.85714286s}.loader-container{position:fixed;z-index:999;background-color:#fff;width:100vw;height:100vh}</style>
  <svg id="loading" viewbox="0 0 100 80">
  <defs>
    <linearGradient id="gradient" x1="100%" y1="0%" x2="0%" y2="100%">
      <stop offset="0%" stop-color="#000000" />
      <stop offset="100%" stop-color="#000000" />
    </linearGradient>

    <clipPath id="rects">
      <rect class="rect" id="rect1" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect2" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect3" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect4" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect5" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect6" x="0" y="0" width="30" height="30" rx="2" ry="2" />
      <rect class="rect" id="rect7" x="0" y="0" width="30" height="30" rx="2" ry="2" />
    </clipPath>
  </defs>
  <rect id="container" transform="translate(50) scale(0.707, 0.707) rotate(45)" x="0" y="0" width="100" height="100" fill="url(#gradient)" clip-path="url(#rects)">
  </rect>
</svg>
</div>