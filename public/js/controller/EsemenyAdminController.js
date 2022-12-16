import AdatBeolvasModell from "../model/AdatbeolvasModel.js";
import EsemenyekAdminView from "../view/admin/EsemenyekAdminView.js";

class EsemenyAdminController
{
    constructor()
    {
        console.log("EsemenyAdminController");
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatBeolvasModell = new AdatBeolvasModell(token);

        this.vegpont="http://localhost:8000/api/events";

        $("#admin").on("click", ()=>
        {
            adatBeolvasModell.adatBe(this.vegpont, this.esemenyAdatok)
        });
    }

    esemenyAdatok(tomb)
    {
        const szuloElem=$("main")
        new EsemenyekAdminView(tomb, szuloElem)
    }
}

export default EsemenyAdminController;