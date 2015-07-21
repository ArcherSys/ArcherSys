// The Grid component allows an element to be located
// on a grid of tiles
Crafty.c('Grid', {
init: function() {
this.attr({
w: Elichion.map_grid.tile.width,
h: Elichion.map_grid.tile.height
})
},
 
// Locate this entity at the given position on the grid
at: function(x, y) {
if (x === undefined && y === undefined) {
return { x: this.x/Elichion.map_grid.tile.width, y: this.y/Elichion.map_grid.tile.height }
} else {
this.attr({ x: x * Elichion.map_grid.tile.width, y: y * Elichion.map_grid.tile.height });
return this;
}
}
});
 
Crafty.c('Tree', {
init: function() {
this.requires('2D, Canvas, Grid, Color');
this.color('rgb(20, 125, 40)');
},
});
 
Crafty.c('Bush', {
init: function() {
this.requires('2D, Canvas, Grid, Color');
this.color('rgb(20, 185, 40)');
},
});

// The Grid component allows an element to be located
// on a grid of tiles
Crafty.c('Grid', {
init: function() {
this.attr({
w: Game.map_grid.tile.width,
h: Game.map_grid.tile.height
})
},
 
// Locate this entity at the given position on the grid
at: function(x, y) {
if (x === undefined && y === undefined) {
return { x: this.x/Elichion.map_grid.tile.width, y: this.y/Elichion.map_grid.tile.height }
} else {
this.attr({ x: x * Elichion.map_grid.tile.width, y: y * Elichion.map_grid.tile.height });
return this;
}
}
});
 
// An "Actor" is an entity that is drawn in 2D on canvas
// via our logical coordinate grid
Crafty.c('Actor', {
init: function() {
this.requires('2D, Canvas, Grid');
},
});
 
// A Tree is just an Actor with a certain color
Crafty.c('Tree', {
init: function() {
this.requires('Actor, Color')
.color('rgb(20, 125, 40)');
},
});
 
// A Bush is just an Actor with a certain color
Crafty.c('Bush', {
init: function() {
this.requires('Actor, Color')
.color('rgb(20, 185, 40)');
},
});