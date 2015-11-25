ArcherSysOS.PowerSaver = {
useBattery: function(usage){
window.navigator.getBattery().then(function(battery){

usage(battery)
});
  
}
};