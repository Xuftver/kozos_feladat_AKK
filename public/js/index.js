import EsemenyAdminController from "./controller/EsemenyAdminController.js";
import EsemenyPublikusController from "./controller/EsemenyPublikusController.js";
import UgynoksegAdminController from "./controller/UgynoksegAdminController.js";

$(function()
{
    console.log("index.js");
    new EsemenyAdminController;
    new EsemenyPublikusController;
    new UgynoksegAdminController;
});