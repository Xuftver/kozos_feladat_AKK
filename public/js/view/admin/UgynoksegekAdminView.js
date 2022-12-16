import UgynoksegAdminView from "./UgynoksegAdminView.js";

class UgynoksegekAdminView
{
    constructor(tomb, szuloElem)
    {
        // console.log("UgynoksegekAdminView");
        szuloElem.html(`<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Ország</th>
                <th>Típus</th>
            </tr>
        </thead>
        <tbody></tbody>
        </table>`);

        this.tablaElem = szuloElem.children("table:last-child");
        this.tbodyElem = this.tablaElem.children("tbody");

        tomb.forEach(adat => 
        {
            const adatom = new UgynoksegAdminView(adat, this.tbodyElem);    
        });
    }
}
export default UgynoksegekAdminView;