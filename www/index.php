<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{PROJECT BASE}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>

    <div class="viewport">
      <div class="plane">
        <div class='circle one'></div>
        <div class='circle two'></div>
        <div class='circle three'></div>
        <div class="panel">
          <h1>Extreme Arts <br />& Sciences</h1>
          <p>Delete me and build something.</p>
          <a href="/styleguide/">View documentation</a>
        </div>
      </div>

    </div>

    <script>
      class css3dCube {
        constructor() {
          this.worldEl = document.querySelector('.plane');

          this.worldZ = 0;
          this.worldXAngle = 0;
          this.worldYAngle = 0;

          this.bindEvents();
        }

        // CSS
        updateView() {
          document.querySelector('html').style.setProperty('--translateZ', this.worldZ);
          this.worldEl.style.setProperty('--rotateX', this.worldXAngle);
          this.worldEl.style.setProperty('--rotateY', this.worldYAngle);
        }

        // EVENTS
        onMouseWheel(e) {
          let delta;
          if (e.detail) {
            delta = e.detail * -5;
          } else if (e.wheelDelta) {
            delta = e.wheelDelta / 8;
          } else {
            delta = e.deltaY;
          }

          if (!delta) return;

          this.worldZ += delta * 2;

          // scroll/perspective check
          if (this.worldZ > 50) {
            this.worldZ = 50;
          } else if (this.worldZ < -19) {
            this.worldZ = -19;
          } else {
            e.preventDefault();
          }

          this.updateView();
        };

        onMouseMove(e) {
          this.worldXAngle = (.5 - (e.clientY / window.innerHeight)) * 40;
          this.worldYAngle = -(.5 - (e.clientX / window.innerWidth)) * 40;
          this.updateView();
        };

        bindEvents() {
          window.addEventListener('mousewheel', this.onMouseWheel.bind(this));
          window.addEventListener('DOMMouseScroll', this.onMouseWheel.bind(this));
          window.addEventListener('mousemove', this.onMouseMove.bind(this));
        };
      }

      new css3dCube();
    </script>

    <script src="/assets/js/scripts.js"></script>

    <script src="/assets/js/scripts.js"></script>
  </body>
</html>
