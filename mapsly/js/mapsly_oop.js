
var Mapsly = {};
Mapsly.MapStats = function(lat,lng,zoom){
this.center = new Mapsly.GeoPoint(lat,lng);
this.zoom = zoom;
};

Mapsly.MarkerSettings = function(map,position,title){
    this.map = map;
    this.position = position;
    this.title = title;
};
Mapsly.MarkerSettingsDraggable = function(map,position,title){
    this.map = map;
    this.position = position;
    this.title = title;
    this.draggable = true;
};
Mapsly.GeoPoint = function(lat,lng){
    this.lat = lat;
    this.lng = lng;
};
Mapsly.ContentBucket = function(content){
    this.content = content;
}
Mapsly.LineProperties = function(path,geodesic,strokeColor,strokeOpacity,strokeWeight){
    this.path = path;
    this.geodesic = geodesic;
    this.strokeColor = strokeColor;
    this.strokeOpacity = strokeOpacity;
    this.strokeWeight = strokeWeight;
    
};
Mapsly.PointOfView = function(heading,pitch){
    this.heading = heading;
    this.pitch = pitch;
};