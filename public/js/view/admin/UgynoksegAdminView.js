class UgynoksegAdminView
{
    #elem
    constructor(elem, szuloElem)
    {
        this.#elem=elem;
        // console.log("UgynoksegAdminView");
        szuloElem.append(`<tr>
            <td>${elem.agency_id}</td>
            <td>${elem.name}</td>
            <td>${elem.country}</td>
            <td>${elem.type}</td>
        </tr>`);

        this.sorElem=szuloElem.children("tr:last-child");
    }
}
export default UgynoksegAdminView;