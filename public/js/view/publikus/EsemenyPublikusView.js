class EsemenyPublikusView
{
    #elem
    constructor(elem, szuloElem)
    {
        // console.log("EsemenyPublikusView");
        this.#elem=elem
        szuloElem.append(`<div class="publikusEsemenyElemek">
            <h2>${elem.name}</h2>
            <p>Időpont: ${elem.date}</p>
            <p>Helyszín: ${elem.location}</p>
            <p>Férőhely: ${elem.limit}</p>
        </div>`)

        this.sorElem=szuloElem.children("div:last-child");
    }
}
export default EsemenyPublikusView;