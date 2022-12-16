import EsemenyPublikusView from "./EsemenyPublikusView.js";

class EsemenyekPublikusView
{
    constructor(tomb, szuloElem)
    {
        // console.log("EsemenyekPublikusView");
        szuloElem.html(`<div id="publikusEsemenyek"></div>`);

        this.divElem=szuloElem.children("div:last-child")
        
        tomb.forEach(adat => 
        {
            const adatom = new EsemenyPublikusView(adat, this.divElem);    
        });
    }
}
export default EsemenyekPublikusView;