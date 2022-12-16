class EsemenyAdminView
{
    #elem;
    constructor(elem, szuloElem)
    {
        this.#elem=elem;
        // console.log("EsemenyAdminView");
        szuloElem.append(`<tr>
            <td class="id">${elem.event_id}</td>
            <td class="nev">${elem.name}</td>
            <td class="id">${elem.agency_id}</td>
            <td class="ferohely">${elem.limit}</td>
            <td class="idopont">${elem.date}</td>
            <td class="helyszin">${elem.location}</td>
            <td class="statusz">${elem.status}</td>
        </tr>`);
        // <td><button id="modosit${elem.id}">Módosít</button></td>
        // <td><button id="torol${elem.id}">Töröl</button></td>

        this.sorElem=szuloElem.children("tr:last-child");

        // kattintasTrigger(esemenyNeve)
        // {
        //     console.log("triggerben",esemenyNeve);
        //     const esemeny = new CustomEvent(esemenyNeve,{detail:this.#elem});
        //     window.dispatchEvent(esemeny);
        // }
    }
}
export default EsemenyAdminView;