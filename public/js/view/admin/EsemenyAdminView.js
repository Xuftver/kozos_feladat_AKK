class EsemenyAdminView
{
    #elem;
    constructor(elem, szuloElem)
    {
        this.#elem=elem;
        console.log("EsemenyAdminView");
        szuloElem.append(`<tr>
        <<td>${elem.event_id}</td>
        <td>${elem.name}</td>
        <td>${elem.agency_id}</td>
        <td>${elem.limit}</td>
        <td>${elem.date}</td>
        <td>${elem.location}</td>
        <td>${elem.status}</td>
        </tr>`);
        // <td><button id="modosit${elem.id}">Módosít</button></td>
        // <td><button id="torol${elem.id}">Töröl</button></td>

        this.sorElem=szuloElem.children("tr:last-child");
        console.log(this.sorElem);

        // kattintasTrigger(esemenyNeve)
        // {
        //     console.log("triggerben",esemenyNeve);
        //     const esemeny = new CustomEvent(esemenyNeve,{detail:this.#elem});
        //     window.dispatchEvent(esemeny);
        // }
    }
}
export default EsemenyAdminView;