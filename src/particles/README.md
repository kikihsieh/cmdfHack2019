# jParticle
jQuery plugin for make pretty particles animation.

[**Demo**](http://thomasarbona.github.io/jparticle/)

## How to use
Include jParticle file after jQuery
```html
<script src='path/to/jparticle.jquery.min.js'></script>
```

Then, init jParticle
```javascript
$("#jparticle-container").jParticle();

// with options
$("#jparticle-container").jParticle({
  // options
});
```

## Optional parameters
**particlesNumber**

Number of particles.

*Default: 100*

**linkDist**

Distance where link is full opacity.

*Default: 50*

**createLinkDist**

Distance where particles start linking.

*Default: 150*

**linksWidth**

Links width in pixels.

*Default: 1*

**disableLinks**

If this options is true, links between particles are disabled.

*Default: false*

**disableMouse**

If this options is true, links between particles and mouse cursor are disabled.

*Default: false*

**background**

Background color.

*Default: "black"*

**color**

Particles and links color.

*Default: "white"*

**width**

Particles container width.

*Default: null (use the parents container width)*

**height**

Particles container height.

*Default: null (use the parents container height)*

**particle.color**

Particles color.

*Default: "white"*

**particle.minSize**

Particles minimum size in pixels.

*Default: 2*

**particle.maxSize**

Particles maximum size in pixels.

*Default: 4*

**particle.speed**

Particles speed in pixels per frame multiplied by 60.

*Default: 60 (1 pixel per frame)*

```javascript
$("#jparticle-container").jParticle({
  particlesNumber: 100,
  linkDist: 50,
  createLinkDist: 150,
  disableLinks: false,
  disableMouse: false,
  background: "black",
  color: "white",
  width: null,
  height: null,
  linksWidth: 1,
  particle: {
    color: "white",
    minSize: 2,
    maxSize: 4,
    speed: 60
  }
});
```

## Actions on particles container

**Remove jParticle animation**
```javascript
$("#jparticle-container").removeJParticle();
```

**Freeze jParticle animation**
```javascript
$("#jparticle-container").freezeJParticle();
```

**Unfreeze jParticle animation**
```javascript
$("#jparticle-container").unfreezeJParticle();
```


