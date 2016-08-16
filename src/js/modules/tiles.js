/**
 * Created by Callum Carmicheal on 08/04/2016.
 */

var Tiles = {
    Settings: {
        Name: "Tiles",

        Events: {
            OnLoad: true,
            OnWindowResize: true
        }
    },

    Variables: {
        boxObject: $('.box'),
        boxOpen: false,
        boxIFrame: false,
        IFrameProcessed: false,
        RemovedEvents: false
    },

    Events: {
        OnLoad: function() {
            Tiles.Variables.boxObject = $(".box");

            $('.metro li')  .each(Tiles.Tiles.Handler);
            $('.close')     .click(Tiles.Tiles.OnExitClick);

            var iframe   = Tiles.Variables.boxObject.find("iframe");
            iframe.load (Tiles.Tiles.IFrameLoad);


            console.log("Module: Tiles... Loaded");
        },

        OnWindowResize: function() {
            if(!Tiles.Variables.boxIFrame) {
                var box     = Tiles.Variables.boxObject;
                var div     = box.find('div');
                div.center();
            }
        }
    },


    Tiles: {
        Handler: function() {
            // Template for now, it will conclude the iframe aswell
            var content = $(this).html();

            $(this).click(function() {
                var object = $(this);
                Tiles.Tiles.OnTileClick(object, content);
            });
        },

        OnTileClick: function(object, content) {
            Tiles.Variables.boxOpen = true;
            Tiles.Variables.IFrameProcessed = false;
            Tiles.Variables.RemovedEvents = false;

            var box     = Tiles.Variables.boxObject,
                page    = object.attr("page"),
                pElem   = box.find('p'),
                div     = box.find('div');

            box.css("backgroundColor", object.css("backgroundColor"));
            pElem.html(content);
            div.center(true);
            box.addClass("open");

            if(object.attr("redir") == "true") {
                setTimeout(function() {
                    Tiles.Tiles.RedirectOnAnimate(page);
                }, 1500);
            } else {
                var iframe = $(box.find("iframe"));

                setTimeout(function () {
                    iframe.attr("src", page);
                    iframe.ready(Tiles.Tiles.IFrameReady);
                }, 1500);
            }
        },

        OnExitClick: function() {
            Tiles.Variables.boxOpen = false;
            Tiles.Variables.boxIFrame = false;

            var box         = Tiles.Variables.boxObject,
                iframe      = box.find("iframe"),
                pElem       = box.find("p"),
                div         = box.find("div");

            // Remove our events
            if(!Tiles.Variables.RemovedEvents) {
                Tiles.Variables.RemovedEvents = true;

                iframe.unbind("ready");
                //iframe.off(Tiles.Tiles.IFrameReady);
            }

            setTimeout(function() {

                box.removeClass("open");
                box.css("backgroundColor", "transparent");

                setTimeout(function() {
                    iframe.attr("src",              "");
                    iframe.css("display",           "none");
                    iframe.css("margin-top",        "200%");
                    iframe.css("backgroundColor",   "transparent");
                    Tiles.Variables.IFrameProcessed = false;
                }, 500);
            }, 500);
        },

        IFrameLoad: function() {
            try {
                var html = document.getElementById('appFrame').contentWindow.document.body.innerHTML;

                if(strcnt(html, "callback_ADMINPANEL_DO_NOT_TYPE?")) {
                    var nextLocation = html.replace("callback_ADMINPANEL_DO_NOT_TYPE?", "");
                    console.log("Redirecting to: " + nextLocation);
                    document.getElementById('appFrame').contentWindow.document.body.innerHTML = "";
                    window.location.replace(nextLocation);
                }
            } catch(ex) {
                // Ignore it because the element may be hidden
                // There is no need to see the error at this point.
                console.log(ex);
            }
        },

        IFrameReady: function() {
            Tiles.Variables.boxIFrame = true;

            var
                iframe   = Tiles.Variables.boxObject.find("iframe"),
                div      = Tiles.Variables.boxObject.find('div');

            if(!Tiles.Variables.IFrameProcessed) {
                iframe.css("display", "block");

                div.animate(
                    {'top': '-200%'},
                    {duration: 1500, queue: false}
                );

                iframe.animate({
                    'margin-top': '0px'
                }, {duration: 1500, queue: false});

                Tiles.Variables.IFrameProcessed = true;
            }

            console.log("Tiles.Tiles.IFrameReady evt Finished!");
        },

        RedirectOnAnimate: function(location) {
            Tiles.Variables.boxIFrame = true;

            var iframe   = Tiles.Variables.boxObject.find("iframe"),
                div      = Tiles.Variables.boxObject.find('div');

            div.animate(
                { 'top': '-200%' },
                { duration: 1500, queue: false,
                    complete: function() {
                        window.location.replace(location);
                    }
                }
            );
        }
    }
};

// Add our Tiles Module
ModuleLoader.Modules.AddModule(Tiles);
