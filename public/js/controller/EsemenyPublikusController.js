import AdatBeolvasModell from "../model/AdatbeolvasModel.js";
import EsemenyekPublikusView from "../view/publikus/EsemenyekPublikusView.js";

class EsemenyPublikusController
{
    constructor()
    {
        console.log("EsemenyPublikusController");
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatBeolvasModell = new AdatBeolvasModell(token);

        // this.vegpont="http://localhost:8000/api/events";
        this.vegpont="http://127.0.0.1:8000/api/events";

        adatBeolvasModell.adatBe(this.vegpont, this.esemenyAdatok);
    }

    esemenyAdatok(tomb)
    {
        const szuloElem = $("article");
        new EsemenyekPublikusView(tomb, szuloElem)
    }
}

export default EsemenyPublikusController;