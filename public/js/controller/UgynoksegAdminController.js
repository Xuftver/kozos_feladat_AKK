import AdatBeolvasModell from "../model/AdatbeolvasModel.js";
import UgynoksegekAdminView from "../view/admin/UgynoksegekAdminView.js";

class UgynoksegAdminController
{
    constructor()
    {
        // console.log("UgynoksegAdminController");
        const token= $(`meta[name="csrf-token"]`).attr("content");
        const adatBeolvasModell = new AdatBeolvasModell(token);

        // this.vegpont="http://localhost:8000/api/agencies";
        this.vegpont="http://127.0.0.1:8000/api/agencies";

        adatBeolvasModell.adatBe(this.vegpont, this.ugynoksegAdatok)
        // $("#ugynoksegAdmin").on("click", ()=>
        // {
        // });
    }

    ugynoksegAdatok(tomb)
    {
        const szuloElem=$("article");
        new UgynoksegekAdminView(tomb, szuloElem);
    }
}

export default UgynoksegAdminController;