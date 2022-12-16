import EsemenyAdminView from "./EsemenyAdminView.js";

class EsemenyekAdminView
{
    constructor(tomb, szuloElem)
    {
        szuloElem.html(`<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Ügynökség ID</th>
                <th>Férőhely</th>
                <th>Időpont</th>
                <th>Helyszín</th>
                <th>Státusz</th>
            </tr>
        </thead>
        <tbody></tbody>
        </table>`);

        this.tablaElem = szuloElem.children("table:last-child");
        this.tbodyElem = this.tablaElem.children("tbody");
        tomb.forEach(adat => 
        {
            const adatom = new EsemenyAdminView(adat, this.tbodyElem);
        });
    }
}
export default EsemenyekAdminView;