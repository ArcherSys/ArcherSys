try{
    
console.log("Loading ArcherSysOSJS.MozillaManager module ...");
ArcherSysOS.MozillaManager = {};
ArcherSysOS.MozillaManager.Setting = new SettingsManager();
    
}catch(e){
    ArcherSysOS.Debugging.SEVERE(e);
}
