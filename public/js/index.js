import EsemenyPublikusController from "./controller/EsemenyPublikusController.js";
import FooterKinezet from "./designe/FooterKinezet.js";

$(function()
{
    console.log("index.js");
    new EsemenyPublikusController();
    new FooterKinezet();
});