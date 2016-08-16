/**
 * Created by Callum Carmicheal on 08/04/2016.
 */

var ModuleLoader = {
    Modules: {
        moduleList: new Array(0),

        AddModule: function(module) {
            console.log("Added Module (" + module.Settings.Name + ")");
            ModuleLoader.Modules.moduleList.push(module);
        }
    }
};


$(function() {
    console.log("ModuleLoader: Calling OnLoad Event");

    for(var x = 0; x < ModuleLoader.Modules.moduleList.length; x++) {
        var module = ModuleLoader.Modules.moduleList[x];

        if(module.Settings.Events.OnLoad)
            module.Events.OnLoad();

        // Add Events
        if(module.Settings.Events.OnWindowResize)
            $(window).resize(module.Events.OnWindowResize);
    }
});